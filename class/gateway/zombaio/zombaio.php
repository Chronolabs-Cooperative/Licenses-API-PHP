<?php
/**
 * Invoice Transaction Gateway with Modular Plugin set
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Chronolabs Co-Op http://www.chronolabs.coop/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         xpayment
 * @since           1.30.0
 * @author          Simon Roberts <simon@chronolabs.coop>
 * @translation     Erol Konik <aphex@aphexthemes.com>
 * @translation     Mariane <mariane_antoun@hotmail.com>
 * @translation     Voltan <voltan@xoops.ir>
 * @translation     Ezsky <ezskyyoung@gmail.com>
 * @translation     Richardo Costa <lusopoemas@gmail.com>
 * @translation     Kris_fr <kris@frxoops.org>
 */

class ZombaioGatewaysPlugin {
	
	var $_invoice = '';
	var $_gateway = '';
	
	function __construct($invoice, $gateway) {

		if (is_a($gateway,'XpaymentGateways')) {
    		$this->_gateway = $gateway;
    	}

    	if (is_a($invoice,'XpaymentInvoice')) {
    		$this->_invoice = $invoice;
    	}
		
    	if (file_exists($GLOBALS['xoops']->path('/modules/xpayment/language/'.$GLOBALS['xoopsConfig']['language'].'/zombaio.php')))
    		include_once($GLOBALS['xoops']->path('/modules/xpayment/language/'.$GLOBALS['xoopsConfig']['language'].'/zombaio.php'));
    	else 
    		include_once($GLOBALS['xoops']->path('/modules/xpayment/language/english/zombaio.php'));
    	    	
	}
	
	function getTransactionId($request) {
		if (!isset($request))
			$request=$_POST;
		return $request['TRANSACTION_ID'];
	}
	
	function getEmail($request) {
		if (!isset($request))
			$request=$_REQUEST;
		return $request['EMAIL'];		
	}
	
	function getInvoice($request) {
		if (!isset($request))
			$request=$_REQUEST;
		return intval($_REQUEST['identifier']);
	}
	
	function getCustom($request) {
		if (!isset($request))
			$request=$_REQUEST;	
		return $request['CardHash'];
	}
	
	function getStatus($request) {
		if (!isset($request))
			$request=$_REQUEST;	
		return $request['ReasonCode'];		
	}
	
	function getDate($request) {
		return time();		
	}
	
	function getTax($request) {
		return 0;		
	}

	function getType($request) {
		if (!isset($request))
			$request=$_REQUEST;	
		return $request['Action'];		
	}
	
	function getGross($request) {
		if (!isset($request))
			$request=$_REQUEST;	
		return $request['Amount'];
	}
	
	function getFee($request) {
		if (!isset($request))
			$request=$_REQUEST;			
		return $this->getGross($request)*($this->_gateway->_options['fee']/100);		
	}

	function getDeposit($request) {
		if (!isset($request))
			$request=$_REQUEST;			
		return $this->getGross($request)*($this->_gateway->_options['deposit']/100);		
	}
	
	function getCurrency($request) {
		if (!isset($request))
			$request=$_REQUEST;	
		return $request['Amount_Currency'];		
	}
	
	function getSettle($request) {
		return 0;		
	}
	
	function getExchangeRate($request) {
		return 0;
	}
	
	function getFirstname($request) {
		if (!isset($request))
			$request=$_REQUEST;	
		return $request['FIRSTNAME'];		
	}
	
	function getLastname($request) {
		if (!isset($request))
			$request=$_REQUEST;	
		return $request['LASTNAME'];		
	}
	
	function getStreet($request) {
		if (!isset($request))
			$request=$_REQUEST;	
		return $request['ADDRESS'];		
	}
	
	function getCity($request) {
		if (!isset($request))
			$request=$_REQUEST;			
		return $request['CITY'];
	}
	
	function getState($request) {
		if (!isset($request))
			$request=$_REQUEST;			
		return $request['REGION'];
	}

	function getPostcode($request) {
		if (!isset($request))
			$request=$_REQUEST;			
		return $request['POSTAL'];
	}
	
