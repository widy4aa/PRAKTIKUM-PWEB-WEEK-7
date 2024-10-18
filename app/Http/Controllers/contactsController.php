<?php

namespace App\Http\Controllers;
use Faker\Factory as Faker;
use Illuminate\Http\Request;

class contactsController extends Controller
{
    public function index()
    {
        // Membuat instance faker
        $faker = Faker::create();

        // Menghasilkan data palsu
        $users = [];

        for ($i = 0; $i < 10; $i++) {
            $users[] = [
                'username' => $faker->userName,
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
            ];
        }



        // Kirim data ke view
        return view ('contact', ['users' => $users]);
    }
}
