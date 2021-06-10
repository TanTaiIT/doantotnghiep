@extends('admin/layout_admin')
@section('content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Thêm user
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
                                <form role="form" action="{{URL::to('store-users')}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên users</label>
                                    <input type="text" name="admin_name" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" name="admin_email" class="form-control" id="exampleInputEmail1" placeholder="nhập email">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Phone</label>
                                    <input type="text" name="admin_phone" class="form-control" id="exampleInputEmail1" placeholder="nhập số điện thoại">
                                </div>
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="text" name="admin_password" class="form-control" id="exampleInputEmail1" placeholder="nhập password">
                                </div>
                             
                                <button type="submit" class="btn btn-info">Thêm users</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection