<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Restaurant extends Model
{

    protected $fillable = [
        "title",
        "description",
        "delivery_fee",
        "delivery_time",
        "minimal_offer",
        "phone_number",
        "web",
        "image_path",
    ];

    public function offers(): HasMany
    {
        return $this->hasMany(Offer::class);
    }
}
