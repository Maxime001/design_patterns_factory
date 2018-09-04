<?php

	namespace App;
	
	class Config{
		private $settings = [];
		public static $_instance;
		public $unique_id;
		
		public function __construct(){
			$this->unique_id = uniqid();
			$this->settings = require dirname(__DIR__) . '/config/config.php';
		}
		
		public static function getInstance(){
			if(self::$_instance == null){
				self::$_instance = new Config();
			}
			return self::$_instance;
		}
		
		public function get($key){
			
		}
	
	}