<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function getCredential()
    {
        return $this->hasOne(Credential::class);
    }

    public function accounts()
    {
        return $this->hasMany(Account::class);
    }

    public function getServices()
    {
        return $this->belongsToMany(Service::class, 'customer_services', 'customer_id', 'service_id'
        );
    }
}
