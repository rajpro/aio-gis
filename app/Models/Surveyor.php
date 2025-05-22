<?php

namespace App\Models;

use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surveyor extends Model
{
    use HasFactory, SpatialTrait;

    protected $fillable = ["village", 'block', 'location', 'hh_id', 'survey_date', 'surveyor_name', 'team', 'lvu'];

    protected $spatialFields = [
        'location',
    ];

    public function demographic()
    {
        return $this->hasOne(Demographic::class, 'surveyor_id', 'id');
    }

    public function crime()
    {
        return $this->hasOne(Crime::class, 'surveyor_id', 'id');
    }

    public function socio()
    {
        return $this->hasOne(Socio::class, 'surveyor_id', 'id');
    }
}
