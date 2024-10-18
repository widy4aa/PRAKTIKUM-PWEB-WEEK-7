<?php

    namespace App\Http\Controllers;
    use Faker\Factory as Faker;
    use Illuminate\Http\Request;

    class contactsController extends Controller
    {
        public $users = [];

        public function index()
        {
            $faker = Faker::create();

            for ($i = 0; $i < 10; $i++) {
                $users[] = [
                    'username' => $faker->userName,
                    'name' => $faker->name,
                    'email' => $faker->unique()->safeEmail,
                    'phone' => $faker->phoneNumber,
                ];
            }

            $users = session('users', []);

            return view ('contact', ['users' => $users]);
        }

        public function addUsers(Request $request){

            $users = session('users', []);
            $faker = Faker::create();
            $users[] = [
                'username' => $faker->userName,
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
            ];
                                            session(['users' => $users]);
            return view('contact', ['users' => $users]);
    }

}
