<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'SuperAdmin',
            'email' => 'super@admin.com',
            'email_verified_at' => \Carbon\Carbon::now(),
            'password' => bcrypt('!E&*X]Arc]7R'),
        ]);
    }
}
