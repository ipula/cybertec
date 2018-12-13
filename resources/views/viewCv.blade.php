@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Candidate Details</div>

                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>{{$user->name}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{$user->email}}</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>{{$user->address}}</td>
                                </tr>
                                <tr>
                                    <td>Mobile</td>
                                    <td>{{$user->mobileNumber}}</td>
                                </tr>
                                <tr>
                                    <td>Birthday</td>
                                    <td>{{$user->birthday}}</td>
                                </tr>
                                <tr>
                                    <td>NIC</td>
                                    <td>{{$user->nicNumber}}</td>
                                </tr>
                                <tr>
                                    <td>File(CV)</td>
                                    <td>{{$user->cv_path}}</td>
                                </tr>
                                <tr>
                                    <td>Position Apply</td>
                                    <td>{{$user->positionApply}}</td>
                                </tr>
                                <tr>
                                    <td>Last Company</td>
                                    <td>{{$user->lastcompany}}</td>
                                </tr>
                                <tr>
                                    <td>Last Title</td>
                                    <td>{{$user->lasttitle}}</td>
                                </tr>
                                <tr>
                                    <td>Last Salary</td>
                                    <td>{{$user->lastsalary}}</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>{{$user->name}}</td>
                                </tr>
                                <tr>
                                    <td>Experience</td>
                                    <td>{{$user->experience}}</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>{{$user->name}}</td>
                                </tr>
                                <tr>
                                    <td>Notes</td>
                                    <td>{{$user->notes}}</td>
                                </tr>
                                <tr>
                                    <td>Bank Account Number</td>
                                    <td>{{$user->accNumber}}</td>
                                </tr>
                                <tr>
                                    <td>Bank Account Name</td>
                                    <td>{{$user->accName}}</td>
                                </tr>
                                <tr>
                                    <td>Bank Name</td>
                                    <td>{{$user->bankName}}</td>
                                </tr>
                                <tr>
                                    <td>Bank Branch Name</td>
                                    <td>{{$user->branch}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
