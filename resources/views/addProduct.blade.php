@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Add New Category</h3>
        <form action="" method="POST">
            @CSRF
            <div class="form-group">
            <label for="productName">Add New Category</label>
            <input class="form-control" type="text" id="productName" name="productName" required>
            </div>
            <div class="form-group">
            <label for="productDescription">Description</label>
            <input class="form-control" type="text" id="productDescription" name="productDescription" required>
            </div>
            <div class="form-group">
            <label for="productPrice">Price</label>
            <input class="form-control" type="number" id="productPrice" name="productPrice" min="0" required>
            </div>
            <div class="form-group">
            <label for="productQuantity">Quantity</label>
            <input class="form-control" type="number" id="productQuantity" name="productQuantity" min="0" required>
            </div>
            <div class="form-group">
            <label for="productImage">Image</label>
            <input class="form-control" type="file" id="productImage" name="productImage" required>
            </div>
            <div class="form-group">
            <label for="productCategory">Category</label>
            <input class="form-control" type="text" id="productCategory" name="productCategory" required>
            </div>
            <button type="submit" class="btn btn-primary">Add New</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection