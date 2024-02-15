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
                    'IDCardNumber'=> 'required|numeric|digits:16',
                    'FirstName' => 'regex:/^[A-Za-z\s]+$/|string|max:255',
                    'BirthPlace'=>  'required|regex:/^[a-zA-Z\s]+$/',
                    'BirthDate' => 'required|date_format:Y-m-d',
                    'MotherName' => 'required|regex:/^[a-zA-Z\s]+$/',
                    'Email' => 'string|email|max:255',
                    'MobilePhone'=> 'required|regex:/^\+62-\d{11}$/',
                    'FilenameKTP'=>'required|regex:/^[a-zA-Z0-9_]+$/',
                    'KTPBase64' => 'required|string',
                    // 'KTPBase64' => 'image|mimes:jpeg,jpg|max:2048', // JPG dengan maksimum 2MB
                    'FilenameSelfie'=>'required|regex:/^[a-zA-Z0-9_]+$/',
                    // 'SelfieBase64' => 'image|mimes:jpeg,jpg|max:2048', // JPG dengan maksimum 2MB
                    'FilenameTandaTangan'=>'required|regex:/^[a-zA-Z0-9_]+$/',
                    // 'TandaTanganBase64' => 'image|mimes:jpeg,jpg|max:2048', // JPG dengan maksimum 2MB  

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
                'MotherName'=>$request->input('MotherName'),
                'Religion'=>$request->input('Religion'),
                'Email'=>$request->input('Email'),
                'MobilePhone'=>$request->input('MobilePhone'),
                'Education'=>$request->input('Education'),
                'InvestmentObjectives'=>$request->input('InvestmentObjectives'),
                'FilenameKTP'=>$request->input('FilenameKTP'),
                'KTPBase64'=>$request->input('KTPBase64'),
                'FilenameSelfie'=>$request->input('FilenameSelfie'),
                'SelfieBase64'=>$request->input('SelfieBase64'),
                'FilenameTandaTangan'=>$request->input('FilenameTandaTangan'),
                'TandaTanganBase64'=>$request->input('TandaTanganBase64'),
                // Isi kolom lainnya jika ada
            ]);

            return response()->json(['message' => 'Data berhasil ditambahkan', 'data' => $customer], 201);
    }
        // $customer = CustomerInformation::all();
        // return response()->json([
        //     'data'=>$customer,
        // ]);
}

