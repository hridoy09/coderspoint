@extends('admin.admin_master')
@section('title')
	{{ 'Edit Sub sub-category' }}
@endsection
@section('admin_content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="container">
	<div class="row">
		
	

	<div class="col-12">
		@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
					<form action="{{ url('admin/category/subcategory/subsubcategory/update/'.$subsubcats->id) }}" method="post">
					@csrf
						<div class="form-group">
							  <label>Select Category</label>
							  <select class="form-control" name="category_id">
							  		<option disabled="" selected="" value="">Select one</option>
							  	@foreach($cats as $cat)
									<option value="{{ $cat->id }}" {{ $subsubcats->category_id == $cat->id ?'selected' : '' }}>{{ $cat->category_name }}</option>
								@endforeach
							  </select>
						</div>
					  	

					  	<div class="form-group">
							  <label>Select Sub-Category</label>
							  <select class="form-control" name="subcategory_id">
							  		<option disabled="" selected="" value="">Select Sub-category</option>
							  	@foreach($subcats as $subcat)
									<option value="{{ $subcat->id }}" {{ $subsubcats->subcategory_id == $subcat->id ?'selected' : '' }}>{{ $subcat->subcategory_name }}</option>
								@endforeach
							  </select>
						</div>

							<div class="form-group">
								<h5>SubSub Category Name<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" value="{{ $subsubcats->subsubcategory_name }}" name="subsubcategory_name" class="form-control" > <div class="help-block"></div></div>

									
							</div>
						

						<div class="text-xs-right">
							<input type="submit" value="Update SubSubCategory" class="btn btn-primary"/>
						</div>
					</form>

				

			          
	</div>
	</div>
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