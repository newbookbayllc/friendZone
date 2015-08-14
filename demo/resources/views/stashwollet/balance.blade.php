@extends('book')

@section('content')
<body class="main-page balance">

<div class="container">
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 side-menu">
        	<ul>
            	
                <li class="banas-balance side-menu-active"><a href="{{ URL::asset('index.php/balance') }}">Banas Balance</a></li>
                <li class="deposit-banas "><a href="{{ URL::asset('index.php/deposite') }}">Deposit banas</a></li>
                <li class="withdraw-banas"><a href="{{ URL::asset('index.php/withdraw') }}">Withdraw Banas</a></li>
                
            </ul>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 right-content">
        	
          <div class="row balance-content">
          	<div class="col-lg-6 col-md-6 col-sm-6 left">
            	<p><b>Current available balance: 200 Banas</b></p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 right">
            	<label for="month">Month</label>
                <select id="month">
                	<option selected="selected">
                    	ALL
                    </option>
                </select>
                
                <label for="years" >Year
                </label>
                <select id="year">
                	<option selected="selected">
                    	ALL
                    </option>
                </select>
            </div>
          		<table width="100%" border="1">
  <tr>
    <th scope="col">Date</th>
    <th scope="col">Description</th>
    <th scope="col">Amount</th>
    <th scope="col">Current balance</th>
  </tr>
  <tr>
    <td>5/22/2015</td>
    <td>Deposit</td>
    <td>100 Banas</td>
    <td>200 Banas</td>
  </tr>
  <tr>
    <td>5/14/2015</td>
    <td>Gift: ring</td>
    <td>-20 Banas</td>
    <td>100 Banas</td>
  </tr>
  <tr>
    <td>5/22/2015</td>
    <td>Deposit</td>
    <td>100 Banas</td>
    <td>200 Banas</td>
  </tr>
  <tr>
    <td>5/14/2015</td>
    <td>Gift: ring</td>
    <td>-20 Banas</td>
    <td>100 Banas</td>
  </tr> <tr>
    <td>5/22/2015</td>
    <td>Deposit</td>
    <td>100 Banas</td>
    <td>200 Banas</td>
  </tr>
  <tr>
    <td>5/14/2015</td>
    <td>Gift: ring</td>
    <td>-20 Banas</td>
    <td>100 Banas</td>
  </tr> <tr>
    <td>5/22/2015</td>
    <td>Deposit</td>
    <td>100 Banas</td>
    <td>200 Banas</td>
  </tr>
  <tr>
    <td>5/14/2015</td>
    <td>Gift: ring</td>
    <td>-20 Banas</td>
    <td>100 Banas</td>
  </tr> <tr>
    <td>5/22/2015</td>
    <td>Deposit</td>
    <td>100 Banas</td>
    <td>200 Banas</td>
  </tr>
  <tr>
    <td>5/14/2015</td>
    <td>Gift: ring</td>
    <td>-20 Banas</td>
    <td>100 Banas</td>
  </tr>
</table>

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
  @stop

