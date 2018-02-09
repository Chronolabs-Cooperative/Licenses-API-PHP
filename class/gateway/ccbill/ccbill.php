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

class CcbillGatewaysPlugin {
	
	var $_invoice = '';
	var $_gateway = '';
	var $_currcode = array('AFN'=>'971','EUR'=>'978','ALL'=>'008','DZD'=>'012','USD'=>'840','EUR'=>'978','AOA'=>'973','XCD'=>'951','XCD'=>'951','ARS'=>'032','AMD'=>'051','AWG'=>'533','AUD'=>'036','EUR'=>'978','AZN'=>'944','BSD'=>'044','BHD'=>'048','BDT'=>'050','BBD'=>'052','BYR'=>'974','EUR'=>'978','BZD'=>'084','XOF'=>'952','BMD'=>'060','BTN'=>'064','INR'=>'356','BOB'=>'068','BOV'=>'984','USD'=>'840','BAM'=>'977','BWP'=>'072','NOK'=>'578','BRL'=>'986','USD'=>'840','BND'=>'096','BGN'=>'975','XOF'=>'952','BIF'=>'108','KHR'=>'116','XAF'=>'950','CAD'=>'124','CVE'=>'132','KYD'=>'136','XAF'=>'950','XAF'=>'950','CLF'=>'990','CLP'=>'152','CNY'=>'156','AUD'=>'036','AUD'=>'036','COP'=>'170','COU'=>'970','KMF'=>'174','XAF'=>'950','CDF'=>'976','NZD'=>'554','CRC'=>'188','XOF'=>'952','HRK'=>'191','CUC'=>'931','CUP'=>'192','ANG'=>'532','EUR'=>'978','CZK'=>'203','DKK'=>'208','DJF'=>'262','XCD'=>'951','DOP'=>'214','USD'=>'840','EGP'=>'818','SVC'=>'222','USD'=>'840','XAF'=>'950','ERN'=>'232','EUR'=>'978','ETB'=>'230','FKP'=>'238','DKK'=>'208','FJD'=>'242','EUR'=>'978','EUR'=>'978','EUR'=>'978','XPF'=>'953','EUR'=>'978','XAF'=>'950','GMD'=>'270','GEL'=>'981','EUR'=>'978','GHS'=>'936','GIP'=>'292','EUR'=>'978','DKK'=>'208','XCD'=>'951','EUR'=>'978','USD'=>'840','GTQ'=>'320','GBP'=>'826','GNF'=>'324','XOF'=>'952','GYD'=>'328','HTG'=>'332','USD'=>'840','AUD'=>'036','EUR'=>'978','HNL'=>'340','HKD'=>'344','HUF'=>'348','ISK'=>'352','INR'=>'356','IDR'=>'360','IRR'=>'364','IQD'=>'368','EUR'=>'978','GBP'=>'826','ILS'=>'376','EUR'=>'978','JMD'=>'388','JPY'=>'392','GBP'=>'826','JOD'=>'400','KZT'=>'398','KES'=>'404','AUD'=>'036','KPW'=>'408','KRW'=>'410','KWD'=>'414','KGS'=>'417','LAK'=>'418','LVL'=>'428','LBP'=>'422','LSL'=>'426','ZAR'=>'710','LRD'=>'430','LYD'=>'434','CHF'=>'756','LTL'=>'440','EUR'=>'978','MOP'=>'446','MKD'=>'807','MGA'=>'969','MWK'=>'454','MYR'=>'458','MVR'=>'462','XOF'=>'952','EUR'=>'978','USD'=>'840','EUR'=>'978','MRO'=>'478','MUR'=>'480','EUR'=>'978','MXN'=>'484','MXV'=>'979','USD'=>'840','MDL'=>'498','EUR'=>'978','MNT'=>'496','EUR'=>'978','XCD'=>'951','MAD'=>'504','MZN'=>'943','MMK'=>'104','NAD'=>'516','ZAR'=>'710','AUD'=>'036','NPR'=>'524','EUR'=>'978','XPF'=>'953','NZD'=>'554','NIO'=>'558','XOF'=>'952','NGN'=>'566','NZD'=>'554','AUD'=>'036','USD'=>'840','NOK'=>'578','OMR'=>'512','PKR'=>'586','USD'=>'840','PAB'=>'590','USD'=>'840','PGK'=>'598','PYG'=>'600','PEN'=>'604','PHP'=>'608','NZD'=>'554','PLN'=>'985','EUR'=>'978','USD'=>'840','QAR'=>'634','EUR'=>'978','RON'=>'946','RUB'=>'643','RWF'=>'646','SHP'=>'654','XCD'=>'951','XCD'=>'951','EUR'=>'978','EUR'=>'978','XCD'=>'951','EUR'=>'978','WST'=>'882','EUR'=>'978','STD'=>'678','SAR'=>'682','XOF'=>'952','RSD'=>'941','SCR'=>'690','SLL'=>'694','SGD'=>'702','ANG'=>'532','XSU'=>'994','EUR'=>'978','EUR'=>'978','SBD'=>'090','SOS'=>'706','ZAR'=>'710','EUR'=>'978','LKR'=>'144','SDG'=>'938','SRD'=>'968','NOK'=>'578','SZL'=>'748','SEK'=>'752','CHE'=>'947','CHF'=>'756','CHW'=>'948','SYP'=>'760','TWD'=>'901','TJS'=>'972','TZS'=>'834','THB'=>'764','USD'=>'840','XOF'=>'952','NZD'=>'554','TOP'=>'776','TTD'=>'780','TND'=>'788','TRY'=>'949','TMT'=>'934','USD'=>'840','AUD'=>'036','UGX'=>'800','UAH'=>'980','AED'=>'784','GBP'=>'826','USD'=>'840','USN'=>'997','USS'=>'998','USD'=>'840','UYI'=>'940','UYU'=>'858','UZS'=>'860','VUV'=>'548','EUR'=>'978','VEF'=>'937','VND'=>'704','USD'=>'840','USD'=>'840','XPF'=>'953','MAD'=>'504','YER'=>'886','ZMK'=>'894','ZWL'=>'932','XAU'=>'959','XBA'=>'955','XBB'=>'956','XBC'=>'957','XBD'=>'958','XDR'=>'960','XPD'=>'964','XPT'=>'962','XAG'=>'961','XFU'=>'Nil','XTS'=>'963','XXX'=>'999','EUR'=>'978');
	
