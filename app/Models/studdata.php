<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Facades\Excel;

class studdata extends Model
{
    use HasFactory;

    protected $table='studdata';

    protected $fillable=['mem_no','division','doj','name','address','email','phone'];
 
    
}
