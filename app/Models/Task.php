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
		'name',
		'description',
		'due_date',
	];

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
}
