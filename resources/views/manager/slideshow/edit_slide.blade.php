@extends('manager.template.admin_layout')
@section('content')
<div class="right_col" role="main">
				<div class="">
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Sửa Slideshow</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
									@if(Session()->has('error'))
									<section class='alert alert-danger' style="text-align: center;">{{session('error')}}</section>
									@endif
									@if (count($errors)>0)
									<section class='alert alert-danger' style="text-align: center;">
									@foreach ($errors->all() as $err)
										{{$err}}
									@endforeach
									@endif
								</div>
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{URL::to('/update-slider/'.$slide->slider_id)}}" method="post" enctype="multipart/form-data">
										@csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tên slideshow <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input data-validation="required"  type="text" name="slider_name" class="form-control" value="{{$slide->slider_name}}" placeholder="Tên slideshow" required="required">
											</div>
										</div>
										
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Mô tả</label>
											<div class="col-md-6 col-sm-6 ">
												<!-- <input id="middle-name" class="form-control" type="text" name="middle-name"> -->
												<textarea type="text" class="form-control"  name="slider_desc" required="required" id="ckeditor" placeholder="Mô tả">{{$slide->slider_desc}}</textarea>
												
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Hình</label>
											<div class="col-md-6 col-sm-6 text-center">

												<span class="btn btn-default btn-file">

					                             <img src="{!!asset('uploads/slider/'.$slide->slider_image)!!}" id="imgPre" class="img-thumbnail cover" width="300px"/> <input type="file" value="{{$slide->slider_image}}"  name="slider_image" id="ful" >
					                             </span>
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Trạng thái</label>
											<div class="col-md-6 col-sm-6 ">
												<select name="slider_status" id="" class="form-control" >
													 
											      <option value="0">Hiện</option>
											      <option value="1">Ẩn</option>

												</select>
											</div>
										</div>

										

										


										
										<div class="ln_solid"></div>
										<div class="item form-group text-center">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<!-- <button class="btn btn-primary" type="button">Cancel</button> -->
												<!-- <button class="btn btn-primary" type="reset">Reset</button> -->
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

@endsection