	function getCountry($request) {
		if (!isset($request))
			$request=$_REQUEST;			
		return $request['COUNTRY'];
	}
	
	function getAddressStatus($request) {
		return '';
	}
	
	function getPayerEmail($request) {
		if (!isset($request))
			$request=$_REQUEST;			
		return $request['EMAIL'];
	}
	
	function getPayerStatus($request) {
		return '';
	}
	
	function getGateway($request) {
		if (!is_object($this->_invoice))
			return false;
		return $this->_invoice->getVar('gateway');
	}
	
	function getPlugin($request) {
		if (!is_object($this->_invoice))
			return false;
		return $this->_invoice->getVar('plugin');
	}
	
	function getKey() {
		return substr($_REQUEST['Hash'],0 ,32);
	}
	
	function getTransactionArray($request) {
		if (!isset($request))
			$request=$_REQUEST;			
		
		return array(	'iid'					=>			$this->_invoice->getVar('iid'),
						'transactionid'			=>			$this->getTransactionId($request),
						'email'					=>			$this->getEmail($request),
						'invoice'				=>			$this->getInvoice($request),
						'custom'				=>			$this->getCustom($request),
						'status'				=>			$this->getStatus($request),
						'date'		 			=>			$this->getDate($request),
						'gross'					=>			$this->getGross($request),
						'fee'					=>			$this->getFee($request),
						'deposit'				=>			$this->getDeposit($request),
						'settle'				=>			$this->getSettle($request),
						'exchangerate'			=>			$this->getExchangeRate($request),
						'firstname'				=>			$this->getFirstname($request),
						'lastname'				=>			$this->getLastname($request),
						'street'				=>			$this->getStreet($request),
						'city'					=>			$this->getCity($request),
						'state'					=>			$this->getState($request),
						'postcode'				=>			$this->getPostcode($request),
						'country'				=>			$this->getCountry($request),
						'address_status'		=>			$this->getAddressStatus($request),
						'payer_email'			=>			$this->getPayerEmail($request),
						'payer_status'			=>			$this->getPayerStatus($request),
						'gateway'				=>			$this->_invoice->getVar('gateway'),
						'plugin'				=>			$this->_invoice->getVar('plugin') 	
					);
	}
	
	
	// INBOUND FUNCTIONS
	function goInvoiceObj() {
		$invoice_handler =& xoops_getmodulehandler('invoice', 'xpayment');
		return $invoice_handler->get(ZombaioGatewaysPlugin::getInvoice());
	}
	
	function goActionCancel($request) {

		$this->_invoice->setVar('mode', 'CANCELED');
        $invoice_handler =& xoops_getmodulehandler('invoice', 'xpayment');
        $invoice_handler->insert($this->_invoice, TRUE);
	    foreach ($this->getTransactionArray() as $key => $value) {
		       $value = urlencode(stripslashes($value));
		       $req .= "&$key=$value";
		}
        header( "HTTP/1.1 301 Moved Permanently" ); 
       	header('Location: '.$this->_invoice->getVar('cancel').(strpos($this->_invoice->getVar('cancel'), '?')>0?'&':'?').substr($req, 1, strlen($req)-1));
        exit;
	}
	
	function goActionReturn($request) {
		
		$invoice_transactions_handler =& xoops_getmodulehandler('invoice_transactions', 'xpayment');
        $transaction = $invoice_transactions_handler->create();
        $transaction->setVars($this->getTransactionArray($request));
        if ($invoice_transactions_handler->countTransactionId($this->getTransactionId($request))==0)
	        if ($tiid=$invoice_transactions_handler->insert($transaction)) {
	   			$gross = $invoice_transactions_handler->sumOfGross($this->_invoice->getVar('iid'));
	            foreach ($this->getTransactionArray() as $key => $value) {
				        $value = urlencode(stripslashes($value));
				        $req .= "&$key=$value";
				}
	            header( "HTTP/1.1 301 Moved Permanently" ); 
	           	header('Location: '.$this->_invoice->getVar('return').(strpos($this->_invoice->getVar('return'), '?')>0?'&':'?').substr($req, 1, strlen($req)-1));
	           	exit;
	        }		
	}
	
