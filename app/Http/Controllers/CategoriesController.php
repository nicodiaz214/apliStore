<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Application;
use App\User;
use Auth;

class CategoriesController extends Controller
{
    public function index(){
        return view('categories');
    }
}
