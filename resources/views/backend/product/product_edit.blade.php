@extends('admin.admin_master')
@section('title')
	{{ 'Edit product' }}
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

  	<form method="post" action="{{ url('admin/product/update/'.$products->id) }}" >
		 	@csrf

			
		 	<div class="form-group row">
				  <label class="col-lg-4 col-form-label" for="val-subcategory_id">Select Category<span class="text-danger">*</span></label>
				  <div class="col-lg-6">
					  <select required class="form-control" name="category_id">
					  		<option disabled="" selected="" value="">Select one</option>
						  	@foreach($categories as $category)
								<option value="{{ $category->id }}" {{ $category->id == $products->category_id ? 'selected' : '' }}>{{ $category->category_name }}</option>
							@endforeach
						
					  </select>
					</div>
			</div>


		
		<div class="form-group row">
				  <label class="col-lg-4 col-form-label" for="val-subcategory_id">Select Sub-Category<span class="text-danger">*</span></label>
				  <div class="col-lg-6">
					  <select required class="form-control" name="subcategory_id">
					  		<option disabled="" selected="" value="">Select one</option>
						  	@foreach($subcategory as $sub)
								<option value="{{ $sub->id }}" {{ $sub->id == $products->subcategory_id ? 'selected' : '' }}>{{ $sub->subcategory_name }}</option>
							@endforeach
						
					  </select>
					</div>
			</div>


			<div class="form-group row">
				  <label class="col-lg-4 col-form-label" for="val-subcategory_id">Select Sub Sub-Category<span class="text-danger">*</span></label>
				  <div class="col-lg-6">
					  <select required class="form-control" name="subsubcategory_id">
					  		<option disabled="" selected="" value="">Select one</option>
						  	@foreach($subsubcategory as $subsub)
								<option value="{{ $subsub->id }}" {{ $subsub->id == $products->subsubcategory_id ? 'selected' : '' }}>{{ $subsub->subsubcategory_name }}</option>
							@endforeach
						
					  </select>
					</div>
			</div>


			 <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="val-category">Product Name<span class="text-danger">*</span>
                </label>
                <div class="col-lg-6">
                    <input type="text" required class="form-control" name="product_name" value="{{ $products->product_name }}">
                </div>
            </div>

	
            <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="val-category">Product Buying Price<span class="text-danger">*</span>
                </label>
                <div class="col-lg-6">
                    <input type="text" required class="form-control" name="buying_price" value="{{ $products->buying_price }}">
                </div>
            </div>


            <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-category">Product Selling Price<span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" required class="form-control" name="selling_price" value="{{ $products->selling_price }}">
                            </div>
                        </div>

             <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="val-category">Product Discount Price<span class="text-danger">*</span>
                </label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="discount_price" value="{{ $products->discount_price }}">
                </div>
            </div>




            <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="val-category">Product Short Description<span class="text-danger">*</span>
                </label>
                <div class="col-lg-6">
                   <textarea name="short_description"  id="textarea" class="form-control"  placeholder="Product Short Description">
                       {!! $products->short_description !!}  
                   </textarea> 
                </div>
            </div>

	    <div class="form-group row">
            <label class="col-lg-4 col-form-label" for="val-category">Product Long Description<span class="text-danger">*</span>
            </label>
            <div class="col-lg-6">
               <textarea name="long_description"  id="textarea" class="form-control"  placeholder="Product Long Description">
                   {!! $products->long_description !!}
               </textarea> 
            </div>
        </div>



		

						<div class="form-group row">
                            <div class="col-lg-8 ml-auto">
                                <button type="submit" class="btn btn-danger">Update Product</button>
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






	<!-- ///////////////// Start Multiple Image Update Area ///////// -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">


		<form method="post" action="{{ route('admin.product.multiimage.update') }}" enctype="multipart/form-data">
			@csrf
            <h5>Product Multiple Image :</h5>
			<div class="row row-sm">
				@foreach($multiImgs as $img)
				<div class="col-md-3">

<div class="card">
  <img src="{{ asset($img->photo_name) }}" class="card-img-top" style="height: 170px; width: 280px;">
  <div class="card-body">
    <h5 class="card-title">
<a href="{{ URL::to('admin/product/multiimage/delete/'.$img->id) }}" class="btn btn-sm btn-danger" id="delete" title="Delete Data"><i class="fa fa-trash"></i> </a>
     </h5>
    <p class="card-text"> 
    	<div class="form-group">
    		<label class="form-control-label">Change Image <span class="tx-danger">*</span></label>
    		<input class="form-control" type="file" name="multi_img[{{$img->id}}]">
    	</div> 
    </p>

  </div>
</div> 		

				</div><!--  end col md 3		 -->	
				@endforeach

			</div>			

			<div class="text-xs-right">
<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Image">
		 </div>
<br><br>



		</form>		   





				</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->

 <!-- ///////////////// Start Thambnail Image Update Area ///////// -->

 <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">


		<form method="post" action="{{ url('admin/product/product-thumbnail/update/'.$products->id) }}" enctype="multipart/form-data">
        @csrf

     <h5>Product Thumbnail Image :</h5>

			<div class="row row-sm">

				<div class="col-md-3">

<div class="card">
  <img src="{{ asset($products->product_thumbnail) }}" class="card-img-top" style="height: 130px; width: 280px;">
  <div class="card-body">

    <p class="card-text"> 
    	<div class="form-group">
    		<label class="form-control-label">Change Image <span class="tx-danger">*</span></label>
    <input type="file" name="product_thumbnail" class="form-control"  >
   
    	</div> 
    </p>

  </div>
</div> 		

				</div><!--  end col md 3		 -->	


			</div>			

			<div class="text-xs-right">
<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Image">
		 </div>
<br><br>



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




@endsection