	function __construct($invoice, $gateway) {

		if (is_a($gateway,'XpaymentGateways')) {
    		$this->_gateway = $gateway;
    	}

    	if (is_a($invoice,'XpaymentInvoice')) {
    		$this->_invoice = $invoice;
    	}
    	
    	
    	if (file_exists($GLOBALS['xoops']->path('/modules/xpayment/language/'.$GLOBALS['xoopsConfig']['language'].'/ccbill.php')))
    		include_once($GLOBALS['xoops']->path('/modules/xpayment/language/'.$GLOBALS['xoopsConfig']['language'].'/ccbill.php'));
    	else 
    		include_once($GLOBALS['xoops']->path('/modules/xpayment/language/english/ccbill.php'));
    	    	
	}
	
	function returnISOCurr($numeric) {
		foreach($this->_currcode as $iso => $code)
			if ($numeric==$code)	
				return $iso;
	}

	function returnNUMCurr($isocode) {
		foreach($this->_currcode as $iso => $code)
			if ($isocode==$iso)	
				return $code;
	}
	
	function getTransactionId($request) {
		if (!isset($request))
			$request=$_POST;
		return $request['responseDigest'];
	}
	
	function getEmail($request) {
		if (!isset($request))
			$request=$_REQUEST;
		return $request['email'];		
	}
	
	function getInvoice($request) {
		if (!isset($request))
			$request=$_REQUEST;
		return intval($_REQUEST['iid']);
	}
	
