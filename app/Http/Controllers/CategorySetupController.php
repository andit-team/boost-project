<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorySetupController extends Controller
{
  public function index()
  {
      return view('admin.category_setup.category_tree');
  }
}
