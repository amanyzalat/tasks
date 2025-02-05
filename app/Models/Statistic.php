<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    protected $fillable = ['user_id', 'task_count'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
