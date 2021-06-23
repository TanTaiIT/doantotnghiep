@extends('admin/layout_admin')
@section('content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê Banner
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
            <th style="width:20px;">
             
            </th>
            <th>Tên quảng cáo</th>
            <th>Hình quảng cáo</th>
            <th>link quảng cáo</th>
            <th>Tình trạng</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($quangcao as $key => $q)
          <tr>
            <td></td>
            <td>{{ $q->quangcao_name }}</td>
            <td><img src="uploads/quangcao/{{ $q->hinh_quangcao }}" height="120" width="300"></td>
            <td>{{ $q->link }}</td>
            <td><span class="text-ellipsis">
              <?php
               if($q->quangcao_status==1){
                ?>
                <a href=""><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                <?php
                 }else{
                ?>  
                 <a href=""><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                <?php
               }
              ?>
            </span></td>
            <td>
             
              <a onclick="return confirm('Bạn có chắc là muốn xóa q này ko?')" href="{{URL::to('/delete_addver',$q->quangcao_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>

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
              
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection