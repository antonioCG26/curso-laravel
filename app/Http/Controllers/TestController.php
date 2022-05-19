<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    function Test()
    {
        $user = User:: find(1);
        //var_dump($user);
        
        echo "ID: ". $user["id"]."<BR>";
        echo "NOMBRRE: ". $user["name"]."<BR>";
        echo "CORREO: ". $user["email"]."<BR>";
        echo "CREATED AT: ". $user["created_at"]."<BR>";

        return view("welcome",["user" => $user]);
    }
}
