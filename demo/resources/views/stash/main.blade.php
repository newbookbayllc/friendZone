  @extends('book')

@section('content')
@if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif
<style>
.container_dashboard {
  max-width: 620px;
  width: 100%;
  margin:0 auto;
}
.wrapper_dashboard{
	float:left;
	width:100%;
}
.images_dash {
	float: left;
  padding: 8px 4px 8px 8px;
}
.section-a {
  border: 2px solid #ccc;
  float: left;
}

</style>
<div class="wrapper_dashboard">
	<div class="container_dashboard">
		<div class="section-a">
		<div class="images_dash"><a href="{{ URL::asset('index.php/bookshelf') }}"><img src="{{ URL::asset('public/img/image-1.png') }}"/></a></div>
		<div class="images_dash"><a href="{{ URL::asset('index.php/history') }}"><img src=" {{ URL::asset('public/img/image-2.png') }}"/></a></div>
		<div class="images_dash"><a href="{{ URL::asset('index.php/tribu') }}"><img src="{{ URL::asset('public/img/image-3.png') }}"/></a></div>
		<div class="images_dash"><a href="{{ URL::asset('index.php/gift') }}"><img src="{{ URL::asset('public/img/image-4.png') }}"/></a></div>
	</section>
	</div>
</div>

 @stop


