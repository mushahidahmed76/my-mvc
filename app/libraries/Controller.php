<?php 

class Controller{

    public function model($model){
        // Require modal
        require_once '../app/models/' . $model . '.php';

        // ini model
        return new $model();
        // return new page();
    }

    public function view($view, $data = []){
        // Check view exists
        if(file_exists('../app/views/'. $view . '.php')){
            // require View file
            require_once '../app/views/'. $view . '.php';
        }else{
            die('View does not exist');
        }
    }
}