@extends('friendzoneLayout')
@section('header')
                <div id= 'friendsCyclePage' class="col-lg-10 col-md-10 col-sm-10 col-xs-10 sub-menu">
                	<div class="invite-friend">
                    	<!-- <p><a href="#">邀请朋友</a></p> -->
                    </div>
                    <div class="sub-menu-slide-container">
                        <ul id='cycle'>
                        </ul>
                    </div>
                </div>
@stop

@section('content')
                <div id = 'showPersonPage' class="col-lg-7 col-md-7 col-sm-7 col-xs-7 content">
                	
                    	<div class="row dp">
                        	<a href=""><img src="{{ URL::asset('friendZoneCss/images/dp.png') }}" class="img-responsive" /></a>
                        </div>
                        <div class="row name">
                        	<!--<p id='personName'>Calvin</p> -->
                        </div>
                        <div class="row icons">
                        	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            	<a onclick="personalpage()" ><img src="{{ URL::asset('friendZoneCss/images/n.png') }}" class="img-responsive" /></a>
                                <p>Personal Page</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                            	<a href="{{ URL('friendZone/conversation/showConversation') }}" target="_blank"><img src="{{ URL::asset('friendZoneCss/images/hi.png') }}" class="img-responsive" /></a>
                                <p>send a message</p>
                            </div>

                            <div id="addFriend" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                            	<a><img src="{{ URL::asset('friendZoneCss/images/env.png') }}" class="img-responsive" /></a>
                                <p>Add as friend</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                            	<a onclick='sendGift()'><img src="{{ URL::asset('friendZoneCss/images/heart.png') }}" class="img-responsive" /></a>
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
                    <!--
                         <div class="row">
                        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 title">newest update：</div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 value">《xxxxxxxxxxx》更新至第xx章</div>
                        </div>
                    -->    
                        <div class="row content-button">
                        <div class="button-area">    
                            <a href="{{ URL('friendZone/conversation/showConversation') }}" target="_blank">Start a Conversation</a> 
                            </div>
                        </div>        
                </div>

                
                
                
                <div id='personalPage' class="col-lg-7 col-md-7 col-sm-7 col-xs-7 content">
                		
                    	<div class="row dp">
                        	<a href=""><img src="{{ url('/friendZoneCss/images/dp.png') }}" class="img-responsive" ></a>
                            <div class="dp-name">
                                <!--
                            	<p>Calvin（作家）</p>
                            	<p>NewbBay账号</p>
                                -->
                            </div>
                        </div>
                        <div class="row tabs">
                        	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                            	<p id='giftURL'><a>Calvin收到的礼物</a></p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 tabs-active">
                            	<p id='commentURL'><a>Calvin的评</a></p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            	<p id='worksURL'><a>Calvin的作品</a></p>
                            </div>
                        </div>
                       	
                        <div class="user-comment">
                        </div> 

                    
                        <div id='row-literary'  class="row literary">
                        </div>                    
                    
                  
                        <div id="giftWall" class="row icon-container">
                        </div>
                    
                    
                    
                    
                        <div class="row">
                            <div class="row pagination">
                                <div>
                                    <p>< 1 2 3 4 5 ... 11 12></p>
                                </div>
                            </div>
                        </div> 
                </div>                
                

                
                <div id = 'sendGift' class="col-lg-7 col-md-7 col-sm-7 col-xs-7 content">                   </div>
@stop

@section('script')
<script>

var store_click_name="";
var store_click_id =0;


    
function giftPage(){
    $(".user-comment").hide();
    $("#row-literary").hide();
    $("#giftWall").show();
}
function worksPage(){
    $(".user-comment").hide();
    $("#giftWall").hide();
    $("#row-literary").show();
}
function commentPage(){
    $(".user-comment").show();
    $("#giftWall").hide();
    $("#row-literary").hide();
}
function closeGift(){
    $('#sendGift').hide();
    $('#showPersonPage').show();
}
    
//public begin javascript  
function instanceClickCheck(){
    
}    

        


//public end javascript

