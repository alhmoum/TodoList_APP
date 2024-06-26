<?php

class Model
{
    /**
     * @param object $db A PDO database connection
     */
    //fix creation of dynamic proprety 
    //https://sanjeebaryal.com.np/fix-creation-of-dynamic-property-is-deprecated-since-php-8-2/
    public $db = null;
    function __construct($db)
    {
        try {
            
           
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

   

////

 /**
     * Add a task to database
     * TODO put this explanation into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     */

     public function addTask()
     {

        /*  $sql = "INSERT INTO tasks (surface, address, city_name, city_zipcode) VALUES (:surface, :address, :city_name, :city_zipcode) ";
         $query = $this->db->prepare($sql);
         $parameters = array(':surface' => $surface, ':address' => $address, ':city_name' => $city_name, ':city_zipcode' => $city_zipcode);
 
         // useful for debugging: you can see the SQL behind above construction by using:
         //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
 
         $query->execute($parameters); */
     }
     /**
     * Get all songs from database
     */
    public function getAllTasks()
    {
        $sql = "   
        SELECT 
            tasks.id, 
            tasks.title, 
            tasks.description,
            tasks.started_time,
            tasks.due_date,
            tasks.id_assigned_to AS uid_assigned_to,
            CONCAT(assigned_user.first_name, ' ', assigned_user.last_name) AS assigned_to_name,
            tasks.id_task_giver AS uid_task_giver,
            CONCAT(task_giver.first_name, ' ', task_giver.last_name) AS task_giver_name,
            status.name AS status_name
        FROM tasks
        JOIN users AS assigned_user ON assigned_user.id = tasks.id_assigned_to
        JOIN users AS task_giver ON task_giver.id = tasks.id_task_giver
        JOIN roles AS assigned_user_role ON assigned_user.id_role = assigned_user_role.id
        JOIN roles AS task_giver_role ON task_giver.id_role = task_giver_role.id
        JOIN status ON status.id = tasks.id_status;

        ";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

   
    public function  checktasks()
    {
        $task_title = $task->title ?? '';
    }

}