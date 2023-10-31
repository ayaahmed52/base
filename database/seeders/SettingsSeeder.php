<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
       $data =  [
            [
                'key'   => 'logo',
                'value' => 'logo.png',
            ],
            [
                'key'   => 'site_name',
                'value' => 'Site'
            ],
            
        ];
        Setting::insert($data);
    }
}
