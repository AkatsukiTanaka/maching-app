<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schoolpost;

class SchoolpostController extends Controller
{
    /**
     * スクール一覧表示
     */
    public function index()
    {
      $schoolposts = Schoolpost::getAll();
      $viewParams = [
        'schoolposts' => $schoolposts,
      ];
      return view('schoolpost.index', $viewParams);
    }

    /**
     * スクール詳細表示
     */
    public function detail($id)
    {
      $school_id = $id;
      $schoolpost = Schoolpost::find($school_id);
      $viewParams = [
        'schoolpost' => $schoolpost,
      ];
      return view('schoolpost.detail', $viewParams);
    }
}
