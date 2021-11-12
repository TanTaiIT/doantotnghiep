@extends('manager.template.admin_layout')
@section('content')

<div class="right_col" role="main">
<div class="">
<div class="clearfix"></div>
<div class="row">
<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Quản lý bài viết</h2>
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
                          <th>Tên bài viết</th>
                          <th>Hình ảnh</th>
                          <th>Slug</th>
                          <th>Mô tả bài viết</th>
                          <th>Từ khóa bài viết</th>
                          <th>Danh mục bài viết</th>
                          <th>Tình trạng</th>
                          <th>Thao tác</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php $i=0; ?>
                        @foreach($post1 as $key => $post)
                        <?php $i++ ?>
                        <tr>
                          <td>{{$i}}</td>
                          <td>{{ $post->post_title }}</td>
                          <td><img src="{{asset('uploads/post/'.$post->post_image)}}" height="100" width="100"></td>
                          <td>{{ $post->post_slug }}</td>
                          <td>{!! $post->post_desc !!}</td>
                          <td>{{ $post->post_meta_keywords }}</td>
                          <td>{{ $post->cate_post->cate_post_name }}</td>
                          <td>
                            @if($post->post_status==0)
                              <a href="{{route('hkh-post',$post->post_id)}}">Hiển thị</a>
                            @else 
                              <a href="{{route('kh-post',$post->post_id)}}">Ẩn</a>
                            @endif
                          </td>

                          <td>
                            <a href="{{URL::to('/recover_post/'.$post->post_id)}}" class="active styling-edit" ui-toggle-class="">
                              <i class="glyphicon glyphicon-refresh"></i></a>
                            
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <div class="Pagination d-flex justify-content-center">
                    {!! $post1->links() !!}
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