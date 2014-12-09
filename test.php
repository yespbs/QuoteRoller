<?php
error_reporting(1);

require 'vendor/autoload.php';

try{
	$qr = new QuoteRoller\QuoteRoller();
	
}catch (Exception $e){
	echo $e->getMessgae();
}