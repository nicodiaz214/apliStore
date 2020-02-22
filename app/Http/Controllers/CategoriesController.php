<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Application;
use App\User;
use Auth;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(3);
        return view('categories.index', [
            'title' => "Listado de Categorias",
            'categories' => $categories,
        ]);
    }

    public function show($id)
    {
        $categories = Category::find($id);

        return view('categories.show', [
            'categories' => $categories,
        ]);
    }

}
