   @extends('profile')

@section('content')
 <p><a href="">All > Romance > <?php  echo $data->book_name;?><a href=""></p> 
    <p class="alert alert-info"><br>{{ Session::get('success') }}</p>
    <div class="book-info row">
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 left">
        <div class="row border">
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="inner-container"> <img src="{{ URL::asset('public/img/book-app.png') }}" class="img-responsive" />
              <p class="bold">235,251 Subscriber</p>
              <div class="share-subscribe"> <img src="{{ URL::asset('public/img/share.png') }}" class="img-responsive"/><img src="{{ URL::asset('public/img/subscribe.png') }}" class="img-responsive"/> </div>
            </div>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
            <p><span class="large-font"><?php echo $data->book_name;?></span> <span class="name">By <?php echo $data->username;?></span><span class="datetime">Since <?php echo date('m/d/Y', strtotime($data->created_date));?></span></p>
            <hr />
            <p><?php echo $data->description;?></p>
            <hr />
            <div class="tag-name">
              <div class="book-tag active-white"> <a href="#">Book tag</a> </div>
              <div class="role-tag"> <a href="#">Role tag</a> </div>
            </div>
            <div class="clear"></div>
            <div class="tags">
              <ul>
                <li><a href="#">Romance</a></li>
                <li><a href="#">Romance</a></li>
                <li><a href="#">Romance</a></li>
              </ul>
            </div>
            <hr />
            <div class="buttons">
              <ul>
                <li id="reading"><a href="{{ URL::asset('index.php/bookread/id/'.$id) }}"><img src="{{ URL::asset('public/img/book-ico.png') }}" class="img-responsive" />Reading</a></li>
                <li id="order"><a href="#"><img src="{{ URL::asset('public/img/basket.png') }}" class="img-responsive" />Order</a></li>
                <li id="vote"><a href="{{ URL::asset('index.php/bookvote/id/'.$id) }}"><img src="{{ URL::asset('public/img/vote.png') }}" class="img-responsive" />Vote</a></li>
                <li id="buy-book"><a href="#"><img src="{{ URL::asset('public/img/home.png') }}" class="img-responsive" />Buy Book</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 right">
        <div class="inner-container border">
          <div class="name-dp"> 
            <p><?php echo $data->username;?></p> 
            <img src="{{ URL::asset('public/img/face.png') }}" class="img-responsive" /> </div>
          <div class="dp-para">
            <p>Lorem ipsum is a dummy text Lorem ipsum is a dummy text
            
              Lorem ipsum </p>
              <p>More from author:</p>
              <p>
              	<ul class="green">
                	<li><a href="#">A Game of throne</a></li>
                    <li><a href="#">The chronicle of Narnia</a></li>
                    <li><a href="#">One hundred years of solitude</a></li>
                    
                </ul>
              </p>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="row chapters">
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 border">
      <br />
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            	<p align="center"><b>Author Announcement</b></p>
                <p align="center"><?php if($announcementsData){ echo $announcementsData->description; } else{ echo 'No Record Found !'; }?></p>
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            	<p align="center"><a href="#"><b>Events Board</b></a></p> 
              
                	<table width="100%" class="events">
						   <?php $i=1;if(count($eventData) >0 ){ 
								 foreach($eventData as $rowEvent){?>
										<tr>
										<td>
											<li><a href="#"><?php echo $rowEvent->event_title;?></a></li>
										</td>
										<td>
											<?php echo $rowEvent->created_date;?>
										</td>
									</tr>
									 <?php if($i==3){ break; }?>
										
									  <?php $i++;}
								}else{?>
										<tr>
											<td><?php echo 'No Record Found !';?></td>
										</tr>
							    <?php }?>
									
							
                    </table>
                    	
               </div>
        </div>
        <table border="1">
          <tr>
            <td><a href="">Chapter 27: XXXXXXXX</a></td>
            <td><a href="">Chapter 26: XXXXXXXX</a></td>
            <td><a href="">Chapter 25: XXXXXXXX</a></td>
          </tr>
          <tr>
            <td><a href="">Chapter 27: XXXXXXXX</a></td>
            <td><a href="">Chapter 26: XXXXXXXX</a></td>
            <td><a href="">Chapter 25: XXXXXXXX</a></td>
          </tr>
          <tr>
            <td><a href="">Chapter 27: XXXXXXXX</a></td>
            <td><a href="">Chapter 26: XXXXXXXX</a></td>
            <td><a href="">Chapter 25: XXXXXXXX</a></td>
          </tr>
          <tr>
            <td><a href="">Chapter 27: XXXXXXXX</a></td>
            <td><a href="">Chapter 26: XXXXXXXX</a></td>
            <td><a href="">Chapter 25: XXXXXXXX</a></td>
          </tr>
          <tr>
            <td><a href="">Chapter 27: XXXXXXXX</a></td>
            <td><a href="">Chapter 26: XXXXXXXX</a></td>
            <td><a href="">Chapter 25: XXXXXXXX</a></td>
          </tr>
          <tr>
            <td><a href="">Chapter 27: XXXXXXXX</a></td>
            <td><a href="">Chapter 26: XXXXXXXX</a></td>
            <td><a href="">Chapter 25: XXXXXXXX</a></td>
          </tr>
          <tr>
            <td><a href="">Chapter 27: XXXXXXXX</a></td>
            <td><a href="">Chapter 26: XXXXXXXX</a></td>
            <td><a href="">Chapter 25: XXXXXXXX</a></td>
          </tr>
          <tr>
            <td><a href="">Chapter 27: XXXXXXXX</a></td>
            <td><a href="">Chapter 26: XXXXXXXX</a></td>
            <td><a href="">Chapter 25: XXXXXXXX</a></td>
          </tr>
          <tr>
            <td><a href="">Chapter 27: XXXXXXXX</a></td>
            <td><a href="">Chapter 26: XXXXXXXX</a></td>
            <td><a href="">Chapter 25: XXXXXXXX</a></td>
          </tr>
          <tr>
            <td><a href="">Chapter 27: XXXXXXXX</a></td>
            <td><a href="">Chapter 26: XXXXXXXX</a></td>
            <td><a href="">Chapter 25: XXXXXXXX</a></td>
          </tr>
        </table>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <div class="inner-container border">
          <p><span class="large-font"><?php echo count($bookVote);?></span> vote this month</p>
          <table border="1">
			  <?php if(count($bookVote)>0){ $i=1;
					foreach ($bookVote as $vote){?>
						
						   <tr>
								<td> <?php echo $i;?> </td>
								<td> Chinees </td>
								<td> <?php echo $vote->username;?> </td>
						  </tr>
						
						
					<?php $i++;}
				  
			  }else{?>
				  
				   <tr><td> <?php echo 'No Record Found !'; ?> </td></tr>
			  <?php }?>
           
          </table>
        </div>
      </div>
    </div>
    <div class="row comment-need-for-suffort">
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 left border">
        <div class="comment-div">
          <div class="comment">
            <p>Comments</p>
            <hr />
            <br>
            <div class="comment-title">
              <p><span class="name">Karen</span> Comments on <span class="name-2">Alice</span><span class="italic"> @ Chapter 5</span> <span class="time">Time: 5/13/2015 &nbsp;&nbsp;&nbsp; 20:00:00</span></p>
            </div>
            <div class="comment-content">
              <p> Lorem ipsum is a dummy text Lorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy text </p>
            </div>
            <hr>
          </div>
          <div class="reply">
            <div class="comment-title">
              <p><span class="name">Wen</span> Replys on <span class="name-2">Karen</span><span class="italic"> @ Chapter 5</span> <span class="time">Time: 5/13/2015 &nbsp;&nbsp;&nbsp; 20:00:00</span></p>
            </div>
            <div class="comment-content">
              <p> Lorem ipsum is a dummy text Lorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy text </p>
            </div>
            <hr>
          </div>
          <div class="comment">
            <div class="comment-title">
              <p><span class="name">Karen</span> Comments on <span class="name-2">Alice</span><span class="italic"> @ Chapter 5</span> <span class="time">Time: 5/13/2015 &nbsp;&nbsp;&nbsp; 20:00:00</span></p>
            </div>
            <div class="comment-content">
              <p> Lorem ipsum is a dummy text Lorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy text </p>
            </div>
            <hr>
          </div>
          <div class="reply">
            <div class="comment-title">
              <p><span class="name">Wen</span> Replys on <span class="name-2">Karen</span><span class="italic"> @ Chapter 5</span> <span class="time">Time: 5/13/2015 &nbsp;&nbsp;&nbsp; 20:00:00</span></p>
            </div>
            <div class="comment-content">
              <p> Lorem ipsum is a dummy text Lorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy text </p>
            </div>
            <hr>
          </div>
          <div class="reply">
            <div class="comment-title">
              <p><span class="name">Wen</span> Replys on <span class="name-2">Karen</span><span class="italic"> @ Chapter 5</span> <span class="time">Time: 5/13/2015 &nbsp;&nbsp;&nbsp; 20:00:00</span></p>
            </div>
            <div class="comment-content">
              <p> Lorem ipsum is a dummy text Lorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy text </p>
            </div>
            <hr>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 right"> 
      	<div class="inner-container border">
        	<div class="top">
            	<p align="center" class="bold"><a href="">Need for suffort</a></p>
                <p class="bold"><a href="">Will smith said:</a></p>
                <p class="small-fonts">Lorem ipsum is a dummy text Lorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum is a dummy textLorem ipsum </p>
                <table style="width:100%" class="need-for-suffort small-fonts">
                	<tr>
                    	<td class="grey">Expected to finish</td>
                        <td class="grey">07/30/2015</td>
                    </tr>
                    <tr>
                    	<td class="grey">Amount Needed</td>
                        <td class="grey">$1000</td>
                    </tr>
                    <tr>
                    	<td class="grey">Revenue share</td>
                        <td class="grey">Yes</td>
                    </tr>
                </table>
                <br />
                <p class="bold"><a href="">Suffort by</a></p>
                <table border="1" style="width:100%" class="suffort-by">
                	<tr>
                    	<td><img src="{{ URL::asset('public/img/user_profile.png') }}" class="img-responsive" />Will Smith</td>
                       <td><img src="{{ URL::asset('public/img/user_profile.png') }}" class="img-responsive" />Will Smith</td>
                    </tr>
                    <tr>
                    	<td><img src="{{ URL::asset('public/img/user_profile.png') }}" class="img-responsive" />Will Smith</td>
                        <td><img src="{{ URL::asset('public/img/user_profile.png') }}" class="img-responsive" />Will Smith</td>
                    </tr>
                    <tr>
                    	<td><img src="{{ URL::asset('public/img/user_profile.png') }}" class="img-responsive" />Will Smith</td>
                        <td></td>
                    </tr>
                    
                </table>
            </div>
            
            <div class="bottom">
            	<p class="bold"><a href="">You may also like</a></p>
                <table>
					<?php if(count($allBookdata)>0){
							foreach($allBookdata as $resultSet){?>
								 
							<tr><td><span class="romance"><a href="{{ URL::asset('index.php/booklike/id/'.$id) }}">Romance</a></span></td><td> <a href="{{ URL::asset('index.php/booklike/id/'.$id) }}"><?php echo $resultSet->book_name;?></a></td></tr> 
								
							<?php }
					
					}else{ ?>
						
						<tr><td><?php echo 'No Record Found !';?> </td></tr>
						
					<?php }?>
                	
                </table>

            </div> 
        </div>
      </div>
    </div>
  @stop
