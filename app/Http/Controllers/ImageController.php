<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload_avatar(Request $request)
    {
        $viewid = 10000;
        if($request->has('viewid'))
        {
            $viewid = $request->viewid;
        }

        if($request->has('slim') && $request->slim[0])
        {

             $output = $request->slim[0];
             $output = json_decode($output, TRUE);

             if(isset($output) && isset($output['output']) && isset($output['output']['image']))
                 $image = $output['output']['image'];

             if(isset($image))
             {

                 $data = app(\App\Handlers\ImageUploadHandler::class)->save_base64_image($image, 'avatar', $viewid, 'jpg');
                 if($data['code'] && $data['code'] == 0)
                 {
                     // 写数据库
                 }
                 return '保存失败';
             }
             return $data;
        }
        return '非使用slim cropper裁剪';
    }
}
