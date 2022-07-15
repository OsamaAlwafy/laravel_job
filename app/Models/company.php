<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laratrust\Traits\LaratrustUserTrait;

class company extends Model
{
    use HasFactory;
    use LaratrustUserTrait;
   
        public function jobs()
        {
            return $this->hasMany(job::class,'company_id','user_id');
        }
        public function User()
        {
            return $this->belongsTo(User::class);
        }
    
}
