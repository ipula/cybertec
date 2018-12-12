<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidateReq extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' =>'required',
            'address' =>'required',
            'email' =>'required',
            'mobileNumber' =>'required',
            'birthday' =>'required' ,
            'nicNumber' =>'required' ,
            'positionApply' =>'required' ,
            'lastcompany' =>'required' ,
            'lasttitle' =>'required' ,
            'lastsalary' =>'required' ,
            'experience' =>'required' ,
            'notes' =>'required' ,
            'accNumber' =>'required' ,
            'accName' =>'required' ,
            'bankName' =>'required' ,
            'branch' =>'required',
            'agreement' =>'required',
            'fileToUpload' =>'required|mimes:doc,pdf,docx|max:5120'
        ];
    }

    public function messages()
    {

        return [
            'name.required'=>'Name Required',
            'address.required'=>'Address Required',
            'email.required'=>'Email Required',
            'mobileNumber.required'=>'Mobile Required',
            'birthday.required'=>'Birthday Required',
            'nicNumber.required' =>'NIC Required',
            'positionApply.required'=>'Position Apply Required',
            'lastcompany.required'=>'Last Company Required',
            'lasttitle.required' =>'Last Title Required',
            'lastsalary.required' =>'Last Salary Required',
            'experience.required' =>'Experience Name Required',
            'notes.required' =>'Notes Required',
            'accNumber.required' =>'Account Number Required',
            'accName.required' =>'Account Name Required',
            'bankName.required' =>'Bank Name Required',
            'branch.required' =>'Branch Required',
            'agreement.required' =>'Agreement Need to be Checked',
            'fileToUpload.required' =>'CV Required',
            'fileToUpload.mimes' =>'Only PDF,DOCX,DOC allowed',
            'fileToUpload.max' =>'Max File size is 2MB'

        ];
    }
}
