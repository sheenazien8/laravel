<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{

	use SoftDeletes;
	protected $dates = ['deleted_at'];

	// public $timestamps = false;

	// whitelist
	protected $fillable = ['title','description'];

	// blacklist
	// protected $guarded = ['title','description'];
}
