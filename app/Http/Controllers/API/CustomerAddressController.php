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
            'IDCardAddress' => 'required',
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
          'CopyID'=>$request->input('CopyID'),
          'DomicileCity'=>$request->input('DomicileCity'),
           'CIFProvinceName'=>$request->input('CIFProvinceName'),
           'IDCardPostalCode'=>$request->input('IDCardPostalCode'),
           'CIFLookupDescription'=>$request->input('CIFLookupDescription'),
           'ContactPersonHomePhone'=>$request->input('ContactPersonHomePhone'),
           'ResidencyNStatus'=>$request->input('ResidencyNStatus'),
           'ContactPersonName'=>$request->input('ContactPersonName'),
           'ContactPersonRelation'=>$request->input('ContactPersonRelation'),
           'ContactPersonMobilePhone'=>$request->input('ContactPersonMobilePhone'),
           
        ]);

        return response()->json(['message' => 'Data berhasil ditambahkan', 'data' => $customeraddress], 201);

    }
}
