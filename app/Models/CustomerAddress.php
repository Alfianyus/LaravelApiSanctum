<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    use HasFactory;

    protected $fillable = [
            'id',
            'IDCardAddress',
            'IDCardRT',
            'IDCardRW',
            'IDCardKelurahan',
            'IDCardKecamatan',
            'IDCardCity',
            'CopyID',
            'DomicileCity',
            'DomicileKecamatan',
            'DomicileKelurahan',
            'DomicilePostalCode',
            'CIFProvinceName',
            'IDCardPostalCode',
            'CIFLookupDescription',
    ];
}
