<?php


/*
//strftime is deprecetad function to format date to any any language 
//https://stackoverflow.com/questions/70930824/php-8-1-strftime-is-deprecated
//you can use format parameters like for datetime.

$dt = date_create('2022-01-31');
echo formatLanguage($dt, 'd F Y','pl');  //31 stycznia 2022

//There are extension classes for DateTime that have such functions integrated as methods.

echo dt::create('2022-01-31')->formatL('d F Y','pl'); 
*/
function formatLanguage(DateTime $dt,string $format,string $language = 'en') : string {
    $curTz = $dt->getTimezone();
    if($curTz->getName() === 'Z'){
      //INTL don't know Z
      $curTz = new DateTimeZone('UTC');
    }

    $formatPattern = strtr($format,array(
        'D' => '{#1}',
        'l' => '{#2}',
        'M' => '{#3}',
        'F' => '{#4}',
      ));
      $strDate = $dt->format($formatPattern);
      $regEx = '~\{#\d\}~';
      while(preg_match($regEx,$strDate,$match)) {
        $IntlFormat = strtr($match[0],array(
          '{#1}' => 'E',
          '{#2}' => 'EEEE',
          '{#3}' => 'MMM',
          '{#4}' => 'MMMM',
        ));
        $fmt = datefmt_create( $language ,IntlDateFormatter::FULL, IntlDateFormatter::FULL,
        $curTz, IntlDateFormatter::GREGORIAN, $IntlFormat);
        $replace = $fmt ? datefmt_format( $fmt ,$dt) : "???";
        $strDate = str_replace($match[0], $replace, $strDate);
      }

    return $strDate;

    //
    /* $maintenant = new DateTime();
    echo 'Cette page a été générée le '. $maintenant->format('d/m/Y à H:i:s').' (heure locale)';
    //formatLanguage(date_create($task->started_time), 'd F Y','pl') */
          
}
