@extends('layout.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="shadow-sm card px-3 py-3 my-3 " style="background: white;">
                <div class="d-flex justify-content-between">
                    <div style="font-size: 25px;">
                        Add Category
                    </div>
                    <div>
                        <a href=""><button class="btn btn-primary">Cancel</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="shadow-sm card px-3 py-3 my-3 " style="background: white;">
                <form action="{{url('category/store')}}" method="POST">
                    @csrf
                    <label for="">Caatrgory name type</label>
                    <input name="cat_name" type="text" class="form-control">
                    <br>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection

