<?php

/*
******************************************************************************************
Disclaimer:- Important Note in Sample Pages
- This is a sample demonstration page only meant for demonstration, this page 
should not be used in production.
- Transaction data should only be accepted once from a browser at the point 
of input, and then kept in a way that does not allow others to modify it 
(example server session, database etc..)
- Any information displayed to a customer such as amount, should 
be passed only as display information and the actual transaction data should 
be retrieved from a secure source at the end point of processing the transaction.
- Any information passed through the customer's browser can potentially be 
modified/edited/changed/deleted by the customer, or even by third parties to 
fraudulently alter the transaction data/information. Therefore, all transaction 
information should not be passed through the browser to Payment Gateway in a way
that could potentially be modified (example hidden form fields). 
******************************************************************************************
*/


/* Below is the list of parameters sent from PG to merchant. 
========================================================= */
if(isset($_REQUEST['ErrorText']) || isset($_REQUEST['Error'])) 
{
$ResErrorText= $_REQUEST['ErrorText']; 	  	//Error Text/message
$ResErrorNo = $_REQUEST['Error'];           //Error Number
$ResTranData = null;
} else {
$ResErrorText= null; 	  	
$ResErrorNo = null;
$ResTranData= $_REQUEST['trandata'];
}	
$ResPaymentId = $_REQUEST['paymentid'];		//Payment Id
$ResTrackID = $_REQUEST['trackid'];       	//Merchant Track ID
$ResResult =  $_REQUEST['result'];          //Transaction Result
$ResPosdate = $_REQUEST['postdate'];        //Postdate
$ResTranId = $_REQUEST['tranid'];           //Transaction ID
$ResAuth = $_REQUEST['auth'];               //Auth Code		
$ResRef = $_REQUEST['ref'];                 //Reference Number also called Seq Number
$ResAmount = $_REQUEST['amt'];              //Transaction Amount
$Resudf1 = $_REQUEST['udf1'];               //UDF1
$Resudf2 = $_REQUEST['udf2'];               //UDF2
$Resudf3 = $_REQUEST['udf3'];               //UDF3
$Resudf4 = $_REQUEST['udf4'];               //UDF4
$Resudf5 = $_REQUEST['udf5'];               //UDF5

/* Below Terminal resource Key is used to decrypt the response sent from Payment Gateway.
Terminal Resource Key is generated while creating terminal and this the Key that is used for decrypting 
the response from PG. Please contact PGSupport@knet.com.kw to extract this key. */
$termResourceKey="";

/* Merchant (ME) checks, if error is NOT present,then go for decryption using required parameters */
/* NOTE - MERCHANT MUST LOG THE RESPONSE RECEIVED IN LOGS AS PER BEST PRACTICE */
if($ResErrorText==null && $ResErrorNo==null && $ResTranData !=null)
{

//Decryption logice starts
$decrytedData=decrypt($ResTranData,$termResourceKey);

/* IMPORTANT NOTE - MERCHANT SHOULD UPDATE TRANACTION PAYMENT STATUS IN HIS DATABASE AT THIS POINT 
AND THEN REDIRECT CUSTOMER TO THE RESULT PAGE. */
header("Location: https://www.yourwebsite.com/PHP/result.php?".$decrytedData);
exit();
}
else{
header("Location: https://www.yourwesbite.com/PHP/result.php?Error=".$ResErrorNo."&ErrorText=".$ResErrorText."&trackid=".$ResTrackID."&amt=".$ResAmount."&paymentid=".$ResPaymentId."&tranid=".$ResTranId."&result=".$ResResult);
exit();
}

//Decryption Method for AES Algorithm Starts

function decrypt($code,$key) { 
$code =  hex2ByteArray(trim($code));
$code=byteArray2String($code);
$iv = $key; 
$code = base64_encode($code);
$decrypted = openssl_decrypt($code, 'AES-128-CBC', $key, OPENSSL_ZERO_PADDING, $iv);
return pkcs5_unpad($decrypted);
}

function hex2ByteArray($hexString) {
$string = hex2bin($hexString);
return unpack('C*', $string);
}


function byteArray2String($byteArray) {
$chars = array_map("chr", $byteArray);
return join($chars);
}


function pkcs5_unpad($text) {
$pad = ord($text{strlen($text)-1});
if ($pad > strlen($text)) {
return false;	
}
if (strspn($text, chr($pad), strlen($text) - $pad) != $pad) {
return false;
}
return substr($text, 0, -1 * $pad);
}

//Decryption Method for AES Algorithm Ends
?>

