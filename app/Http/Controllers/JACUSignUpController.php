<?php

namespace App\Http\Controllers;

use App\JACUSingUp;
use Illuminate\Http\Request;
use Session;

class JACUSignUpController extends Controller
{
    public function index () {
        $jacUsers = JACUSingUp::orderBy('jacu_id', 'desc')->get();
        return view('admin.jacu-signup.jacu-signup', [ 'jacUsers' => $jacUsers ] );
    }

    protected function jobApplicantControllerUserValidation ($request) {
        $this->validate($request, [
            'jacu_user_name'        =>  'required|regex:/[A-Za-z. -]/|max:255',
            'email_address'         =>  'required|email|regex:/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}/',
            'password'              =>  'required',
            'p_number'              =>  'required',
            'type'                  =>  'required',
        ]);
    }

    public function addJobApplicantControlUser (Request $request) {
        $this->jobApplicantControllerUserValidation($request);
        $jacUser = new JACUSingUp();
        $jacUser->jacu_user_name                =   $request->jacu_user_name;
        $jacUser->email_address                 =   $request->email_address;
        $jacUser->password                      =   bcrypt($request->password);
        $jacUser->p_number                      =   $request->p_number;
        $jacUser->type                          =   $request->type;
        $jacUser->save();

        Session::put('jacUserId', $jacUser->jacu_id);
        Session::put('jacUserName', $jacUser->jacu_user_name);

        return redirect('/job-applicant-details');
    }

    public function jcuDashboardLogout (Request $request) {
        Session::forget('jacUserId');
        Session::forget('jacUserName');

        return redirect('/');
    }

    public function jobApplicantControllerUserEmailCheck ($email) {
        $jacUser = JACUSingUp::where('email_address', $email)->first();
        if ($jacUser) {
            echo 'Email address exist';
        } else {
            echo 'Email address available';
        }
    }



}
