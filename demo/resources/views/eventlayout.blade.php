<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Bootstrap Core CSS -->
        <link href="{{ URL::asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{ URL::asset('public/css/marketplacenews.css') }}" rel="stylesheet">
        <!-- jQuery -->
        <script src="{{ URL::asset('public/js/jquery.js') }}"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="{{ URL::asset('public/js/bootstrap.min.js') }}"></script>
        
    </head>
    
    <body>
		<script type="text/javascript">
			$(document).ready(function(e) {
				var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
				$("#sidebar-nav li a").each(function(){
				if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
					$(this).addClass("active");
				});
			});
    </script> 
     <div class="login_text">
	 <?php if (Session::has('user_id')) {?>
		 <a href="">Logout</a>
	 <?php }else{?>
		 <a href="">Login</a>
	 <?php }?> </div>
		 <div id="wrapper">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav" id="sidebar-nav">
                    <li>
                        <a href="{{ URL::asset('index.php/all') }}" >All News</a>
                    </li>
                    <li>
                        <a href="{{ URL::asset('index.php/event') }}">Event</a>
                    </li>
                    <li>
                        <a href="{{ URL::asset('index.php/interview') }}">Interview</a>
                    </li>
                    <li>
                        <a href="{{ URL::asset('index.php/announcement') }}">Announcements</a>
                    </li>
                </ul>
            </div>
            @yield('content')
            </div>
		   
    </body>

</html>
