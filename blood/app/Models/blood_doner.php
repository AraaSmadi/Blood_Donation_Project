<?php

namespace App\Models;
use App\Models\blood_type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blood_doner extends Model
{
    use HasFactory;
    public function blood_type()
    {
        return $this->hasMany(blood_type::class);
    }
}
