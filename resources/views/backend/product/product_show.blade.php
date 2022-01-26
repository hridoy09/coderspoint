@extends('admin.admin_master')
@section('title')
  {{ 'Category List' }}
@endsection
@section('admin_content')
<div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Product List</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                         <thead>
                                          <tr>
                                            <th>Serial No </th>
                                            <th>Image </th>
                                            <th>Product Name</th>
                                            <th>Product Category</th>
                                            <th>Product Sub-Category</th>
                                            <th>Buying Price</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                          </tr>
                                        </thead>
                                         <tbody>
                                        @php
                                          $i = 1;
                                        @endphp
                                            @foreach($products as $product)
                                              <tr>
                                                <th scope="row">{{ $i++ }}</th>
                                                <td><img src="{{ asset($product->product_thumbnail) }}" style="width: 60px; height: 50px;"></td>
                                                <td>{{ $product->product_name }}</td>
                                                <td>{{ $product->category->category_name }}</td>
                                                <td>{{ $product->subcategory->subcategory_name }}</td>
                                                <td>{{ $product->buying_price }}</td>
                                                @if($product->status == 1)
                                                  <td><span class="badge badge-success">Active</span></td>
                                                @else
                                                  <td><span class="badge badge-danger">Inactive</span></td>
                                                @endif
                                                <td>
                                                  @if($product->status == 1) <a href="{{ URL::to('admin/product/change_status/'.$product->id) }}"><i class="fa fa-arrow-circle-down"></i></a>@else<a href="{{ URL::to('admin/product/change_status/'.$product->id) }}"><i class="fa fa-arrow-circle-up"></i></a>@endif <a href="{{ URL::to('admin/product/delete/'.$product->id) }}" id="delete"><i class="fa fa-trash"></i></a> <a href="{{ URL::to('admin/product/view/'.$product->id) }}"><i class="fa fa-eye"></i></a> <a href="{{ URL::to('admin/product/edit/'.$product->id) }}"><i class="fa fa-pencil-square"></i></a>
                                                </td> 
                                              </tr>
                                            @endforeach
                                          </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
@endsection