<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demographic extends Model
{
    use HasFactory;

    protected $fillable = ["surveyor_id", 'head_name', 'gender', 'age', 'total_member', 'member_details', 'literacy', 'primary_occupation', 'mobile'];

    protected $casts = [
        "member_details" => 'array'
    ];
}
