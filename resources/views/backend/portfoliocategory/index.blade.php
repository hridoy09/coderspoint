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
                            <form action="{{route('admin.portfoliocategory.store')}}" method="post"  >
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-category">Protfolio Category<span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" name="portfolio_category" value="" class="form-control"
                                            placeholder="Protfolio Category">

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
                            <table id="portfolioTbl" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($portfoliocategories as $category )
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$category->portfolio_category??'Null'}}</td>
                                        <td>

                                            <a href="{{route('admin.portfoliocategory.delete',$category->id)}}" class="btn btn-danger" >Delete</a>
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
        $('#portfolioTbl').DataTable();
    } );
</script>
@endsection