	function goIPN($request) {
		
		$cfgSiteName	= $GLOBALS['xoopsConfig']['sitename'];
		$catalog 	= $this->_gateway->_options['catalog'];
		$ZombaioGWPass	= $this->_gateway->_options['gwpass'];
		
		//If Zombaio is used with other billing companies they might already
		//use a .htpasswd file. In that case, specify the exact location
		//of the shared .htpasswd file below. Otherwise, leave this empty.
		
		$passFile	= $this->_gateway->_options['passfile'];
		
		//-----------------------------------------------------------------
		//                DO NOT EDIT BELOW THIS LINE
		//-----------------------------------------------------------------
		
		//Kontrollerar behörighet till filen
		if (@$request["ZombaioGWPass"] != $ZombaioGWPass || $request['Hash'] != md5($this->_invoice->getVar('iid').$ZombaioGWPass.$request['Credits'].$this->_gateway->_options['siteid'])) {     
			header("HTTP/1.0 401 Unauthorized");
			echo "<h1>Zombaio Gateway 1.1</h1><h3>Authentication failed.</h3>";
			exit;  
		}
			
			
		$cfgBadChars	= '`~!@#$%^&*()+=[]{};\'\\:"|,/<>? ';
		$cfgBadCharsE	= '`~!#$%^&*()+=[]{};\'\\:"|,/<>?, ';
		$cfgBadCharsR	= '`~!@#$%^&*()+=[]{};\'\\:"|,/<>?';
		
		$path  = getcwd();
		
		$passPath	=$path."/Zombaio_Data";
		$memberPath	=$path."/".$catalog;
		
		if (empty($passFile)) {
		$passFile	=$path."/Zombaio_Data/.htpasswd";
		}
		
		$passauthFile	=$path."/Zombaio_Data/.htaccess";
		$authFile	=$path."/".$catalog."/.htaccess";
		$cfghtpasswdEXE ='C:\Program Files\Apache Group\Apache\bin\htpasswd.exe';
			
			
		$htpUser = array();
			
		//Kollar om katalogen existerar
		if (!file_exists($memberPath)) { 
			echo "PATH_DOES_NOT_EXIST|Path \"$memberPath\" does not exist!";
			exit;
		}
				
		if (@$request["Action"] == "user.addcredits") {
			if ($request['Hash'] == md5($this->_invoice->getVar('iid').$ZombaioGWPass.$request['Credits'].$this->_gateway->_options['siteid'])) {
				$invoice_transactions_handler =& xoops_getmodulehandler('invoice_transactions', 'xpayment');
		        $transaction = $invoice_transactions_handler->create();
		        $transaction->setVars($this->getTransactionArray($request));
		        if ($invoice_transactions_handler->countTransactionId($this->getTransactionId($request))==0)
			        if ($tiid=$invoice_transactions_handler->insert($transaction)) {
			   			$gross = $invoice_transactions_handler->sumOfGross($this->_invoice->getVar('iid'));

			   			$this->_invoice->setVar('transactionid', $transaction->getVar('transactionid'));
			            $invoice_handler =& xoops_getmodulehandler('invoice', 'xpayment');
			            $invoice_handler->insert($this->_invoice, TRUE);

			            $req = 'cmd=payment';
                        foreach ($this->getTransactionArray() as $key => $value) {
							$value = urlencode(stripslashes($value));
							$req .= "&$key=$value";
						}
						$header = "POST /cgi-bin/webscr HTTP/1.0\r\n";
						$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
						$header .= "Content-Length: " . strlen($req)-1 . "\r\n\r\n";
						$ipn = fsockopen ($this->_invoice->getVar('ipn'), 80, $errno, $errstr, 30);
						fputs ($ipn, $header . substr($req, 0, strlen($req)-1));
						if( $ipn ) fclose ($ipn);
			            
			           	exit;
			        }		
						
			}
			
		} elseif (@$request["Action"] == "create.htaccess") { 	
		
			// sätter full behörighet på path
			chmod($path, 0777);
			
			
			
			//Kolla om auth fil finns
			if (file_exists($authFile)) { 
			
			  echo "AUTH_FILE_EXIST|.htaccess file already exists in member dir!";
			  exit;
			  
			}
			
			//Kollar om Zombaio dir finns
			if (file_exists($passPath)) { 
			
				//Pass path finns, kolla om .htpasswd finns
				if (file_exists($passFile)) { 
			
		
				  echo "PASSWD_FILE_EXIST|.htpasswd file already exists!";
				  exit;
				  
				  }
			  }
			  
			  
			  
			  // Zombaio dir finns ej, skapa detta
			  
			  mkdir($passPath, 0777);
			  
			
			  
			  // Skapar speciell .htaccess för password dir
			 if (!($fp = @fopen($passauthFile, "w"))) {
			      echo "PASS_AUTH_FILE_ERROR|Could not open .htaccess file for writing";
			      exit;
			    }
			
			      $content  = "AuthName \"Protected Zombaio Data - No Access\"\n";      
			      $content .= "AuthType Basic\n";
			      $content .= "AuthGroupFile /dev/null\n\n";
			      $content .= "<limit GET POST PUT DELETE>\n";      
			      $content .= "deny from all\n";  
			      $content .= "</limit>\n";  
			      
			     fwrite($fp, $content);
			     fclose($fp); 
			     
			
			//Skapar .htaccess för medlems katalog
			if (!($fp = @fopen($authFile, "w"))) {
			      echo "AUTH_FILE_ERROR|Could not open .htaccess file for writing";
			      exit;
			    }
			
			      $content  = "#ATTENTION BILLING COMPANIES!!!\n";
			      $content .= "#This site is using the shared .htpasswd file specified in AuthUserFile. Please use the same file when you set up an aditional billing system!\n";
			      $content .= "AuthUserFile ".$passFile."\n";      
			      $content .= "AuthType Basic\n";
			      $content .= "AuthName \"$cfgSiteName\"\n\n";
			      $content .= "require valid-user\n";      
			      
			     fwrite($fp, $content);
			     fclose($fp);
			
			
			//Skapar .htpasswd
			if (!($fp = @fopen($passFile, "w"))) {
			      echo "PASSWD_FILE_ERROR|Could not open .htpasswd file for writing";
			      exit;
			    }
			
			      $content  = "";      
			      
			     fwrite($fp, $content);
			     fclose($fp);
	
			chmod($passFile, 0777);
			
			 echo "OK|OK";
		}
		
		else if (@$request["Action"] == "get.path") { 
		
		//return path
		echo $path;
		
		}
		else if (@$request["Action"] == "get.passfile") { 
		
		//return pass file
		echo $passFile;	
		
		}
		else if (@$request["Action"] == "user.add") { 
		 
		 
		 
		$username  = trim(@$request['username']);
		$password  = trim(@$request['password']);
		
			$this->init_passwd_file();
		 	$this->read_passwd_file();
		 	
		 	$userid = count($htpUser);
		      	$htpUser[$userid]['username'] = $username;
		      	$htpUser[$userid]['password'] = crypt_password($username, $password);
		      	$this->write_passwd_file();
		      	$this->read_passwd_file();
		      	# clean form
		      	$username = '';
		      	$realname = '';
		      	$email    = '';
		
		  
		  echo "OK|User added!";
		  exit;
		  
		} 
		
		else if (@$request["Action"] == "user.delete") { 
		
		 // delete user from password file
		$username  = trim(@$request['username']);
		
			//del_from_passwd_file($username);
		  
		 	$this->init_passwd_file();
		 	$this->read_passwd_file();
		 	 
		        if (!is_user($username)) {
		        
		          echo "USER_DOES_NOT_EXIST|User does not exist!";
		  	  exit;
		        
		        }
		        
		$userid = $this->who_is_user($username);
		 
		   if ($userid == '999999999999999') {
		     echo "USER_DOES_NOT_EXIST|User does not exist!";
		     exit;
		   }   
		   
		    $htpUser[$userid]['username'] = '';
		    $htpUser[$userid]['password'] = '';
		    $this->write_passwd_file($id);
		    $this->read_passwd_file($id);
		  
		        
		  
		  echo "OK|User deleted!";
		  exit;
		
		} else { 
		      echo "UNKNOW_ACTION|UNKNOW_ACTION";
		      exit;
		}
		exit(0);		
	}

	function is_valid_string($string) {
	  global $cfgBadChars;
	
	  if (empty($string))
	    return true;
	
	  for ($i = 0; $i < strlen($cfgBadChars); $i++) {
	    if(strpos($string, $cfgBadChars[$i]) !== false)
	      return true;
	  }
	  return false;
	}
	
	function is_valid_email($string) {
	  global $cfgBadCharsE;
	
	  if (empty($string))
	    return false;
	
	  for ($i = 0; $i < strlen($cfgBadCharsE); $i++) {
	    if(strpos($string, $cfgBadCharsE[$i]) !== false)
	      return true;
	  }
	  return false;
	}
	
	function is_valid_realname($string) {
	  global $cfgBadCharsR;
	
	  if (empty($string))
	    return false;
	
	  for ($i = 0; $i < strlen($cfgBadCharsR); $i++) {
	    if (strstr($string, $cfgBadCharsR[$i]))
	      return true;
	  }
	  return false;
	}
	
	function read_passwd_file() {
	  global $cfgHTPasswd, $htpUser, $passFile;
	
	  
	
	  $htpUser = array();
	
	  if (!($fpHt     = fopen($passFile, "r"))) {
	      echo "PASSWD_FILE_NOT_READABLE|Password file not readable!";
	      exit;
	  }
	  $htpCount = 0;
	  while (!feof($fpHt)) {
	    $fpLine = fgets($fpHt, 512);
	    $fpLine = trim($fpLine);
	    $fpData = explode(":", $fpLine);
	    $fpData[0] = trim($fpData[0]);
	    if (isset($fpData[1]))
		$fpData[1] = chop(trim($fpData[1]));
	
	    if (empty($fpLine) || $fpLine[0] == '#' || $fpLine[0] == '*'
	    ||	empty($fpData[0]) || empty($fpData[1]))
	      continue;
	
	    $htpUser[$htpCount]['username'] = $fpData[0];
	    $htpUser[$htpCount]['password'] = $fpData[1];
	    $htpCount++;
	  }
	  fclose($fpHt);
	
	  return;
	}
	
	function init_passwd_file() {
	  global $passFile;
	  
	  if (!file_exists($passFile)) {
	  echo "PASSWD_FILE_NOT_EXIST|Password file does not exist!";
	  exit;
	  }
	  if (!is_readable($passFile)) {
	  echo "PASSWD_FILE_NOT_READABLE|Password file not readable!";
	  exit;
	  }
	  if (!is_writeable($passFile)) {
	  echo "PASSWD_FILE_NOT_WRITABLE|Password file not writable!";
	  exit;
	  }
	}
	
	function write_passwd_file() {
	  global $cfgHTPasswd, $htpUser, $passFile;
	
	  
	
	  if (($fpHt = fopen($passFile, "w"))) {
	    for ($i = 0; $i < count($htpUser); $i++) {
	      if (!empty($htpUser[$i]['username']))
	        fwrite($fpHt, $htpUser[$i]['username'].":".
			      $htpUser[$i]['password']."\n");
	    }
	    fclose($fpHt);
	  }
	  else {
	      echo "PASSWD_FILE_NOT_READABLE|Password file not readable!";
	      exit;
	  }
	  return;
	}
	
	function random() {
	  srand ((double) microtime() * 1000000);
	  return rand();
	}

	function crypt_password($username, $password) {
	  global $cfghtpasswdEXE;
	
	  if (empty($password))
	    return "** EMPTY PASSWORD **";
	
	  if (strstr(strtoupper(PHP_OS), "WINNT") ||
	      strstr(strtoupper(PHP_OS), "WINDOWS")) {
	    $temp = exec("\"".$cfghtpasswdEXE."\" -nmb $username $password", $result, $retval);
	    if ($retval == 0) {
	        $data = explode(":", $result[0], 2);
	        return $data[1];
	    }
	    else
	        return "** ERROR **";
	  }
	  else {
	    $salt = $this->random();
	    $salt = substr($salt, 0, 2);
	    return crypt($password, $salt);
	  }
	}
	
