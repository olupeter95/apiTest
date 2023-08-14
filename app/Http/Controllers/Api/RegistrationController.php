<?php

namespace App\Http\Controllers\Api;

//ezekiel.k@novajii.com send the github link, send your phone and name

use App\Models\User;
use App\Models\RefCode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    public function register(RegistrationRequest $request)
    {
         $user =  User::create([
            'phone_number' => $request->phone_number,
            'mobile_network' => $request->mobile_network,
        ]);
        // Store ref_code in the database
        RefCode::create([
            'user_id' => $user->id,
            'code' => $request->ref_code
        ]);

        // Create response
        $response = [
            'phone_number' => $request->phone_number,
            'mobile_network' => $request->mobile_network,
            'status' => 'success',
            'message' => 'Registration successful',
        ];

        return response()->json($response);
    }
}
