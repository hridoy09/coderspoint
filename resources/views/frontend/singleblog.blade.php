@push('css')
<link href="{{asset('frontend')}}/css/singleblog.css" rel="stylesheet" type="text/css" />


<style type="text/css">
    #social-links>ul> li{
        list-style: none;
        background: #e2e2e2;
        margin-left: 5px;
        text-align: center;
        border-radius:5px;
    }
    #social-links>ul>li>span{
        font-size: 20px;
    }
     #social-links>ul>li{
        display: inline;
        padding: 10px 10px;
    }
      #social-links ul{
          margin-left: -35px;
      }
       #social-links{
           font-size: 25px;
       }

</style>

@endpush
<!-- START PAGE SOURCE -->

@extends('frontend.layouts.main')
@section('main-container')
<section class="section2">
    <table >
        <tr>

            <td  >
                <img src="{{url($blogs->future_img)}}" alt="Earn Money">
                <h1 style="margin-top:40px;">{{$blogs->title}}</h1>
                <p  style="margin-top:40px; text-align:justify; font-size:20px;" >{{$blogs->description}}</p>
            </td>
        </tr>
    </table>
    <div class="share_div" style="text-align:center; padding-bottom:40px" >
        <h2>Share This Post</h2>
                <div class="container mt-4 " style="text-align: center;">

                    {!! Share::page(route('admin.blog.show',$blogs->id))->facebook()->whatsapp() !!}
                </div>
    </div>

</section>
@endsection
