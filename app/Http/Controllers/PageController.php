<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function root()
    {
        return view('images.upload', [
            'nickname' => '七月羽歌',
            'viewid' => 2331024,
            'avatar' => 'assets/images/gopthercn.png'
        ]);
    }
}
