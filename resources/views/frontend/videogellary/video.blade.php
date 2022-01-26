@push('css')



<style type="text/css">
    .gallery {
        display: flex;
        flex-wrap: wrap;
        margin: 5rem;
        width:90%
    }
        .title{
  text-align: center;
  font-family:fantasy;
  color: white;
}
    @media screen and (max-width:765px){
        .gallery{
            margin:0px;
            width:100%;
        }
        .title h1{
            font-size:30px!important;
        }
    }
    .single-video {
        width: 10rem;
        flex-grow: 1;
        margin: 0.5rem;
    }

    /* taking care of the video aspect-ratio */
    figure {
        position: relative;
        padding: 0 0 56.25% 0;
    }

    figure iframe {
        position: absolute;
        width: 100%;
        height: 100%;
    }



</style>

@endpush
<!-- START PAGE SOURCE -->

@extends('frontend.layouts.main')
@section('main-container')
 <div class="title" >
            <h1 style="color: tomato;" >Video Gellary</h1>
        </div>
        <hr style="width: 30%">

<div class="gallery">
   @foreach ($videos as $video )
    <div class="single-video">
        <figure>
    <iframe src="{{ $video->vedio_link}}?autoplay=1&mute=1"
                allowfullscreen></iframe>
        </figure>
    </div>
      @endforeach


</div>


@endsection
