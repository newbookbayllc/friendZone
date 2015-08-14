<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
        rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
        rel="stylesheet" type="text/css">
    </head>
    
    <body>
        <div class="section">
            <div class="container"></div>
        </div>
        <div class="section">
            <div class="container"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ URL::asset('index.php/event') }}"><h4>
              <i class="fa fa-fw fa-angle-left"></i>
                Back to Events
                
            </h4></a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1><?php echo $detail->event_title;?></h1>
                        <h4>Time : <?php echo date('h:i',strtotime($detail->event_start_date));?>-<?php echo date('h:i',strtotime($detail->event_end_date));?></h4>
                        <h4>Location : <?php echo $detail->event_location;?></h4>
                        <h4>
							<?php $userID = explode(',',$detail->guest); $finalGuest = '';
								  foreach($userID as $key=>$value){
									  $users = DB::table('users')
											->where('id', $value)->first();
									  $finalGuest .= $users->username.',';
								  } 
								  $finalGuest = substr($finalGuest,0,-1); ?>
							Guests : <?php echo $finalGuest;?></h4>
                        <h4>Organizer : <?php echo $detail->username;?></h4>
                        <h4 contenteditable="true">Fees : <?php echo $detail->fees;?></h4>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-11">
                                    <img src="{{ URL::asset('public/event_images/photo-event.jpeg') }}"
                                    class="center-block img-responsive img-thumbnail">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-left"><?php echo $detail->event_desc;?></p> 
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
