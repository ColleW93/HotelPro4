<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

	protected $table = 'tasks';

    protected $fillable = ['task_name', 'room_no', 'user_name', 'user_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
