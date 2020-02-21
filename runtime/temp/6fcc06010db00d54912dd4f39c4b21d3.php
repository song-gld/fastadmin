<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\xampp\htdocs\fastadmin\public/../application/index\view\favorite\index.html";i:1582276280;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title>收藏夹首页</title>
	<link rel="stylesheet" href="../public/assets/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<style>
	.ico{
		height: 30px;
	}
	a{
		font-size: 20px;
	}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-12"><h2>刚来的</h2></div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default" role="navigation">
			    <div class="container-fluid">
			    <div class="navbar-header">
			        <a class="navbar-brand" href="#">网络收藏夹</a>
			    </div>
			    <div>
			        <form class="navbar-form navbar-left" role="search">
			            <div class="form-group">
			                <input type="text" class="form-control" placeholder="Search">
			            </div>
			            <button type="submit" class="btn btn-default">提交按钮</button>
			        </form>
			        <button type="button" class="btn btn-default navbar-btn">
			            导航栏按钮
			        </button>
			    </div>
			    </div>
			</nav>
		</div>
	</div>
	<div class="row">
		<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<div class="col-md-2">
				<img src="<?php echo $vo['ico']; ?>" class="ico">
				<a href="<?php echo $vo['url']; ?>"><?php echo $vo['name']; ?></a>				
			</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div>
	






</body>
</html>