<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CustomerBank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerBankController extends Controller
{
    public function customer_bank(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'BankName'=>'required|regex:/^[a-zA-Z\s]+$/',
            'BankOwner'=>'required|regex:/^[a-zA-Z\s]+$/',
            'BankNumber'=>'required|numeric',
            'BankCabang'=>'required|regex:/^[a-zA-Z\s]+$/',
            'QuestionRDN'=>'required|numeric|digits:1',
        ]);
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $customerbank = CustomerBank::create([
            'BankName'=>$request->input('BankName'),
            'BankOwner' =>$request->input('BankOwner'),
            'BankNumber'=>$request->input('BankNumber'),
            'BankCabang'=>$request->input('BankCabang'),
            'QuestionRDN'=>$request->input('QuestionRDN'),
        ]);

        return response()->json(['message'=> 'Data Berhasil Ditambahkan', 'data' => $customerbank], 201);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerBank $customerBank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomerBank $customerBank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CustomerBank $customerBank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerBank $customerBank)
    {
        //
    }
}
