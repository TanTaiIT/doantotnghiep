@extends('client/layout_cli')
@section('content')
    <div class="ads-grid py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                BÀI VIẾT
               </h3>
            <div class="row">
                <div class="agileinfo-ads-display col-lg-9 nen">
                    <div class="wrapper">
                        <div class="">
                            <div class="baophi">
                                 @foreach($post_cate as $key => $p)
                                <div class="flex">
                                    <div class="hinh">
                                            <a href=""><div class="scale-img">
                                            <img class='img-thumbnail' width="300px" height="200px" src="{{asset('public/uploads/post/'.$p->post_image)}}" alt="">
                                            </div></a>
                                        </div>
                                        <div class="content">
                                    <h4 class="pt-1">
                                        <a class="title_baiviet" href="">{{$p->post_title}}</a>
                                    </h4>
                                    <p ><?=htmlspecialchars_decode($p->post_desc)?></p>
                                    <a   href="{{url('/bai-viet/'.$p->post_slug)}}" class="btn btn-default btn-sm xem">Xem bài viết</a>
                                </div>
                                </div>
                                @endforeach
                            </div>
                            <ul class="pagination pagination-sm m-t-none m-b-none">
                        
                       {!!$post_cate->links()!!}
                      
                      </ul>
                        </div>
                    </div>
                </div>








                <!-- //product left -->
                <!-- product right -->
                <div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
                    <div class="side-bar p-sm-4 p-3 taichodien">
                        <div class="search-hotel border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Danh mục bài viết</h3>
                           
                       
                        <div class="range border-bottom py-2">
                            <div class="w3l-range">
                                <ul>
                                    @foreach($cate_post1 as $ca)
                                    <li class="dau">
                                       + <a href="{{$ca->cate_post_slug}}">{{$ca->cate_post_name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- //price -->
                        <!-- discounts -->
                      
                        <!-- //arrivals -->
                    </div>
                    <!-- //product right -->
                </div>
            </div>
        </div>
    </div>




   

@stop
