<?php

namespace B2\jQuery;

class LetItSnow extends \B2\jQuery\Plugin
{
	static function appear($element = NULL, $params = [])
	{
		$path = '/components/balancer-let-it-snow';

//		set_def($params, 'image', $path . '/img/snowflake.png');
		set_def($params, 'image', $path . '/img/snowflake-blue-48.png');
		set_def($params, 'size', 10);
		set_def($params, 'count', 30);
		set_def($params, 'windPower', 1);

		\B2\jQuery::load();
//		\jquery_plugin::load('let_it_snow');
		bors_use("$path/js/jquery.let_it_snow.min.js");
		if(!$element)
		{
			\B2\jQuery::on_ready('$("body").append("<canvas class=\'snow\' width=\'100%\' height=\'100%\' style=\'position: absolute; top: 0; left: 0\'></canvas>")');
			$element = '"canvas.snow"';
		}

		\B2\jQuery::appear($element, 'let_it_snow', $params);
	}
}
