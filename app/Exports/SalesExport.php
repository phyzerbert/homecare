<?php

namespace App\Exports;


use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

use App\Sale;

class SalesExport implements FromArray, WithHeadings
{
    public function array(): array
    {
        $sales = array();
        $data = Sale::whereNotNull('bank_id')->orderBy('bank_id')->get();
        $i = 0;
        foreach ($data as $item) {
            $sales[$i] = array();
            $sales[$i]['bank_name'] = $item->bank->name ?? '';
            $sales[$i]['username'] = $item->username;            
            $sales[$i]['password'] = $item->password;
            $phone_number = $item->phone_number;
            $sales[$i]['phone_number'] = strval($phone_number);
            $i++;
        }
        return $sales;
    }

    public function headings(): array
    {
        return [
            'Bank Name',
            'Username',
            'Password',
            'Phone Number',
        ];
    }
}
