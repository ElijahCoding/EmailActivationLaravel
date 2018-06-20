<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActivationResendController extends Controller
{
    public function showResendForm()
    {
      return view('auth.activate.resend');
    }
}
