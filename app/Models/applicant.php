<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applicant extends Model
{
    use HasFactory;
    public function job()
    {
        return $this->belongsToMany(job::class);
    }
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
    
}
