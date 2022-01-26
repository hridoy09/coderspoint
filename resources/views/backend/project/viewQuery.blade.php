@extends('admin.admin_master')
@section('title')
	{{ 'View Query of Customer' }}
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
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">

					<form action="" method=>
					@csrf

					<div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-category">Customer Full Name<span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" readonly class="form-control" value="{{ $projectdetail->full_name }}">
                            </div>
                        </div>


					
						<div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Customer Email<span class="text-danger">*</span>
                            </label>
								 <div class="col-lg-6">
									<input type="text" readonly  class="form-control" value="{{ $projectdetail->email }}">
								</div>
						</div>
					  	

					  	<div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Customer Phone<span class="text-danger">*</span>
                            </label>
								 <div class="col-lg-6">
									<input type="text" readonly class="form-control" value="{{ $projectdetail->phone }}">
								</div>
						</div>

						<div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Customer Company Name<span class="text-danger">*</span>
                            </label>
								 <div class="col-lg-6">
									<input type="text" readonly class="form-control" value="{{ $projectdetail->company_name }}">
								</div>
						</div>

						<div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Customer Website<span class="text-danger">*</span>
                            	</label>
								<div class="col-lg-6">
									<input type="text" readonly class="form-control" value="{{ $projectdetail->website }}"> 
								</div>
						</div>
					
						<div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Customer Address<span class="text-danger">*</span>
                            	</label>
								<div class="col-lg-6">
									<input type="text" readonly class="form-control" value="{{ $projectdetail->address }}"> 
								</div>
						</div>

							<div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Customer Project Budget<span class="text-danger">*</span>
                            	</label>
                            	 <div class="col-lg-6">
									<input type="text" readonly class="form-control" value="{{ $projectdetail->project_budget }}"> 
								</div>
					 		 </div>

					 		 <div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Date to Start of Project<span class="text-danger">*</span>
                            	</label>
                            	 <div class="col-lg-6">
									<input type="text" readonly class="form-control" value="{{ $projectdetail->date_to_start }}"> 
								</div>
					 		 </div>

					 		  <div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Project Type<span class="text-danger">*</span>
                            	</label>
                            	 <div class="col-lg-6">
									<input type="text" readonly class="form-control" value="{{ $projectdetail->project_type }}"> 
								</div>
					 		 </div>

					 		  <div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Service Type<span class="text-danger">*</span>
                            	</label>
                            	 <div class="col-lg-6">
									<input type="text" readonly class="form-control" value="{{ $projectdetail->service_type }}"> 
								</div>
					 		 </div>

					 		<div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Customer Country<span class="text-danger">*</span>
                            	</label>
                            	 <div class="col-lg-6">
									<input type="text" readonly class="form-control" value="{{ $projectdetail->country }}"> 
								</div>
					 		 </div>

					 		 <div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">No Of Pages<span class="text-danger">*</span>
                            	</label>
                            	 <div class="col-lg-6">
									<input type="text" readonly class="form-control" value="{{ $projectdetail->no_of_pages }}"> 
								</div>
					 		 </div>

					 		 <div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Reference Site<span class="text-danger">*</span>
                            	</label>
                            	 <div class="col-lg-6">
									<input type="text" readonly class="form-control" value="{{ $projectdetail->reference_site }}"> 
								</div>
					 		 </div>

							 <div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Does Customer Need Hosting?<span class="text-danger">*</span>
                            	</label>
									<div class="col-lg-6">
									<input type="text" readonly class="form-control" value="{{ $projectdetail->hosting }}"> 
								</div>
							</div>

							 <div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Does he have domain?<span class="text-danger">*</span>
                            	</label>
									<div class="col-lg-6">
									<input type="text" readonly class="form-control" value="{{ $projectdetail->domain }}"> 
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Will he Provide Content?<span class="text-danger">*</span>
                            	</label>
									<div class="col-lg-6">
									<input type="text" readonly class="form-control" value="{{ $projectdetail->content }}"> 
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Will he Provide Logo?<span class="text-danger">*</span>
                            	</label>
									<div class="col-lg-6">
									<input type="text" readonly class="form-control" value="{{ $projectdetail->logo }}"> 
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-category">Project Details<span class="text-danger">*</span>
                            	</label>
									<div class="col-lg-6">
										<textarea readonly  id="textarea" class="form-control">{{ $projectdetail->project_details }}</textarea>  
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