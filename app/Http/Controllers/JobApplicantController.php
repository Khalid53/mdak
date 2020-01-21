<?php

namespace App\Http\Controllers;

use App\JACUSingUp;
use App\JobApplicant;
use Illuminate\Http\Request;
use Session;

class JobApplicantController extends Controller
{
    public function jobApplicantDetailsInfo () {
        $jobApplicants = JobApplicant::orderBy('jaid', 'desc')->get();

        return view('front-end.job.job-applicant-details', [ 'jobApplicants' => $jobApplicants] );
    }


    public function jcuDashboardLogin (Request $request) {
        $jacUser = JACUSingUp::where('email_address', $request->email)->first();
        if ($jacUser) {
            if (password_verify($request->password, $jacUser->password)) {

                Session::put('jacUserId', $jacUser->jacu_id);
                Session::put('jacUserName', $jacUser->jacu_user_name);

                return redirect('/job-applicant-details');
            } else {
                return redirect('/')->with('message', 'This password is not valid, please enter your valid password !!');
            }
        } else {
            return redirect('/jcu-login')->with('message', 'This email address is not valid, please enter your valid email address !!');
        }


    }


    public function deleteJobApplicantInfo ($id) {
        $jobApplicant = JobApplicant::find($id);
        unlink($jobApplicant->cv);
        $jobApplicant->delete();

        return redirect()->back()->with('message', 'Job applicant info deleted successfully !!');
    }










}
