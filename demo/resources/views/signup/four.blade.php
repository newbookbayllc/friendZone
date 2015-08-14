  @extends('app')

@section('content')
 <div class="row">
                    <div class="col-md-12">
                        <div class="well">
                            <div class="active progress progress-striped">
                                <div class="progress-bar" role="progressbar" style="width: 100%;">100% Complete</div>
                            </div>
                            <h1 class="text-center">Welcome to Newbbay! &nbsp;</h1>
                            <p class="lead text-center text-info"><a href="{{ URL::asset('index.php/dashboard') }}">Here is your stash!</a>
                                <br>Enjoy your journey.</p> 
                        </div>
                    </div>
                </div>
                
            @stop
