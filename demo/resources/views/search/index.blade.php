@extends('search')
@section('content')
<form method="get" action="{{ URL::asset('index.php/search/id/'.$id) }}" name=""> 
<div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-11">
                                        <form role="form">
                                            <div class="form-group">
                                                <div class="input-group input-group-lg">
                                                    <input id="searchbar" type="text" name="searchbar" class="form-control" placeholder="Search.......">
                                                    <span class="input-group-btn">
                                                        <input class="btn btn-success" type="submit" value="Search" value="<?php echo $searchBar;?>"/>
                                                    </span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3>Select Your Category.</h3>
                        <div class="btn-group" style="margin-left:20px; margin-top:10px;">
                            <button  onClick="show_in_searchbar(this.innerHTML,this.className);" data-toggle="buttons" class="btn">Biographies and Memoirs</button>
                        </div>
                        <div class="btn-group" style="margin-left:20px; margin-top:10px;">
                            <button onClick="show_in_searchbar(this.innerHTML,this.className);" data-toggle="buttons" class="btn">Drama</button>
                        </div>
                        <div class="btn-group" style="margin-left:20px; margin-top:10px;">
                            <button onClick="show_in_searchbar(this.innerHTML,this.className);" data-toggle="buttons" class="btn">Entertainment</button>
                        </div>
                        <div class="btn-group" style="margin-left:20px; margin-top:10px;">
                            <button onClick="show_in_searchbar(this.innerHTML,this.className);" data-toggle="buttons" class="btn">Friendship</button>
                        </div>
                        <div class="btn-group" style="margin-left:20px; margin-top:10px;">
                            <button onClick="show_in_searchbar(this.innerHTML,this.className);" data-toggle="buttons" class="btn">Family</button>
                        </div>
                        <div class="btn-group" style="margin-left:20px; margin-top:10px;">
                            <button onClick="show_in_searchbar(this.innerHTML,this.className);" data-toggle="buttons" class="btn">Fantasy and Science Fiction*</button>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <div class="btn-group" style="margin-left:20px; margin-top:10px;">
                            <button onClick="show_in_searchbar(this.innerHTML,this.className);" data-toggle="buttons" class="btn">Business and Investing*</button>
                        </div>
                        <div class="btn-group" style="margin-left:20px; margin-top:10px;">
                            <button onClick="show_in_searchbar(this.innerHTML,this.className);" data-toggle="buttons" class="btn">Humor*</button>
                        </div>
                        <div class="btn-group" style="margin-left:20px; margin-top:10px;">
                            <button onClick="show_in_searchbar(this.innerHTML,this.className);" data-toggle="buttons" class="btn">Horror</button>
                        </div>
                        <div class="btn-group" style="margin-left:20px; margin-top:10px;">
                            <button onClick="show_in_searchbar(this.innerHTML,this.className);" data-toggle="buttons" class="btn">History</button>
                        </div>
                        <div class="btn-group" style="margin-left:20px; margin-top:10px;">
                            <button onClick="show_in_searchbar(this.innerHTML,this.className);" data-toggle="buttons" class="btn">Health, Mind and Body</button>
                        </div>
                        <div class="btn-group" style="margin-left:20px; margin-top:10px;">
                            <button onClick="show_in_searchbar(this.innerHTML,this.className);" data-toggle="buttons" class="btn">Fiction</button>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <div class="btn-group" style="margin-left:20px; margin-top:10px;">
                            <button onClick="show_in_searchbar(this.innerHTML,this.className);" data-toggle="buttons" class="btn">Paranormal</button>
                        </div>
                        <div class="btn-group" style="margin-left:20px; margin-top:10px;">
                            <button onClick="show_in_searchbar(this.innerHTML,this.className);" data-toggle="buttons" class="btn">Nonfiction</button>
                        </div>
                        <div class="btn-group" style="margin-left:20px; margin-top:10px;">
                            <button onClick="show_in_searchbar(this.innerHTML,this.className);" data-toggle="buttons" class="btn">Mystery and Thrillers</button>
                        </div>
                        <div class="btn-group" style="margin-left:20px; margin-top:10px;">
                            <button onClick="show_in_searchbar(this.innerHTML,this.className);" data-toggle="buttons" class="btn">Love</button>
                        </div>
                        <div class="btn-group" style="margin-left:20px; margin-top:10px;">
                            <button onClick="show_in_searchbar(this.innerHTML,this.className);" data-toggle="buttons" class="btn">LGBT</button>
                        </div>
                        <div class="btn-group" style="margin-left:20px; margin-top:10px;">
                            <button onClick="show_in_searchbar(this.innerHTML,this.className);" data-toggle="buttons" class="btn">Computers and Internet</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="btn-group" style="margin-left:20px; margin-top:10px;">
                            <button onClick="show_in_searchbar(this.innerHTML,this.className);" data-toggle="buttons" class="btn">Young-Adult</button>
                        </div>
                        <div class="btn-group" style="margin-left:20px; margin-top:10px;">
                            <button onClick="show_in_searchbar(this.innerHTML,this.className);" data-toggle="buttons" class="btn">Romance*</button>
                        </div>
                        <div class="btn-group" style="margin-left:20px; margin-top:10px;">
                            <button onClick="show_in_searchbar(this.innerHTML,this.className);" data-toggle="buttons" class="btn">Short Story</button>
                        </div>
                        <div class="btn-group" style="margin-left:20px; margin-top:10px;">
                            <button onClick="show_in_searchbar(this.innerHTML,this.className);" data-toggle="buttons" class="btn">Suspense*</button>
                        </div>
                        <div class="btn-group" style="margin-left:20px; margin-top:10px;">
                            <button onClick="show_in_searchbar(this.innerHTML,this.className);" data-toggle="buttons" class="btn">Spirituality</button>
                        </div>
                        <div class="btn-group" style="margin-left:20px; margin-top:10px;">
                            <button onClick="show_in_searchbar(this.innerHTML,this.className);" data-toggle="buttons" class="btn">Poetry and lyrics</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3>Select Progress.</h3>
                        <div class="btn-group">
                            <a href="{{ URL::asset('index.php/search/id/0') }}" class="btn btn-primary btn-lg">All</a>
                            <a href="{{ URL::asset('index.php/search/id/1') }}" class="btn btn-primary btn-lg">Ongoing</a>
                            <a href="{{ URL::asset('index.php/search/id/2') }}" class="btn btn-primary btn-lg">Complete</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <hr>
                        <hr>
                    </div>
                </div>
                <?php if(count($data)>0){
						foreach($data as $row){?>
						 <div class="row">
								<div class="col-md-3">
									<img src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c"
									class="img-responsive">
								</div>
								<div class="col-md-9">
									<h3><?php echo $row->book_name;?>
										<a href="#"><i class="fa fa-fw fa-plus-square pull-right text-primary"></i></a>
									</h3>
									<h5><?php echo $row->username;?>--- <?php echo date('F d , Y',strtotime($row->created_date));?>
										<i class="fa fa-fw fa-user text-primary">99930</i>
									</h5>
									<p><?php echo $row->description;?></p>
								</div>
						</div>
					<?php }
				 }else{?>
					<div class="row"> <?php echo 'No Record Found !';?></div>
				<?php } ?>
                <div class="row">
                    <div class="col-md-12">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
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
</form>


   
