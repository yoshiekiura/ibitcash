﻿<script language="javascript" src="calc_js.js"></script>
<br>
<script>
function chang(s){
    $('.active').removeClass('active');
    $(s).addClass('active');
	$('#attent').slideDown(500);
      $('.calcu').slideUp(500);
	  $('#calculator').slideDown(500);
	switch(s)
	{
	  case "#cinf":
	  calc=1;
	  var cal1 = setTimeout("document.getElementById('test').innerHTML='Enter cryptocurrency sum'",500);
	  break;
	  case "#cbtc":
	  calc=2;
	  var cal2 = setTimeout("document.getElementById('test').innerHTML='Enter coincloud sum'",500);
	  break;
	 }
	 var caltimer = setTimeout("calculate(document.getElementById('sum').value)",500);
}
</script>
<?php
if($login) {
$sql_st=mysql_query("SELECT * FROM tb_srv_stats");
$price_btc=mysql_result($sql_st,0,'btc');
$price_dgc=mysql_result($sql_st,0,'dgc');
$price_ltc=mysql_result($sql_st,0,'ltc');
$price_dsh=mysql_result($sql_st,0,'dsh');
$price_mnr=mysql_result($sql_st,0,'mnr');
$price_eth=mysql_result($sql_st,0,'eth');
$price_cld=mysql_result($sql_st,0,'cloud');	  
$prm=mysql_result($sql_st,0,'param');	
?><script>
val_Prices(<?echo $price_btc;?>,<?echo $price_dgc;?>,<?echo $price_ltc;?>,<?echo $price_dsh;?>,<?echo $price_mnr;?>,<?echo $price_eth;?>,<?echo $price_cld;?>,<?echo $prm;?>);
</script>
<div style="margin-left:10%;margin-right:10%;"><br>
					  <div class="left_div">
					  <div>
							<ul class="left-menu">
		<li><a href="/mining/">Mining</a></li>
		<li><a href="/enter/">Deposit funds</a></li>
<li><a href="/exchange/">Buy Cloud power</a></li>
<li><a href="/withdrawal/">Withdraw</a></li>
<li><a href="/history/">Transaction history</a></li>
<li class="active_l"><a href="/calc/">Income calculator</a></li>
<li><a href="/ref/">Affiliate program</a></li>
<li><a href="/profile/">Profile</a></li>
							</ul>
							</div>
					 </div>
					 <div class="right_div">

					 						 	<h1>Income calculator</h1>
																	 							<div class="pay_menu" style='position:relative;right:14%'>		
							
								<ul>
								<li id='cinf' class='active'>
										 <a onclick="chang('#cinf');" ><img src="../image/bitcoin.png"width="40"></a>
									</li>
									<li id='cbtc'>
										 <a onclick="chang('#cbtc');" ><img src="../image/cld.png"width="40"></a>
									</li>
								</ul>
							</div>
							<br>
					 <div id="calculator" class='calcu'>
					 <form style="padding: 15px;">
Choose cryptocurrency<br>
<select  class="prof_bt"  name="menu" id='chsbar' size="1" onchange="ch_val(this.value)">
<option value="1" selected="selected">Bitcoin</option>
<option value="2">Dogecoin</option>
<option value="3">Litecoin</option>
<option value="4">Ripple</option>
<option value="5">Bitcoin Cash</option>
<option value="6">Ethereum</option>
</select> 
<span id='test'>Enter cryptocurrency sum</span>
<input class="cal_opt" style='padding:0;margin:0;'  placeholder="Provide a summ" type=text id='sum' value='' onkeyup="calculate(this.value)">
</form>

<table class="table_supp">
<tr class="supp_tr">
<td style="width:5%;">
<b><font size="3">Time</font>
</td>
<td>
<b><font size="3">Income <span id='val_name'>BTC</span></font><br>
</td>
<td>
<b><font size="3">Income $</font>
</td>
<td>
<b><font size="3">Income %</font>
</td>
</tr>
<tr class="supp_tr">
<td>
Day
</td>
<td>
<span id='cript1'></span>
</td>
<td>
<span id='doll1'></span>
</td>
<td>
<span id='proc1'></span>
</td>
</tr>
<tr class="supp_tr">
<td>
Week
</td>
<td>
<span id='cript2'></span>
</td>
<td>
<span id='doll2'></span>
</td>
<td>
<span id='proc2'></span>
</td>
</tr>
<tr class="supp_tr">
<td>
Month
</td>
<td>
<span id='cript3'></span>
</td>
<td>
<span id='doll3'></span>
</td>
<td>
<span id='proc3'></span>
</td>
</tr>
<tr class="supp_tr">
<td>
3 months
</td>
<td>
<span id='cript4'></span>
</td>
<td>
<span id='doll4'></span>
</td>
<td>
<span id='proc4'></span>
</td>
</tr>
<tr class="supp_tr">
<td>
6 months
</td>
<td>
<span id='cript5'></span>
</td>
<td>
<span id='doll5'></span>
</td>
<td>
<span id='proc5'></span>
</td>
</tr>
<tr class="supp_tr">
<td>
Year
</td>
<td>
<span id='cript6'></span>
</td>
<td>
<span id='doll6'></span>
</td>
<td>
<span id='proc6'></span>
</td>
</tr>
<tr class="supp_tr">
<td>
3 years
</td>
<td>
<span id='cript7'></span>
</td>
<td>
<span id='doll7'></span>
</td>
<td>
<span id='proc7'></span>
</td>
</tr>
</table><br>
					 </div>
					 </div>
					 </div>
<script>calculate('1');</script>
<?
}else
{
?><script>document.location.href = 'https://ibit.cash/login';</script><?
}
?>