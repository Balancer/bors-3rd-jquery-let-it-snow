# Let it Snow by Pete R.

Create and Control a Festive Snow on Your Website using HTML5 Canvas.

Created by [Pete R.](http://www.thepetedesign.com), Founder of
[BucketListly](http://www.bucketlistly.com).

Package for B2 Framework by Balancer.

## Install

    composer require balancer/bors-3rd-jquery-let-it-snow

## Usage

### Simplest

```php
	function pre_show()
	{
		\B2\jQuery\LetItSnow::appear();

		return parent::pre_show();
	}
```

## Tuned:

```html
	<body>
...
		<canvas class="snow" width="100%" height="100%" style="position: absolute; top: 0; left: 0"></canvas>
...
	</body>
```

```php
	function pre_show()
	{
		\B2\jQuery\LetItSnow::appear("'canvas.snow'", [
			'speed' =>  2,
			'count' => 100,
			'windPower' => 5,
			'image' => '/components/balancer-let-it-snow/img/snowflake.png',
		]);

		return parent::pre_show();
	}
```

Now, it’s time explore the possibilities of this plugin:

  - **speed**: This option lets you control the speed of the snow fall. The higher, the faster. Recommended values are somewhere between 0 and 5. The default value is 0.
  - **interaction**: This option lets you toggle the interaction of the snow. If set to true, the snow will react to your cursor and move away creating a beautiful interaction effect. Set this to false if you don’t want that. The default value is true.
  - **size**: You can define the average size of the snow here. Recommended values are somewhere between 0 and 10. The higher, the bigger. The default value is 2.
  - **count**: This will let you control the maximum amount of snow falling on the screen at the same time. The default value is 200.
  - **opacity**: This option will let you control the average opacity of the snow. Set this to 1 if you don’t want any opacity. Recommended values are decimal between 0.0 and 1.0. The default value is 0.
  - **color**: You can define the color of the snowflakes here. Acceptable format is the full 6 characters HEX color code (#FFFFFF). The default value is “#ffffff”.
  - **windPower**: You can define which direction the wind blows here. If you want the wind to blow to the right, put a positive number here. If you want the wind to blow in the other direction, put a negative number here. The higher (for positive) /lower (for negative) the number, the heavier the wind blows. The default value is 0.
  - **image**: You can use your own custom image as a snowflake instead of the default circle by defining the path to the image file here. Toggle this to false to revert back to using our default circle. The default value is false.

## Links

  - Original repo: https://github.com/peachananr/let_it_snow
  - Usage example in Russian (урок по использованию на русском): http://ruseller.com/lessons.php?rub=32&id=1935
  - Another lession: http://www.onextrapixel.com/2013/12/24/create-and-control-festive-snow-on-your-website-using-html5-canvas/

