@extends('admin.admin_master')
@section('title')
	{{ 'View Product' }}
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

					<form action="" method=>
					@csrf

					<div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-category">Product Name<span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" readonly class="form-control" value="{{ $product->product_name }}">
                            </div>
                        </div>


					
						<div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Product Category<span class="text-danger">*</span>
                            </label>
								 <div class="col-lg-6">
									<input type="text" readonly  class="form-control" value="{{ $product->category->category_name }}">
								</div>
						</div>
					  	

					  	<div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Product Sub-Category<span class="text-danger">*</span>
                            </label>
								 <div class="col-lg-6">
									<input type="text" readonly class="form-control" value="{{ $product->subcategory->subcategory_name }}">
								</div>
						</div>

						<div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Product Sub-Category<span class="text-danger">*</span>
                            </label>
								 <div class="col-lg-6">
									<input type="text" readonly class="form-control" value="{{ $product->subsubcategory->subsubcategory_name }}">
								</div>
						</div>

						<div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Product Buying Price<span class="text-danger">*</span>
                            	</label>
								<div class="col-lg-6">
									<input type="text" readonly class="form-control" value="{{ $product->buying_price }}"> 
								</div>
						</div>
					
						<div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Product Selling Price<span class="text-danger">*</span>
                            	</label>
								<div class="col-lg-6">
									<input type="text" readonly class="form-control" value="{{ $product->selling_price }}"> 
								</div>
						</div>

							<div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Product Thumbnail Image<span class="text-danger">*</span>
                            	</label>
                            	 <div class="col-lg-6">
									<img src="{{ asset($product->product_thumbnail) }}" width="100px" height="100px"/>
								</div>
					 		 </div>

					 		 <div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Product Multiple Image<span class="text-danger">*</span>
                            	</label>
								@foreach($images as $image)
								<div class="col-lg-6">
									<img src="{{ asset($image->photo_name) }}" width="100px" height="100px" style="float:left"/>
								</div>
								@endforeach
					 		 </div>

							 <div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Product Short Description<span class="text-danger">*</span>
                            	</label>
									<div class="col-lg-6">
										<textarea readonly  id="textarea" class="form-control">{{ $product->short_description }}</textarea>     
						 		 	</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Product Long Description<span class="text-danger">*</span>
                            	</label>
									<div class="col-lg-6">
										<textarea readonly  id="textarea" class="form-control">{{ $product->long_description }}</textarea>     
						 		 	</div>
							</div>
							

							<div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Product Status<span class="text-danger">*</span>
                            	</label>
									<div class="col-lg-6">
										@if($product->status == 0)
											<input readonly="" type="text" value="Inactive" class="form-control"/>
										@else
											<input readonly="" type="text" value="Active" class="form-control"/>
										@endif
										   
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

@endsection