@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Record</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('reports.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check input field code<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('reports.update', $maritimerecords->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" vlaue="{{$maritimerecords->name}}" class="form-control" placeholder="Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Flagstate:</strong>
                <input type="text" name="flagstate" vlaue="{{$maritimerecords->flagstate}}" class="form-control" placeholder="Flagstate">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>country:</strong>
                <input type="text" name="country" vlaue="{{$maritimerecords->country}}" class="form-control" placeholder="country">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>vessel:</strong>
                <input type="text" name="vessel" vlaue="{{$maritimerecords->vessel}}" class="form-control" placeholder="vessel">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>location:</strong>
                <input type="text" name="location" vlaue="{{$maritimerecords->location}}" class="form-control" placeholder="location">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>agency:</strong>
                <input type="text" name="agency" vlaue="{{$maritimerecords->agency}}" class="form-control" placeholder="agency">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>type:</strong>
                <input type="text" name="type" vlaue="{{$maritimerecords->type}}" class="form-control" placeholder="type">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date:</strong>
                <input type="date" name="date" vlaue="{{$maritimerecords->date}}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>action:</strong>
                <input type="text" name="action" vlaue="{{$maritimerecords->action}}" class="form-control" placeholder="action">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        </div>

    </form>
@endsection
