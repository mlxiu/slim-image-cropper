# 说明

> 官网：[http://slimimagecropper.com/](http://slimimagecropper.com/)  
> Demo： [https://github.com/trigo-at/slim-image-cropper-test](https://github.com/trigo-at/slim-image-cropper-test)

1. 收费请访问官网。
2. 以laravel框架为例，以个人编辑头像为场景，以demo源码为根本，来记录这次的日志行为。


# 安装

```
git clone https://github.com/mlxiu/slim-image-cropper.git

mv slim-image-cropper slim

cd slim

# 安装插件
composer install

# 准备配置（主要修改APP_URL）
cp .env.example .env
vi .env

# 生成key
php artisan key:generate
```

访问即可。

如果是 linux系统，请设置访问权限
```
chmod -R 777 storage

# 创建uploads目录，使得权限可写入
cd public
mkdir uploads
chmod -R 777 uploads
```
再次访问即可正常。