	function getCustom($request) {
		if (!isset($request))
			$request=$_REQUEST;	
		return $request['custom'];
	}
	
	function getStatus($request) {
		if (!isset($request))
			$request=$_REQUEST;	
		return $request['reasonForDecline'];		
	}
	
	function getDate($request) {
		if (!isset($request))
			$request=$_REQUEST;	
		return strtotime($request['start_date']);		
	}
	
	function getTax($request) {
		return 0;		
	}

	function getType($request) {
		if (!isset($request))
			$request=$_REQUEST;	
		return $request['typeId'];		
	}
	
	function getGross($request) {
		if (!isset($request))
			$request=$_REQUEST;	
		return $request['gross'];
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
		return $this->returnISOCurr($request['currencyCode']);		
	}
	
	function getSettle($request) {
		return $request['accountingAmount'];		
	}
	
	function getExchangeRate($request) {
		return 0;
	}
	
	function getFirstname($request) {
		if (!isset($request))
			$request=$_REQUEST;	
		return $request['customer_fname'];		
	}
	
	function getLastname($request) {
		if (!isset($request))
			$request=$_REQUEST;	
		return $request['customer_lname'];		
	}
	
	function getStreet($request) {
		if (!isset($request))
			$request=$_REQUEST;	
		return $request['address1'];		
	}
	
	function getCity($request) {
		if (!isset($request))
			$request=$_REQUEST;			
		return $request['city'];
	}
	
	function getState($request) {
		if (!isset($request))
			$request=$_REQUEST;			
		return $request['state'];
	}

	function getPostcode($request) {
		if (!isset($request))
			$request=$_REQUEST;			
		return $request['zipcode'];
	}
	
	function getCountry($request) {
		if (!isset($request))
			$request=$_REQUEST;			
		return $request['country'];
	}
	
	function getAddressStatus($request) {
		return '';
	}
	
