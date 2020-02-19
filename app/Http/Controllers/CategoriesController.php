<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Application;

class CategoriesController extends Controller
{
    public function index(){
        return view('categories');
    }
}
