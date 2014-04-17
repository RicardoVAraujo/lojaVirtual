<?php

function site_url(){
	return 'http://'.$_SERVER['SERVER_NAME'].':8888';
}

function numberFormat($numero){
	return 'R$ '.number_format($numero,2, ',', '.');
}