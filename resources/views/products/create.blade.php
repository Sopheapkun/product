@extends('layout.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="shadow-sm card px-3 py-3 my-3 " style="background: white;">
                <div class="d-flex justify-content-between">
                    <div style="font-size: 25px;">
                        Add New Product
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
                <form action="{{url('product/store')}}" method="POST">
                    @csrf
                    <label for="">Product Name</label>
                    <input name="pro_name" type="text" class="form-control">
                    <br>
                    {{-- <label for="">Category ID</label>
                    <input name="cat_id" type="text" class="form-control">
                    <br> --}}
                    <div class="select" class="">
                        <select name="cat_id" id="cat_id" class="shadow-sm card px-3 py-2 my-3">
                            <option value="" selected disabled>Choose Category</option>
                            <option value="1">Drink</option>
                            <option value="2">Cake</option>
                        </select>
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection

