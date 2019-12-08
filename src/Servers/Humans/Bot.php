<?php namespace gframework\lchatbot\Servers\Humans;

use gframework\lchatbot\Servers\Humans\Human;

class Bot extends Human
{
	public function __construct($chatbot, $unique)
	{
		parent::__construct($chatbot, $unique, "bot");
	}
}
