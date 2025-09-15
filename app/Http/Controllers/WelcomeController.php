<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function index($name) {
        return "Welcome ".$name." from WelcomeController";
    }
}