	function is_user($username) {
	  global $htpUser;
	
	  if (empty($username))
	    return false;
	
	  for ($i = 0; $i < count($htpUser); $i++) {
	    if ($htpUser[$i]['username'] == $username)
	      return true;
	  }
	  return false;
	}
	
	function who_is_user($username) {
	  global $htpUser;
	
	  if (empty($username))
	    return '999999999999999';
	
	  for ($i = 0; $i < count($htpUser); $i++) {
	    if ($htpUser[$i]['username'] == $username)
	      return $i;
	  }
	  return '999999999999999';
	}

	// HTML GENERATION FUNCTIONS FOR PAYMENT FORM	
	function getPaymentHTML() {
		
		$grand = $this->_invoice->getVar('grand');
		
		$feepercentile = 0;
		if ($GLOBALS['xoopsModuleConfig']['feecomphensate']) {
			$invoice_transaction_handler = xoops_getmodulehandler('invoice_transactions', 'xpayment');
			$feepercentile = (($invoice_transaction_handler->getFeePercentile('zombaio', $grand)+$this->_gateway->_options['fee'])/2)/100;
			$html .= '<div>'._XPY_MF_FEE.number_format(($grand*$feepercentile),2).' '.$this->_invoice->getVar('currency').'</div>';
			$grand = $grand + ($grand*$feepercentile);
		}
		
		$depositpercentile =0; 
		if ($GLOBALS['xoopsModuleConfig']['depositcomphensate']) {
			$invoice_transaction_handler = xoops_getmodulehandler('invoice_transactions', 'xpayment');
			$depositpercentile = (($invoice_transaction_handler->getDepositPercentile('zombaio', $grand)+$this->_gateway->_options['deposit'])/2)/100;
			$html .= '<div>'._XPY_MF_DEPOSIT.number_format(($grand*$depositpercentile),2).' '.$this->_invoice->getVar('currency').'</div>';
			$grand = $grand + ($grand*$depositpercentile);
		}		
		
		$html .= '<div>'._XPY_MF_TOTAL.number_format($grand,2).' '.$this->_invoice->getVar('currency').'</div><br/>';
		
		if ($this->_gateway->getVar('testmode')==true)
			$html .= '<form action="'.$this->_gateway->_options['url'].'?'.$this->_gateway->_options['siteid'].'.'.$this->_gateway->_options['pricingid'].'.'.$this->_gateway->_options['lang'].'"  name="gateway" id="gateway" method="post">';
		else 
			$html .= '<form action="'.$this->_gateway->_options['url'].'?'.$this->_gateway->_options['siteid'].'.'.$this->_gateway->_options['pricingid'].'.'.$this->_gateway->_options['lang'].'"  name="gateway" id="gateway" method="post">';

		$html .= '<input type="hidden" name="identifier" value="'.$this->_invoice->getVar('iid').'">';
		$html .= '<input type="hidden" name="approve_url" value="'.XOOPS_URL.'/modules/xpayment/return.php">';
		$html .= '<input type="hidden" name="decline_url" value="'.XOOPS_URL.'/modules/xpayment/cancel.php">';
		$html .= '<input type="hidden" name="hide_credits" value="True">';
		$html .= '<input type="hidden" name="DynAmount_Value" value="'.number_format($grand,2).'">';
		$html .= '<input type="hidden" name="DynAmount_Hash" value="'.md5($this->_gateway->_options['gwpass'].number_format($grand,2)).'">';
		$html .= '<input type="submit" value="'.$this->_gateway->_options['paywith'].'">';
		$html .= '</form>';
		
		return $html;
	}
}