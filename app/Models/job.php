<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;

    public function company()
    {
        return $this->belongsTo(company::class,'company_id','user_id');
    }
    public function job_detail()
    {
        return $this->hasOne(job_detail::class);
    }
    public function User()
    {
        return $this->belongsToMany(User::class);
    }
}
