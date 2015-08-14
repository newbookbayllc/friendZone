<!DOCTYPE html>
<html>
    
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src=" {{ URL::asset('public/js/jquery.js') }} "></script>
        <script type="text/javascript" src="{{ URL::asset('public/js/bootstrap.min.js') }} "></script>
        <link href=" {{ URL::asset('public/css/font-awesome.min.css') }}"
        rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('public/css/search.css') }}">
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
		 @yield('content')
	</body>

</html>
