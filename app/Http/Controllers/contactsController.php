<?php

    namespace App\Http\Controllers;
    use Faker\Factory as Faker;
    use Illuminate\Http\Request;

    class contactsController extends Controller
    {
        protected $users = [];

        public function index()
        {

            $users = session(key: 'users', default: []);
            if (count($users) == 0) {
                $faker = Faker::create();
                for ($i = 0; $i < 5 ; $i++) {
                $users[] = [
                    'username' => $faker->userName,
                    'name' => $faker->name,
                    'email' => $faker->unique()->safeEmail,
                    'phone' => $faker->phoneNumber,
                ];
                }
            }
            session(['users' => $users]);
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
        public function deletUsers(Request $request){
            $users = session('users', []);
            dd($users);
        }
}
