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
            'avatar' => 'https://dn-phphub.qbox.me/uploads/images/201801/12/1/eiH5i6fkdq.jpg'
        ]);
    }
}
