<?php
namespace App\Handlers;

class ImageUploadHandler
{

    /**
     *  将base64数据的图片存入指定位置指定名字下
     *  $file base64文件
     *  $folder 文件夹名
     *  $name 文件名
     *  $file_prefix 后缀名
     */
    public function save_base64_image($file, $folder, $name, $file_prefix)
    {
        $createdAt = date('Y/m', time());

        // 构建存储的文件夹规则，值如：uploads/images/avatars/201709/21/
        // 文件夹切割能让查找效率更高。
        $file_path = sprintf("uploads/images/%s/%s/", $folder, $createdAt);

        $file_name = sprintf('%s.%s', $name, $file_prefix);

        // 文件具体存储的物理路径，`public_path()` 获取的是 `public` 文件夹的物理路径。
        // 值如：/home/vagrant/Code/larabbs/public/uploads/images/avatars/201709/21/
        $upload_path = public_path() . '/' . $file_path;

        // 创建文件夹
        if (!file_exists($upload_path))
        {
            mkdir($upload_path, 0777, true);
        }

        $img = base64_decode(str_replace('data:image/jpeg;base64,', '', $file));
        $img = base64_decode(str_replace('data:image/png;base64,', '', $file));
	      $result = file_put_contents($upload_path . $file_name, $img); //返回的是字节数
        if($result == FALSE)
        {
            return array('error' => '写入文件失败，可能没有权限');
        }
        return array('code' => 0, 'url' => url($file_path . $file_name));
    }
}
