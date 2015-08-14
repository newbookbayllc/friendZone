 @extends('eventlayout')

@section('content')
 <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
							<?php if(count($data)>0){
									foreach($data as $row){?>
										<div class="well">
											<h5 class="text-right"><?php echo date('h:i a',strtotime($row->created_date));?>  <?php echo date('m/d/Y',strtotime($row->created_date));?></h5>
											<h3><?php echo $row->title;?></h3>
											<p><?php echo $row->description;?></p>
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
            <!-- /#page-content-wrapper -->
@stop
