<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="{{ URL::asset('friendZoneCss/css/bootstrap.min.css') }}" />
<script src="{{ URL::asset('friendZoneCss/js/jquery-1.11.2.min.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('friendZoneCss/css/style.css') }}" />
<meta name="csrf_token" content="{{ csrf_token() }}" />
</head>

<body>
   <div class="main-container">
  		<div class="container">
			<div class="row">
            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 navigation">
                	<nav>
                    	<ul class="nav">
                        	<li><a href="market-page.html">Market place</a></li>
                            <li><a href="friends-page.html">Friends zone</a></li>
                            <li><a href="space-page">Create space</a></li>
                        </ul>
                    </nav>
                </div>
                <div id= 'friendsCyclePage' class="col-lg-10 col-md-10 col-sm-10 col-xs-10 sub-menu">
                	<div class="invite-friend">
                    	<p><a href="#">邀请朋友</a></p>
                    </div>
                    <div class="sub-menu-slide-container">
                        <ul id='cycle'>
                            <!--
                            <li class="menu1"><a href="#"><span class="arrow-active"> </span>{{$friends[1]['myFriendType']  }} cycle</a></li>
                            
                            <div class="menu1-content">
                            	<div class="contact-details contact-user-book">
                                	<p>Calvin</p>
                                    <p>评论了作品《XXXXXXXXXX》</p>
                                    <p>更新了作品《XXXXXXXXXX》</p>
                                </div>
                                <div class="contact-details contact-user-book">
                                	<p>Marvin</p>
                                    <p>评论了作品《XXXXXXXXXX》</p>
                                    <p>更新了作品《XXXXXXXXXX》</p>
                                </div>
                                <div class="contact-details ">
                                	<p>Tony</p>
                                    <p>评论了作品《XXXXXXXXXX》</p>
                                    
                                </div>
                                <div class="contact-details ">
                                	<p>Lynn</p>
                                    <p>评论了作品《XXXXXXXXXX》</p>
                                    
                                </div>
                                <div class="contact-details ">
                                	<p>David</p>
                                    <p>评论了作品《XXXXXXXXXX》</p>
                                   
                                </div>
                            </div>
                            <li class="menu2"><a href="#"><span class="arrow"> </span>XX圈子</a></li>
                            <li class="menu3"><a href="#"><span class="arrow"> </span>XX圈子</a></li>
                            <li class="menu4"><a href="#"><span class="arrow"> </span>XX圈子</a></li>
                           --> 
                        </ul>
                    </div>
					<!--
                    <div class="footer-option-parent">
                        <div class="row footer-option">
                            <div class="col-lg-6 col-md-6 col-sm-6 left footer-active">
                                <p><a href="#">朋友</a></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 right">
                                <p><a href="#">对话</a></p>
                            </div>
                        </div>
                    </div>
					-->
                </div>

                <div id = 'showPersonPage' class="col-lg-7 col-md-7 col-sm-7 col-xs-7 content">
                	
                    	<div class="row dp">
                        	<a href="#"><img src="{{ URL::asset('friendZoneCss/images/dp.png') }}" class="img-responsive" /></a>
                        </div>
                        <div class="row name">
                        	<!--<p id='personName'>Calvin</p> -->
                        </div>
                        <div class="row icons">
                        	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            	<a href="gift-tab2.html"><img src="{{ URL::asset('friendZoneCss/images/n.png') }}" class="img-responsive" /></a>
                                <p>Personal Page</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                            	<a href="conversation.html"><img src="{{ URL::asset('friendZoneCss/images/hi.png') }}" class="img-responsive" /></a>
                                <p>Say Hello</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                            	<a href="#"><img src="{{ URL::asset('friendZoneCss/images/env.png') }}" class="img-responsive" /></a>
                                <p>Add as friend</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                            	<a href="gift-page.html"><img src="{{ URL::asset('friendZoneCss/images/heart.png') }}" class="img-responsive" /></a>
                                <p>Send gift</p>
                            </div>
                        </div>
                        <div class="row">
                        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 title">Name</div>
                            <div id='personName' class="col-lg-6 col-md-6 col-sm-6 col-xs-6 value"> Calvin</div>
                        </div>
                         <div class="row">
                        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 title">Eidt Name:</div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 value"><span id='editName' onclick="editName()"></span></div>
                        </div>
                         <div class="row">
                        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 title">NewbBay account</div>
                            <div id='accountNumb' class="col-lg-6 col-md-6 col-sm-6 col-xs-6 value"> xxxxxxxxx</div>
                        </div>
                         <div class="row">
                        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 title">Email:</div>
                            <div id='email' class="col-lg-6 col-md-6 col-sm-6 col-xs-6 value"> xxxxx@xxxx.xxx</div>
                        </div>
                        <br />
                        <br />
                        <br />
                        <!--
                           <div class="row">
                        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 title">阅读记录：</div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 value"> 《XXXXXXXXXXXX》</div>
                        </div>
						-->
                         <div class="row">
                        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 title">Newest Comments：</div>
                            <div id='newestComment' class="col-lg-6 col-md-6 col-sm-6 col-xs-6 value">《xxxxxxxxx》第xx章：“xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx,x<br />这一段写的真是太赞了！</div>
                        </div>
                         <div class="row">
                        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 title">newest update：</div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 value">《xxxxxxxxxxx》更新至第xx章</div>
                        </div>
                        
                        <div class="row content-button">
                        	<div class="button-area">
								<a href="#">Start a Conversation</a>
                            </div>
                        </div>
                         
                       
                   
                </div>
            </div>
        </div>
   </div>
