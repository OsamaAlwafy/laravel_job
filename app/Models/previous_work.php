<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class previous_work extends Model
{
    use HasFactory;
    public function user()
    {
       return $this->belongTo(user::class);
    }
}