function personalpage(){
    $('#sendGift').hide();
    $('#giftURL').html(  '<a onclick="giftPage()">'+ store_click_name + '\'s gift</a>' );
    $('#commentURL').html( '<a onclick="commentPage()">'+ store_click_name + '\'s comments</a>' );
    $('#worksURL').html( '<a onclick="worksPage()">'+ store_click_name + '\'s works</a>' );   
    $('#showPersonPage').hide();
    $('#personalPage').show();    
	$.ajax({
		url: "/demo/public/friendZone/personalPage",
        beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');
            if (token) {
                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        },
        data: {
			'msg':'hello'
        },
        type:'post',
        success:function(output){
            //alert(output);
            CWG = JSON.parse(output);
            //$('#debug').text(output);
            var comment="";
            var work ="";
            var gift="";
            
            for(i=0;i<Object.size(CWG.comments);i++){
                comment += '<div><p>'+(CWG.comments)[i].created_at+' commented work';
                comment += ' \"'+(CWG.comments)[i].title+'\" at content '+(CWG.comments)[i].content+': '+(CWG.comments)[i].comment+'</p></div>';
            }
            $(".user-comment").html(comment);
            $(".user-comment").show();
            workSize = Object.size(CWG.works);
            
            for(i=0, j=0; i<workSize/2; i++,j++){
                
                work += '<div class="row">';
                work += '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">';
                work += '<img src=\"'+ (CWG.works)[j].image +'\" class="img-responsive"/>';
                work += '<div class="dp-name">';
                work += '<p>'+(CWG.works)[j].title+'</p>';
                work += '<p> updated at'+(CWG.works)[j].updated_at+'</p>';
                work += '<p>'+ (CWG.works)[j].num_read +' people are reading with '+ (CWG.works)[j].num_comment +' comments</p>';
                work += '</div></div>';
                j++;
                //alert('worksize is: '+workSize);
                if( (workSize/2-i < 1) && (workSize/2 % 1) !=0 ){
                    work += '</div>';
                }
                else{
                    work += '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">';
                    work += '<img src=\"'+ (CWG.works)[j].image +'\" class="img-responsive"/>';
                    work += '<p>'+(CWG.works)[j].title+'</p>';
                    work += '<p> updated at '+(CWG.works)[j].updated_at+'</p>';
                    work += '<p>'+ (CWG.works)[j].num_read +' people are reading with '+ (CWG.works)[j].num_comment +' comments</p>';
                    work += '</div></div>';
                }
                work += '</div>';
            }
            $('#row-literary').html(work);
            $("#row-literary").hide();
            giftSize = Object.size(CWG.gift);
            j =0;
            for( i=0; i<giftSize/4;i++ ){
                gift += '<div class="row icons">';
                for(; j<giftSize ;j++ ){
                    gift += '<div class="col-lg-3 col-md-3 col-sm-3 ">';
                    gift += '<a href ="#"><img src=\"'+(CWG.gift)[j].image;
                    gift += '\" class=\"img-responsive\" /><a/>';
                    gift += '<p>'+(CWG.gift)[j].name+'</p>';
                    gift += '<p>'+(CWG.gift)[j].content+'</p>';
                    gift += '</div>';
                }
                gift +='</div>';
            }
            $("#giftWall").html(gift);
            $("#giftWall").hide();
        },
        error:function(){
                alert("persoanl: error in ajax");
        }
    });       
}    

