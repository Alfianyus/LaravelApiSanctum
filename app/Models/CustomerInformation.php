<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerInformation extends Model
{
    use HasFactory;

    protected $fillable = [
            'id',
            'IDCardNumber',
            'FirstName',
            'BirthPlace',
            'BirthDate',
            'Sex',
            'MaritalStatus',
            'MotherName',
            'Religion',
            'Email',
            'MobilePhone',
            'Education',
            'ResidencyNStatus',
            'InvestmentObjectives',
    ];
}
