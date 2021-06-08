<?php

class Controller {
    //Model
    public function model($model){
        require_once '..app/models/'.$model.'.php';
        return new $model();
    }

    //View
    public function view($view, $data=[]){
        if(file_exists('../app/views/'.$view.'.php')){
            require_once '../app/views/'.$view.'.php';
        } else {
            die('404 - Página não encontrada');
        }
    }
}