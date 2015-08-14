  @extends('book')

@section('content')
<body class="tribu-page">

<div class="container">
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 side-menu">
        	<ul>
            	<li><a href="http://www.newbbay.com">Newbbay</a></li>
                <li class="bookshelf"><a href="{{ URL::asset('index.php/bookshelf') }}">Bookshelf</a></li>
                <li class="history"><a href="{{ URL::asset('index.php/history') }}">History</a></li>
                <li class="tribu side-menu-active"><a href="{{ URL::asset('index.php/tribu') }}">Tribu</a></li>
                <li class="gift"><a href="{{ URL::asset('index.php/gift') }}">Gifts</a></li>
            </ul>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 right-content">
        	<div class="row tab">
            	<div class="tab-left">
                	<div>
                    	<a href="{{ URL::asset('index.php/tribu') }}">All Comments</a>
                    </div>
                    <div  class="active-line">
                    	<a href="{{ URL::asset('index.php/tribu-praised') }}">Praised Comments</a>
                    </div>
                </div>
                <div class="tab-right">
                	<div class="tab-right-dropdown">
                    	<select>
                        	<option>Display by time</option>
                            <option >Display by book</option >
                           	
                        </select>
                    </div>
                </div>
            </div>
            
            
            <div class="row comment-div">
            	<div class="comment">
                	<div class="comment-title">
                    	<p><span class="name">Karen</span> Comments on <span class="name-2">Alice</span><span class="italic"> @ Chapter 5</span>
                        <span class="time">Time: 5/13/2015 &nbsp;&nbsp;&nbsp; 20:00:00</span></p>
                    </div>
                    <div class="comment-content">
                    	<p>
                        	Lorem ipsum is a dummy text Lorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy text
                        </p>
                    </div>
                    <hr />
                </div>
                
                <div class="reply">
                	<div class="comment-title">
                    	<p><span class="name">Wen</span> Replys on <span class="name-2">Karen</span><span class="italic"> @ Chapter 5</span>
                        <span class="time">Time: 5/13/2015 &nbsp;&nbsp;&nbsp; 20:00:00</span></p>
                    </div>
                    <div class="comment-content">
                    	<p>
                        	Lorem ipsum is a dummy text Lorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy text
                        </p>
                    </div>
                    <hr />
                </div>
                
                <div class="comment">
                	<div class="comment-title">
                    	<p><span class="name">Karen</span> Comments on <span class="name-2">Alice</span><span class="italic"> @ Chapter 5</span>
                        <span class="time">Time: 5/13/2015 &nbsp;&nbsp;&nbsp; 20:00:00</span></p>
                    </div>
                    <div class="comment-content">
                    	<p>
                        	Lorem ipsum is a dummy text Lorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy text
                        </p>
                    </div>
                    <hr />
                </div>
                
                 <div class="reply">
                	<div class="comment-title">
                    	<p><span class="name">Wen</span> Replys on <span class="name-2">Karen</span><span class="italic"> @ Chapter 5</span>
                        <span class="time">Time: 5/13/2015 &nbsp;&nbsp;&nbsp; 20:00:00</span></p>
                    </div>
                    <div class="comment-content">
                    	<p>
                        	Lorem ipsum is a dummy text Lorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy text
                        </p>
                    </div>
                    <hr />
                </div>
                 <div class="reply">
                	<div class="comment-title">
                    	<p><span class="name">Wen</span> Replys on <span class="name-2">Karen</span><span class="italic"> @ Chapter 5</span>
                        <span class="time">Time: 5/13/2015 &nbsp;&nbsp;&nbsp; 20:00:00</span></p>
                    </div>
                    <div class="comment-content">
                    	<p>
                        	Lorem ipsum is a dummy text Lorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy text
                        </p>
                    </div>
                    <hr />
                </div>
                
            </div>
            <div class="view-more-btn"><a href="#">View more</a></div>
        </div>
    </div>
</div>

<script>
	$(document).ready(function(e) {
        $('.tab-left').on('click','a',function(){
			$('.tab-left').find('div').removeClass('active-line');
			$(this).addClass('active-line');
		});
		$('.side-menu').on('click','a',function(){
			$('.side-menu').find('li').removeClass('side-menu-active');
			$(this).addClass('side-menu-active');
		});
    });
</script></body>

@stop
