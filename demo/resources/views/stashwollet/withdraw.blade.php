 @extends('book')

@section('content')
<body class="main-page balance withdraw">

<div class="container">
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 side-menu">
        	<ul>
            	<li class="banas-balance"><a href="{{ URL::asset('index.php/balance') }}">Banas Balance</a></li>
                <li class="deposit-banas "><a href="{{ URL::asset('index.php/deposite') }}">Deposit banas</a></li>
                <li class="withdraw-banas side-menu-active"><a href="{{ URL::asset('index.php/withdraw') }}">Withdraw Banas</a></li>
                
            </ul>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 right-content">
        	
            
            
           <div class="current-balance">
           	<p><b>Current available balance: 200 Banas</b></p><br />

            <p>Withdraw Amount: <input type="text" border="1" /> Banas ($1 = 100Banas)</p>
            <p>(Minimum $ 50) &nbsp;&nbsp;&nbsp; $</p><br />

              <form>
              	<p>▼ <a href="#">Withdraw with Paypal</a></p><br />

               	<label>First Name:</label>
                <input type="text" /><br />

                <label>Last Name:</label>
                <input type="text" /><br />

                <label>Paypal email:</label>
                <input type="text" /><br />

                <input type="submit" value="Submit" />
              </form>
              <hr />
              
              <p> ► <a href="withdraw-with-check.html">Withdraw with Check</a></p>
               <br />
			  <form>

                    <label>First Name:</label>
                    <input type="text" /><br />
    
                    <label>Last Name:</label>
                    <input type="text" /><br />
    
                    <label>Address line 1:</label>
                    <input type="text" /><br />
                    
                    <label>Address line 2:</label>
                    <input type="text" /><br />
                    
                    <label>City:</label>
                    <input type="text" /><br />
                    
                    <label>State/Province:</label>
                    <input type="text" /><br />
                    
                    <label>Postal/Zip code:</label>
                    <input type="text" /><br />
                    
                    <label>Country:</label>
                    <input type="text" /><br />
    
                    <input type="submit" value="Submit" />
              </form>
              <hr />
			
            </div>
            
                    	
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
</body>
  @stop

