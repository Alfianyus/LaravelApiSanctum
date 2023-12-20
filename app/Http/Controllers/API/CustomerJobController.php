<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerJob;
use Validator;

class CustomerJobController extends Controller
{
    public function customer_job(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'Occupation' => 'required',
        ]);
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $customerjob = CustomerJob::create([
            'Occupation'=>$request->input('Occupation'),
            'Position'=>$request->input('Position'),
            'NatureOfBusiness'=>$request->input('NatureOfBusiness'),
            'CompanyName'=>$request->input('CompanyName'),
            'SpouseOccupation'=>$request->input('SpouseOccupation'),
            'IncomePerAnnum'=>$request->input('IncomePerAnnum'),
            'FundSource'=>$request->input('FundSource'),
        ]);
        return response()->json(['message'=> 'Data Berhasil ditambahkan', 'data' => $customerjob], 201);
    }
}
