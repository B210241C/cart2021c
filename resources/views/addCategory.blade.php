@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Add New Category</h3>
        <form action="{{route('addCategory')}}" method="POST">
            @CSRF
            <label for="addCategory">Add New Categoasdasdry</label>
            <input class="form-control" type="text" id="categoryName" name="categoryName" required>
            <button type="submit" class="btn btn-primary">Add New</button>
        </form>
        <br><br>PP
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection