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
            [
                'key'   => 'site_phone',
                'value' => '01020498646'
            ],
            [
                'key'   => 'site_email',
                'value' => 'aya@gmail.com'
            ],
            [
                'key'   => 'site_address',
                'value' => 'Mansoura'
            ],
            [
                'key'   => 'site_lat',
                'value' => '31.2020254'
            ],
            [
                'key'   => 'site_long',
                'value' => '32.2152425'
            ],
            [
                'key'   => 'category_desc_ar',
                'value' => 'هذا النص مقال لنص يمكن استبداله'
            ],
            [
                'key'   => 'category_desc_en',
                'value' => 'Description can be replaced'
            ],
            [
                'key'   => 'feature_desc_ar',
                'value' => 'هذا النص مقال لنص يمكن استبداله'
            ],
            [
                'key'   => 'feature_desc_en',
                'value' => 'Description can be replaced'
            ],
            [
                'key'   => 'service_desc_ar',
                'value' => 'هذا النص مقال لنص يمكن استبداله'
            ],
            [
                'key'   => 'service_desc_en',
                'value' => 'Description can be replaced'
            ],
            [
                'key'   => 'contact_desc_ar',
                'value' => 'هذا النص مقال لنص يمكن استبداله'
            ],
            [
                'key'   => 'contact_desc_en',
                'value' => 'Description can be replaced'
            ],
        ];
        Setting::insert($data);
    }
}
