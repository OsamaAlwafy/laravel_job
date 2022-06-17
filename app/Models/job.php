<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;

    public function company()
    {
        return $this->belongsTo(company::class);
    }
    public function job_detail()
    {
        return $this->hasOne(job_detail::class);
    }
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