<script>
var store_click_name="";
var store_click_id =0;
//var store_nick_name="";
function saveEdit(){
	alert( 'store click id:'+ store_click_id);
	$.ajax({
		url: "/demo/public/friendZone/saveEdit",
        beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');

            if (token) {
                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        },
        data: {
			'editName':$('#inputContent').val()
        },
        type:'post',
        success:function(output){
			alert('store_click_id: '+ store_click_id);
			//$("a:contains(\'"+ store_click_name +"\')").text(output);
			$( '.'+store_click_id ).text(output);
            $( '.'+store_click_id ).attr('onclick','clickUser('+Number(store_click_id)+',"'+output+'")');
			$('#editName').html('<a>'+output +'</a> <button onclick ="editName()">edit</button>');
			store_click_name = output;

        },
        error:function(){
                alert("error in ajax");
        }
    }); 	
}
function editName(){
	$('#editName').html('<input value='+store_click_name+' id="inputContent"><button id="saveEdit" onclick ="saveEdit()">save</button>');
	$('#editName').removeAttr('onclick');
}
function getToday(){
	var today = new Date();
	var minutes = today.getMinutes();
	if( Number(minutes)<9  )
		minutes = '0'+minutes;
	var hh= today.getHours();
	var dd = today.getDate();
	var mm = today.getMonth()+1;
	var yyyy = today.getFullYear();
	if(dd<10){
		dd='0'+dd;
	}
	if(mm<10){
		mm = '0'+mm;
	}
	today = yyyy+'-'+mm+'-'+dd+' '+hh+':'+minutes+':00';
	return today;
}
// time format: yyyy-mm-dd hh:ss:mm
function GetDateDiff(startTime, endTime, diffType) {
	//将xxxx-xx-xx的时间格式，转换为 xxxx/xx/xx的格式
    startTime = startTime.replace(/\-/g, "/");
    endTime = endTime.replace(/\-/g, "/");
	//将计算间隔类性字符转换为小写
    diffType = diffType.toLowerCase();
    var sTime = new Date(startTime);      //开始时间
	//alert(sTime);
    var eTime = new Date(endTime);  //结束时间
    //作为除数的数字
    var divNum = 1;
    switch (diffType) {
		case "second":divNum = 1000;break;
        case "minute":divNum = 1000 * 60;break;
		case "hour":divNum = 1000 * 3600;break;
        case "day":divNum = 1000 * 3600 * 24;break;
        default:break;
    }
    return parseInt((eTime.getTime() - sTime.getTime()) / parseInt(divNum));
}
function secondsToTime(m){
	y = parseInt(m/31536000);
	d = parseInt( (m%31536000)/86400 );
	h = parseInt( (m%86400)/3600 );
	s = parseInt( (m%3600)/60 );
	m = m%60;
	/*
	d=parseInt(m/86400);
	h=parseInt((m%86400)/3600);
	s=parseInt((m%3600)/60);
	m=m%60;
	*/
	result ='';
	if(y>0)
		result += y+ ' year';
	if(d>0)
		result += d+'day';
	if(h>0)
		result += h+'  hours';
	if(s>0)
		result += s+'  minutes';
	if(m>0)
		result += s+'  seconds';
	return result;
}
function TimeDifference(past,now){
	past = past.substring(0,19);//0-16
	now = now.substring(0,19);
	timeDiff = GetDateDiff(past, now, 'second');
	return secondsToTime(timeDiff);
}
function handleOutput(output){
	$('#editName').html('<a>'+store_click_name +'</a> <button onclick ="editName()">edit</button>');
	output = JSON.parse(output);
	$('#friendsCyclePage').removeClass('col-lg-10 col-md-10 col-sm-10 col-xs-10 sub-menu');
	$('#friendsCyclePage').addClass('col-lg-3 col-md-3 col-sm-3 col-xs-3 sub-menu');
	$('#personName').text(output.friendName);
	$('#accountNumb').text(output.accountNumb);
	$('#email').text(output.email);
	$('#newestComment').text(output.newestComment);
	$('#showPersonPage').show();
}
function ajaxFunc(id){
	alert('id is'+ id);
    $.ajax({
        //url: "http://localhost/demo/public/friendZone/1",
		//url: "/demo/public/friendZone/1",
		url: "/demo/public/friendZone/clickUser",
        beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');

            if (token) {
                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        },
        data: {
			'id':id
        },
        type:'post',
        success:function(output){
			
			handleOutput(output);
        },
        error:function(){
                alert("error in ajax");
        }
    }); 	
}

