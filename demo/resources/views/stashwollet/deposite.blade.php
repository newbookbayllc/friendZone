  @extends('book')

@section('content')
<body class="main-page deposit">

<div class="container">
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 side-menu">
        	<ul>
            	
                 <li class="banas-balance"><a href="{{ URL::asset('index.php/balance') }}">Banas Balance</a></li>
                <li class="deposit-banas  side-menu-active"><a href="{{ URL::asset('index.php/deposite') }}">Deposit banas</a></li>
                <li class="withdraw-banas"><a href="{{ URL::asset('index.php/withdraw') }}">Withdraw Banas</a></li>
                
            </ul>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 right-content">
        	
            
            <table>
            	<tr>
                	<td>
                    	Deposit type:
                    </td>
                    <td>
                    	Banas  &nbsp; &nbsp; &nbsp;($1 = 100 Banas)
                    </td>
                   
                    	
                   
                </tr>
                <tr>
                	<td>
                    	Deposit Amount:
                    </td>
                    <td>
                    	<input type="radio" /> $10 = 1000 Banas <br />
                        <input type="radio" /> $30 = 3000 Banas <br />
                        <input type="radio" /> $50 = 5000 Banas <br />
                        <input type="radio" /> $100 = 10000 Banas <br />
                    </td>
                </tr>
               
            </table>
            <table style="width:60%;">
            	<tr>
                	<td>
                	 <div class="confirm-deposit-btn btn-block btn">Confirm deposit by PayPal</div>
                     </td>
                 </tr>
            </table>
            
            
                    	
        </div>
    </div>
</div>
<script>
	$(document).ready(function(e) {
        $('.tab-left').on('click','a',function(){
			$('.tab-left').find('div').removeClass('active-line');
			$(this).parent('div').addClass('active-line');
		});
		$('.side-menu').on('click','a',function(){
			$('.side-menu').find('li').removeClass('side-menu-active');
			$(this).parent('li').addClass('side-menu-active');
		});
	
    });
</script>
</body>
  @stop

