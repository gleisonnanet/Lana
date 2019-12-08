<?php

namespace gframework\lchatbot\Models;

use Illuminate\Database\Eloquent\Model;

class ChatBotLog extends Model
{
	protected $table = 'chatbot_log';

	protected $fillable = ['user', 'bot', 'input', 'response'];
	

}
