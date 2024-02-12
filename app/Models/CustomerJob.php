<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerJob extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'Occupation',
        'Position',
        'NatureOfBusiness',
        'CompanyName',
        'CompanyAddress',
        'CompanyCity',
        'CompanyPostalCode',
        'SpouseOccupation',
        'IncomePerAnnum',
        'FundSource',
        'QuestionNPWP',
        'NPWPNumber',
        'NPWPReason',
        'PositionText',
        'NatureOfBusinessText',
    ];
}
