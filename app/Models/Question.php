<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'Risk',
        'SpouseIncomePerAnnum',
        'SpouseOccupation',
        'SpousePosition',
        'SpouseNatureOfBusiness',
        'SpouseCompanyName',
        'SpouseCompanyCity',
        'SpouseCompanyPostalCode',
        'SpouseCompanyAddress',
        'SpouseFundSource',
        'SpouseRelationship',
        'SpouseRelationshipText',
        'SpouseName',
        'FATCA1',
        'FATCA2',
        'FATCA3',
        'Question1',
        'Question1Text',
        'Question2',
        'Question2Text',
        'Question3',
        'Question3Text',
        'Question4',
        'Question4Text',
        'Question5',
        'Question5Text',
        'Question6',
        'Disclaimer',  
    ];
}
