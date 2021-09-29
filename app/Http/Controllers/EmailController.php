<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FirstEmail;

class EmailController extends Controller
{
    public function contact() {

        $to_email = "ozgancan9@gmail.com";

        Mail::to($to_email)->send(new FirstEmail);

        return "<p> Success! Your E-mail has been sent.</p>";

    }
}