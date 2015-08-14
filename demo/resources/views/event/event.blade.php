@extends('eventlayout')

@section('content')
 <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
							<?php if(count($data)>0){
											foreach($data as $row){?>
												 <div class="well">
													<h5 class="text-right"> <?php echo date('h:i a',strtotime($row->created_date));?>  <?php echo date('m/d/Y',strtotime($row->event_start_date));?></h5>
													
													<a href="{{ URL::asset('index.php/eventfuture/id/'.$row->id) }}"><h3><?php echo $row->event_title;?></h3></a>
													<h5>Time: <?php echo date('h:i',strtotime($row->event_start_date));?>-<?php echo date('h:i',strtotime($row->event_end_date));?></h5>
													<h5>Location:<?php echo $row->event_location;?></h5>
													<h5>Organizer: &nbsp; <?php echo $row->username;?></h5>
												</div>
											<?php }
								}else{?>
									  <div class="well">No Record Found !</div>
								<?php }?>
                           
                         <ul class="pagination">
                                <li>
                                    <a href="#">Prev</a>
                                </li>
                                <li>
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">5</a>
                                </li>
                                <li>
                                    <a href="#">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
@stop
