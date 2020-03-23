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
            'image' => 'pages/bank/images/maybank.png',
        ]);
        Bank::create([
            'name' => 'CIMB Clicks',
            'slug' => 'cimb_clicks',
            'image' => 'pages/bank/images/cimb.png',
        ]);
        Bank::create([
            'name' => 'RHB Now',
            'slug' => 'rhb_now',
            'image' => 'pages/bank/images/rhb.png',
        ]);
        Bank::create([
            'name' => 'PBe',
            'slug' => 'pbe',
            'image' => 'pages/bank/images/pbe.png',
        ]);
        Bank::create([
            'name' => 'Hong Leong Connect',
            'slug' => 'hong_leong_connect',
            'image' => 'pages/bank/images/hl.png',
        ]);
        Bank::create([
            'name' => 'AmBank',
            'slug' => 'ambank',
            'image' => 'pages/bank/images/ambank.png',
        ]);
        Bank::create([
            'name' => 'i-Muamalat',
            'slug' => 'muamalat',
            'image' => 'pages/bank/images/muamalat.png',
        ]);
        Bank::create([
            'name' => 'i-Rakyat',
            'slug' => 'rakyat',
            'image' => 'pages/bank/images/rakyat.png',
        ]);
        Bank::create([
            'name' => 'BSN',
            'slug' => 'bsn',
            'image' => 'pages/bank/images/bsn.png',
        ]);
        Bank::create([
            'name' => 'HSBC',
            'slug' => 'hsbc',
            'image' => 'pages/bank/images/hsbc.png',
        ]);
        Bank::create([
            'name' => 'OCBC',
            'slug' => 'ocbc',
            'image' => 'pages/bank/images/ocbc.png',
        ]);
        Bank::create([
            'name' => 'UOB',
            'slug' => 'uob',
            'image' => 'pages/bank/images/uob.png',
        ]);
        Bank::create([
            'name' => 'Standard Chartered',
            'slug' => 'standard_chartered',
            'image' => 'pages/bank/images/scb.png',
        ]);
        Bank::create([
            'name' => 'Bank Islam',
            'slug' => 'bank_islam',
            'image' => 'pages/bank/images/bankislam.png',
        ]);
        Bank::create([
            'name' => 'Alliance Bank',
            'slug' => 'alliance_bank',
            'image' => 'pages/bank/images/alliance1.jpg',
        ]);
        Bank::create([
            'name' => 'Affin Bank',
            'slug' => 'affin_bank',
            'image' => 'pages/bank/images/affin.png',
        ]);
        Bank::create([
            'name' => 'KFH',
            'slug' => 'kfh',
            'image' => 'pages/bank/images/kfh.png',
        ]);
    }
}
