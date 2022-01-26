@extends('admin.admin_master')
@section('title')
	{{ 'Add Product' }}
@endsection
@section('admin_content')
<style>
	.gallery img{
		width: 150px;
		float:left;
	}
	</style>
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
					<form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
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
							 <label class="col-lg-4 col-form-label" for="val-subcategory_id">Select Sub sub-category<span class="text-danger">*</span></label>
							 <div class="col-lg-6">
								  <select class="form-control" name="subsubcategory_id">
								  		<option disabled="" selected="" value="">Select Sub Sub-Category</option>
								  	
								  </select>
							</div>
						</div>

						
						 <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-category">Product Name<span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" required class="form-control" name="product_name" placeholder="Enter Product Name.">
                            </div>
                        </div>

                         <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-category">Product Buying Price<span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" required class="form-control" name="buying_price" placeholder="Enter Product Buying Price">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-category">Product Selling Price<span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" required class="form-control" name="selling_price" placeholder="Enter Product Selling Price">
                            </div>
                        </div>

					 <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-category">Product Discount Price<span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="discount_price" placeholder="Enter Product Discount Price">
                            </div>
                        </div>


					<div class="form-group row">
	                    <label class="col-lg-4 col-form-label" for="val-category">Product Thumbnail Image<span class="text-danger">*</span>
	                    </label>
	                    <div class="col-lg-6">
	                        <input type="file" name="product_thumbnail"  class="form-control" onchange="readURL(this);">
	                        <img id="image" src="" height="100" width="100"/>
	                    </div>
	                </div>

	                <div class="form-group row">
	                    <label class="col-lg-4 col-form-label" for="val-category">Product Multiple Image<span class="text-danger">*</span>
	                    </label>
	                    <div class="col-lg-6">
	                       <input type="file" name="multi_img[]" multiple  class="form-control" multiple id="gallery-photo-add">
	                        <div class="gallery"></div>
	                    </div>
	                </div>

	                 <div class="form-group row">
	                    <label class="col-lg-4 col-form-label" for="val-category">Product Short Description<span class="text-danger">*</span>
	                    </label>
	                    <div class="col-lg-6">
	                       <textarea name="short_description"  id="textarea" class="form-control"  placeholder="Product Short Description"></textarea> 
	                    </div>
	                </div>

	                 <div class="form-group row">
	                    <label class="col-lg-4 col-form-label" for="val-category">Product Long Description<span class="text-danger">*</span>
	                    </label>
	                    <div class="col-lg-6">
	                       <textarea name="long_description"  id="textarea" class="form-control"  placeholder="Product Long Description"></textarea> 
	                    </div>
	                </div>

							

						<div class="form-group row">
	                        <div class="col-lg-8 ml-auto">
	                            <button type="submit" class="btn btn-danger">Add Product</button>
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

    <script>
    	$(document).ready(function() {
        $('select[name="subcategory_id"]').on('change', function(){
            var subcategory_id = $(this).val();
            if(subcategory_id) {
                $.ajax({
                    url: "{{  url('admin/category/subsubcategory/ajax') }}/"+subcategory_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                       var d =$('select[name="subsubcategory_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="subsubcategory_id"]').append('<option value="'+ value.id +'">' + value.subsubcategory_name + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });
    });
    </script>
    <script type="text/javascript">
	function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#image')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>

<script>
$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {
    	$("div.gallery").html("");
        if (input.files) {
            var filesAmount = input.files.length;
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }
                reader.readAsDataURL(input.files[i]);
            }
        }
    };
    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});
</script>
@endsection