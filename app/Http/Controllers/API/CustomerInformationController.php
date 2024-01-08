<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerInformation;
use Illuminate\Support\Facades\Validator;

class CustomerInformationController extends Controller
{
    public function customer_information(Request $request)
    {
                $validator = Validator::make($request->all(),[
                    'FirstName' => 'required',
                ]);
                if ($validator->fails()) {
                    return response()->json(['errors' => $validator->errors()], 422); 
                }
                // Jika data valid, simpan ke dalam database
            $customer = CustomerInformation::create([
                    
                'IDCardNumber'=>$request->input('IDCardNumber'),
                'FirstName'=>$request->input('FirstName'),
                'BirthPlace'=>$request->input('BirthPlace'),
                'BirthDate'=>$request->date('BirthDate'),
                'Sex'=>$request->input('Sex'),
                'MaritalStatus'=>$request->input('MaritalStatus'),
                'Email'=>$request->input('Email'),
                'MobilePhone'=>$request->input('MobilePhone'),
                'Education'=>$request->input('Education'),
                'ResidencyNStatus'=>$request->input('ResidencyNStatus'),
                'InvestmentObjectives'=>$request->input('InvestmentObjectives'),
                // Isi kolom lainnya jika ada
            ]);

            return response()->json(['message' => 'Data berhasil ditambahkan', 'data' => $customer], 201);
    }
        // $customer = CustomerInformation::all();
        // return response()->json([
        //     'data'=>$customer,
        // ]);
}

