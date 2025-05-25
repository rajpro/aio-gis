<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crime extends Model
{
    use HasFactory;

    protected $fillable = ["surveyor_id","crime","toc","police","action_take","jail","jail_relative","case","duration","feel_safe","police_visits","vulnerability_flags", "admin_control"];
}