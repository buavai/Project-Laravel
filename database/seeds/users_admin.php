<?php

use Illuminate\Database\Seeder;
use App\classrooms;
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
        $idStart = classrooms::all()->pluck('id')->first();
        $idEnd = classrooms::all()->pluck('id')->last();
        for ($i = 0; $i < $limit; $i++) {
            DB::table('users_admins')->insert([
                'password' => bcrypt('123'),
                'address' => $faker->unique()->address,
                'mail_address' => $faker->unique()->safeEmail,
                'role'=>1,
                'ClassRoom_id'=>$faker->numberBetween($min = $idStart, $max = $idEnd),
                'phone' => $faker->e164PhoneNumber
            ]);
        }
    }
}
