 @extends('app')

@section('content')

 <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <form role="form" class="form-vertical" action="{{ URL::asset('index.php/signup2') }}" method="post" id="registration_form"> 
                            <div class="form-group">
                                <label class="control-label" for="email">Email address</label>
                                <input class="form-control input-lg" id="email" name="email" placeholder="Email address"
                                type="email">
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label" for="username">Username</label>
                                <input class="form-control input-lg" id="username" placeholder="Username" name="username"
                                type="text">
                                <p class="help-block">(The username consists of letter and unique)</p>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input class="form-control input-lg" id="password" placeholder="password" name="password"
                                type="password">
                                <p class="help-block">(The password should be made of atleast one upper letter,one lower letter,
                                    one number. Total length should be more than 8 characters.)</p>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label" for="re-enter password">Re-enter password</label>
                                <input class="form-control input-lg" id="re-enter password"
                                placeholder="Re-enter password" type="password">
                                <span class="fa fa-check form-control-feedback"></span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="organization">Organization</label>
                                <input class="form-control input-lg" id="organization" name="organization"
                                placeholder="Organization" type="text">
                                <p class="help-block" style="color:blue">(optional)</p>
                            </div>
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <input type="submit" class="btn btn-primary" name="signup" value="Next"> 
                        </form>
                    </div>
                </div>
    @stop
   
