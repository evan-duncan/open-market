<?php

namespace OpenMarket;

use Illuminate\Database\Eloquent\Model;

class StorePreference extends Model
{
    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function country()
    {
        return $this->hasOne(Country::class);
    }

    public function language()
    {
        return $this->hasOne(Language::class);
    }

    public function currency()
    {
        return $this->hasOne(Currency::class);
    }
}
