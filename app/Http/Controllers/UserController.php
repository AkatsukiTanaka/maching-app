<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class UserController extends Controller
{
  /**
   * トップページ表示アクション
   */
  public function top()
  {
    if (Auth::check()) {
      $user = Auth::user();
      session()->flash('flash_message', 'login済み');
      return view('user/top', ['user' => $user]);
    }
    session()->flash('error_message', 'no login');
    return view('user/top');
  }

  /**
   * ログインフォーム表示アクション
   */
  public function signin()
  {
    return view('user.signin');
  }

  /**
   * ログイン処理アクション
   */
  public function login(Request $request)
  {
    $email    = $request->input('email');
    $password = $request->input('password');
    if (!Auth::attempt(['email' => $email, 'password' => $password])) {
      //　認証失敗
      return redirect('/user/signin')->with('error_message', 'Ifailed to login');
    }
    // 認証成功
    return redirect()->route('user.top');
  }

  /**
   * ログアウト処理アクション
   */
  public function logout()
  {
    Auth::logout();
    return redirect()->route('user.top');
  }
}
