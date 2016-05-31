<?php 

	class Container{

		static protected $container;

		public static function get($id)
		{
			return self::$container[$id];
		}

		public static function set($container)
	    {
	        self::$container = $container;
	    }


	}