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
                            <label class="col-lg-4 col-form-label" for="val-category">Custometr Full Name<span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" readonly class="form-control" value="{{ $msg->full_name }}">
                            </div>
                        </div>


					
						<div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Customer Email<span class="text-danger">*</span>
                            </label>
								 <div class="col-lg-6">
									<input type="text" readonly  class="form-control" value="{{ $msg->email }}">
								</div>
						</div>
					  	

					  	<div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Customer Phone Number<span class="text-danger">*</span>
                            </label>
								 <div class="col-lg-6">
									<input type="text" readonly class="form-control" value="{{ $msg->phone_number }}">
								</div>
						</div>

						<div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Customer Address<span class="text-danger">*</span>
                            </label>
								 <div class="col-lg-6">
									<input type="text" readonly class="form-control" value="{{ $msg->address }}">
								</div>
						</div>
					

							

							 <div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Customer Message<span class="text-danger">*</span>
                            	</label>
									<div class="col-lg-6">
										<textarea readonly  id="textarea" class="form-control">{{ $msg->message }}</textarea>     
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