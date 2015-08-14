<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="{{ URL::asset('friendZoneCss/css/bootstrap.min.css') }}" /> 
<script src="{{ URL::asset('friendZoneCss/js/jquery-1.11.2.min.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('friendZoneCss/css/style.css') }}" />
</head>

<body>
   <div class="main-container gift-tab1 gift-tab-2 gift-tab-3">
  		<div class="container">
			<div class="row">
            	<div class="close1"><img src="{{ URL::asset('friendZoneCss/images/close.png') }}" /></div>
            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 navigation">
                	<nav>
                    	<ul class="nav">
                        	<li><a href="market-page.html">Market place</a></li>
                            <li><a href="{{ URL::asset('index.php/friends') }}">Friends zone</a></li>
                            <li><a href="space-page">Create space</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 sub-menu">
                	<div class="invite-friend">
                    	<p><a href="#">邀请朋友</a></p>
                    </div>
                    <div class="sub-menu-slide-container">
                        <ul>
                            <li class="menu1"><a href="#"><span class="arrow-active"> </span>XX圈子</a></li>
                            <div class="menu1-content">
                            	<div class="contact-details contact-user-book">
                                	<p>Calvin</p>
                                    <p>评论了作品《XXXXXXXXXX》</p>
                                    <p>更新了作品《XXXXXXXXXX》</p>
                                </div>
                                <div class="contact-details contact-user-book">
                                	<p>Marvin</p>
                                    <p>评论了作品《XXXXXXXXXX》</p>
                                    <p>更新了作品《XXXXXXXXXX》</p>
                                </div>
                                <div class="contact-details ">
                                	<p>Tony</p>
                                    <p>评论了作品《XXXXXXXXXX》</p>
                                    
                                </div>
                                <div class="contact-details ">
                                	<p>Lynn</p>
                                    <p>评论了作品《XXXXXXXXXX》</p>
                                    
                                </div>
                                <div class="contact-details ">
                                	<p>David</p>
                                    <p>评论了作品《XXXXXXXXXX》</p>
                                   
                                </div>
                            </div>
                            <li class="menu2"><a href="#"><span class="arrow"> </span>XX圈子</a></li>
                            <li class="menu3"><a href="#"><span class="arrow"> </span>XX圈子</a></li>
                            <li class="menu4"><a href="#"><span class="arrow"> </span>XX圈子</a></li>
                            
                        </ul>
                    </div>
                    <div class="footer-option-parent">
                        <div class="row footer-option">
                            <div class="col-lg-6 col-md-6 col-sm-6 left footer-active">
                                <p><a href="#">朋友</a></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 right">
                                <p><a href="#">对话</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 content">
                		
                    	<div class="row dp">
                        	<a href="#"><img src="{{ URL::asset('friendZoneCss/images/dp.png') }}" class="img-responsive" /></a>
                            <div class="dp-name">
                            	<p>Calvin（作家）</p>
                            	<p>NewbBay账号</p>
                            </div>
                        </div>
                        <div class="row tabs">
                        	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                            	<p><a href="{{ URL::asset('index.php/gifttab1') }}">Calvin收到的礼物</a></p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                            	<p><a href="{{ URL::asset('index.php/gifttab2') }}">Calvin的评</a></p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 tabs-active">
                            	<p><a href="{{ URL::asset('index.php/gifttab3') }}">Calvin的作品</a></p>
                            </div>
                        </div>
                       	
                        <div class="row literary">
                        	<div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                	<img src="{{ URL::asset('friendZoneCss/images/cover-img.png') }}" class="img-responsive"/>
                                    <div class="dp-name">
                                    	<p>作品名称1</p>
                                        <p>最近更新时间：2015/04/27</p>
                                        <p>10529人在读 5626条评论</p>
                                        <p>9800人收藏</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                	<img src="{{ URL::asset('friendZoneCss/images/cover-img.png') }}" class="img-responsive"/>
                                    <div class="dp-name">
                                    	<p>作品名称1</p>
                                        <p>最近更新时间：2015/04/27</p>
                                        <p>10529人在读 5626条评论</p>
                                        <p>9800人收藏</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                	<img src="{{ URL::asset('friendZoneCss/images/cover-img.png') }}" class="img-responsive"/>
                                    <div class="dp-name">
                                    	<p>作品名称1</p>
                                        <p>最近更新时间：2015/04/27</p>
                                        <p>10529人在读 5626条评论</p>
                                        <p>9800人收藏</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                	<img src="{{ URL::asset('friendZoneCss/images/cover-img.png') }}" class="img-responsive"/>
                                    <div class="dp-name">
                                    	<p>作品名称1</p>
                                        <p>最近更新时间：2015/04/27</p>
                                        <p>10529人在读 5626条评论</p>
                                        <p>9800人收藏</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                	<img src="{{ URL::asset('friendZoneCss/images/cover-img.png') }}" class="img-responsive"/>
                                    <div class="dp-name">
                                    	<p>作品名称1</p>
                                        <p>最近更新时间：2015/04/27</p>
                                        <p>10529人在读 5626条评论</p>
                                        <p>9800人收藏</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                	<img src="{{ URL::asset('friendZoneCss/images/cover-img.png') }}" class="img-responsive"/>
                                    <div class="dp-name">
                                    	<p>作品名称1</p>
                                        <p>最近更新时间：2015/04/27</p>
                                        <p>10529人在读 5626条评论</p>
                                        <p>9800人收藏</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                	<img src="{{ URL::asset('friendZoneCss/images/cover-img.png') }}" class="img-responsive"/>
                                    <div class="dp-name">
                                    	<p>作品名称1</p>
                                        <p>最近更新时间：2015/04/27</p>
                                        <p>10529人在读 5626条评论</p>
                                        <p>9800人收藏</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                	<img src="{{ URL::asset('friendZoneCss/images/cover-img.png') }}" class="img-responsive"/>
                                    <div class="dp-name">
                                    	<p>作品名称1</p>
                                        <p>最近更新时间：2015/04/27</p>
                                        <p>10529人在读 5626条评论</p>
                                        <p>9800人收藏</p>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        
                        <div class="row">
                            <div class="row pagination">
                                <div>
                                    <p>< 1 2 3 4 5 ... 11 12></p>
                                </div>
                            </div>
                        </div> 
                </div>
            </div>
        </div>
   </div>
</body>
</html>
