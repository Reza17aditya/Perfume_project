<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;

class ContactusController extends Controller
{
    public function submitContactus(Request $request){
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'message' => 'required',
        ]);

        try{
            Contactus::create($validatedData);

            return response()->json([
                "status" => "success"
            ],201);

        }catch(\Exception $e){
            return response()->json([
                "status" => "unsuccess",
                "message" => $e->getMessage()
            ],422); 
        }
    } 

    public function show($contactus_id)
    {
        return view('pages.main.contactus', [
            'current_page' => 'contactus',
            'page_title' => 'Contact Us',
            'detail' => Contactus::find($contactus_id),
            'javascript_file' => ''
        ]);
    }
}
