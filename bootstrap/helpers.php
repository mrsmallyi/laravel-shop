<?php

// test helper
if (!function_exists('test_helper')) {
	function test_helper() {
		return "ok";
	}
}


// route_class
/*
* 将路由名称转换为css类名称
*/
if (!function_exists('route_class')) {
	function route_class() {
		return str_replace('.', '-', Route::currentRouteName());
	}
}