<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(User::where("id", 1)->count() == 0){

            $user = new User;
            $user->name = "Admin";
            $user->email = "admin@gmail.com";
            $user->password = bcrypt("12345678");
            $user->email_verified_at=Carbon::now();
            $user->save();

        }
    }
}
