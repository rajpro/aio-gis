<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    use HasFactory;

    protected $fillable = ["surveyor_id","forest_production","qty","income_per_wk","income_per_mo","seasonal_variation","peak_mo","land_holding","land_use","support_received","debt","debt_src","loan","loan_reason", 'forest_harvest_week', 'forest_harvest_ton', 'gross_revenue', 'pci', 'gov_investment'];
}
