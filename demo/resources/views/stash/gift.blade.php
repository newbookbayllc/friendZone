<!DOCTYPE html>
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
        <link href="{{ URL::asset('public/css/marketplacenews.css') }} " rel="stylesheet">
        <!-- jQuery -->
        <script src="{{ URL::asset('public/js/jquery.js') }}"></script>
        <!-- Bootstrap Core JavaScript --> 
        <script src="{{ URL::asset('public/js/bootstrap.min.js') }}"></script>
    </head>
    
    <body>
        <script type="text/javascript">
            function close_modal()
            {
              document.getElementById('modal_confirmation').innerHTML="Successfully Sent";                                            			
            }
            $(document).ready(function(e) {
                 var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
                 $("#sidebar-nav li a").each(function(){
                      if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
						$(this).addClass("active"); 
                 })
             });
        </script>
        <div id="wrapper">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav" id="sidebar-nav">
                    <li><a href="http://www.newbbay.com">Newbbay</a></li>
					<li class="bookshelf side-menu-active"><a href="{{ URL::asset('index.php/bookshelf') }}">Bookshelf</a></li>
					<li class="history"><a href="{{ URL::asset('index.php/history') }}">History</a></li>
					<li class="tribu"><a href="{{ URL::asset('index.php/tribu') }}">Tribu</a></li>
					<li class="gift"><a href="{{ URL::asset('index.php/gift') }}">Gifts</a></li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="section">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="modal fade" id="myModal">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h4 class="modal-title">Send as a gift</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h4 contenteditable="true">Enter your friend's name-</h4>
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="Enter your email">
                                                                    <span class="input-group-btn">
                                                                        <a onclick="close_modal();" class="btn btn-success" type="submit">Confirm</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <h4 id="modal_confirmation" class="text-left pull-left text-primary"></h4>
                                                            <a class="btn btn-default" data-dismiss="modal">Close</a>
                                                            <a onclick="close_modal();" class="btn btn-primary">Send to myself</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  <h4 id="modal_confirmation2" class="text-left text-primary"></h4>
                                        <?php $i=1; if(count($giftData)>0){ 
														foreach($giftData as $giftDetail){
															if($i%3==0){?>  <div class="row"> <?php } ?>
													<div class="col-md-3">
														<a><img src="{{ URL::asset('public/gift_images/'.$giftDetail->gift_image) }}" class="img-responsive"></a> 
														<h4>Gift1
															<a href="#" data-toggle="modal" data-target="#myModal"><span class="label label-default pull-right">Buy</span></a>
														</h4>
														<p><?php echo $giftDetail->gift_desc;?></p>
														<h5 class="text-center"><?php echo $giftDetail->gift_amount;?> Banas</h5>
													</div>
													<?php if($i%3==0){?>  </div> <?php } ?>
												 <?php $i++;}
										}else{?>
											<div class="col-md-3">No Record Found !</div>
										<?php } ?>
                                      
                                        </div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
            <!-- /#wrapper -->
        </div>
    </body>

</html>
