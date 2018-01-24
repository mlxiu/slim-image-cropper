@extends('layouts.app')

@section('title', $nickname .'编辑个人资料')

@section('content')

<div class="container-fluid info-header">
  <div class="container">
    <div id="avatar-view" class="avatar">
      <img src="{{ $avatar }}">
      <a href="javascript:void(0)"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i>&nbsp; 更换头像</span></a>
    </div>

    <div class="user-details">
      <div class="user-nickname">{{ $nickname . '(' . $viewid . ')' }}</div>
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
          </form>
          </div>
        </div>
      </div>

</div>

@endsection

@section('style')
<style>
/* 去掉padding15px*/
.container-users{
  padding: 0;
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
  height: 240px;
  text-align: center;
  margin-left: 30px;
}

.info-header .avatar img{
  width: 120px;
  height: 120px;
  border-radius: 50%;
  border: 3px solid #fff;
  margin-top:45px;
  cursor: pointer;
}

.info-header .avatar a{
  display: inline-block;
  margin-top: 10px;
  color: #fff;
}

.info-header .avatar a span{
  font-size: 13px;
}

.info-header .user-details{
  display: inline-block;
  vertical-align: top;
  padding-left: 60px;
}

.info-header .user-details .user-nickname{
  font-size: 24px;
  margin-top: 60px;
}

.info-header .user-details .user-gold{
  font-size: 15px;
  margin-top: 20px;
}

.info-header .user-details .user-gold span{
  display: inline-block;
  margin-left: 6px;
}

.info-header .user-details .user-gold-grade{
  font-size: 15px;
  margin-top: 20px;
}

.info-header .user-details .user-gold-grade span:first-child{
  padding:1px 12px;
  font-size:12px;
  color: #000;
  border-radius: 2px;
  background-color: #fff;
  margin:0 10px 0 5px;
}

.info-header .user-details .user-gold-grade span:nth-child(2){
  display: inline-block;
  width: 223px;
  padding: 1px 0;
  border-radius: 5px;
  font-size: 12px;
  text-align: center;
  background: #099a8f;
  overflow: hidden;
  vertical-align: bottom;
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

/* 右侧区域 */
.panel-top{
    margin-top: 20px;
}

.panel{
    border-radius: 0;
}

/* textarea 禁止任意拖动*/
textarea
{
    width:100%;
    height:100%;
    max-width: 100%;
}
</style>
@endsection

@section('script')
@parent
<script type="text/javascript">

</script>
@endsection
