<?php

class Pages extends Controller {

    public function __construct(){}

    public function index(){

        $this->view('pages/index');

    }

    public function entrar(){

        $this->view('pages/entrar');

    }

    public function vip(){

        $this->view('pages/vip');

    }

    public function discord(){

        $this->view('pages/discord');

    }
    
}