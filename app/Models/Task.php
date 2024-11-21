<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
	use HasFactory;

	protected $table = 'tasks';

	protected $fillable = [
		'task_name', 'description', 'due_date',
	];

	protected $primaryKey = 'id';

	public $timestamps = true;

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
}
