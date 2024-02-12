<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerJob;
use Illuminate\Support\Facades\Validator;

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
            'CompanyAddress'=>$request->input('CompanyAddress'),
            'CompanyCity'=>$request->input('CompanyCity'),
            'CompanyPostalCode'=>$request->input('CompanyPostalCode'),
            'SpouseOccupation'=>$request->input('SpouseOccupation'),
            'IncomePerAnnum'=>$request->input('IncomePerAnnum'),
            'FundSource'=>$request->input('FundSource'),
            'QuestionNPWP'=>$request->input('QuestionNPWP'),
            'NPWPNumber'=>$request->input('NPWPNumber'),
            'NPWPReason'=>$request->input('NPWPReason'),
            'PositionText'=>$request->input('PositionText'),
            'NatureOfBusinessText'=>$request->input('NatureOfBusinessText'),
        ]);
        return response()->json(['message'=> 'Data Berhasil ditambahkan', 'data' => $customerjob], 201);
    }
}
