@extends('eventlayout')

@section('content')
 <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="media-list">
								<?php if(count($data)>0){
											foreach($data as $row){?>
												 <li class="media">
													<a class="pull-left" href="#"><img class="media-object" src="{{ URL::asset('public/news_images/photo-event.jpeg') }}" height="64" width="64"></a>
													<div class="media-body">
														<h4 class="media-heading"><?php echo date('m/d/Y', strtotime($row->created_date));?></h4>
														<h4 class="media-heading"><?php echo $row->news_title;?></h4>
														<p><?php echo $row->news_desc;?></p> 
													</div>
												</li>
												<hr>
											<?php }
									
										}else{?>
											 
											 <li class="media">  No Record Found !</li>
											
										<?php }?>
                               
                               </ul>
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
