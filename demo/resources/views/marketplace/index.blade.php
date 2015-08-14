<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="{{ URL::asset('public/js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('public/js/bootstrap.min.js') }}"></script>
        <link href="{{ URL::asset('public/css/font-awesome.min.css') }}"
        rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('public/css/marketplace1.css') }}">
        <script type="text/javascript">
			var searchbar_items=new Array();
        	function show_in_searchbar(value,cname)
			{
				
				
				if(cname=='btn active' | cname=='btn focus' )
				{
					if(searchbar_items.indexOf(value)== -1)
					{
						
						searchbar_items.push(value);
						$("#searchbar").val(searchbar_items);
					
					}
				}
				else
				{	
					var index=searchbar_items.indexOf(value);
					searchbar_items.splice(index,1);
					$("#searchbar").val(searchbar_items);
						
				}
			}
        </script>
    </head>
    
    <body>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    
                                    <div class="col-md-12">
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
                                        
                                        
                                     <br>
                                     <br>
                                     <br>
                                        <div class="col-md-12">
                                        <br>
                                        <div class="btn-group btn-group-justified btn-group-sm">
                                            <form role="form">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input id="searchbar" type="text" class="form-control" placeholder="Search">
                                                        <span class="input-group-btn">
                                                            <a class="btn btn-success" type="submit">Search</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3>News
                                            <span class="label label-info pull-right">
                                                <a href="#">More</a>
                                            </span>
                                        </h3>
                                        <hr>
                                        <?php if(count($newsData)>0){
											foreach($newsData as $reultSet)?>
											<a href="#"><h6 class="text-center"><?php echo $reultSet->news_title;?></h6></a>
											<hr>
										<?php }else{?>
											<h6 class="text-center"><?php echo 'No Record Found !';?></h6>
                                        <hr>
										<?php } ?>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="section">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <img src="https://ununsplash.imgix.net/photo-1421098518790-5a14be02b243?q=25&amp;fm=jpg&amp;s=24665881d66f79925810c2deb7e486b9"
                                                        class="img-responsive">
                                                        <h3 class="text-center"><a href="{{ URL::asset('index.php/bookprofile/id/'.$bookDetail->id) }}"><?php echo $bookDetail->book_name;?></a></h3>
                                                        <h4 class="text-center"><?php echo (int)$readCount->count; ?> reading</h4>
                                                        <h4 class="text-center"><?php echo $likeCount->count;?> likes</h4>
                                                        <h4 class="text-center"><?php echo (int)$commentCount->count;?> Comments</h4>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="media-list">
                                                            <li class="media">
                                                                <a class="pull-left" href="#"><img class="media-object" src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c" height="64" width="64"></a>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">Will Smith</h4>
                                                                </div>
                                                            </li>
                                                            <li class="media">
                                                                <a class="pull-left" href="#"><img class="media-object" src="https://unsplash.imgix.net/photo-1421986527537-888d998adb74?q=25&amp;fm=jpg&amp;s=e633562a1da53293c4dc391fd41ce41d" height="64" width="64"></a>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">Miller Taylor</h4>
                                                                </div>
                                                            </li>
                                                            <li class="media">
                                                                <a class="pull-left" href="#"><img class="media-object" src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c" height="64" width="64"></a>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">Roger Mcha</h4>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="section">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <img src="https://ununsplash.imgix.net/photo-1421098518790-5a14be02b243?q=25&amp;fm=jpg&amp;s=24665881d66f79925810c2deb7e486b9"
                                                        class="img-responsive">
                                                        <h3 class="text-center"><a href="{{ URL::asset('index.php/bookprofile/id/'.$bookDetail->id) }}"><?php echo $bookDetail->book_name;?></a></h3>
                                                        <h6 class="text-center"><?php echo $bookDetail->description;?></h6>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <ul class="list-group">
                                                            <li class="list-group-item">Will Smith
                                                                <span class="badge">
                                                                    <i class="fa fa-arrow-up fa-fw"></i>
                                                                </span>
                                                            </li>
                                                            <li class="list-group-item">Will Smith
                                                                <span class="badge">
                                                                    <i class="fa fa-arrow-up fa-fw"></i>
                                                                </span>
                                                            </li>
                                                            <li class="list-group-item">Will Smith
                                                                <span class="badge">
                                                                    <i class="fa fa-arrow-up fa-fw"></i>
                                                                </span>
                                                            </li>
                                                            <li class="list-group-item">Will Smith
                                                                <span class="badge">
                                                                    <i class="fa fa-arrow-up fa-fw"></i>
                                                                </span>
                                                            </li>
                                                            <li class="list-group-item">Will Smith
                                                                <span class="badge">
                                                                    <i class="fa fa-arrow-up fa-fw"></i>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row" >
                                        <div class="col-md-3">
                                         <img src="https://ununsplash.imgix.net/photo-1421098518790-5a14be02b243?q=25&amp;fm=jpg&amp;s=24665881d66f79925810c2deb7e486b9"
                                                        class="img-responsive">
                                        </div>
                                        <div class="col-md-5">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Book List</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
													<?php if(count($allBookdata)>0){
															foreach($allBookdata as $rowSet){?>
																<tr>
																	<td><?php echo $rowSet->book_name;?></td>
																	<td><?php echo $rowSet->username;?></td>
																	<td>11358</td>
																</tr>
																
															<?php }
														
														}else{?>
															  <tr><td><?php echo 'No Record Found !';?></td></tr>
														<?php }?>
                                                    </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-4">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Top User</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Will Smith</td>
                                                        <td>1358</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Will Smith</td>
                                                        <td>1358</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Will Smith</td>
                                                        <td>1358</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Will Smith</td>
                                                        <td>1358</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Will Smith</td>
                                                        <td>1358</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Will Smith</td>
                                                        <td>1358</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h5>Category1</h5>
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#">Recommand</a>
                            </li>
                            <li>
                                <a href="#">Subscribe 50k+</a>
                            </li>
                            <li>
                                <a href="#">Subscribe 10k+</a>
                            </li>
                            <li>
                                <span class="label label-info pull-right">
                                    <a href="#">More</a>
                                </span>
                            </li>
                        </ul>
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c"
                                        class="img-responsive">
                                        <blockquote>
                                            <p><a href="#">Battle of the exclusive elements</a></p>
                                            <footer>Eric Kristen</footer>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c"
                                        class="img-responsive">
                                        <blockquote>
                                            <p><a href="#">Battle of the exclusive elements</a></p>
                                            <footer>Eric Kristen</footer>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c"
                                        class="img-responsive">
                                        <blockquote>
                                            <p><a href="#">Battle of the exclusive elements</a></p>
                                            <footer>Eric Kristen</footer>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c"
                                        class="img-responsive">
                                        <blockquote>
                                            <p><a href="#">Battle of the exclusive elements</a></p>
                                            <footer>Eric Kristen</footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c"
                                        class="img-responsive">
                                        <blockquote>
                                            <p><a href="#">Battle of the exclusive elements</a></p>
                                            <footer>Eric Kristen</footer>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c"
                                        class="img-responsive">
                                        <blockquote>
                                            <p><a href="#">Battle of the exclusive elements</a></p>
                                            <footer>Eric Kristen</footer>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c"
                                        class="img-responsive">
                                        <blockquote>
                                            <p><a href="#">Battle of the exclusive elements</a></p>
                                            <footer>Eric Kristen</footer>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c"
                                        class="img-responsive">
                                        <blockquote>
                                            <p><a href="#">Battle of the exclusive elements</a></p>
                                            <footer>Eric Kristen</footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a href="#"><h3 class="text-center">Suffort Market</h3></a>
                        <ul class="media-list">
                            <li class="media">
                                <a class="pull-left" href="#"><img class="media-object" src="https://unsplash.imgix.net/photo-1421986527537-888d998adb74?q=25&amp;fm=jpg&amp;s=e633562a1da53293c4dc391fd41ce41d" height="64" width="64"></a>
                                <div class="media-body">
                                    <h4 class="media-heading">A.G.Ammy</h4>
                                    <h5 class="media-heading">May 25, 2013</h5>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                        ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at,
                                        tempus viverra turpis.</p>
                                </div>
                            </li>
                            <li class="media">
                                <a class="pull-left" href="#"><img class="media-object" src="https://unsplash.imgix.net/photo-1421986527537-888d998adb74?q=25&amp;fm=jpg&amp;s=e633562a1da53293c4dc391fd41ce41d" height="64" width="64"></a>
                                <div class="media-body">
                                    <h4 class="media-heading">A.G.Ammy</h4>
                                    <h5 class="media-heading">May 25, 2013</h5>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                        ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at,
                                        tempus viverra turpis.</p>
                                </div>
                            </li>
                            <li class="media">
                                <a class="pull-left" href="#"><img class="media-object" src="https://unsplash.imgix.net/photo-1421986527537-888d998adb74?q=25&amp;fm=jpg&amp;s=e633562a1da53293c4dc391fd41ce41d" height="64" width="64"></a>
                                <div class="media-body">
                                    <h4 class="media-heading">A.G.Ammy</h4>
                                    <h5 class="media-heading">May 25, 2013</h5>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                        ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at,
                                        tempus viverra turpis.</p>
                                </div>
                            </li>
                            <li class="media">
                                <a class="pull-left" href="#"><img class="media-object" src="https://unsplash.imgix.net/photo-1421986527537-888d998adb74?q=25&amp;fm=jpg&amp;s=e633562a1da53293c4dc391fd41ce41d" height="64" width="64"></a>
                                <div class="media-body">
                                    <h4 class="media-heading">A.G.Ammy</h4>
                                    <h5 class="media-heading">May 25, 2013</h5>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                        ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at,
                                        tempus viverra turpis.</p>
                                </div>
                            </li>
                        </ul>
                        <a href="#"><i class="fa fa-fw fa-angle-right">more</i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h5>Category1</h5>
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#">Recommand</a>
                            </li>
                            <li>
                                <a href="#">Subscribe 50k+</a>
                            </li>
                            <li>
                                <a href="#">Subscribe 10k+</a>
                            </li>
                            <li>
                                <span class="label label-info pull-right">
                                    <a href="#">More</a>
                                </span>
                            </li>
                        </ul>
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c"
                                        class="img-responsive">
                                        <blockquote>
                                            <p><a href="#">Battle of the exclusive elements</a></p>
                                            <footer>Eric Kristen</footer>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c"
                                        class="img-responsive">
                                        <blockquote>
                                            <p><a href="#">Battle of the exclusive elements</a></p>
                                            <footer>Eric Kristen</footer>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c"
                                        class="img-responsive">
                                        <blockquote>
                                            <p><a href="#">Battle of the exclusive elements</a></p>
                                            <footer>Eric Kristen</footer>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c"
                                        class="img-responsive">
                                        <blockquote>
                                            <p><a href="#">Battle of the exclusive elements</a></p>
                                            <footer>Eric Kristen</footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c"
                                        class="img-responsive">
                                        <blockquote>
                                            <p><a href="#">Battle of the exclusive elements</a></p>
                                            <footer>Eric Kristen</footer>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c"
                                        class="img-responsive">
                                        <blockquote>
                                            <p><a href="#">Battle of the exclusive elements</a></p>
                                            <footer>Eric Kristen</footer>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c"
                                        class="img-responsive">
                                        <blockquote>
                                            <p><a href="#">Battle of the exclusive elements</a></p>
                                            <footer>Eric Kristen</footer>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c"
                                        class="img-responsive">
                                        <blockquote>
                                            <p><a href="#">Battle of the exclusive elements</a></p>
                                            <footer>Eric Kristen</footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Upper Class</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Will Smith</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Will Smith</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Will Smith</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Will Smith</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Will Smith</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Will Smith</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Will Smith</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Will Smith</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Will Smith</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Will Smith</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="#"><i class="fa fa-angle-right fa-fw pull-left">more</i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h5>Category1</h5>
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#">Recommand</a>
                            </li>
                            <li>
                                <a href="#">Subscribe 50k+</a>
                            </li>
                            <li>
                                <a href="#">Subscribe 10k+</a>
                            </li>
                            <li>
                                <span class="label label-info pull-right">
                                    <a href="#">More</a>
                                </span>
                            </li>
                        </ul>
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c"
                                        class="img-responsive">
                                        <blockquote>
                                            <p><a href="#">Battle of the exclusive elements</a></p>
                                            <footer>Eric Kristen</footer>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c"
                                        class="img-responsive">
                                        <blockquote>
                                            <p><a href="#">Battle of the exclusive elements</a></p>
                                            <footer>Eric Kristen</footer>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c"
                                        class="img-responsive">
                                        <blockquote>
                                            <p><a href="#">Battle of the exclusive elements</a></p>
                                            <footer>Eric Kristen</footer>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c"
                                        class="img-responsive">
                                        <blockquote>
                                            <p><a href="#">Battle of the exclusive elements</a></p>
                                            <footer>Eric Kristen</footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c"
                                        class="img-responsive">
                                        <blockquote>
                                            <p><a href="#">Battle of the exclusive elements</a></p>
                                            <footer>Eric Kristen</footer>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c"
                                        class="img-responsive">
                                        <blockquote>
                                            <p><a href="#">Battle of the exclusive elements</a></p>
                                            <footer>Eric Kristen</footer>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c"
                                        class="img-responsive">
                                        <blockquote>
                                            <p><a href="#">Battle of the exclusive elements</a></p>
                                            <footer>Eric Kristen</footer>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?q=25&amp;fm=jpg&amp;s=1ffa61419561b5c796bca3158e7c704c"
                                        class="img-responsive">
                                        <blockquote>
                                            <p><a href="#">Battle of the exclusive elements</a></p>
                                            <footer>Eric Kristen</footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Guess you might like</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php if(count($allBookdata)>0){
										foreach($allBookdata as $rowResult){?>
											 <tr>
												<td><a href="{{ URL::asset('index.php/booklike/id/'.$rowResult->id) }}"><?php echo $rowResult->book_name;?></a></td>
												<td><?php echo $rowResult->username;?></td>
											</tr>
										<?php }
									 }else{?>
										  <tr>
											<td><?php echo 'No Record Found !';?></td>
										 </tr>
									<?php } ?>
                               </tbody>
                        </table>
                        <a href="#"><i class="fa fa-angle-right fa-fw pull-left">more</i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">&gt;</div>
            </div>
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Latest Comments</h3>
                            <?php if(count($commentDetail)>0){ 
									foreach($commentDetail as $commentDesc){?>
										<div class="well">
										<a href="#"><p><?php echo $commentDesc->comment;?></p></a>
											<blockquote>
												<p><?php echo $commentDesc->book_name;?></p>
												<footer><?php echo $commentDesc->username;?></footer>
												<footer><?php echo date('m/d/Y',strtotime($commentDesc->comment_date));?></footer>
											</blockquote>
										</div>
									<?php } 
								}else{?>
								
								<div class="well"><?php echo 'No Record Found !';?></div>
							<?php } ?>
                          </div>
                        <div class="col-md-6">
                            <h4>Latest Updates</h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Book</th>
                                        <th>Author</th>
                                        <th>Chapter</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#"> Natureflame of the cambom</a></td>
                                        <td>Will Smith</td>
                                        <td>
                                            Chapter 11
                                        </td>
                                        <td>2015/5/21</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> Natureflame of the cambom</a></td>
                                        <td>Will Smith</td>
                                        <td>
                                            Chapter 11
                                        </td>
                                        <td>2015/5/21</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> Natureflame of the cambom</a></td>
                                        <td>Will Smith</td>
                                        <td>
                                            Chapter 11
                                        </td>
                                        <td>2015/5/21</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> Natureflame of the cambom</a></td>
                                        <td>Will Smith</td>
                                        <td>
                                            Chapter 11
                                        </td>
                                        <td>2015/5/21</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> Natureflame of the cambom</a></td>
                                        <td>Will Smith</td>
                                        <td>
                                            Chapter 11
                                        </td>
                                        <td>2015/5/21</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> Natureflame of the cambom</a></td>
                                        <td>Will Smith</td>
                                        <td>
                                            Chapter 11
                                        </td>
                                        <td>2015/5/21</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> Natureflame of the cambom</a></td>
                                        <td>Will Smith</td>
                                        <td>
                                            Chapter 11
                                        </td>
                                        <td>2015/5/21</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> Natureflame of the cambom</a></td>
                                        <td>Will Smith</td>
                                        <td>
                                            Chapter 11
                                        </td>
                                        <td>2015/5/21</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> Natureflame of the cambom</a></td>
                                        <td>Will Smith</td>
                                        <td>
                                            Chapter 11
                                        </td>
                                        <td>2015/5/21</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> Natureflame of the cambom</a></td>
                                        <td>Will Smith</td>
                                        <td>
                                            Chapter 11
                                        </td>
                                        <td>2015/5/21</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> Natureflame of the cambom</a></td>
                                        <td>Will Smith</td>
                                        <td>
                                            Chapter 11
                                        </td>
                                        <td>2015/5/21</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> Natureflame of the cambom</a></td>
                                        <td>Will Smith</td>
                                        <td>
                                            Chapter 11
                                        </td>
                                        <td>2015/5/21</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> Natureflame of the cambom</a></td>
                                        <td>Will Smith</td>
                                        <td>
                                            Chapter 11
                                        </td>
                                        <td>2015/5/21</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> Natureflame of the cambom</a></td>
                                        <td>Will Smith</td>
                                        <td>
                                            Chapter 11
                                        </td>
                                        <td>2015/5/21</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> Natureflame of the cambom</a></td>
                                        <td>Will Smith</td>
                                        <td>
                                            Chapter 11
                                        </td>
                                        <td>2015/5/21</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> Natureflame of the cambom</a></td>
                                        <td>Will Smith</td>
                                        <td>
                                            Chapter 11
                                        </td>
                                        <td>2015/5/21</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> Natureflame of the cambom</a></td>
                                        <td>Will Smith</td>
                                        <td>
                                            Chapter 11
                                        </td>
                                        <td>2015/5/21</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> Natureflame of the cambom</a></td>
                                        <td>Will Smith</td>
                                        <td>
                                            Chapter 11
                                        </td>
                                        <td>2015/5/21</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> Natureflame of the cambom</a></td>
                                        <td>Will Smith</td>
                                        <td>
                                            Chapter 11
                                        </td>
                                        <td>2015/5/21</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"> Natureflame of the cambom</a></td>
                                        <td>Will Smith</td>
                                        <td>
                                            Chapter 11
                                        </td>
                                        <td>2015/5/21</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
