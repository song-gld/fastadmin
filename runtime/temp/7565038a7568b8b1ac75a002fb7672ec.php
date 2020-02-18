<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\xampp\htdocs\fastadmin\public/../application/index\view\index\test.html";i:1582035304;}*/ ?>
<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>song_gld标题显示</title>

        <!-- Bootstrap Core CSS -->
        <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="/fastadmin/public/assets/css/index.css" rel="stylesheet">

        <!-- Plugin CSS -->
        <link href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://cdn.staticfile.org/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://cdn.staticfile.org/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body id="page-top">

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-menu">
                        <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top"><img src="/fastadmin/public/assets/img/song.jpg" style="width:60px;" alt=""></a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="" target="_blank" style="color: black"><?php echo __('Home'); ?></a></li>
                        <li><a href="<?php echo url('admin/controller/index'); ?>" target="_blank" style="color: black"><?php echo $user['nickname']; ?></a></li>
                        
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>


        <section id="features" class="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <div class="section-heading">
                            <h2><?php echo $vo['name']; ?></h2>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <div class="section-heading">
                            <h2>sdfsf</h2>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="feature-item">
                                        <i class="icon-user text-primary"></i>
                                        <h3>上--1</h3>
                                        <p class="text-muted">展示博客内容</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="feature-item">
                                        <i class="icon-screen-smartphone text-primary"></i>
                                        <h3><?php echo __('Responsive'); ?></h3>
                                        <p class="text-muted"><?php echo __('Responsive tips'); ?></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="feature-item">
                                        <i class="icon-present text-primary"></i>
                                        <h3><?php echo __('Languages'); ?></h3>
                                        <p class="text-muted"><?php echo __('Languages tips'); ?></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="feature-item">
                                        <i class="icon-layers text-primary"></i>
                                        <h3><?php echo __('Module'); ?></h3>
                                        <p class="text-muted"><?php echo __('Module tips'); ?></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="feature-item">
                                        <i class="icon-docs text-primary"></i>
                                        <h3><?php echo __('CRUD'); ?></h3>
                                        <p class="text-muted"><?php echo __('CRUD tips'); ?></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="feature-item">
                                        <i class="icon-puzzle text-primary"></i>
                                        <h3><?php echo __('Extension'); ?></h3>
                                        <p class="text-muted"><?php echo __('Extension tips'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

        <footer>
            <div class="container">
                <!-- 底部-->
                <p>&copy; 2017-2019 <a href="" target="_blank">song_gld</a>. All Rights Reserved.</p>
                <ul class="list-inline">
                    <li>
                        <a href="https://gitee.com/"><?php echo __('Gitee'); ?></a>
                    </li>
                    <li>
                        <a href="https://github.com/"><?php echo __('Github'); ?></a>
                    </li>                    
                </ul>
            </div>
        </footer>

        <!-- jQuery -->
        <script src=https://cdn.staticfile.org/jquery/2.1.4/jquery.min.js></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="https://cdn.staticfile.org/jquery-easing/1.4.1/jquery.easing.min.js"></script>

        <script>
            $(function () {
                $(window).on("scroll", function () {
                    $("#mainNav").toggleClass("affix", $(window).height() - $(window).scrollTop() <= 50);
                });
            });
        </script>

        <script>
            // FastAdmin统计代码，请移除
            var _hmt = _hmt || [];
            (function () {
                var hm = document.createElement("script");
                hm.src = "https://hm.baidu.com/hm.js?f8d0a8c400404989e195270b0bbf060a";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();
        </script>

    </body>

</html>