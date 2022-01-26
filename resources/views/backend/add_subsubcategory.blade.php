@extends('admin.admin_master')
@section('title')
	{{ 'Add Sub sub-category' }}
@endsection
@section('admin_content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
					<form class="form-valide" action="{{ route('admin.category.subcategory.subsubcategory.store') }}" method="post">
					@csrf
						<div class="form-group row">
							  <label class="col-lg-4 col-form-label" for="val-subcategory_id">Select Category<span class="text-danger">*</span></label>
							  <div class="col-lg-6">
								  <select class="form-control" name="category_id">
								  		<option disabled="" selected="" value="">Select one</option>
								  	@foreach($categories as $cat)
										<option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
									@endforeach
								  </select>
							   </div>
						</div>
					  	

					  	<div class="form-group row">
							 <label class="col-lg-4 col-form-label" for="val-subcategory_id">Select Sub Category<span class="text-danger">*</span></label>
							 <div class="col-lg-6">
								  <select class="form-control" name="subcategory_id">
								  		<option disabled="" selected="" value="">Select Sub-category</option>
								  	
								  </select>
							</div>
						</div>

							 <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-subcategory">Sub Sub-Category Name<span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" required class="form-control" name="subsubcategory_name" placeholder="Enter Sub Sub-Category Name.">
                                </div>
                              </div>
							
					

						<div class="form-group row">
                            <div class="col-lg-8 ml-auto">
                                <button type="submit" class="btn btn-primary">Add Sub Sub-Category</button>
                            </div>
                        </div>
					</form>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>

<script type="text/javascript">
      $(document).ready(function() {
        $('select[name="category_id"]').on('change', function(){
            var category_id = $(this).val();
            if(category_id) {
                $.ajax({
                    url: "{{  url('admin/category/subcategory/ajax') }}/"+category_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                       var d =$('select[name="subcategory_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });
    });
    </script>
@endsection