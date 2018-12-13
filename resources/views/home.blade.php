@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">Dashboard</div>--}}

                {{--<div class="card-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Apply Role</th>
                            <th>Mobile</th>
                            <th>Status</th>
                            <th>View</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->positionApply}}</td>
                            <td>{{$user->mobileNumber}}</td>
                            <td>@if($user->status==0)
                                    <button type="button" class="btn btn-warning" disabled>Pending</button>
                                @elseif($user->status==1)
                                    <button type="button" class="btn btn-success" disabled>Selected</button>
                                @else
                                    <button type="button" class="btn btn-danger" disabled>Rejected</button>
                                @endif</td>
                            <td> <a target="_blank" rel="noopener noreferrer" class="btn btn-info" href="{{url('/view/'.$user->id)}}">View</a></td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
