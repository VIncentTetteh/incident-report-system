@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Record</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('reports.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your input code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('reports.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Flagstate:</strong>
                <div class="form-group">
                  <label for=""></label>
                  <select class="form-control" name="flagstate" id="">
                    <option>Normal</option>
                    <option>Bad</option>
                    <option>Managed</option>
                  </select>
                </div>
                {{-- <input type="text" name="flagstate" class="form-control" placeholder="Flagstate"> --}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>country:</strong>
                <div class="form-group">
                  <label for=""></label>
                  <select class="form-control" name="country" id="">
                    <option>Ghana</option>
                    <option>America</option>
                    <option>China</option>
                  </select>
                </div>
                {{-- <input type="text" name="country" class="form-control" placeholder="country"> --}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>vessel:</strong>
                <div class="form-group">
                  <label for=""></label>
                  <select class="form-control" name="vessel" id="">
                    <option>Gold</option>
                    <option>Diamond</option>
                    <option>Amors</option>
                  </select>
                </div>
                {{-- <input type="text" name="vessel" class="form-control" placeholder="vessel"> --}}
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>location:</strong>
                <div class="form-group">
                  <label for=""></label>
                  <select class="form-control" name="location" id="">
                    <option>Tema</option>
                    <option>Accra</option>
                    <option>Kumasi</option>
                  </select>
                </div>
                {{-- <input type="text" name="location" class="form-control" placeholder="location"> --}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>agency:</strong>
                <div class="form-group">
                  <label for=""></label>
                  <select class="form-control" name="agency" id="">
                    <option>Airforce</option>
                    <option>Navy</option>
                    <option>Army</option>
                  </select>
                </div>
                {{-- <input type="text" name="agency" class="form-control" placeholder="agency"> --}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>type:</strong>
                <div class="form-group">
                  <label for=""></label>
                  <select class="form-control" name="type" id="">
                    <option>Normal</option>
                    <option>Severely</option>
                    <option>Bad</option>
                  </select>
                </div>
                {{-- <input type="text" name="type" class="form-control" placeholder="type"> --}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date:</strong>
                <input type="date" name="date" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>action:</strong>
                <div class="form-group">
                  <label for=""></label>
                  <select class="form-control" name="action" id="">
                    <option>Approved</option>
                    <option>Pending</option>
                  </select>
                </div>
                {{-- <input type="text" name="action" class="form-control" placeholder="action"> --}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>

</form>
@endsection
