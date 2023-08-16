<?php

namespace App\Http\Controllers\Api;

//ezekiel.k@novajii.com send the github link, send your phone and name

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
class RegistrationController extends Controller
{
    public function register(RegistrationRequest $request)
    {
        $response = [
            'phone_number' => $request->phone_number,
            'mobile_network' => $request->mobile_network,
            'status' => 'success',
            'message' => 'Registration successful',
        ];
        return response()->json($response);
    }
}
