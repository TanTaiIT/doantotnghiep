@extends('client/layout_cli')
@section('content')

<div class="page-head_agile_info_w3l">

    </div>
<div class="contact">
       
<h2 class="title text-center">Liên hệ với chúng tôi</h2>
                        <div class="row wrap-1200">
                            @foreach($contact as $key => $cont)
                            <div class="col-md-12">
                                <div class="row d-flex justify-space-between">
                                    <div class="col-md-6">
                                        {!!$cont->info_contact!!}
                                    </div>
                                    <div class="col-md-6">
                                        {!!$cont->info_fanpage!!}
                                    </div>
                                </div>   
                            </div>
                        </div>
                        <div class="row taicho">

                            <div class="col-md-12">
                            
                                {!!$cont->info_map!!}
                            </div>
                        </div>
             @endforeach
 @stop