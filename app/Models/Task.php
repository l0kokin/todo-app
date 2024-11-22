<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class Task extends Model
{
	use HasFactory, HasTranslations;

	public $translatable = ['name', 'description'];

	protected $fillable = [
		'name_english',
		'name_georgian',
		'description_english',
		'description_georgian',
		'due_date',
	];

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
}
