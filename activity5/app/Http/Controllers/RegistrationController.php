<?php

namespace App\Http\Controllers;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index ()
    {
        $registrations = Registration::all()->toArray();
        return response()->json($registrations);

    }
    public function create(Request $request)
    {
        Registration::create([
            "last_name"=> $request->last_name,
            "first_name" => $request->first_name,
            "email_address" => $request->email_address,
            "age_number" => $request->age_number,
            "phone_number" => $request -> phone_number,
        ]);
            return "Record created";
    }
    public function get($id)
    {
        $registrations = Registration::find($id)->toArray();
        return response()->json($registrations);
    }
    public function delete($id)
    {
        Registration::find($id)->delete();
        return "Record deleted";
    }
}