	function getPayerEmail($request) {
		return $request['email'];
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
		return substr($_REQUEST['custom'],0 ,32);
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
	
	function checkCustom($request) {
		if (!isset($request))
			$request=$_REQUEST;			
		return (sha1($this->_gateway->getVar('salt').$this->_invoice->getVar('key').$this->_invoice->getVar('iid').$this->_invoice->getVar('grand').XOOPS_LICENSE_KEY)==$request['custom']);
	}

	
	// INBOUND FUNCTIONS
	function goInvoiceObj() {
		$invoice_handler =& xoops_getmodulehandler('invoice', 'xpayment');
		return $invoice_handler->get(CcbillGatewaysPlugin::getInvoice());
	}
	
	function goActionCancel($request) {

		if (!$this->checkCustom($request)&&!empty($request['custom']))
			return false;	
		
		$this->_invoice->setVar('mode', 'CANCELED');
        $invoice_handler =& xoops_getmodulehandler('invoice', 'xpayment');
        $invoice_handler->insert($this->_invoice, TRUE);
        $req = "cmd=canceled";
	    foreach ($this->getTransactionArray() as $key => $value) {
		       $value = urlencode(stripslashes($value));
		       $req .= "&$key=$value";
		}
        header( "HTTP/1.1 301 Moved Permanently" ); 
       	header('Location: '.$this->_invoice->getVar('cancel').(strpos($this->_invoice->getVar('cancel'), '?')>0?'&':'?').substr($req, 1, strlen($req)-1));
        exit;
	}
	
	function goActionReturn($request) {
		
		if (!$this->checkCustom($request)&&!empty($request['custom']))
			return false;	
		
		$invoice_transactions_handler =& xoops_getmodulehandler('invoice_transactions', 'xpayment');
        $transaction = $invoice_transactions_handler->create();
        $transaction->setVars($this->getTransactionArray($request));
        if ($invoice_transactions_handler->countTransactionId($this->getTransactionId($request))==0)
	        if ($tiid=$invoice_transactions_handler->insert($transaction)) {
	   			$gross = $invoice_transactions_handler->sumOfGross($this->_invoice->getVar('iid'));
	   			$this->_invoice->setVar('transactionid', $transaction->getVar('transactionid'));
	            $invoice_handler =& xoops_getmodulehandler('invoice', 'xpayment');
	            $invoice_handler->insert($this->_invoice, TRUE);
	            $req = "cmd=payment";
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
		
		if (!$this->checkCustom($request)&&!empty($request['custom']))
			return false;

		if ($request('reasonForDeclineCode')!=0)
			$request['gross']=0;
		
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
	            
	           	exit();
	        }	
		
	}
		
	function calcCustom() {
		return sha1($this->_gateway->getVar('salt').$this->_invoice->getVar('key').$this->_invoice->getVar('iid').$this->_invoice->getVar('grand').XOOPS_LICENSE_KEY);
	}
	
	// HTML GENERATION FUNCTIONS FOR PAYMENT FORM	
	function getPaymentHTML() {
		
		$grand = $this->_invoice->getVar('grand');
		
		if ($GLOBALS['xoopsModuleConfig']['feecomphensate']) {
			$invoice_transaction_handler = xoops_getmodulehandler('invoice_transactions', 'xpayment');
			$feepercentile = (($invoice_transaction_handler->getFeePercentile('ccbill', $grand)+$this->_gateway->_options['fee'])/2)/100;
			$html .= '<div>'._XPY_MF_FEE.number_format(($grand*$feepercentile),2).' '.$this->_invoice->getVar('currency').'</div>';
			$grand = $grand + ($grand*$feepercentile);
		}
		
		if ($GLOBALS['xoopsModuleConfig']['depositcomphensate']) {
			$invoice_transaction_handler = xoops_getmodulehandler('invoice_transactions', 'xpayment');
			$depositpercentile = (($invoice_transaction_handler->getDepositPercentile('ccbill', $grand)+$this->_gateway->_options['deposit'])/2)/100;
			$html .= '<div>'._XPY_MF_DEPOSIT.number_format(($grand*$depositpercentile),2).' '.$this->_invoice->getVar('currency').'</div>';
			$grand = $grand + ($grand*$depositpercentile);
		}
		
		$html .= '<div>'._XPY_MF_TOTAL.number_format($grand,2).' '.$this->_invoice->getVar('currency').'</div><br/>';
		
		$html .= '<div><form action="'.$this->_gateway->_options['url'].'"  name="gateway" id="gateway" method="post">';

		$html .= '<input type="hidden" name="clientAccnum" value="'.$this->_gateway->_options['clientAccnum'].'">';
		$html .= '<input type="hidden" name="clientSubacc" value="'.$this->_gateway->_options['clientSubacc'].'">';
		$html .= '<input type="hidden" name="formName" value="'.$this->_gateway->_options['formName'].'">';
		$html .= '<input type="hidden" name="formPrice" value="'.$this->_invoice->getVar('grand').'">';
		$html .= '<input type="hidden" name="formPeriod" value="'.$this->_gateway->_options['formPeriod'].'">';
		$html .= '<input type="hidden" name="formRecurringPrice" value="0">';
		$html .= '<input type="hidden" name="formRecurringPeriod" value="0">';
		$html .= '<input type="hidden" name="currencyCode" value="'.$this->returnNUMCurr($this->_invoice->getVar('currency')).'">';
		$html .= '<input type="hidden" name="formRebills" value="0">';
		$html .= '<input type="hidden" name="formDigest" value="'.md5($grand.$this->_gateway->_options['formPeriod'].$this->returnNUMCurr($this->_invoice->getVar('currency')).$this->_gateway->_options['salt']).'">';
		$html .= '<input type="hidden" name="custom" value="'.$this->calcCustom().'">';
		$html .= '<input type="hidden" name="iid" value="'.$this->_invoice->getVar('iid').'">';
		$html .= '<input type="hidden" name="gross" value="'.$grand.'">';
		$html .= '<input type="submit" value="'.$this->_gateway->_options['paywith'].'">';
		$html .= '</form></div>';
		
		return $html;
		
	}
}