<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
