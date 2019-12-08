<?php namespace gframework\lana\Servers\Humans;

use gframework\lana\Servers\Humans\Human;

class Bot extends Human
{
	public function __construct($chatbot, $unique)
	{
		parent::__construct($chatbot, $unique, "bot");
	}
}
