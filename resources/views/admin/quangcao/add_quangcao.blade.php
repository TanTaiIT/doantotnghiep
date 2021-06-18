@extends('admin/layout_admin')
@section('content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Thêm Slider
                        </header>
                         <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                        <div class="panel-body">

                            <div class="position-center">
                                <form role="form" action="{{URL::to('/store')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên quảng cáo</label>
                                    <input type="text" name="quangcao_name" class="form-control" id="exampleInputEmail1" placeholder="Tên quảng cáo">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">hình quảng cáo</label>
                                    <input type="file" name="hinh_quangcao" class="form-control" id="exampleInputEmail1" placeholder="hình">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">link quảng cáo</label>
                                    <input style="resize: none" rows="8" class="form-control" name="link" id="exampleInputPassword1" placeholder="link">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                      <select name="quangcao_status" class="form-control input-sm m-bot15">
                                           <option value="0">Hiển thị</option>
                                            <option value="1">Ẩn</option>
                                            
                                    </select>
                                </div>
                               
                                <button type="submit" name="add_slider" class="btn btn-info">Thêm slider</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection