@extends('layouts.app')

@section('content')

@if(auth()->check())

@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<h3 style="text-align: center">Edit Storage Inventory</h3>
<br>

<form method="POST" action="{{action('App\Http\Controllers\StorageController@update', '$id')}}">
    @csrf 

    <input type="hidden" name="_method" value="PATCH">

    <div class="form-group">
        <input type="text" name="storage_name" class="form-control" value="{{$storage -> storage_name}}" placeholder="Enter Storage Name">
    </div>
    <div class="form-group">
        <input type="text" name="storage_brand" class="form-control" value="{{$storage -> storage_brand}}" placeholder="Enter Brand">
    </div>
    <div class="form-group">
        <input type="text" name="storage_inv_level" class="form-control" value="{{$storage -> storage_inv_level}}" placeholder="Enter Inventory Level">
    </div>
    <div class="form-group">
        <input type="text" name="storage_remarks" class="form-control" value="{{$storage -> storage_remarks}}" placeholder="Remarks">
    </div>
    <div class="form-group">
        <input type="text" name="storage_price" class="form-control" value="{{$storage -> storage_price}}" placeholder="Enter Price">
    </div>
    <div class="form-group">
        <input type="text" name="staff_id" class="form-control" value="{{$storage -> staff_id}}" placeholder="Enter Staff ID">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Edit">
    </div>
</form>

@else

{{-- invalid user will be redirect to index page --}}
<script>window.location = "/home";</script>

@endif

@endsection