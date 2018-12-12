<?php

namespace App\Http\Controllers;

use App\Candidates;
use App\Http\Requests\CandidateReq;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function addCv(CandidateReq $request)
    {
//        dd($request->all());
//        return view('home');
        $candidate = new Candidates();
        $candidate->name = $request->name;
        $candidate->address = $request->name;
        $candidate->email = $request->email;
        $candidate->mobileNumber = $request->mobileNumber;
        $candidate->birthday = $request->birthday;
        $candidate->nicNumber = $request->nicNumber;
        $candidate->positionApply = $request->positionApply;
        $candidate->lastcompany = $request->lastcompany;
        $candidate->lasttitle = $request->lasttitle;
        $candidate->lastsalary = $request->lastsalary;
        $candidate->experience = $request->experience;
        $candidate->notes = $request->notes;
        $candidate->accNumber = $request->accNumber;
        $candidate->accName = $request->accName;
        $candidate->bankName = $request->bankName;
        $candidate->branch = $request->branch;
        $candidate->cv_path = '/sadas';


        $cv=$request->fileToUpload;
        $file_extention = $cv->getClientOriginalExtension();
        $new_fileName = $request->name . '.' . $file_extention;
        $cv->move(public_path() . '/assets/cv/', $new_fileName); //normal cv save...

        if (file_exists(public_path() . '/assets/cv/' . $new_fileName)) {
            $candidate->cv_path='assets/cv/'.$new_fileName;
        }

        if($candidate->save()){
            return view('home');
        }else{

        }
    }
}
