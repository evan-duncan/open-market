<?php

namespace OpenMarket;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function preferences()
    {
        return $this->hasOne(StorePreference::class);
    }
}
