<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {

	protected $table = "tasks";

	protected $fillable = [
		'name',
		'description',
		'started_at',
		'created_at'
	];
}
