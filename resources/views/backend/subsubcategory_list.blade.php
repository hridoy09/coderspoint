@extends('admin.admin_master')
@section('title')
  {{ 'Sub sub-category List' }}
@endsection
@section('admin_content')

<a class="btn btn-danger" href="{{ route('admin.category.subcategory.subsubcategory.insert') }}">Add Subsubcategory</a>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Category</th>
      <th scope="col">SubCategory</th>
      <th scope="col">Subcategory Name</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
@php
	$i = 1;
@endphp

  	@foreach($subsubcategories as $subsubcategory)
	    <tr>
	      <th scope="row">{{ $i++ }}</th>
        <td>{{ $subsubcategory->category->category_name }}</td>
        <td>{{ $subsubcategory->subcategory->subcategory_name }}</td>
	      <td>{{ $subsubcategory->subsubcategory_name }}</td>
	      <td><a href="{{ URL::to('admin/category/subcategory/subsubcategory/edit/'.$subsubcategory->id) }}" class="btn btn-info btn-sm">Edit</a> <a href="{{ URL::to('admin/category/subcategory/subsubcategory/delete/'.$subsubcategory->id) }}" id="delete" class="btn btn-success btn-sm">Delete</a></td>
	    </tr>
    @endforeach
  </tbody>
</table>

@endsection
