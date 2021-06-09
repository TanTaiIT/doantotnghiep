
@extends('client/layout_cli')
@section('content')
    <div class="ads-grid py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                {{$meta_title}}
               </h3>
            <div class="row">
                <!-- product left -->
                <div class="col-lg-12 text-center">
                    <div class="wrapper">
                        <!-- first section -->
                        <div class="taideptrai">
                            <div class="baophi">
                                @foreach($post_by_id as $key => $p)
                                <div class="">
                                    <div class="">
                                           {!!$p->post_content!!}
                                    </div>
                                </div>
                                @endforeach
                            </div>  
                        </div>
                           
                    </div>
                </div>
               
            </div>
            <div class="post-relate">
            	<h2 class="text-center" style="margin-top:40px">Bài viết liên quan</h2>
            	 <ul>
                    @foreach($related as $key => $post_relate)
                    <li style="list-style-type: circle;"><a style="color: black;"href="{{url('/bai-viet/'.$post_relate->post_slug)}}">{{$post_relate->post_title}}</a></li>
                    @endforeach
                 </ul>
            </div>
     </div>
 </div>




   

@stop
