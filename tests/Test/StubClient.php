<?php

namespace Test;

use Dormilich\WebService\RIPE\Adapter\ClientAdapter;

class StubClient implements ClientAdapter
{
	public $uri;
	public $method;
	public $path;
	public $body;
	public $options;

	protected $response;

	public function __construct(array $response)
	{
		$this->response = $response;
	}

	public function setBaseUri($uri)
	{
		$this->uri = $uri;
	}

	public function request($method, $path, $body = NULL, array $options = array())
	{
		$this->method  = $method;
		$this->path    = $path;
		$this->body    = $body;
		$this->options = $options;

		return $this->response;
	}
}