<?php

namespace gframework\lchatbot\Models;

use Illuminate\Database\Eloquent\Model;

class ChatBotData extends Model
{
	protected $table = 'chatbot_data';

	protected $fillable = ['unique', 'data'];

	protected $casts = [
		'data' => 'array'
	];
}
