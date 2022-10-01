<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;
use Illuminate\Support\Facades\Hash;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'email' => 'Nada@gmail.com',
            'password' => Hash::make(123),
            'name' => 'Mohamed Atef',
            'TransportType' => 'CAR',
            'rate' => '4.5',
            'ProfilePic' => 'https://scontent.fcai19-2.fna.fbcdn.net/v/t39.30808-6/292292759_5383833031707953_6992159369354653235_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=PeEyuKxLKLAAX-HXYDx&tn=m8XAIDVhVWgJDsqT&_nc_ht=scontent.fcai19-2.fna&oh=00_AT-6G7-STLBJAP8UQJgnhBEyUXh6GEOsWhCiLLdCwq1CyA&oe=633DC2A7',
            'PhoneNumber' => '01097555350',
            'distance' => '10 km',
            'price' => '80 EGP',
            'eta' => '04:05 PM',
            'PaymentType' => 'Cash',
            'latitude' => '31.130123805135874',
            'longitude' => '33.76854358420621',
        ]);

        Profile::create([
            'email' => 'samy.work2@gmail.com',
            'password' => Hash::make(123),
            'name' => 'Ahmed Kamel',
            'TransportType' => 'Motorbike',
            'rate' => '4.5',
            'ProfilePic' => 'https://scontent.fcai19-2.fna.fbcdn.net/v/t39.30808-6/292292759_5383833031707953_6992159369354653235_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=PeEyuKxLKLAAX-HXYDx&tn=m8XAIDVhVWgJDsqT&_nc_ht=scontent.fcai19-2.fna&oh=00_AT-6G7-STLBJAP8UQJgnhBEyUXh6GEOsWhCiLLdCwq1CyA&oe=633DC2A7',
            'PhoneNumber' => '01097555350',
            'distance' => '15 km',
            'price' => '95 EGP',
            'eta' => '08:05 PM',
            'PaymentType' => 'Cash',
            'latitude' => '31.125459034183766',
            'longitude' => '33.73854614620058',
        ]);


        Profile::create([
            'email' => 'samersamer@gmail.com',
            'password' => Hash::make(123),
            'name' => 'Samer Ramy',
            'TransportType' => 'CAR',
            'rate' => '4.5',
            'ProfilePic' => 'https://scontent.fcai19-2.fna.fbcdn.net/v/t39.30808-6/292292759_5383833031707953_6992159369354653235_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=PeEyuKxLKLAAX-HXYDx&tn=m8XAIDVhVWgJDsqT&_nc_ht=scontent.fcai19-2.fna&oh=00_AT-6G7-STLBJAP8UQJgnhBEyUXh6GEOsWhCiLLdCwq1CyA&oe=633DC2A7',
            'PhoneNumber' => '01097555350',
            'distance' => '10 km',
            'price' => '80 EGP',
            'eta' => '04:05 PM',
            'PaymentType' => 'Cash',
            'latitude' => '31.122188981699964',
            'longitude' => '33.72700214171778',
        ]);


    }
}