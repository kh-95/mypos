<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HandleController extends Controller
{
    public function gethandlerrequest(){
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
        $termResourceKey="9143050072879143";
        
        /* Merchant (ME) checks, if error is NOT present,then go for decryption using required parameters */
        /* NOTE - MERCHANT MUST LOG THE RESPONSE RECEIVED IN LOGS AS PER BEST PRACTICE */
        if($ResErrorText==null && $ResErrorNo==null && $ResTranData !=null)
        {
        
        //Decryption logice starts
        $decrytedData=$this->decrypt($ResTranData,$termResourceKey);
        
        /* IMPORTANT NOTE - MERCHANT SHOULD UPDATE TRANACTION PAYMENT STATUS IN HIS DATABASE AT THIS POINT 
        AND THEN REDIRECT CUSTOMER TO THE RESULT PAGE. */
        header("Location: https://www.yourwebsite.com/PHP/result.php?".$decrytedData);
        exit();
        }
        else{
        header("Location: https://www.yourwesbite.com/PHP/result.php?Error=".$ResErrorNo."&ErrorText=".$ResErrorText."&trackid=".$ResTrackID."&amt=".$ResAmount."&paymentid=".$ResPaymentId."&tranid=".$ResTranId."&result=".$ResResult);
        exit();
        }
      
        




    }
}
