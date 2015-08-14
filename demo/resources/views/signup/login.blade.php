 @extends('app')

@section('content')

@if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif
 <div class="row">
         <div class="col-md-12">
                        <div class="section">
                            <div class="container"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header text-center">
                            <h1> Login</h1>
                        </div>
                    </div>
                </div>
 <div class="row">
	 <div class="col-md-10 col-md-offset-1">
          <form role="form" class="form-vertical" action="{{ URL::asset('index.php/login') }}" method="post"> 
               <div class="form-group">
                   <label class="control-label" for="email">Username</label>
                    <input class="form-control input-lg" id="email" name="email" placeholder="Username" type="text">
               </div>
                <div class="form-group has-feedback">
                     <label class="control-label" for="password">Password</label>
                     <input class="form-control input-lg" id="password" placeholder="Password" name="password" type="password">
                </div>
                 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                 <input type="submit" class="btn btn-primary" name="Login" value="Login"> 
                 <a href="{{ URL::asset('index.php/signup1') }}">SignUp</a>
            </form>
       </div>
 </div>

    @stop
