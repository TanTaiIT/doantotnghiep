@extends('admin/layout_admin')
@section('content')
  <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê mã giảm giá
    </div>
    
    <div class="table-responsive">
    
                      <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                       ?>
     
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
           

            <th>Tên mã giảm giá</th>
            <th>Mã giảm giá</th>
            <th>Số lượng giảm giá</th>
            <th>Điều kiện giảm giá</th>
            <th>Số giảm</th>
            <th>ngày bắt đầu</th>
            <th>Ngày kết thúc</th>
            <th>Quản lý</th>
           
            <th>Gửi mã</th>
          </tr>
        </thead>
        <tbody>
          @foreach($coupon as $key => $cou)
          <tr>
          
            <td>{{ $cou->coupon_name }}</td>
            <td>{{ $cou->coupon_code }}</td>
            <td>{{ $cou->coupon_time }}</td>
            <td><span class="text-ellipsis">
              <?php
               if($cou->coupon_condition==1){
                ?>
                Giảm theo %
                <?php
                 }else{
                ?>  
                Giảm theo tiền
                <?php
               }
              ?>
            </span>
          </td>
            <td>{{ $cou->start_day }}</td>
            <td>{{ $cou->end_day }}</td>
             <td><span class="text-ellipsis">
              <?php
               if($cou->coupon_condition==1){
                ?>
                Giảm {{$cou->coupon_number}} %
                <?php
                 }else{
                ?>  
                Giảm {{$cou->coupon_number}} k
                <?php
               }
              ?>
            </span></td>
           
            <td>
             
              <a onclick="return confirm('Bạn có chắc là muốn xóa mã này ko?')" href="{{URL::to('/delete-coupon/'.$cou->coupon_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
            <td>
              <p><a href="{{URL::to('/send-coupon-vip',[
              
              'condition'=>$cou->coupon_condition,
              'number'=>$cou->coupon_number,
              'code'=>$cou->coupon_code,
              'time'=>$cou->coupon_time

              ])}}" class="btn btn-primary" style="margin:5px 0;">Gửi mã giảm giá cho khách vip</a></p>
              
              <p><a href="{{URL::to('/send-coupon',[
                
              'condition'=>$cou->coupon_condition,
              'number'=>$cou->coupon_number,
              'code'=>$cou->coupon_code,
              'time'=>$cou->coupon_time
              ])}}" class="btn btn-default">Gửi mã giảm giá khách thường</a></p>
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@stop