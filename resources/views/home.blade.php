@extends('layouts.app')

@section('content')
  <div class="row">
      <div class="col-sm-6"></div>
      <div class="col-sm-4">
          <input type="text" placeholder="search">
      </div>

      <div class="col-sm-2">
          <a class="btn btn-success btn-block" href="{{url('/registerPatient')}}">Add New</a>

      </div>

  </div>
    <div class="container-fluid">
        <div class="table-responsive ">
            <table class="table table-hover" id="spareTable">


                <tr >
                    <th>Patient ID</th>
                    <th>Patient Name</th>
                    <th>Temp Value</th>
                    <th>BPM Value</th>
                    <th>Date/Time of Measurement</th>



                </tr>
                <tbody id="tableModel">

                @foreach($patients as $patient)

                    <tr>
                        <td>{{$patient->id}}</td>

                        <td>{{$patient->firstName}}</td>

                        <td>{{$patient->measurements->bpm}}</td>
                        <td>{{$patient->measurements->temp}}</td>
                        <td>{{$patient->measurements->created_at}}</td>




                    </tr>


                @endforeach
                </tbody>


            </table>
            <div style="text-align: center">


            </div>
        </div>

    </div>

@endsection