function clickUser(id,myFriendName){
	ajaxFunc(id);
	//if(store_click_name === myFriendName ){
		//store_click_name = store_nick_name;
	//}
	//else{
		store_click_id = id.toString();
		store_click_name = myFriendName;
	//}
}
/*
function callyou(a,b){
	alert(a+b)
}
*/
	$('#showPersonPage').hide();
	//callyou(1,"1");
    var storeType=[];
    var cycle = document.getElementById("cycle");
    var html ="";
    var friends = <?php echo json_encode($friends) ?>;
    var storeMyFriendType=[];
	var today = getToday();
    for( var i =0; i< friends.length ; i++  ){
		TimeDiff = TimeDifference(friends[i].commentsDate,today);
		if( friends[i].nick_name !="" ){
			friends[i].myFriendName = friends[i].nick_name;
		}
       if( $.inArray( friends[i].myFriendType,storeMyFriendType ) !=-1  ){
            if( friends[i].myFriendType =='defaultFriends' ){
				html += '<p><a class="'+friends[i].myFriendId+'" onclick=\'clickUser('+friends[i].myFriendId+','+'"'+friends[i].myFriendName+'"'+')\' >'+ friends[i].myFriendName +'</a></p>';
				//html += "<p><a onclick=\"showUserInfo("+friends[i].myFriendId+","+"\'string\'"+")\" >"+ friends[i].myFriendName +"</a></p>";
			}
			else{
				html += '<p><class="'+friends[i].myFriendId+'" a onclick=\'clickUser('+friends[i].myFriendId+','+'"'+friends[i].myFriendName+'"'+')\' >'+ friends[i].myFriendName +'</a> comments '+TimeDiff+' ago:</p>';

				html += '<p>'+friends[i].commentsContent+'</p>';	
			}
       }
       else{
            storeMyFriendType.push(friends[i].myFriendType);
			if( friends[i].myFriendType =='defaultFriends' ){
				html += '<li class="menu1"><a href="#"><span class="arrow-active"> </span>' + friends[i].myFriendType +' cycle</a></li>';
				html += '<p><a class="'+friends[i].myFriendId+'" onclick=\'clickUser('+friends[i].myFriendId+','+'"'+friends[i].myFriendName+'"'+')\' >'+ friends[i].myFriendName +'</a></p>';	
			}
			else{
				//alert(TimeDiff);
				html += '<li class="menu1"><a href="#"><span class="arrow-active"> </span>' + friends[i].myFriendType +' cycle</a></li>';
				html += '<p><a class="'+friends[i].myFriendId+'" onclick=\'clickUser('+friends[i].myFriendId+','+'"'+friends[i].myFriendName+'"'+')\' >'+ friends[i].myFriendName +'</a> comments '+TimeDiff+' ago:</p>';
				html += '<p>'+friends[i].commentsContent+'</p>';
			}
       }
    }
    html += '</div></div>';
    cycle.innerHTML= html;
</script> 
</body>
</html>
