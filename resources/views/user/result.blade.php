<html>
	<head>
		<title>Knet Merchant Demo</title>
		<meta http-equiv="pragma" content="no-cache">
</head>

<body >
<table width="100%" cellspacing="1" cellpadding="1">
   <tr>
    <td align="center" >
	<table width="70%" border="0" > 
		<tr><td align=center class="heading">
		</td>
		</tr>
	</table>
	</td>
  </tr>
  <tr>
    <td align="center" class="msg">
	
<?php

$result = isset($_GET['result']) ? $_GET['result'] : '';
$trackid = isset($_GET['trackid']) ? $_GET['trackid'] : '';
$PaymentID = isset($_GET['paymentid']) ? $_GET['paymentid'] : '';
$ref = isset($_GET['ref']) ? $_GET['ref'] : '';
$tranid = isset($_GET['tranid']) ? $_GET['tranid'] : '';
$amount = isset($_GET['amt']) ? $_GET['amt'] : '';
$trx_error = isset($_GET['Error']) ? $_GET['Error'] : '';
$trx_errortext = isset($_GET['ErrorText']) ? $_GET['ErrorText'] : '';
$postdate = isset($_GET['postdate']) ? $_GET['postdate'] : '';
$auth = isset($_GET['auth']) ? $_GET['auth'] : '';
$udf1 = isset($_GET['udf1']) ? $_GET['udf1'] : '';
$udf2 = isset($_GET['udf2']) ? $_GET['udf2'] : '';
$udf3 = isset($_GET['udf3']) ? $_GET['udf3'] : '';
$udf4 = isset($_GET['udf4']) ? $_GET['udf4'] : '';
$udf5 = isset($_GET['udf5']) ? $_GET['udf5'] : '';

?>
     	</td>
  </tr>
  <tr>
    <td align="center">
<table width=70% border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" col="2">
  <tr>
    <td colspan="2" align="center" class="msg"><strong class="text">Transaction Details</strong></td>
  </tr>
  <?php if($trx_error != null || $trx_errortext != null) { ?>
  <tr>
    <td width=26% class="tdfixed">Error :</td>
    <td width=74% class="tdwhite"><?php echo "$trx_error - $trx_errortext"; ?></td>
  </tr>
  <?php } ?>
  <tr>
    <td width=26% class="tdfixed">Payment ID :</td>
    <td width=74% class="tdwhite"><?php echo $PaymentID; ?></td>
  </tr>
  <tr>
    <td class="tdfixed">Post Date :</td>
    <td class="tdwhite"><?php echo $postdate;?></td>
  </tr>
  <tr>
    <td class="tdfixed">Result Code :</td>
    <td class="tdwhite"><?php echo $result;?></td>
  </tr>
  <tr>
    <td class="tdfixed">Transaction ID :</td>
    <td class="tdwhite"><?php echo $tranid;?></td>
  </tr>
  <tr>
    <td class="tdfixed">Auth :</td>
    <td class="tdwhite"><?php echo $auth;?></td>
  </tr>
  <tr>
    <td class="tdfixed">Track ID :</td>
    <td class="tdwhite"><?php echo $trackid;?></td>
  </tr>
  <tr>
    <td class="tdfixed">Ref No :</td>
    <td class="tdwhite"><?php echo $ref;?></td>
  </tr>
  <tr>
    <td class="tdfixed">Amount :</td>
    <td class="tdwhite"><?php echo $amount;?></td>
  </tr>
  <tr>
    <td class="tdfixed">UDF1 :</td>
    <td class="tdwhite"><?php echo $udf1;?> </td>
  </tr>
  <tr>
    <td class="tdfixed">UDF2 :</td>
    <td class="tdwhite"><?php echo $udf2;?></td>
  </tr>
  <tr>
    <td class="tdfixed">UDF3 :</td>
    <td class="tdwhite"><?php echo $udf3;?></td>
  </tr>
  <tr>
    <td class="tdfixed">UDF4 :</td>
    <td class="tdwhite"><?php echo $udf4;?></td>
  </tr>
  <tr>
    <td class="tdfixed">UDF5 :</td>
    <td class="tdwhite"><?php echo $udf5;?></td>
  </tr>
  <tr>
    <td class="tdfixed">&nbsp; </td>
    <td class="tdwhite">

	</td>
  </tr>
</table></td>
  </tr>
</table>

<center>
</center>
		</body>
</html>
