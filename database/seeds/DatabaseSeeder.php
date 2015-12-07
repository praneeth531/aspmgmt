<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(UserSeeder::class);
        Model::reguard();
    }



}


class UserSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
       
        User::create([
            'userid' => "praneeth531",
            'firstname' => "Praneeth",
            'lastname' => "Kondapalli",
            'email' => "pxk10280@ucmo.edu",
            'password' => bcrypt("Praneeth531_"),
            'mobile'=>"7327838091",
            ]);

        User::create([
            'userid' => "swathi123",
            'firstname' => "Swathi",
            'lastname' => "Vangala",
            'email' => "sxv31450@ucmo.edu",
            'password' => bcrypt("Swathi531_"),
            'mobile'=>"1234567",
            ]);
    }

}
