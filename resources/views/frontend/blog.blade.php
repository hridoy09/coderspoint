@push('css')
<link href="{{asset('frontend')}}/css/hosting.css" rel="stylesheet" type="text/css" />
@endpush

<!-- START PAGE SOURCE -->

@extends('frontend.layouts.main')
@section('main-container')
<div style="padding-top: 30px;
    padding-bottom: 50px; background:white;" class="full_div">

        <div class="title" >
            <h1 style="color: tomato;" >Our Blog</h1>
        </div>
        <hr style="width: 30%">

    <div class="blog-posts">

        @foreach ($blogs as $blog )
        <div class="post">
            <a href="{{route('admin.blog.show',$blog->id)}}"><img src="{{url($blog->future_img)}}"
                alt="" class="post-img"></a>
            <div class="post-content">
                <a href="{{route('admin.blog.show',$blog->id)}}"><h3>{{$blog->title}}</h3></a>
                <span class="date">{{$blog->created_at}}</span>
            </div>
        </div>
        @endforeach

    </div>

    <div class="pagination" >
    {!! $blogs->render() !!}
    </div>



</div>

<script type="text/javascript" charset="utf-8">
    $(function () {
        $.fn.loopedSlider.defaults.addPagination = true;
        $('#loopedSlider').loopedSlider();
    });

</script>
<!-- END PAGE SOURCE -->
@endsection
