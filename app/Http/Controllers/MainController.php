<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {

        return view("main.index");
    }

    public function success()
    {
        return view("main.success");
    }

    public function submitHandler(Request $request)
    {
        $request->validate([
            "email" => "required|email"
        ], [
            "required" => "Valid email required",
            "email" => "Valid email required"
        ]);

        $userEmail = $request->input("email");

        session(["userEmail" => $userEmail]);
        return redirect("success");
    }
}
