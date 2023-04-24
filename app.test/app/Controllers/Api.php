<?php

namespace App\Controllers;

class Api
{
    public function index()
    {
        header('location: /api/v1');
        exit();
    }

    public function v1()
    {
        echo view("api.v1.index", array("variable1" => "value1"));
    }
}
