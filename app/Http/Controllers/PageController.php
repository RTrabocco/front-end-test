<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request; 

class PageController extends Controller

{
    /**
     * Returns a view from the designs directory based on the slug
     * @param type $slug
     * @return type
     */
    public function view($slug)
    {
        return view('view')->with('slug', $slug);
    }
 
    /**
     * If the user is at the public root returns the index view
     * @return type
     */
    public function index()
    {
        return $this->view('index');
    }
}