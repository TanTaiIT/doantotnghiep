@extends('client/layout_cli')
@section('content')
<div class="page-head_agile_info_w3l">

    </div>
<div class="contact">
       
<h2 class="title text-center">Giới thiệu</h2>
<p class="gioithieu_title">{{$gioithieu[0]['intro_title']}}</h2>
                        <div class="row wrap-1200">
                            
                            <div class="col-md-12">
                                <div class="row d-flex justify-space-between">
                                    <div class="col-md-6">
                                        {{$gioithieu[0]['intro_content']}}
                                    </div>
                                    <div class="col-md-6">
                                        <img class="gioi" src="{{URL::to('uploads/intro/'.$gioithieu[0]['intro_image'])}}" alt="">
                                    </div>
                                </div>   
                            </div>
                        </div>
                        <div class="row taicho">

                            <div class="col-md-12">
                            
                               
                            </div>
                        </div>
@stop