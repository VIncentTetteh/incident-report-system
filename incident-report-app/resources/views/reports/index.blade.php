@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Check all reports</h2>
            </div>
            
            <div class="container mb-3">
                <a class="btn btn-success" href="{{ route('reports.create') }}"> Create new Reports</a>
            </div>
            
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   <div style="height:600px; overflow; scroll; ">
    <table class="table table-bordered table-responsive-lg">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Flagstate</th>
            <th scope="col">country</th>
            <th scope="col">vessel</th>
            <th scope="col">location</th>
            <th scope="col">agency</th>
            <th scope="col">type</th>
            <th scope="col">date</th>
            <th scope="col">action</th>
            <th width="250px">Action</th>
        </tr>
    </thead>
        @foreach ($maritimerecords as $records)
        <tr scope="row">
            <td>{{ ++$i }}</td>
            <td>{{ $records->name }}</td>
            <td>{{ $records->flagstate }}</td>
            <td>{{ $records->country }}</td>
            <td>{{ $records->vessel }}</td>
            <td>{{ $records->location }}</td>
            <td>{{ $records->agency }}</td>
            <td>{{ $records->type }}</td>
            <td>{{ $records->date }}</td>
            <td>{{ $records->action }}</td>
            <td>
                <form class="row" action="{{ route('reports.destroy',$records->id) }}" method="POST">

   
                    <a class="btn btn-info col-ms-4 ml-2 mr-2" title="show" href="{{ route('reports.show',$records->id) }}">
                        <i class="fas fa-eye text-success  fa-sm"></i>
                    </a>
                        
                    <a class="btn btn-primary col-ms-4 mr-2" title="edit" href="{{ route('reports.edit',$records->id) }}">
                         <i class="fas fa-edit  fa-sm"></i>
                    </a>
                        
   
                    @csrf
                    @method('DELETE')
                    <button type="submit col-ms-4 mr-2" class="btn btn-danger" style="border: none; background-color:transparent;">
                        <i class="fas fa-trash fa-sm text-danger"></i>
                    </button>
                        
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
  
    {!! $maritimerecords->links() !!}
      
@endsection