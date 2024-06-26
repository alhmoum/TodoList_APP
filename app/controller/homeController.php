<?php
/**
 * Class Home Controller
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Home extends Controller
{
    
 /**
     * PAGE: index (home)
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
         // getting all tasks and amount of tasks
         $tasks = $this->model->getAllTasks();
         //$amount_of_tasks = $this->model->getAmountOfTasks();
         
        // load views from app/ views
        require APP . 'view/partials/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/partials/footer.php';

       
       
    }


}