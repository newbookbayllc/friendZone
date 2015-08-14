  @extends('book')

@section('content')
<body class="main-page">
<div class="container">
<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 side-menu">
        	<ul>
            	<li><a href="http://www.newbbay.com">Newbbay</a></li>
                <li class="bookshelf side-menu-active"><a href="{{ URL::asset('index.php/bookshelf') }}">Bookshelf</a></li>
                <li class="history"><a href="{{ URL::asset('index.php/history') }}">History</a></li>
                <li class="tribu"><a href="{{ URL::asset('index.php/tribu') }}">Tribu</a></li>
                <li class="gift"><a href="{{ URL::asset('index.php/gift') }}">Gifts</a></li>
            </ul>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 right-content">
        	<div class="row tab">
            	<div class="tab-left">
                	<div class="active-line">
                    	<a href="#">Ongoing</a>
                    </div>
                    <div>
                    	<a href="#">Completed</a>
                    </div>
                </div>
                <div class="tab-right">
                
                	<p>Only 20 spots for completed books, for more users need to buy bookshelf</p>
                </div>
            </div>
            
             <?php $i = 0;
			if(count($data)>0){
				foreach($data as $row){
					  if($i%2==0){?>
						<div class="row product-line">
					 <?php } ?>
						<div class="col-lg-4 col-md-4 col-sm-4 product">
								<div>
									<a href="{{ URL::asset('index.php/bookprofile/id/'.$row->id) }}"><img src="{{ URL::asset('public/img/books.png') }}" class="img-responsive" /></a>
								</div>
								<div>
									<p><?php echo $row->book_name;?></p>
									<p>By <?php echo $row->username;?></p>
									<p>5 unread chapters</p>
								</div>
								<span><img src="{{ URL::asset('public/img/line.png') }}" class="img-responsive" /></span>
							</div>
					<?php if($i%2==0){?>
						 </div>
					<?php }
			  
				}  
		   
		$i++;}?>
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
</script>
  @stop
