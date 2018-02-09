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
 */	### IPN DEBUG DEFINITIONS ###
	define('_XPY_MF_DEBUGACTIVE','Debug mode activated');
	define('_XPY_MF_DEBUGHEADER','<br>Xoops Donations Module<br><br>PayPal Instant Payment Notification script<br><br>See below for status:<hr>');
	define('_XPY_MF_OPENCONN','Opening connection and validating request with PayPal...');
	define('_XPY_MF_CONNFAIL','FAILED to connect to PayPal');
	define('_XPY_MF_RCVINVALID','Incorrect receiver email: %s , aborting...');
	define('_XPY_MF_VERIFIED','PayPal Verified');
	define('_XPY_MF_REFUND','Transaction is a Refund');
	define('_XPY_MF_TRANSMISSING','IPN Error: Received refund but missing prior completed transaction');
	define('_XPY_MF_MULTITXNS','IPN Error: Received refund but multiple prior txn_id\'s encountered, aborting');
	define('_XPY_MF_DUPLICATETXN','Valid IPN, but DUPLICATE txn_id! aborting...');
	define('_XPY_MF_NOTINTERESTED','Valid IPN, but not interested in this transaction');
	define('_XPY_MF_INVALIDIPN','Invalid IPN transaction, this is an abnormal condition');
	define('_XPY_MF_DEBUGPASS','PASSED!');
	define('_XPY_MF_DEBUGFAIL','FAILED!');
	define('_XPY_MF_RCVEMAIL','PayPal Receiver Email: %s');
	define('_XPY_MF_LOGBEGIN','Logging events');
	define('_XPY_MF_IFNOERROR','If you don\'t see any error messages, you should be good to go!');

	define('_XPY_GI_PAYPAL_NAME', 'Paypal Gateway');
	define('_XPY_GI_PAYPAL_DESC', 'This gateway for paypal allows for multiple items to be posted to paypal for payment.');
	define('_XPY_GI_PAYPAL_AUTHOR', 'Simon Roberts (simon@chronolabs.coop)');
	define('_XPY_GI_PAYPAL_NAME_EMAIL', 'Paypal Account Email Address');
	define('_XPY_GI_PAYPAL_NAME_SANDBOX', 'Paypal Sandbox URL');
	define('_XPY_GI_PAYPAL_NAME_URL', 'Paypal Form URL');
	define('_XPY_GI_PAYPAL_NAME_IMAGE', '150x50-pixel image displayed as your logo in the upper left corner of PayPal’s pages.');
	define('_XPY_GI_PAYPAL_NAME_PAYWITH', 'Payment Button Caption');
	define('_XPY_GI_PAYPAL_VALUE_EMAIL', 'simon@chronolabs.coop');	
	define('_XPY_GI_PAYPAL_VALUE_SANDBOX', 'https://www.sandbox.paypal.com/cgi-bin/webscr');
	define('_XPY_GI_PAYPAL_VALUE_URL', 'https://www.paypal.com/cgi-bin/webscr');
	define('_XPY_GI_PAYPAL_VALUE_IMAGE', XOOPS_URL.'/images/logo.png');
	define('_XPY_GI_PAYPAL_VALUE_PAYWITH', 'Pay with Paypal');

		//Moved from Paypal.php
	define('_XPY_PAYPAL_LINEITEMSDRAWNBY', ' Items on lines drawn by : ');
	define('_XPY_PAYPAL_ITEMNUMBER', ' Items on lines');
	
?>