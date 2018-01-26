@extends('layouts.app')

@section('title', $nickname .'编辑个人资料')

@section('content')

<div class="container-fluid info-header">
  <div class="container">
    <div id="avatar-view" class="avatar">
      <!-- laravel post 提交一定带上 token. data-service填好后，要将data-push置为true才会每次裁剪后自动提交 -->
      <div class="slim"
           data-service="{{ route('upload.avatar', ['_token' => csrf_token(), 'viewid' => $viewid]) }}"
           data-push="true"
           data-ratio="1:1"
           data-label="点击选择图片"
           data-size="360,360"
           data-max-file-size="2"
           style="border:3px solid #fff !important; background-color: none !important; background:none !important;border-radius:50%;">
          <img src="{{ $avatar }}" alt=""/>
          <input type="file" name="slim[]"/>
       </div>
      <!-- <a href="javascript:void(0)"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i>&nbsp; 更换头像</span></a> -->
    </div>
  </div>
</div>

<div class="container container-users" >
    <div class="col-md-3 panel-top">
        <div class="menu-panel">
            <a class="active" href="javascript:void(0)"><i class="text-md fa fa-list-alt" aria-hidden="true"></i>&nbsp;个人信息</a>
            <a href="javascript:void(0)"><i class="text-md fa fa-bell" aria-hidden="true"></i>&nbsp;消息通知</a>
            <a href="javascript:void(0)"><i class="text-md fa fa-flask" aria-hidden="true"></i>&nbsp;账号绑定</a>
            <a href="javascript:void(0)"><i class="text-md fa fa-lock" aria-hidden="true"></i>&nbsp;修改密码</a>
        </div>
    </div>

    <div class="col-md-9  panel-top">
        <div class="panel panel-default padding-md">
          <div class="panel-body ">
            <h2><i class="fa fa-cog" aria-hidden="true"></i> 编辑个人资料</h2>
            <hr>
            <form class="form-horizontal" method="POST" action="#" accept-charset="UTF-8" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">昵 称</label>
                    <div class="col-sm-6">
                        <input class="form-control" name="nickname" type="text" value="{{ $nickname}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">邮 箱</label>
                    <div class="col-sm-6">
                        <input class="form-control" name="email" type="email" placeholder="请输入邮箱">
                    </div>
                </div>
          </form>
          </div>
        </div>

        <div>
           <div class="frame"  style="width:360px;height:240px;">
              <input type="file" id="myCropper"/>
           </div>
        </div>

      </div>

</div>

@endsection

@section('style')
<link href="{{ asset('style/js/slim/slim.min.css') }}" rel="stylesheet">
<style>
/* 去掉padding15px*/
.container-users{
  padding: 0;
}

.panel-top{
  margin-top: 30px;
}

/* 顶部头像 */
.info-header{
  background-color: #2ec7bb;
  color: #fff;
  height: 240px;
}

.info-header .avatar{
  display: inline-block;
  width: 150px;
  height: 150px;
  margin-left: 30px;
  margin-top:45px;
}

.info-header .avatar a{
  display: inline-block;
  margin-top: 10px;
  color: #fff;
}

.info-header .avatar a span{
  font-size: 13px;
}

/*个人信息*/
.menu-panel{
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0.2em 0 0 #ddd, 0 0 0 1px #ddd;
}

.menu-panel a{
    display: inline-block;
    width: 100%;
    height: 42px;
    line-height: 42px;
    color: #555;
    text-align: center;
    background-color: #fff;
    border-bottom: 1px solid #f9f9f9;
}

.menu-panel a.active{
    background-color: #2ec7bb;
    color: #fff;
}

.menu-panel a:not(.active):hover{
    background-color: #f9f9f9;
}

/* 裁剪 */
.slim .slim-file-hopper {
  /* z-index: 2;
  cursor: auto; */
}

.slim{
   background-color: #fff !important;
   border-radius: 8px;
   border: 1px solid #ccc;
}

</style>
@endsection

@section('script')
@parent
<script src="{{ asset('style/js/slim/slim.kickstart.min.js') }}"></script>
<script type="text/javascript">
var cropper = new Slim(document.getElementById('myCropper'), {
	ratio: '3:2',
	minSize: {
		width: 360,
		height: 240,
	},
	size: {
		width: 720,
		height: 480,
	},
	service: '#',
	willSave: function(data, ready) {
		// ready(data);
	},
	meta: {
        userId:'1234'
  },
	download: false,
	instantEdit: true,
	label: '上传：单击此处或将图像文件拖到其上',
	buttonConfirmLabel: '确定',
	buttonConfirmTitle: '确定',
	buttonCancelLabel: '取消',
	buttonCancelTitle: '取消',
	buttonEditTitle: '编辑',
	buttonRemoveTitle: '清除',
	buttonDownloadTitle: '下载',
	buttonRotateTitle: '旋转',
	buttonUploadTitle: '上传',
	statusImageTooSmall:'这张照片太小了。 最小的大小是 360 * 240 像素。'
});

cropper.load('{{ $avatar }}', function(error, data){
    cropper.upload(function(error, data, response){
				console.log(2222);
    });
});

function data_did_save()
{
    console.log('data_did_save');
}
</script>
@endsection
