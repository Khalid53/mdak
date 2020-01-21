<?php

namespace App\Http\Controllers;

use App\JobApplicant;
use Illuminate\Http\Request;
use Mail;

class JobOfferController extends Controller
{
    protected function jobApplicantFormValidation ($request) {
        $this->validate($request, [
            'full_name'           =>  'required|regex:/[A-Za-z. -]/|max:255',
            'm_name'              =>  'required|regex:/[A-Za-z. -]/|max:255',
            'email'               =>  'required|email|regex:/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}/',
            'phone'               =>  'required',
            'present_address'     =>  'required',
            'dob'                 =>  'required',
            'blood'               =>  'required',
            'gender_info'         =>  'required',
            'marital_status'      =>  'required',
            'cv'                  =>  'required|file',
        ]);
    }

    protected function jobApplicantCVUpload ($request) {
        $applicantCV = $request->file('cv');
        $applicantFileName = $applicantCV->getClientOriginalName();
        $directory = 'job-applicant-cv/';
        $cvUrl = $directory.$applicantFileName;
        $applicantCV->move($directory, $applicantFileName);
        return $cvUrl;
    }
    protected function basicJobApplicantInfo ($request, $cvUrl) {
        $jobApplicant = new JobApplicant();
        $jobApplicant->full_name                  =   $request->full_name;
        $jobApplicant->m_name                     =   $request->m_name;
        $jobApplicant->email                      =   $request->email;
        $jobApplicant->phone                      =   $request->phone;
        $jobApplicant->present_address            =   $request->present_address;
        $jobApplicant->dob                        =   $request->dob;
        $jobApplicant->blood                      =   $request->blood;
        $jobApplicant->gender_info                =   $request->gender_info;
        $jobApplicant->marital_status             =   $request->marital_status;
        $jobApplicant->nid_card                   =   $request->nid_card;
        $jobApplicant->passport_number            =   $request->passport_number;
        $jobApplicant->cv                         =   $cvUrl;
        $jobApplicant->save();


        $data = $jobApplicant->toArray();
        Mail::send('front-end.mail.congratulations', $data, function ($message) use ($data) {
            $message->to($data['email']);
            $message->subject('Congratulations Mail');
        });
    }

    public function addJobApplicantInfo (Request $request) {
        $this->jobApplicantFormValidation($request);
        $cvUrl = $this->jobApplicantCVUpload($request);
        $this->basicJobApplicantInfo($request, $cvUrl);

        return redirect()->back()->with('message', 'Job applicant information save successfully !!');
    }

    public function jobApplicantEmailCheck ($email) {
        $jobApplicant = JobApplicant::where('email', $email)->first();
        if ($jobApplicant) {
            echo 'Email address exist';
        } else {
            echo 'Email address available';
        }
    }


}
