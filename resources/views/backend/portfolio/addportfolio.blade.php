@extends('admin.admin_master')
@section('title')
{{ 'Admin Banner Settings' }}
@endsection

@push('css')
 <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
@endpush
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
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{route('admin.portfolio.store')}}" method="post"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-category">Portfolio Image<span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="file" name="portfolio_image" class="form-control">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-category">Category<span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select  name="category_id" class="form-control">
                                            <option  selected>Chose your Category</option>
                                            @foreach ($categories as $category )
                                            <option value="{{$category->id}}">{{ $category->portfolio_category }}</option>
                                            @endforeach

                                        </select>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-category">Title<span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" name="title" class="form-control"
                                            placeholder="Client alt Title">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-category">Web Url<span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" name="web_link" class="form-control"
                                            placeholder="web Url">

                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



                  <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <table id="portfolioCat" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Name</th>
                                        <th>Portfolio Image</th>
                                        <th>Web Link</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($portfoliocategories as $category )
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$category->category->portfolio_category??''}}</td>
                                        <td><img src="{{ asset($category->portfolio_image) }}"
                                                style="width: 100px; height: 80px; padding:10px;"></td>
                                        <td>{{$category->web_link??''}}</td>

                                        <td>

                                            <a href="{{route('admin.portfolio.delete',$category->id)}}" class="btn btn-danger" >Delete</a>
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


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#portfolioCat').DataTable();
    } );
</script>
@endsection
