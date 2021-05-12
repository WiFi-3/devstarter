<?php defined('SYSPATH') OR die('No direct script access.');

class HTTP_Exception_404 extends Kohana_HTTP_Exception_404 {

	public function get_response()
	{
		$response = Response::factory();
		$response
			->status($this->getCode())
			->body(Request::factory('error/404')->execute());
		return $response;
	}

}
