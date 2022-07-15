<?php
namespace Database\Seeders;
use App\Models\User;
use App\Models\company;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;


class users 
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public static function  generateUser()
    {
        $user = User::create(
            [
                'name' =>"client",
               
                'email' => 'client@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123456789')
            ]);

        $user->attachRole("client");

        $user = User::create(
            [
                'name' =>"admin",
               
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123456789')
            ]);

        $user->attachRole("admin");

        $user = new User();
           
                $user->name ="Yemen soft";
                
                $user->email ='company@gmail.com';
                
                $user->password =bcrypt('123456789') ;
                $user->save();
         $company=new company();
         $company->user_id=$user->id;
         $company->save();
        $user->attachRole("company");

    
    }
}