<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Thế giới truyện
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?= $this->Html->css('style.css') ?>
     <?= $this->Html->css('animate.min.css') ?>
      <?= $this->Html->css('bootstrap.min.css') ?>
       <?= $this->Html->css('bootstrap-dropdownhover.css') ?>
        <?= $this->Html->css('custom.css') ?>
         <?= $this->Html->css('hover.css') ?>
          <?= $this->Html->css('jquery.qtip.min.css') ?>
           <?= $this->Html->css('jquerysctipttop.css') ?>
            <?= $this->Html->css('tooltipster.bundle.min.css') ?>
            <?= $this->Html->css('tree.css') ?>


     
        <?= $this->Html->script('jquery-1.10.0.min.js') ?>
            <?= $this->Html->script('jssor.slider.mini.js') ?>
             <?= $this->Html->script('main.js') ?>
              <?= $this->Html->script('jquery.tooltip.js') ?>
        <?= $this->Html->script('jquery.min.js') ?>
        <?= $this->Html->script('bootstrap.min.js') ?>
         <?= $this->Html->script('bootstrap-dropdownhover.js') ?>
         <?= $this->Html->script('jquery.qtip.min.js') ?>
         <?= $this->Html->script('jquery.hover3d.js') ?>
          <?= $this->Html->script('script.js') ?>
            <?= $this->Html->script('tree.js') ?>
            <?= $this->Html->script('ajax.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>      
        <div class="header-menu">       
          <!-- Menu do Bootstrap cung cấp có hỗ trợ menu trên di động -->
          <nav class="navbar navbar-default " role='navigation'>
             <div class="row">
                <div class="container">
                  <div class="logo col-xs-2"><img src='images/PHOTOSHOP/cotich.gif' width='40%'><a href="#"><img src='images/logo.jpg' width='50%'></a></div>
                 
                    <div class=' search col-xs-8 '>
                        <button type="button" class="btn btn-link">Tìm kiếm truyện theo chữ cái</button>
                        <button type="button" class="btn btn-danger">A</button>
                        <!-- Indicates a successful or positive action -->
                        <button type="button" class="btn btn-success">B</button>
                        <button type="button" class="btn btn-default">C</button>
                        <!-- Contextual button for informational alert messages -->
                        <button type="button" class="btn btn-info">D</button>
                        <!-- Indicates caution should be taken with this action -->
                        <button type="button" class="btn btn-warning">E</button>
                        <!-- Indicates a dangerous or potentially negative action -->
                        <button type="button" class="btn btn-danger">G</button>
                        <button type="button" class="btn btn-primary">H</button>
                        <!-- Indicates a successful or positive action -->
                        <button type="button" class="btn btn-info">I</button>
                        <button type="button" class="btn btn-success">K</button>
                        <button type="button" class="btn btn-default">L</button>
                        <button type="button" class="btn btn-primary">M</button>
                        <button type="button" class="btn btn-warning">N</button>
                        <!-- Indicates caution should be taken with this action -->
                        
                    </div>
                     <div class="search col-xs-2">
                    <form id="searchbox" method="get" action="/search" autocomplete="off">
                    <input name="q" type="text" size="15" placeholder="Tìm kiếm truyện..." />
                    <input id="button-submit" type="submit" value=" "/>
                    </form>
                    </div>
                  <div class="clearfix"></div>
                </div>
             </div>
            
             <div class="container">            
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                <div class='row'>
                <div class='col-xs-3'>
                    <ul class="nav nav-pills">
                    <li class="active" >
                      <!-- <a href="index.html"><span class="glyphicon glyphicon-cloud-upload"></span>&nbsp;Upload truyện</a> -->
                      <?= $this->Html->Link('Upload truyện',['controller'=>'Users','action'=>'login']);?>
                    </li>
                    
                    </ul>
                </div>
                <div class="collapse navbar-collapse col-xs-5 col-md-6" id="bs-example-navbar-collapse-1">
                 <div class="navbar-nav-margin-left">
                  <ul class="nav nav-pills">
                    
                    <li class="dropdown">
                      <!--<a class="dropdown-toggle" type='button' data-toggle="dropdown" data-hover="dropdown" href="#"><spa   n class="glyphicon glyphicon-list-alt"></span>&nbsp;Thể Loại Truyện&nbsp;<span class="caret"></span></a>-->
                        <?= $this->Html->link('Thể loại truyện',['controller'=>'Categories','action'=>'index'],['class'=>'dropdown-toggle','data-hover'=>'dropdown']);?>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#">Truyện cổ tích Việt Nam</a></li>
                              <li class="dropdown">
                                <a href="#">Truyện cổ tích thế giới<span class="caret"></span></a>
                                <ul class="dropdown-menu dropdownhover-right">
                                  <li><a href="#">Truyện cổ Grim</a></li>
                                  <li><a href="#">Truyện cổ Andersen</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Thần thoại Hy Lạp</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">One more separated link</a></li>
                                </ul>
                              </li>
                              <li><a href="#">Văn học dân gian</a></li>
                            </ul>
                          
                    </li>
                    <li><a href="#"><span class="glyphicon glyphicon-book"></span>&nbsp;Truyện Cổ Tích</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-hdd"></span>&nbsp;Truyện Hiện Đại</a></li>
                    <!-- <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-hover="dropdown"><b>Login</b> <span class="caret"></span></a>
                    <ul id="login-dp" class="dropdown-menu">
                      <li>
                         <div class="row">
                            <div class="col-md-12">
                              Login via
                              <div class="social-buttons">
                                <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                              </div>
                                              or
                               <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                  <div class="form-group">
                                     <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                     <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                  </div>
                                  <div class="form-group">
                                     <label class="sr-only" for="exampleInputPassword2">Password</label>
                                     <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                           <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                  </div>
                                  <div class="form-group">
                                     <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                  </div>
                                  <div class="checkbox">
                                     <label>
                                     <input type="checkbox"> keep me logged-in
                                     </label>
                                  </div>
                               </form>
                            </div>
                            <div class="bottom text-center">
                              New here ? <a href="#"><b>Join Us</b></a>
                            </div>
                         </div>
                      </li>
                    </ul>
                    </li> -->
                  </ul>
                  </div>
                </div>
                <div class='navbar-right'>
                    <ul class="nav nav-pills">
                    <li class="active" >
                      
                      <?php echo $this->Html->link('Đăng nhập', ['controller'=>'Users','action'=>'login']);?>
                    </li>
                    <li class="active" >
                        <?php echo $this->Html->link('Đăng ký', ['controller'=>'Users','action'=>'register']);?>
                    </li>
                    </ul>
                </div>
                </div>
                </div>
          </nav>
          <!-- End Menu Bootstrap -->
        
      </div>
    </header>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
        <div class='container'>
        <div class="row footer-info ">
          <div class="col-md-3">
            <p>Liên kết</p>
            <ul>
                <li>Học toán với OnlineMath</li>
                <li>Học và thi online với Hoc24</li>
                <li>Doc24</li>
            </ul>
          </div>
          <div class="col-md-2">
            <p>Chức năng</p>
            <ul>
                <li>Cộng đồng chia sẻ</li>
                <li>Đăng ký</li>
                <li>Đăng nhập</li>
            </ul>
          </div>
          <div class="col-md-7 text-right">
            <p id="hb_socialicons">
            <a href="http://www.facebook.com/pages/itviet360com/166823093455666/"><img border="0" src="https://lh6.googleusercontent.com/-onuAaa_m6k8/UREjhyzJuuI/AAAAAAAAB6k/NbPPL1Jdhew/s64/itviet360.com-facebook.png" /></a>
            <a href="https://twitter.com/phongvu18nd"><img border="0" src="https://lh3.googleusercontent.com/-Ttp0nD6vfSQ/UREjjLOt6EI/AAAAAAAAB64/V7a_IQCHzdU/s64/itviet360.com-twitter.png" /></a>
            <a href="https://plus.google.com/u/0/106527290580119996124"><img border="0" src="https://lh3.googleusercontent.com/--5wZAGGrRP8/UREjh6gGeDI/AAAAAAAAB6g/iiZ9Pk8LEYQ/s64/itviet360.com-google_plus.png" /></a>
            
            <a href="http://www.youtube.com/user/itviet360/"><img border="0" src="https://lh4.googleusercontent.com/-zytcU6BaDtw/UREjjef514I/AAAAAAAAB68/-KlaD_4cQ8I/s64/itviet360.com-youtube.png" /></a>
            </p>
            <p>© 2015 - 2016 Trung tâm Khoa học Tính toán - ĐH Sư phạm Hà Nội</p>
          </div>
        </div>
    </div>
    </footer>
</body>
</html>
