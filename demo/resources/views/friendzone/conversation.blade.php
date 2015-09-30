<head>
<link rel="stylesheet" href="{{ URL::asset('friendZoneCss/css/bootstrap.min.css') }}" />
<script src="{{ URL::asset('friendZoneCss/js/jquery-1.11.2.min.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('friendZoneCss/css/conversationWindow.css') }}" /> 
<script src="{{ URL::asset('friendZoneCss/js/friendzonePublic.js') }}"></script>     
<meta name="csrf_token" content="{{ csrf_token() }}" />    
</head>
<body>
 <!--
    <p id ="test"></p>
    <h1>form begins</h1>
    {{count($conversation)}}
    @for($i=0;$i<count($conversation);$i++ )
        <li> {{$i}}and {{ $conversation[$i]->content }}</li>                                       
    @endfor
-->
<div class="container">
    <div class="row chat-window col-xs-12 col-md-12" id="chat_window_1" style="margin-left:10px;">
        <div class="col-xs-12 col-md-12">
        	<div class="panel panel-default">
                <div class="panel-heading top-bar">
                    <div class="col-md-8 col-xs-8">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat Window with {{$friendName[0]->username}}</h3>
                        <script>var Fname = "{{ $friendName[0]->username }}"</script>
                    </div>
                    <div class="col-md-4 col-xs-4" style="text-align: right;">
                        <a href="#"><span id="minim_chat_window" class="glyphicon glyphicon-minus icon_minim"></span></a>
                        <a href="#"><span class="glyphicon glyphicon-remove icon_close" data-id="chat_window_1"></span></a>
                    </div>
                </div>
                <div class="panel-body msg_container_base">
                    
                    
                    
@for($i=0;$i<count($conversation);$i++ )
    @if( $conversation[$i] ->from_id==session('userId') )
                    <div class="row msg_container base_sent"> 
                        <div class="col-md-10 col-xs-10">
                            <div class="messages msg_sent">
                                <p>{{ $conversation[$i]->content}}</p>
                                <time datetime="2009-11-13T20:00"> {{$userName[0]->username}} • {{ $conversation[$i]->created_at }}</time>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                        </div>
                    </div>
    @else
                    <div class="row msg_container base_receive">
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                        </div>
                        <div class="col-md-10 col-xs-10">
                            <div class="messages msg_receive">
                                <p>{{ $conversation[$i]->content }}</p>
                                <time id='datetime' datetime="2009-11-13T20:00">{{$friendName[0]->username}} • {{ $conversation[$i]->created_at }}</time>
                            </div>
                        </div>
                    </div>
    @endif                                   
    
@endfor             
<div id = 'ajax_talk'>
</div>    
              </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm chat_input" placeholder="Write your message here..." />
                        <span class="input-group-btn">
                        <button type="button" onclick="send()" class="btn btn-primary btn-sm" id="btn-chat">Send</button>
                        </span>
                    </div>
                </div>
    		</div>
        </div>
    </div>
    
    <div class="btn-group dropup">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            <span class="glyphicon glyphicon-cog"></span>
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#" id="new_chat"><span class="glyphicon glyphicon-plus"></span> Novo</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-list"></span> Ver outras</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-remove"></span> Fechar Tudo</a></li>
            <li class="divider"></li>
            <li><a href="#"><span class="glyphicon glyphicon-eye-close"></span> Invisivel</a></li>
        </ul>
    </div>
