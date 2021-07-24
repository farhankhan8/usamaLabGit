@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header"> 
            Test Detail
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <b> <label for="user_id">Test Name</label></b>
                        <p>{{ $testPerformedsId->availableTest->name ?? '' }}</p>
                    </div>
                    <div class="col">
                        <b> <label for="user_id">Patient Name</label></b>
                        <p>{{ $testPerformedsId->patient->Pname ?? '' }}</p>
                    </div>
                    <div class="col">
                        <b> <label for="user_id">Type</label></b>
                        <p>{{ $testPerformedsId->type ?? '' }}</p>
                    </div>
                    <div class="col">
                        <b> <label for="user_id">Referred By</label></b>
                        <p>{{ $testPerformedsId->referred ?? '' }}</p>
                    </div>
                    <div class="col">
                        <b> <label for="user_id">Status</label></b>
                        @if ($testPerformedsId->Sname_id =='1')
                            <button class="btn btn-xs btn-success">Progressing</button>
                            @elseif ($testPerformedsId->Sname_id =='2')
                            <button class="btn btn-xs btn-info">Verified</button>
                            @elseif ($testPerformedsId->Sname_id =='3')
                            <button class="btn btn-xs btn-success">Not Received</button>
                            @elseif ($testPerformedsId->Sname_id =='4')
                            <button class="btn btn-xs btn-danger">Cancelled</button>
                            @else
                            <button class="btn btn-xs btn-info">No Data</button>
                        @endif
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-3 mb-3">
                            <a class="btn btn-ls btn-primary" href="{{ route('test-performed-back') }}">Back</a>                       
                         </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
