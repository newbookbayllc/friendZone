 @extends('app')

@section('content')
<div class="row">
                    <div class="col-md-12">
                        <div class="container"></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container"></div>
                    </div>
                </div>
            </div>
            <div class="container"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="well">
                                        <h1>
                                            <i class="fa fa-envelope fa-fw fa-lg fa-rotate-90 fa-spin pull-left"></i>Check your email</h1>
                                            <p class="lead"><a href="{{ URL::asset('index.php/signup4') }}">Confirm Link</a></p>
											<p class="lead">An activation email and EULA has been sent to your email.
                                            <br>You can now go to your email or stare at this page :)
                                            <br>If you dont receive it in 5 minutes, slap the **** here -&gt;
                                            <a href="#">Resend Email</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      @stop
