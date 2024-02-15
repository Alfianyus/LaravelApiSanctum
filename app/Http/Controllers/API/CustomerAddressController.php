<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerAddress;
use Illuminate\Support\Facades\Validator;

class CustomerAddressController extends Controller
{
    public function customer_address(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'IDCardRT'=>'required|numeric|digits:4',
            'IDCardRW'=>'required|numeric|digits:4',
            'IDCardKelurahan'=>'required|regex:/^[a-zA-Z\s.]+$/',
            'IDCardKecamatan'=>'required|regex:/^[a-zA-Z\s.]+$/',
            'DomicileKecamatan'=>'required|regex:/^[a-zA-Z\s.]+$/',
            'DomicileKelurahan'=>'required|regex:/^[a-zA-Z\s.]+$/',
            'DomicilePostalCode'=>'required|numeric|digits:5',
            'DomicileRW'=>'required|numeric|digits:4',
            'DomicileCity'=>'required|numeric|digits:3',
            'IDCardPostalCode'=> 'required|numeric|digits:5',
            'ContactPersonHomePhone'=>'required|regex:/^\+62-\d+$/',
            'ContactPersonName'=>'required|alpha',
            'ContactPersonMobilePhone'=>'required|regex:/^\+62-\d+$/',


        ]);
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $customeraddress = CustomerAddress::create([
          'IDCardAddress' =>$request->input('IDCardAddress'),
          'IDCardRT' =>$request->input('IDCardRT'),
           'IDCardRW'=>$request->input('IDCardRW'),
           'IDCardKelurahan'=>$request->input('IDCardKelurahan'),
           'IDCardKecamatan'=>$request->input('IDCardKecamatan'),
          'IDCardCity' =>$request->input('IDCardCity'),
          'ContactPersonAddress'=>$request->input('ContactPersonAddress'),
          'DomicileKecamatan'=>$request->input('DomicileKecamatan'),
          'DomicileKelurahan'=>$request->input('DomicileKelurahan'),
          'DomicilePostalCode'=>$request->input('DomicilePostalCode'),
          'DomicileRW'=>$request->input('DomicileRW'),
          'DomicileRT'=>$request->input('DomicileRT'),
          'CopyID'=>$request->input('CopyID'),
          'DomicileCity'=>$request->input('DomicileCity'),
           'IDCardPostalCode'=>$request->input('IDCardPostalCode'),
           'ContactPersonHomePhone'=>$request->input('ContactPersonHomePhone'),
           'ResidencyNStatus'=>$request->input('ResidencyNStatus'),
           'ContactPersonName'=>$request->input('ContactPersonName'),
           'ContactPersonRelation'=>$request->input('ContactPersonRelation'),
           'ContactPersonMobilePhone'=>$request->input('ContactPersonMobilePhone'),
           
        ]);

        return response()->json(['message' => 'Data berhasil ditambahkan', 'data' => $customeraddress], 201);

    }
}
