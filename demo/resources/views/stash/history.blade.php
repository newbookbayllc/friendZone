  @extends('book')

@section('content')
<body class="history-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 side-menu">
				<ul>
					<li><a href="http://www.newbbay.com">Newbbay</a></li>
					<li class="bookshelf"><a href="{{ URL::asset('index.php/bookshelf') }}">Bookshelf</a></li>
					<li class="history side-menu-active"><a href="{{ URL::asset('index.php/history') }}">History</a></li>
					<li class="tribu"><a href="{{ URL::asset('index.php/tribu') }}">Tribu</a></li>
					<li class="gift"><a href="{{ URL::asset('index.php/gift') }}">Gifts</a></li>
				</ul>
			</div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 right-content">
				<div class="row product-line">
					<?php if(count($data)>0){
						foreach($data as $row){?>
							<div class="col-lg-12 col-md-12 col-sm-12 product">
								<div>
									<img src="{{ URL::asset('public/img/books.png') }}" class="img-responsive" />
								</div>
								<div>
									<p><?php echo $row->book_name;?></p>
									<p>By <?php echo $row->username;?></p>
									<p class="italic"><?php echo $row->read_count;?> people read</p>
									<p>5 unread chapters</p>
									<p><?php echo $row->description;?></p>
									<p>Last Chapter: &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Chapter:19 Back to town  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="italic"> Chapters updated </span></p>
									<p><span class="italic">Last viewed at: <?php echo date('m-d-Y',strtotime($row->last_view_date));?> <span class="italic">about</span> 2 months ago</p>
								</div>
								<span><img src="{{ URL::asset('public/img/line-big.png') }}" class="img-responsive" /></span>
							</div>
					<?php }
					}?>
				</div> 
			</div>
		</div>
    </div>
   </body>
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
      @stop
      
