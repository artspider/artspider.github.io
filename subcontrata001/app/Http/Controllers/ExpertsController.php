<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpertsController extends Controller
{
  public function index()
  {
    return view('experts.index');
  }
}
