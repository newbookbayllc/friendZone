<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
        rel="stylesheet" type="text/css">
        <link rel="stylesheet" href=" {{ URL::asset('public/css/contact.css') }}">
    </head>
    
    <body>
	   <form method="post" name="" id="" action="{{ URL::asset('index.php/contact') }}" />
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 contenteditable="true" class="text-info">Contact us with email</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="container">
                <div class="container">
                    <div class="section">
                        <form class="form-horizontal" role="form">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Subject of email</h3>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-sm-2">
                                                <label for="inputEmail3" class="control-label">Subject</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" name="subject" class="form-control" id="inputEmail3" placeholder="Subject">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Your contact information</h3>
                                        <hr>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-sm-2">
                                                <label for="inputEmail3" class="control-label">First Name</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" name="first_name" class="form-control" id="inputEmail3" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-2">
                                                <label for="inputEmail3" class="control-label">Last Name</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="last_name" id="inputEmail3" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-2">
                                                <label for="inputEmail3" class="control-label">Email Address</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="email" name="email" class="form-control input-sm" id="inputEmail3" placeholder="Email Address">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Message</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-10 form-group ">
                                                <textarea class="form-control" rows="12" name="message"></textarea>
                                            </div>
                                        </div>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="row">
                                            <div class="col-md-3 form-group ">
                                                <a class="btn btn-primary">Cancel</a>
                                            </div>
                                            <div class="col-md-3 form-group ">
                                                <input type="submit" class="btn btn-primary" value="Submit" name="contact_submit"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-info">Contact us with telephone</h2>
                        <div class="section">
                            <div class="container">
                                <h5>Number of NBB:
                                    <font style="color:blue">+1(213)895-9086</font>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         </form> 
    </body>

</html>
