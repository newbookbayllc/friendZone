


function alertYou(){
    alert('hello world');
}

function startConversation(sign,friendId){
    if(sign == 'start'){
    window.open('/demo/public/friendZone/startConversation/'+sign+','+friendId,'_blank');
    
    }
    else if(sign == 'ignore'){
        $.get('/demo/public/friendZone/startConversation/'+sign+','+friendId);
    }
    $('.chat-box').hide();
}

function ifAgreeFriend(sign, id){
    $.ajax({
		url: "/demo/public/friendZone/processRequest",
        beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');
            if (token) {
                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        },
        data: {
			'sign':sign,
            'id':id
        },
        type:'post',
        success:function(output){
            alert('your request was submitted');
            $('.chat-box').hide();
            //$('#debug').text(output);
        },
        error:function(){
            alert("ifAgreeFriend: error in ajax");
        }
    });  
   
}

function checkRequest(){
    //alert("requestchecking");
	$.ajax({
		url: "/demo/public/friendZone/checkRequest",
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
            if(output !=""){
                checkOutcome=JSON.parse(output);
                
                $('#chat-box-label').attr('data-collapsed','you have new message');
                $('#chat-box-label').css('color', 'red');
                $('#chat-box-label').css('color', 'red');
                
                text ="";
                
                if( checkOutcome['requestType'] =="currentMsg"&&(localStorage.getItem(checkOutcome['friendId']) === null|| localStorage.getItem(checkOutcome['friendId'])=="false")){
                    // &&localStorage.setItem( checkOutcome['friendId'] )!="true" 
                    text+=checkOutcome['friendName']+" send you a message.<br>";
                    text+='<br><br><br>';
                    text+='<button onclick=\'startConversation(\"start\",'+checkOutcome['friendId']+')\'>start conversation</button><button onclick=\'startConversation(\"ignore\"'+','+checkOutcome['friendId']+')\'>ignore this</button>';
                    //window.open('Delivery_form.php?cnno=".$cnno."&copies=".$nocopy."', '_blank');
                     //window.open('/demo/public/friendZone/startConversation/'+checkRequest['friendId'],'_blank');
                    //window.open('http://www.baidu.com', '_blank');
                }
                else if(checkOutcome['requestType'] =="addFriend"){
                    text+=checkOutcome['name']+" wants to add you as friend.<br>";
                    text+= checkOutcome['msg'] +'<br><br><br><br>';
                    //alert(checkRequest['friendId']);//'+checkRequest['friendId']+'
                    text+='<button onclick=\'ifAgreeFriend(\"agree\",'+checkOutcome['friendId']+')\' >agree</button> <button onclick=\'ifAgreeFriend(\"disagree\"'+','+checkOutcome['friendId']+')\'>disagree</button> <button onclick=\'ifAgreeFriend(\"ignore\"'+','+checkOutcome['friendId']+')\'>ignore</button>';
                }
                $('#chat-html').html( text );
                $('.chat-box').show();
               
            }
            
        },
        error:function(){
                //alert("public, checkrequest: error in ajax");
        }
    });    
}

Object.size = function(obj) {
    var size = 0, key;
    for (key in obj) {
        if (obj.hasOwnProperty(key)) size++;
    }
    return size;
};
function sendGiftRequest(giftId){
 
    $.ajax({
            url: "/demo/public/friendZone/sendGiftRequest",
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');
                if (token) {
                      return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            data: {
                'giftId':giftId
            },
            type:'post',
            success:function(output){
                //alert(output);
            },
            error:function(){
                    alert("error in ajax");
            }
        });
 
}

/*
refreshInterval = 500;
refreshTimeout = setTimeout( getNotificationCounts, refreshInterval );
function getNotifications() {
        $.ajax({
            url: "/demo/public/friendZone/checkConversation",
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');
                if (token) {
                      return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            data: {
                'msg':''
            },
            type:'post',
            success:function(output){
                alert(output);
            },
            error:function(){
                    alert("error in ajax");
            }
        });
}   
*/