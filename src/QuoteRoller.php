<?php 
namespace QuoteRoller;

/**
 * Enter Description
 */
class QuoteRoller{
    public function __construct(){
    	echo 'Init construct<br>';
        echo 'now: '.\Carbon\Carbon::now().'<br>';
    }

    public static function init()
    {
    	echo 'Init';
    }
}