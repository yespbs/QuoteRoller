<?php
require 'vendor/autoload.php';

echo 'Try';
try{
	$qr = QuoteRoller\QuoteRoller();
}catch (Exception $e){
	echo $e->getMessgae();
}	