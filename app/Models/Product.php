<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    protected $fillable = [
        'name',
        'expire_at',
        'details',
        'company_id'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
