<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <!-- Styles -->
        {{--<style>--}}
            {{--html, body {--}}
                {{--background-color: #fff;--}}
                {{--color: #636b6f;--}}
                {{--/*font-family: 'Raleway', sans-serif;*/--}}
                {{--font-weight: 100;--}}
                {{--height: 100vh;--}}
                {{--margin: 0;--}}
            {{--}--}}

            {{--.full-height {--}}
                {{--height: 100vh;--}}
            {{--}--}}

            {{--.flex-center {--}}
                {{--align-items: center;--}}
                {{--display: flex;--}}
                {{--justify-content: center;--}}
            {{--}--}}

            {{--.position-ref {--}}
                {{--position: relative;--}}
            {{--}--}}

            {{--.top-right {--}}
                {{--position: absolute;--}}
                {{--right: 10px;--}}
                {{--top: 18px;--}}
            {{--}--}}

            {{--.content {--}}
                {{--text-align: center;--}}
            {{--}--}}

            {{--.title {--}}
                {{--font-size: 84px;--}}
            {{--}--}}

            {{--.links > a {--}}
                {{--color: #636b6f;--}}
                {{--padding: 0 25px;--}}
                {{--font-size: 12px;--}}
                {{--font-weight: 600;--}}
                {{--letter-spacing: .1rem;--}}
                {{--text-decoration: none;--}}
                {{--text-transform: uppercase;--}}
            {{--}--}}

            {{--.m-b-md {--}}
                {{--margin-bottom: 30px;--}}
            {{--}--}}
        {{--</style>--}}
        <style>

            body {
                background-color: #e9ebee;
            }

            .h2 {
                text-align: center;
                font-size: 25px;
                margin-bottom: 0px;
                border: 1px solid #3c3c3c;
                padding: 20px 0 20px 0;
                background-color: #4267b2;
                color: #fff;
                font-family: 'Arima Madurai', cursive;
            }

            .h3 {
                text-align: left;
                font-size: 20px;
                padding: 0 0 20px 0;
                text-transform: uppercase;
                color: #000;
            }

            .p {
                text-align: center;
                font-size: 16px;
                padding: 10px 50px 10px 50px;
                line-height: 25px;
                margin-bottom: 15px;
                /*text-transform: uppercase;*/

                /*border: 1px solid black;*/
            }

            .p-footer {
                text-align: center;
                padding: 20px 0 20px 0;
                margin-top: 20px;
                font-size: 17px;
                color: #fff;
                background-color: #4a4848;
            }

            .p-footer-a {
                color: #ffd600;
                text-decoration: none;
            }

            .p-footer-a:hover {
                color: #bda005;
                text-decoration: none;
            }

            /* Full-width input fields */
            input[type=text], input[type=password], input[type=date], textarea {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            input[type=checkbox] {
                /*padding: 255px 20px 20px 20px;*/
                margin: 40px 10px 10px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            .select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            .span {
                color: #ff0000;
            }
            /* Set a style for all buttons */
            button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }

            /* Extra styles for the cancel button */
            .cancelbtn {
                padding: 14px 20px;
                background-color: #f44336;
                margin-left: 10px;
            }

            /* Float cancel and signup buttons and add an equal width */
            .cancelbtn,.signupbtn {
                float: left;
                width: 45%;
            }

            /* Add padding to container elements */
            .container {
                padding: 16px;
            }

            /* Clear floats */
            .clearfix::after {
                content: "";
                clear: both;
                display: table;
            }

            a.default {
                text-decoration: none;
            }

            /* Change styles for cancel button and signup button on extra small screens */
            @media screen and (max-width: 300px) {
                .cancelbtn, .signupbtn {
                    width: 100%;
                }
            }

            .section {
                border:1px solid #ccc;
                padding: 20px 50px 50px 50px;
            }

            .martop30 {
                margin-top: 30px;
            }

            .marbot30 {
                margin-bottom: 30px;
            }

            .notice-header {
                text-align: left;
                font-size: 21px;
                padding: 0 0 10px 185px;
                text-transform: uppercase;
                color: #7d0808;
            }

            .notice-frame {
                border:3px solid #a91c1c;
                margin: 0px 75px 0px 75px;
                background-color: rgba(255, 0, 0, 0.15);
            }

            .notice-body {
                margin: 20px 0 40px 225px;
            }

            .notice-p {
                color: #000;
                font-size: 16px;
                line-height: 18px;
                font-weight: 600;
            }

            .notice-span {
            //font-style: italic;
                color: #883b3b;
            }

            .h3-span {
                /* text-align: left; */
                font-size: 15px;
                /* padding: 0px 0px 20px 0; */
                text-transform: none;
                color: #676464;
            }

        </style>
    </head>
    <body>
        {{--<div class="flex-center position-ref full-height">--}}
            {{--@if (Route::has('login'))--}}
                {{--<div class="top-right links">--}}
                    {{--@auth--}}
                        {{--<a href="{{ url('/home') }}">Home</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ route('login') }}">Login</a>--}}
                        {{--<a href="{{ route('register') }}">Register</a>--}}
                    {{--@endauth--}}
                {{--</div>--}}
            {{--@endif--}}
        {{--</div>--}}
        {{--@if(!empty($errors->first('name')))--}}
            {{--<div class="row col-lg-12">--}}
                {{--<div class="alert alert-danger">--}}
                    {{--<span>{{ $errors->first('name') }}</span>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@endif--}}
        <a href="https://www.facebook.com/cybertechInt.lk/"><img src="logo.png" style="margin-left:100px; height: 85px; width: auto; position: absolute;" /><a/>
            <h2 class="h2">Signup Form to register for Cybertech Int team</h2>
            <p class="p">Fill all below fields to complete your application. If you have arised any inconvenience please call <a class="default" href="tel:(+94)713399099">(+94) 71-33 99 099</a> or email us your details to <a class="default" href="mailto:lakshitha@teamcybertech.com">Apply@teamcybertech.com</a></p>

            <div class="notice-frame">
                <h3 class="notice-header">Vacancies available to apply!</h3>
                <div class="notice-body">

                    <p class="notice-p"># Laraval Developers - <span class="notice-span">Work Online</span></p>
                    <p class="notice-p"># UI Developers - <span class="notice-span">Work Online</span></p>
                    <p class="notice-p"># Business Developers - <span class="notice-span">Work Online</span></p>
                    <p class="notice-p"># WordPress Developers - <span class="notice-span">Work Online</span></p>
                    <p class="notice-p"># React Native Developers - <span class="notice-span">Work Online</span></p>
                </div>
            </div>

            <form id="myForm" action="/home" enctype="multipart/form-data" method="POST" novalidate>
                <div class="container">
                    {{ csrf_field() }}
                    <div class="section">
                        <h3 class="h3">Personal details.</h3>
                        <label><b>Name in Full</b> <span class="span">*</span></label>
                        <input type="text" placeholder="Enter your name in full" name="name" required>
                        @if(!empty($errors->first('name')))
                            <div class="row col-lg-12">
                                <div class="alert alert-danger">
                                    <span>{{ $errors->first('name') }}</span>
                                </div>
                            </div>
                        @endif

                        <label><b>Address</b> <span class="span">*</span></label>
                        <input type="text" placeholder="Enter your Residence Address" name="address" required>
                        @if(!empty($errors->first('address')))
                            <div class="row col-lg-12">
                                <div class="alert alert-danger">
                                    <span>{{ $errors->first('address') }}</span>
                                </div>
                            </div>
                        @endif

                        <label><b>Email</b> <span class="span">*</span></label>
                        <input type="text" placeholder="Enter your Email address" name="email" required>
                        @if(!empty($errors->first('email')))
                            <div class="row col-lg-12">
                                <div class="alert alert-danger">
                                    <span>{{ $errors->first('email') }}</span>
                                </div>
                            </div>
                        @endif

                        <label><b>Mobile Number</b> <span class="span">*</span></label>
                        <input type="text" placeholder="Enter your Mobile Number" name="mobileNumber" required>
                        @if(!empty($errors->first('mobileNumber')))
                            <div class="row col-lg-12">
                                <div class="alert alert-danger">
                                    <span>{{ $errors->first('mobileNumber') }}</span>
                                </div>
                            </div>
                        @endif

                        <label><b>Date of Birth</b> <span class="span">*</span></label>
                        <input type="date" placeholder="Enter your Birthday" name="birthday" required>
                        @if(!empty($errors->first('birthday')))
                            <div class="row col-lg-12">
                                <div class="alert alert-danger">
                                    <span>{{ $errors->first('birthday') }}</span>
                                </div>
                            </div>
                        @endif

                        <label><b>NIC Number</b> <span class="span">*</span></label>
                        <input type="text" placeholder="Enter your NIC Number" name="nicNumber" required>
                        @if(!empty($errors->first('nicNumber')))
                            <div class="row col-lg-12">
                                <div class="alert alert-danger">
                                    <span>{{ $errors->first('nicNumber') }}</span>
                                </div>
                            </div>
                        @endif

                        <label><b>Your CV</b> <span class="span">*</span></label>
                        <div style="border:1px solid #ccc; padding: 10px 0 10px 20px; margin-top: 10px; background-color: #ffffff;">
                            <input type="file" placeholder="Enter your NIC Number" name="fileToUpload" required> <span class="span">Please note: file size should be below than 2mb</span>
                        </div>
                        @if(!empty($errors->first('fileToUpload')))
                            <div class="row col-lg-12">
                                <div class="alert alert-danger">
                                    <span>{{ $errors->first('fileToUpload') }}</span>
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="section martop30">
                        <h3 class="h3">Professional details.</h3>
                        <label><b>what is the position you need to apply?</b> <span class="span">*</span></label>
                        <select class="select" name="positionApply" id="positionApply">
                            <option value="Laraval Developer">Laraval Developer</option>
                            <option value="UI Developer">UI Developer</option>
                            <option value="Business Developer">Business Developer</option>
                            <option value="WordPress Developer">WordPress Developer</option>
                            <option value="React Native Developer">React Native Developer</option>
                        </select>
                        @if(!empty($errors->first('positionApply')))
                            <div class="row col-lg-12">
                                <div class="alert alert-danger">
                                    <span>{{ $errors->first('positionApply') }}</span>
                                </div>
                            </div>
                        @endif

                        <label><b>Previously worked company</b> <span class="span">*</span></label>
                        <input type="text" placeholder="Enter the company name that you have been worked at last..." name="lastcompany" required>
                        @if(!empty($errors->first('lastcompany')))
                            <div class="row col-lg-12">
                                <div class="alert alert-danger">
                                    <span>{{ $errors->first('lastcompany') }}</span>
                                </div>
                            </div>
                        @endif

                        <label><b>Your job tittle</b> <span class="span">*</span></label>
                        <input type="text" placeholder="Ex: Marketing Assistant, Software Engineer, UI/UX designer, etc..." name="lasttitle" required>
                        @if(!empty($errors->first('lasttitle')))
                            <div class="row col-lg-12">
                                <div class="alert alert-danger">
                                    <span>{{ $errors->first('lasttitle') }}</span>
                                </div>
                            </div>
                        @endif

                        <label><b>Monthly salary was</b></label>
                        <input type="text" placeholder="Ex: 25000 LKR" name="lastsalary">
                        @if(!empty($errors->first('lastsalary')))
                            <div class="row col-lg-12">
                                <div class="alert alert-danger">
                                    <span>{{ $errors->first('lastsalary') }}</span>
                                </div>
                            </div>
                        @endif

                        <label><b>Experience in years</b> <span class="span">*</span></label>
                        <input type="text" placeholder="Ex: 2 1/2 years, etc..." name="experience" required>
                        @if(!empty($errors->first('experience')))
                            <div class="row col-lg-12">
                                <div class="alert alert-danger">
                                    <span>{{ $errors->first('experience') }}</span>
                                </div>
                            </div>
                        @endif

                        <label><b>Areas you're expertise with</b></label>
                        <textarea placeholder="Ex: Sales & marketing, PHP, Laraval, Java, CSS, Jscript, Bootstrap, etc..." name="notes" rows="7"></textarea>
                        @if(!empty($errors->first('notes')))
                            <div class="row col-lg-12">
                                <div class="alert alert-danger">
                                    <span>{{ $errors->first('notes') }}</span>
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="section martop30">
                        <h3 class="h3">Account details. <span class="h3-span">(All payments will be deposited to this account)</span></h3>
                        <label><b>Bank Account Number</b> <span class="span">*</span></label>
                        <input type="text" placeholder="Enter your Account Number" name="accNumber" required>
                        @if(!empty($errors->first('accNumber')))
                            <div class="row col-lg-12">
                                <div class="alert alert-danger">
                                    <span>{{ $errors->first('accNumber') }}</span>
                                </div>
                            </div>
                        @endif

                        <label><b>Account Holder's Name</b> <span class="span">*</span></label>
                        <input type="text" placeholder="Enter Account holder's Name" name="accName" required>
                        @if(!empty($errors->first('accName')))
                            <div class="row col-lg-12">
                                <div class="alert alert-danger">
                                    <span>{{ $errors->first('accName') }}</span>
                                </div>
                            </div>
                        @endif

                        <label><b>Bank Name</b> <span class="span">*</span></label>
                        <input type="text" placeholder="Enter Bank Name" name="bankName" required>
                        @if(!empty($errors->first('bankName')))
                            <div class="row col-lg-12">
                                <div class="alert alert-danger">
                                    <span>{{ $errors->first('bankName') }}</span>
                                </div>
                            </div>
                        @endif

                        <label><b>Branch</b> <span class="span">*</span></label>
                        <input type="text" placeholder="Enter your Branch" name="branch" required>
                        @if(!empty($errors->first('branch')))
                            <div class="row col-lg-12">
                                <div class="alert alert-danger">
                                    <span>{{ $errors->first('branch') }}</span>
                                </div>
                            </div>
                        @endif

                        <input type="checkbox" name="agreement" id="agreement" required><label for="agreement">By clicking "Submit" you agree to our Terms of Use and Privacy Policy also acknowledge that data you provide are correct & accurate.</label>
                        @if(!empty($errors->first('agreement')))
                            <div class="row col-lg-12">
                                <div class="alert alert-danger">
                                    <span>{{ $errors->first('agreement') }}</span>
                                </div>
                            </div>
                        @endif

                        <div class="clearfix" style="width: 100%; padding-left: 65%; margin-top: 30px;">
                            <button type="submit" class="signupbtn">Submit</button>
                            <button type="button" class="cancelbtn" onclick="myFunction()">Reset</button>
                        </div>

                    </div>
                </div>

                <footer>
                    <div>
                        <p class="p-footer">Copyright &copy; 2016-2018 @ Cybertech Int (pvt) Ltd. Powered by <a class="p-footer-a" href="http://www.cybertechint.lk" target="_blank">Cybertech Int</a> team. Your details are End to End encrypted with this form.</p>
                    </div>
                </footer>
            </form>
    </body>
</html>
