@extends('manager.template.admin_layout')
@section('content')

<div class="right_col" role="main">
<div class="">
<div class="clearfix"></div>
<div class="row">
<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Quản lý sản phẩm</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            
                            
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                 
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                    
                    <table class="table table-striped table-bordered" >
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>Tên danh mục bài viết</th>
                          <th>Mô tả danh mục</th>
                          <th>Slug</th>
                          <th>Hiển thị</th>
                          <th>Thao tác</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php $i=0; ?>
                        @foreach($cate as $key => $cate_post)
                        <?php $i++ ?>
                        <tr>
                          <td>{{$i}}</td>
                          <td>{{ $cate_post->cate_post_name }}</td>
                          <td>{{ $cate_post->cate_post_desc }}</td>
                          <td>{{ $cate_post->cate_post_slug }}</td>
                          <td>
                            @if($cate_post->cate_post_status==0)
                              Ẩn
                            @else 
                              Hiển thị
                            @endif
                          </td>           
                          <td>
                            <a href="{{URL::to('/recover_cate_postview/'.$cate_post->cate_post_id)}}" class="active styling-edit" ui-toggle-class="">
                              <i class="glyphicon glyphicon-refresh"></i></a>
                            
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <div class="Pagination d-flex justify-content-center">
                    {!! $cate->links() !!}
                  </div>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              </div>
          </div>
      </div>
  </div>
@endsection