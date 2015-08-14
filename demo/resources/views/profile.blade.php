<!DOCTYPE html>
<html>
     
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{{ URL::asset('public/css/book_profile.css') }}" />
        <script src="{{ URL::asset('public/js/jquery-1.11.2.min.js') }}"></script>
        <link rel="stylesheet" href="{{ URL::asset('public/css/bootstrap.min.css') }}" />
        
    </head>
    
    <body>
		  <div class="login_text">
	 <?php if (Session::has('user_id')) {?>
		 <a href="">Logout</a>
	 <?php }else{?>
		 <a href="">Login</a>
	 <?php }?> </div>
	<div class="main-container">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-column">
        <div class="header">
          <ul>
            <li> <a href="#">Drama</a> </li>
            <li> <a href="#">Family</a> </li>
            <li> <a href="#">Fiction</a> </li>
            <li> <a href="#">Horror</a> </li>
            <li> <a href="#"> Love</a> </li>
          </ul>
          <ul>
            <li> <a href="#">History</a> </li>
            <li> <a href="#">LGBT</a> </li>
            <li> <a href="#">Humor</a> </li>
            <li> <a href="#">Suspense</a> </li>
            <li> <a href="#">Romance</a> </li>
          </ul>
          <div class="search">
            <input type="text">
            <input type="button" value="Search ▼">
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
					@yield('content')
			</div>
		</div>
			
	 </body>

</html>

