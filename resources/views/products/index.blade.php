@extends('layout.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="shadow-sm card px-3 py-3 my-3 " style="background: white;">
                <div class="d-flex justify-content-between">
                    <div style="font-size: 25px;">
                        Product Lists
                    </div>
                    <div>
                        {{-- <a href="{{ route('customer.create') }}"><button class="btn btn-primary">Add New</button></a> --}}
                        <a href="{{url('product/create')}}"><button class="btn btn-primary">Add New Product</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="shadow-sm card px-3 py-3 my-3 " style="background: white;">
                <div class="d-flex justify-content-between">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product_Name</th>
                                <th>Category Name</th>
                                <th>Category ID</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                           @if ($products != null)
                                @foreach ($products as $item )
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->product_name}}</td>
                                    <td>{{$item->getCategory->category_name }}</td>
                                    {{-- <td>{{$item->getCreator->category_name. $item->getCreator->id }}</td> --}}
                                    <td>{{$item->getCreator->id }}</td>
                                    <td>

                                            <a style="color:#fff;" href="{{url('product/edit/'.$item->id)}}">
                                                <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                                            </a>

                                    </td>
                                    <td>
                                        <form method="post" action="{{url('product/delete/'.$item->id)}}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                           @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



