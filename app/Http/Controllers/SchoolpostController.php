<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schoolpost;

class SchoolpostController extends Controller
{
    public function index()
    {
      $schoolposts = Schoolpost::getAll();
      $viewParams = [
        'schoolposts' => $schoolposts,
      ];
      return view('schoolpost.index', $viewParams);
    }
}
