<?php

namespace MVC\controllers;
use MVC\core\controller;
use MVC\models\user;


class homecontroller extends controller
{
    public function index()
    {
        $user = new user();
        $data = $user->getAllUsers();
        $title = 'Home index';
        $h1    = 'Kareem Mamdouh';
        $this->view("home/index",['title'=>$title,'h1'=>$h1,'data'=>$data]);      
    }

    public function add()
    {
        echo 'add';
    }

    public function login()
    {
        $this->view('home/login',['title'=>'login']);
    }

    public function postlogin()
    {
        echo '<pre>';
        print_r($_POST);
    }
}