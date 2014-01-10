<?php

class jquery_letitsnow extends jquery_plugin
{

	static function appear($element, $params = array())
	{
		jquery_plugin::load('let_it_snow');
		jquery::appear($element, 'let_it_snow', $params);
	}
}
