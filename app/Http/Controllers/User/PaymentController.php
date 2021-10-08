<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    
public function sendperformrequest ($total_price){

   
    $TranAmount = $total_price;


/* Tranportal ID is sensitive terminal information, merchant MUST ensure that Tranportal ID is never 
passed to customer browser by any means. Merchant MUST ensure that Tranportal ID is stored in a secure 
environment. Tranportal ID for test and production will be different, please contact PGSupport@knet.com.kw to
extract these details. */
$TranportalId="124401";
$ReqTranportalId="id=".$TranportalId;

/* Tranportal password is sensitive terminal information, merchant MUST ensure that Tranportal password
is never passed to customer browser by any means. Merchant MUST ensure that Tranportal password is stored in a secure 
environment. Tranportal password for test and production will be different, please contact PGSupport@knet.com.kw to
extract these details. */
$TranportalPassword="124401pg";
$ReqTranportalPassword="password=".$TranportalPassword;

/* Transaction Amount that will be sent to payment gateway by merchant for processing
NOTE - Merchant MUST ensure amount is sent from merchant back-end system like database
and not from customer browser. */
$ReqAmount="amt=".$TranAmount;

/* To pass the merchant track id, in below sample merchant track id is hard-coded. Merchant
MUST pass his transaction ID (track ID) in this parameter. Track Id passed here should be 
from merchant backend system like database and not from customer browser
Merchant must ensure that each transaction has a unique Track ID. */
$TranTrackid=mt_rand();
$ReqTrackId="trackid=".$TranTrackid;

/* Currency code of the transaction. this has to be set always to 414 (KD) */
$ReqCurrency="currencycode=414";

/* Transaction language, this has to be set always to USA or AR */
$ReqLangid="langid=USA";


/* Action Code of the transaction, this refers to type of transaction. 
Action Code 1 stands of Purchase transaction  */
$ReqAction="action=1";


/* Response URL where Payment gateway will send response once transaction processing is completed 
Merchant MUST esure that below points in Response URL
1- Response URL must start with https://
2- the Response URL SHOULD NOT have any additional paramteres or query strings  */
$ResponseUrl="https://www.yourwebsite.com/PHP/GetHandlerResponse.php";
$ReqResponseUrl="responseURL=".$ResponseUrl;


/* Error URL where Payment gateway will send response in case any issues while processing the transaction 
Merchant MUST esure that below points in ErrorURL 
1- error url must start with https://
2- the error url SHOULD NOT have any additional paramteres or query strings */ 
$ErrorUrl="https://www.yourwebsite.com/PHP/result2.php";
$ReqErrorUrl="errorURL=".$ErrorUrl;


/* User Defined Fields as per Merchant requirement. Merchant MUST ensure merchant is not passing junk values OR CRLF in any of the UDF. 
In below sample UDF values are not utilized */
$ReqUdf1="udf1=test1";
$ReqUdf2="udf2=test2";
$ReqUdf3="udf3=test3";
$ReqUdf4="udf4=test4";
$ReqUdf5="udf5=test5";

/* Merchant should now do the below validations : 
a) Transaction Amount should not be blank and should be only numeric
b) Language should always be USA or AR
c) Action Code should always be 1
d) UDF values should not have junk values and CRLF (line terminating parameters)Like--> [ !#$%^&*()+[]\\\';,{}|\":<>?~` ]
e) Merchant must save the amount, track id, udf 1-5 in his database */


/* Now merchant sets all the inputs in one string for encrypt and then passing to the Payment Gateway URL */
$param=$ReqTranportalId."&".$ReqTranportalPassword."&".$ReqAction."&".$ReqLangid."&".$ReqCurrency."&".$ReqAmount."&".$ReqResponseUrl."&".$ReqErrorUrl."&".$ReqTrackId."&".$ReqUdf1."&".$ReqUdf2."&".$ReqUdf3."&".$ReqUdf4."&".$ReqUdf5;

//==============================Encryption LOGIC CODE START===============================================================================
/* Below are the fields / parameters which will be used for Encryption using (AES (128 bit)) Encryption 
   Algorithm. */
	
/* Terminal Resource Key is generated while creating terminal, And this the Key that is used for encrypting 
  the request/response from Merchant To PG and vice Versa
  Please contact PGSupport@knet.com.kw to extract this key */
	 
$termResourceKey="9143050072879143";
$param=$this->encryptAES($param,$termResourceKey)."&tranportalId=".$TranportalId."&responseURL=".$ResponseUrl."&errorURL=".$ErrorUrl;

//==============================Encryption LOGIC CODE End=================================================================================

/* Log the complete request in the log file for future reference
Now creating a connection and sending request
Note - In PHP header function is used for redirecting request
*********UNCOMMENT THE BELOW REDIRECTION CODE TO CONNECT TO EITHER TEST OR PRODUCTION********* */
header("Location: https://kpaytest.com.kw/kpg/PaymentHTTP.htm?param=paymentInit"."&trandata=".$param); /* send request and redirect to TEST */
//header("Location: https://kpay.com.kw/kpg/PaymentHTTP.htm?param=paymentInit"."&trandata=".$param); /* send request and redirect to PRODUCTION */
exit();







}



}
