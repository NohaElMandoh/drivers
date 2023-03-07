<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('drivers')->insert([
            'f_name' => 'Ahmed',
            'l_name' => 'Mohammed',
            'picture' => '/drivers/ecar.png',
            'mobile' => '232424',
            'lat' => '26.820553',
            'lang' => '30.802498',
            'email' => Str::random(10) . '@gmail.com',
            'street' => Str::random(10),
            'city' => Str::random(10),
            'vehicle_type' => 'car',
            'chat_ref_id' => '123',
            'price' => 500,
            'eta' => '123',
            'distance' => '10m',
            'payment' => 'pay'
        ]);
        DB::table('drivers')->insert([
            'f_name' => 'saif',
            'l_name' => 'mohammed',
            'picture' => '/drivers/Image01@2x.jpg',
            'mobile' => '232424',
            'lat' => '26.839174',
            'lang' => '30.865302',
            'email' => 'saif@gmail.com',
            'street' => Str::random(10),
            'city' => Str::random(10),
            'vehicle_type' => 'bus',
            'chat_ref_id' => '1234',
            'price' => 700,
            'eta' => '123',
            'distance' => '20m',
            'payment' => 'pay'
        ]);
        DB::table('drivers')->insert([
            'f_name' => 'zain',
            'l_name' => 'mohammed',
            'picture' => '/drivers/ecar.png',
            'mobile' => '232424',
            'lat' => '26.855593',
            'lang' => '30.795218',
            'email' => 'zain@gmail.com',
            'street' => Str::random(10),
            'city' => Str::random(10),
            'vehicle_type' => 'bus',
            'chat_ref_id' => '12345',
            'price' => 600,
            'eta' => '123',
            'distance' => '20m',
            'payment' => 'pay'
        ]);

        DB::table('drivers')->insert([
            'f_name' => 'nasr',
            'l_name' => 'mohammed',
            'picture' => '/drivers/1.png',
            'mobile' => '232424',
            'lat' => '26.852530',
            'lang' => '30.738532',
            'email' => 'nasr@gmail.com',
            'street' => Str::random(10),
            'city' => Str::random(10),
            'vehicle_type' => 'car',
            'chat_ref_id' => '1236',
            'price' => 550,
            'eta' => '123',
            'distance' => '30m',
            'payment' => 'pay'
        ]);

        DB::table('drivers')->insert([
            'f_name' => 'fahd',
            'l_name' => 'mohammed',
            'picture' => '/drivers/Image01@2x.jpg',
            'mobile' => '232424',
            'lat' => '26.863250',
            'lang' => '30.878014',
            'email' => 'fahd@gmail.com',
            'street' => Str::random(10),
            'city' => Str::random(10),
            'vehicle_type' => 'car',
            'chat_ref_id' => '12362',
            'price' => 650,
            'eta' => '123',
            'distance' => '40m',
            'payment' => 'pay'
        ]);

        DB::table('drivers')->insert([
            'f_name' => '3zz',
            'l_name' => 'mohammed',
            'picture' => '/drivers/1.png',
            'mobile' => '232424',
            'lat' => '26.862331',
            'lang' => '30.835751',
            'email' => '3zz@gmail.com',
            'street' => Str::random(10),
            'city' => Str::random(10),
            'vehicle_type' => 'car',
            'chat_ref_id' => '12362',
            'price' => 800,
            'eta' => '123',
            'distance' => '40m',
            'payment' => 'pay'
        ]);
    }
}