</div>
<script>
function jump(h){
    document.getElementById(h).scrollIntoView();
}
var userId = {{ $userId }};
var friendId = {{ $friendId }}; 
localStorage.setItem(friendId, "true" );
$(document).ready(function(){
    $("#btn-input").bind('keypress',function(e){
        code = e.keyCode || e.which;
        if( code ===13 ){
            send();
        }
    });
    $('#ajax_talk').append('<a id="anchor"></a>');
    jump('anchor');
    $('#anchor').removeAttr('id');       
    setInterval(
        function () {
            receive()
        }, 
        3000
    );
    window.onbeforeunload = function (e) {
      var e = e || window.event;
      //IE & Firefox
        localStorage.setItem(friendId, "false");
      // For Safari    
      return;
    };    
});    
//alert('friendName is '+friendName);
function receive() {
        $.ajax({
            url: "/demo/public/friendZone/receiveMsg",
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');
                if (token) {
                      return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            data: {
                'userId': userId,
                'friendId':friendId
            },
            type:'post',
            success:function(output){
                if(output=="")
                    return;
                //alert('receive userId is: '+userId+ ' receive friendId is: '+friendId);
                msg = JSON.parse(output);
                size = Object.size(msg);
                if(size>0){
                    for(i=0;i<size;i++){                      
                        //alert('msg is:');
                        //alert(msg[i].msg);
                        html="";
                        html+='<div class="row msg_container base_receive">';
                        html+='<div class="col-md-2 col-xs-2 avatar">';
                        html+='</div>';
                        html+='<div class="col-xs-10 col-md-10">';
                        html+='<div class="messages msg_receive">';
                        html+='<a id="anchor"> Your friend </a>';
                        html+='<p>'+ msg[i].msg +'</p>';
                        //html+='<time datetime="2009-11-13T20:00">'+$('#datetime').val()+' • 51 min</time>';  
                        html+='<time datetime="2009-11-13T20:00">'+Fname+' • '+msg[i].time+'</time>';  
                        html+='</div></div></div>';
                        $('#ajax_talk').append(html);
                        jump('anchor');
                        $('#anchor').removeAttr('id');                        
                    }
                }
                
                //$('#ajax_talk').append();
            },
            error:function(){
                    //alert("getNotification: error in ajax");
            }
        });
}     


  

function send(){
    //alert('send userId is: '+userId+ ' send friendId is: '+friendId);
    if( $('#btn-input').val()!="" ){
        var html="";
        html+='<div class="row msg_container base_sent">';
        html+='<div class="col-xs-10 col-md-10">';
        html+='<div class="messages msg_sent">';
        html+='<a id="anchor">  </a>';
        html+='<p>'+ $('#btn-input').val() +'</p>';
        html+='<time datetime="2009-11-13T20:00"> {{$userName[0]->username}}'+'</time>';
        html+='</div></div>';
        html+='<div class="col-md-2 col-xs-2 avatar"></div>' 
        html+='</div>';
        $('#ajax_talk').append(html);
        jump('anchor');
        $('#anchor').removeAttr('id');
        //alert('userId is:'+userId+' friendId is:'+friendId+' content is:'+$('#btn-input').val());
        $.ajax({
            url: "/demo/public/friendZone/conversation/sendMsg",
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');
                if (token) {
                      return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            data: {
                'msg':$('#btn-input').val(),
                'userId': userId,
                'friendId':friendId
            },
            type:'post',
            success:function(output){
                //alert(output);
            },
            error:function(){
                    //alert("send: error in ajax");
            }
        });        
        $('#btn-input').val("");
    }
}    
   
$(document).on('click', '.panel-heading span.icon_minim', function (e) {
    var $this = $(this);
    if (!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.removeClass('glyphicon-minus').addClass('glyphicon-plus');
    } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
$(document).on('focus', '.panel-footer input.chat_input', function (e) {
    var $this = $(this);
    if ($('#minim_chat_window').hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideDown();
        $('#minim_chat_window').removeClass('panel-collapsed');
        $('#minim_chat_window').removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
$(document).on('click', '#new_chat', function (e) {
    var size = $( ".chat-window:last-child" ).css("margin-left");
     size_total = parseInt(size) + 400;
    alert(size_total);
    var clone = $( "#chat_window_1" ).clone().appendTo( ".container" );
    clone.css("margin-left", size_total);
});
$(document).on('click', '.icon_close', function (e) {
    $( "#chat_window_1" ).remove();
});    
</script>    
</body>