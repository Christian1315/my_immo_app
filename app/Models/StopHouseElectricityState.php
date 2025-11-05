<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StopHouseElectricityState extends Model
{
    use HasFactory;

    protected $table = "stop_house_electricity_states";
    protected $fillable = [
        "reference",
        "owner",
        "house",
        "state_stoped_day",
    ];

    function Owner(): BelongsTo
    {
        return $this->belongsTo(User::class, "owner");
    }

    function House(): BelongsTo
    {
        return $this->belongsTo(House::class, "house")->with(["Proprietor", "Type", "Supervisor", "Locations"]);
    }

    function StatesFactures(): HasMany
    {
        return $this->hasMany(LocationElectrictyFacture::class, "state")->with(["Location"]);
    }

    /**Boot */
    protected static function booted()
    {
        static::creating(function ($model) {
            $model->reference = "HOUSE-ELEC-STATE" . time() . "-XXX";
        });
    }
}
