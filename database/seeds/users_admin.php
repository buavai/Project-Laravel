<?php

use Illuminate\Database\Seeder;

class users_admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('vi_VN');
        $limit = 100;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('users_admins')->insert([
                'password' => bcrypt($faker->password),
                'address' => $faker->unique()->address,
                'mail_address' => $faker->unique()->safeEmail,
                'phone' => $faker->e164PhoneNumber
            ]);
        }
    }
}
