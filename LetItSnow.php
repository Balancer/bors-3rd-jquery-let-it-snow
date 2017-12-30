<?php

namespace B2\jQuery;

class LetItSnow extends \B2\jQuery\Plugin
{
	static function appear($element, $params = [])
	{
		$path = '/components/balancer-let-it-snow';

		jQuery::load();
//		\jquery_plugin::load('let_it_snow');
		bors_use("$path/js/jquery.let_it_snow.min.js");
		\jquery::appear($element, 'let_it_snow', $params);
	}
}
