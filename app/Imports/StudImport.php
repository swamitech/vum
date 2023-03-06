<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\studdata;

class StudImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach($rows as $row)
        {
            studdata::create([
                
                'mem_no' => $row['mem_no'],
                'division' => $row['division'],
                'doj' => $row['doj'],
                'name' => $row['name'],
                'address' => $row['address'],
                'email' => $row['email'],
                'phone' => $row['phone'],

            ]);
        }
        
    }
}
