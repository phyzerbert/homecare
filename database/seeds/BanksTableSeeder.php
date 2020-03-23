<?php

use Illuminate\Database\Seeder;

use App\Bank;

class BanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bank::create([
            'name' => 'Maybank2u',
            'slug' => 'maybank2u',
            'image' => 'pages/bank/images/maybank.jpg',
        ]);
        Bank::create([
            'name' => 'CIMB Clicks',
            'slug' => 'cimb_clicks',
            'image' => 'pages/bank/images/cimb.jpg',
        ]);
        Bank::create([
            'name' => 'RHB Now',
            'slug' => 'rhb_now',
            'image' => 'pages/bank/images/rhb.jpg',
        ]);
        Bank::create([
            'name' => 'PBe',
            'slug' => 'pbe',
            'image' => 'pages/bank/images/public.jpg',
        ]);
        Bank::create([
            'name' => 'Hong Leong Connect',
            'slug' => 'hong_leong_connect',
            'image' => 'pages/bank/images/hong_leong.jpg',
        ]);
        Bank::create([
            'name' => 'AmBank',
            'slug' => 'ambank',
            'image' => 'pages/bank/images/ambank.jpg',
        ]);
        Bank::create([
            'name' => 'BSN',
            'slug' => 'bsn',
            'image' => 'pages/bank/images/bsn.jpg',
        ]);
        Bank::create([
            'name' => 'HSBC',
            'slug' => 'hsbc',
            'image' => 'pages/bank/images/hsbc.jpg',
        ]);
        Bank::create([
            'name' => 'OCBC',
            'slug' => 'ocbc',
            'image' => 'pages/bank/images/ocbc.jpg',
        ]);
        Bank::create([
            'name' => 'UOB',
            'slug' => 'uob',
            'image' => 'pages/bank/images/uob.jpg',
        ]);
        Bank::create([
            'name' => 'Standard Chartered',
            'slug' => 'standard_chartered',
            'image' => 'pages/bank/images/standard.jpg',
        ]);
        Bank::create([
            'name' => 'Bank Islam',
            'slug' => 'bank_islam',
            'image' => 'pages/bank/images/bank_islam.jpg',
        ]);
        Bank::create([
            'name' => 'Alliance Bank',
            'slug' => 'alliance_bank',
            'image' => 'pages/bank/images/alliance.jpg',
        ]);
        Bank::create([
            'name' => 'Affin Bank',
            'slug' => 'affin_bank',
            'image' => 'pages/bank/images/affin.jpg',
        ]);
    }
}