function addFriend(friendId, userId){
    msg = prompt("what do you want your friend to see when adding as a friend:");
    //alert('friend: '+friendId+' user: '+userId +' sent: '+msg );
	$.ajax({
		url: "/demo/public/friendZone/addFriend",
        beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');
            if (token) {
                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        },
        data: {
			'msg':msg
        },
        type:'post',
        success:function(output){
            alert(output);
            //$('#debug').text(output);
        },
        error:function(){
                alert("addFriend: error in ajax");
        }
    });
}
//var store_nick_name="";
function saveEdit(){
	//alert( 'store click id:'+ store_click_id);
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
			//alert('store_click_id: '+ store_click_id);
			//$("a:contains(\'"+ store_click_name +"\')").text(output);
			$( '.'+store_click_id ).text(output);
            $( '.'+store_click_id ).attr('onclick','clickUser('+Number(store_click_id)+',"'+output+'")');
			$('#editName').html('<a>'+output +'</a> <button onclick ="editName()">edit</button>');
			store_click_name = output;
        },
        error:function(){
                alert("saveEdit: error in ajax");
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
    $('#addFriend').attr('onclick','addFriend('+Number(output.id)+','+{{ session('userId') }}+')' );
}
function ajaxFunc(id){
	//alert('id is'+ id);
    $.ajax({
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
                alert("ajaxFunc: error in ajax");
        }
    }); 	
}
function sendGift(){
	$.ajax({
		url: "/demo/public/friendZone/sendGift",
        beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');
            if (token) {
                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        },
        data: {
			
        },
        type:'post',
        success:function(output){
            $('#showPersonPage').hide();
            //$('#debug').text(output);
            url = "{{url('/friendZoneCss/images') }}";
            giftHTML="";
            gifts = JSON.parse(output);
            //alert(gifts[0].image);
            giftHTML += '<div class="row dp">';
            giftHTML += '<a><img src ="'+url+'/dp.png'+'" class="img-responsive"/></a>';
            giftHTML += '</div>';
            giftHTML += '<div class="row icon-container">';
            giftHTML += '<div class="close1" onclick="closeGift()" ><a><img src="'+url+'/close.png'+'" /></a></div>';
            giftHTML += '<p class="heading"> choose a gift </p>';
            size = Object.size(gifts);
            j =0;
            for(i=0;i<size/4;i++){
                giftHTML += '<div class="row icons">';
                for(;j<size;j++){
                    giftHTML += '<div class="col-lg-3 col-md-3 col-sm-3 ">';
                    giftHTML += '<a onclick="sendGiftRequest('+gifts[j].id+')" ><img src="'+gifts[i].image+'" class="img-responsive" /></a>';
                    giftHTML += '<p>'+gifts[j].name+'</p>';
                    giftHTML += '<p>'+gifts[j].content+'</p>';
                    giftHTML += '<p>'+gifts[j].price+'</p>';
                    giftHTML += '</div>';
                }
                giftHTML += '</div>';
            }
            giftHTML += '</div>';
            //$('#debug').text(giftHTML);
            $('#sendGift').html(giftHTML);
            $('#sendGift').show();
            
        },
        error:function(){
                alert("sendGift: error in ajax");
        }
    });     
    //$('#sendGift').show();
    //$('#showPersonPage').hide();
}
function clickUser(id,myFriendName){
	ajaxFunc(id);
    $('#personalPage').hide();
    //$('#showPersonPage').hide();
	//if(store_click_name === myFriendName ){
		//store_click_name = store_nick_name;
	//}
	//else{
		store_click_id = id.toString();
		store_click_name = myFriendName;
	//}
}
    //_startConversation(1,2);
    checkRequest();
    $('.chat-box').hide();
    $('#sendGift').hide();
	$('#showPersonPage').hide();
    $('#personalPage').hide();
	//callyou(1,"1");
    var storeType=[];
    var cycle = document.getElementById("cycle");
    var html ="";
    var friends = <?php echo json_encode($friends) ?>;
    //$('#debug').text(JSON.stringify(friends) );
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
				html += '<p><a class="'+friends[i].myFriendId+'" a onclick=\'clickUser('+friends[i].myFriendId+','+'"'+friends[i].myFriendName+'"'+')\' >'+ friends[i].myFriendName +'</a>';
                if(TimeDiff != ""){    
                    html+= ' comments '+TimeDiff+' ago:</p>';
				    html += '<p>'+friends[i].commentsContent+'</p>';
                }
			}
       }
       else{
            storeMyFriendType.push(friends[i].myFriendType);
			if( friends[i].myFriendType =='defaultFriends' ){
				html += '<li class="menu1"><a href=""><span class="arrow-active"> </span>' + friends[i].myFriendType +' circle</a></li>';
				html += '<p><a class="'+friends[i].myFriendId+'" onclick=\'clickUser('+friends[i].myFriendId+','+'"'+friends[i].myFriendName+'"'+')\' >'+ friends[i].myFriendName +'</a></p>';	
			}
			else{
				//alert(TimeDiff);
				html += '<li class="menu1"><a href=""><span class="arrow-active"> </span>' + friends[i].myFriendType +' circule</a></li>';
				html += '<p><a class="'+friends[i].myFriendId+'" onclick=\'clickUser('+friends[i].myFriendId+','+'"'+friends[i].myFriendName+'"'+')\' >'+ friends[i].myFriendName +'</a>';
                if(TimeDiff != ""){ 
                    html += ' comments '+TimeDiff+' ago:</p>';
				    html += '<p>'+friends[i].commentsContent+'</p>';
                }
			}
       }
    }
    
    html += '</div></div>';
    cycle.innerHTML= html;
$(document).ready(function(){    
    setInterval(
        function () {
            //alert("checkrequest");
            checkRequest();
        }, 
        10000
    )
});  
    
    
</script>

@stop
<!--	                            <a id="start_a_conversation" href="{{ action('friendZone\requestController@startConversation',[ session('userId'),3 ]) }}" target="_blank">Start a Conversation</a>  
-->