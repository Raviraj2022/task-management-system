<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskModel extends Model
{
    use HasFactory;
    protected $table = "task_model";
    protected $primaryKey = "task_id";
    // protected $fillable = ['title', 'description', 'due_date', 'type'];
}
