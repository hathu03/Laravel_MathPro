<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->fullname = "Ha";
        $user->email = "ha@gmail.com";
        $user->password = Hash::make(123456);
        $user->phone = "0912345678";
        $user->address = "Trung Quoc";
        $user->hobby = "an ngu nghi";
        $user->role = "Admin";
        $user->save();

        $user = new User();
        $user->fullname = "Tiep";
        $user->email = "tiep@gmail.com";
        $user->password = Hash::make(123456);
        $user->phone = "0929303130";
        $user->address = "Ha Noi";
        $user->hobby = "di choi nghe nhac";
        $user->role = "User";
        $user->save();


        $user = new User();
        $user->fullname = "My";
        $user->email = "my@gmail.com";
        $user->password = Hash::make(123456);
        $user->phone = "0332882276";
        $user->address = "Ha Nam";
        $user->hobby = "xinh gai hoc gioi";
        $user->role = "User";
        $user->save();


        $user = new User();
        $user->fullname = "Anh";
        $user->email = "anh@gmail.com";
        $user->password = Hash::make(123456);
        $user->phone = "091234537";
        $user->address = "Viet Nam";
        $user->hobby = "dep trai nhat gai";
        $user->role = "User";
        $user->save();
    }

}
