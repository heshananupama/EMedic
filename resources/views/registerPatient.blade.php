@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if(Session::has('flash_message'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <strong> {!! session('flash_message') !!} </strong>
                </div>
            @endif
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <strong>There were some problems</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>

                </div>
            @endif

        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">


                <br>


                <form  style="background-color: white;padding: 10px;" class="form-horizontal rounded " role="form" method="POST"
                       action="{{ url('/patientRegister') }}">
                    {{ csrf_field() }}
                    <div class="row">

                        <div class="col-sm-3">

                        </div>


                        <div class="col-sm-6" style="text-align: center">
                            <h3 style="font-weight: 900;color: #0f7864">Patient Registration</h3>

                        </div>
                        <div class="col-sm-3"></div>

                    </div>
                    <br>

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="name" class="col-form-label">Name</label>
                        </div>

                        <div class="col-sm-4" >
                            <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">

                                <input id="firstName" type="text" placeholder="First Name" class="form-control"
                                       name="firstName" value="{{ old('firstName') }}" autofocus>

                                @if ($errors->has('firstName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class="form-group{{ $errors->has('secondName') ? ' has-error' : '' }}">

                                <input id="secondName" type="text" placeholder="Last Name" class="form-control"
                                       name="secondName" value="{{ old('secondName') }}" autofocus>

                                @if ($errors->has('secondName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('secondName') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                        <div class="col-sm-3"></div>

                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="name" class="col-form-label">Gender</label>
                        </div>
                        <div class="col-sm-2" style="padding-left: 0px;">
                            <select  class="form-control" name="gender" id="">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>

                            </select>
                        </div>

                        <div class="col-sm-8"></div>

                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="mobile" class="col-form-label">Mobile</label>

                        </div>
                        <div class="col-sm-4">
                            <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">


                                <input id="email" type="number" class="form-control" name="mobile"
                                       value="{{ old('mobile') }}" >

                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif

                            </div>

                        </div>


                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="address" class="col-form-label">Address</label>

                        </div>
                        <div class="col-sm-9">
                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">


                                <input placeholder="" id="address" type="text" class="form-control" name="address"
                                       value="{{ old('address') }}"  >

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif

                            </div>

                        </div>

                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="email" class="col-form-label">Guardian Number</label>

                        </div>
                        <div class="col-sm-6">
                            <div class="form-group{{ $errors->has('gNumber') ? ' has-error' : '' }}">


                                <input id="gNumber" type="number" class="form-control"
                                       name="gNumber"
                                       value="{{ old('gNumber') }}" required>

                                @if ($errors->has('gNumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gNumber') }}</strong>
                                    </span>
                                @endif

                            </div>

                        </div>
                        <div class="col-sm-4"></div>

                    </div>


                    <div class="form-group row">
                        <div class="col-sm-2"><label for="password" class="col-form-label">Age</label></div>
                        <div class="col-sm-3">
                            <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">

                                <input   id="age" type="number"
                                         class="form-control" name="age"
                                         required>

                                @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-7"></div>

                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2"><label for="password-confirm" class="col-form-label">Disease
                            </label></div>
                        <div class="col-sm-6">
                            <div class="form-group{{ $errors->has('disease') ? ' has-error' : '' }}">

                                <input   id="disease" type="text"
                                         class="form-control"
                                         name="disease"
                                         required>

                                @if ($errors->has('disease'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('disease') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                    </div>



                    <div class="form-group row">

                        <div style="text-align: center" class="col-sm-4 col-sm-offset-4">
                            <button  type="submit" class="btn btn-success btn-lg">
                                Register
                            </button>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
