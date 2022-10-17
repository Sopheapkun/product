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
                        <a href="{{url('create')}}"><button class="btn btn-primary">Add New Product</button></a>
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
                                <th>Category Name</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                           @if ($products != null)
                                @foreach ($products as $item )
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->category_name}}</td>
                                    <td>
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <a style="color:#fff;" href="{{}}">Edit</a>
                                        </button>
                                    </td>
                                    <td>
                                        <form method="" action="">
                                            {{-- @method('DELETE') --}}
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



