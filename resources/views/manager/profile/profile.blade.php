@extends('manager.template.admin_layout')
@section('content')

<div class="right_col" role="main">
<div class="">
<div class="clearfix"></div>
<div class="row">
<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>THÔNG TIN ADMIN</h2>
                   
                    <div class="clearfix"></div>
                  </div>
<div class="card text-center prof">
  <div class="card-header">
    {{Auth::user()->name}}
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <ul class="danhsach">
    	<li class="fle-u"><span class="tieud">email:</span> <span class="tieun">{{Auth::user()->email}}</span></li>
    	<li class="fle-u"><span class="tieud">Điện thoại: </span><span class="tieun">{{Auth::user()->phone}}</span></li>
    	<li class="fle-u"><span class="tieud">Ngày tạo: </span><span class="tieun">{{Auth::user()->created_at->format('d/m/y')}}</span></li>
    	<li class="fle-u"><span class="tieud">Quyền: </span><span class="tieun">{{$user->hasRole('admin') ? 'Quyền Admin' : 'Quyền User'}}</span></li>
    </ul>
    <a href="{{url('login-auth')}}" class="btn btn-primary">Đổi tài khoản</a>
  </div>
  <div class="card-footer text-muted">
    thông tin không thể thay đổi
  </div>
</div>


</div>
</div>
</div>
</div>
</div>
</div>
@endsection
