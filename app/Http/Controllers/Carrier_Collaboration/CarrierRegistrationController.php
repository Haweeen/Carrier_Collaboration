<?php

namespace App\Http\Controllers\Carrier_Collaboration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarrierRegistrationController extends Controller
{
  public function index()
  {
    return view('content.Carrier_Collaboration.CarrierRegistration');
  }
}
