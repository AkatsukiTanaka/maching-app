<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Schoolpost;

class Schoolpost extends Model
{
    /**
     * スクールデータを降順で全て取得
     */
    public static function getAll()
    {
      $schoolposts = Schoolpost::all();
      return $schoolposts;
    }

    /**
     * 対象スクールデータを取得

    public static function find($id)
    {
      $schoolpost = Schoolpost::find(id);
      return $schoolpost;
    }
    */
}
