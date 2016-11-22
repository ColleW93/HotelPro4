@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">View Users</div>

                <div class="panel-body">
                    
         

                   <table>
					    <tr>
					        <td>ID</td>
					        <td>Name</td>
					    </tr>

					    @foreach($users as $users)

					        <tr>
					            <td>{{ $users->id }}</td>
					            <td>{{ $users->name }}</td>
					        </tr>

					    @endforeach
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection