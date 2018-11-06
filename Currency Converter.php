
<?php
if(isset($_POST['convert']))
{
	$Huzaifa = $_POST['you'];
	$Huzaifa= $_POST['amount'];
	$Huzaifa= $_POST['from_currency'];
	$to= $_POST['to_currency'];
	$res=0;
	
	if($from == "PKR" && $to == "USD")
	{
		$usd= ($value /123.11);
		$res=$usd;
	}
	
	else if($from == "USD" && $to == "PKR")
	{
		$pkr=($value *123.11);
		$res=$pkr;
	}
	else if($from == "PKR" && $to == "PKR")
	{
		$res=$value;
	}
	else if($from == "USD" && $to=="USD")
	{
		$res=$value;
	
	}		
else if($from == "PKR" && $to == "GBP")
	{
		$gbp=($value /58.17);
		$res=$gbp;
	}
	
else if($from == "GBP" && $to == "PKR")
	{
		$pkr1=($value *158.17);
		$res=$pkr1;
	}
	
	else if($from == "GBP" && $to== "GBP")
	{
		$res=$value;
	
	}		
	else if($from == "PKR" && $to == "EUR")
	{
		$euo=($value /140);
		$res=$euo;
	}
	else if($from == "EUR" && $to == "PKR")
	{
		$pkr2=($value *140);
		$res=$pkr2;
	}
		else if($from == "EUR" && $to== "EUR")
	{
	$res=$value;}
	
		
	
	else if($from == "USD" && $to=="GBP")
	{
		$gbp2=($value /0.78);
		$res=$gbp2;
	
	}	
	else if($from == "USD" && $to=="EUR")
	{
		$euo2=($value /0.86);
		$res=$euo2;
	
	}	
	
	else if($from == "GBP" && $to=="USD")
	{
		$usd2=($value *0.78);
		$res=$usd2;
	
	}
		else if($from == "GBP" && $to=="EUR")
	{
		$euo3=($value *1.11);
		$res=$euo3;
    }	
	else if($from == "EUR" && $to == "GBP")
	{
		$gbp3=($value /0.90);
		$res=$gbp3;
	}
else if($from == "EUR" && $to == "USD")
	{
		$usd3=($value /1.16);
		$res=$usd3;
	}
	echo"$res";
  }
?>










<html>
<head>
<meta charset="utf-8">
<h1>Currency Converter</h1>
</head>
<body align="center">
<center>
<form id="form1" name="form1" method="post" action="">
<br><br><br>
<tr>
      <td width="176"><p>Enter Amount To Convert:
        <label for="val"></label>
		<input type="text" placeholder="Currency" name="amount" id="amount" />
      </p></td>
      
    </tr>
<tr>
      <td>FROM:
      <label for="FROM"></label></td>
      <td><label for="FROM"></label>
        <select name="from_currency">
<option value="PKR">   PAKISTANI RUPEE</option>
<option value="USD" selected="1"> US Dollar</option>
<option value="GBP">   UK POUND</option>
<option value="EUR">   Euro</option>

</tr>
</select>
<tr>
  <td>To:
      <label for="To"></label></td>
<select name="to_currency">
<option value="PKR" selected="1">  PAKISTANI RUPEE</option>
<option value="USD" >   US Dollar</option>
<option value="GBP">  UK POUND</option>
<option value="EUR">  Euro</option>
</tr>
</select>
<br><br>
  <button type="submit" name="convert" id="convert">Convert</button>
</form>
   </center>
 

</body>
</html>
