@extends('layouts.app')

@section('content')

@if(auth()->check())

<div class="row">
    <div class="col-md-12">
        @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
        @endif
        <div style="text-align: left">
            <a href="groupfive" class="btn btn-success">Staff</a>
            <a href="cpu" class="btn btn-success">CPU</a>
            <a href="gpu" class="btn btn-success">GPU</a>
            <a href="ram" class="btn btn-success">RAM</a>
            <a href="storage" class="btn btn-success">Storage</a>
            <a href="peripheral/create" class="btn btn-primary">Add Data</a>
        </div> 
        <br>
        <h3 style="text-align: center">Peripheral Table</h3>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Inventory Level</th>
                <th>Remarks</th>
                <th>Price</th>
                <th>Staff ID</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($peripheral as $row)
            <tr>
                <td>{{$row['id']}}</td>
                <td>{{$row['peripheral_name']}}</td>
                <td>{{$row['peripheral_brand']}}</td>
                <td>{{$row['peripheral_inv_level']}}</td>
                <td>{{$row['peripheral_remarks']}}</td>
                <td>{{$row['peripheral_price']}}</td>
                <td>{{$row['staff_id']}}</td>
                <td><a href="{{action('App\Http\Controllers\PeripheralController@edit', $row['id'])}}">Edit</a></td>
                <td>
                    <form method="POST" class="delete_form" action="{{action('App\Http\Controllers\PeripheralController@destroy', $row['id'])}}">
                        @csrf 

                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@else

{{-- invalid user will be redirect to index page --}}
<script>window.location = "/home";</script>

@endif

<script>
        $(document).ready(function(){
            $('.delete_form').on('submit', function(){
                if(confirm("Are you sure you want to delete?"))
                {
                    return true;
                }
                else
                {
                    return false;
                }
            });
        });
    </script>
@endsection