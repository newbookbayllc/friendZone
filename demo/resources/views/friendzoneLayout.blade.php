<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>friendzone</title>
<link rel="stylesheet" href="{{ URL::asset('friendZoneCss/css/bootstrap.min.css') }}" />
<script src="{{ URL::asset('friendZoneCss/js/jquery-1.11.2.min.js') }}"></script>
<script src="{{ URL::asset('friendZoneCss/js/friendzonePublic.js') }}"></script>    
<link rel="stylesheet" href="{{ URL::asset('friendZoneCss/css/style.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('friendZoneCss/css/conversation.css') }}" />
<meta name="csrf_token" content="{{ csrf_token() }}" />
</head>
<body>
    <div id='debug'></div>
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
            @yield('header')
            @yield('content')
        </div>
	</div>
    

    <div class="chat-box">
        <input type="checkbox" /> 
        <label id='chat-box-label' data-expanded="Close Chatbox" data-collapsed="Open Chatbox"></label>
        
         <div id='chat-html' class="chat-box-content">

        </div>  
    </div> 

    @yield('script')
    <script>
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
                        alert("layout: error in ajax");
                }
            });
    }
    */
    </script>    
    
    
    
</body>
</html>

