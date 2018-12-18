<?php

//namespace firstlaravel\Http\Controllers;
namespace App\Http\Controllers\Controller ;  

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index()
    {
     return view('login');
    }
    
}
?>