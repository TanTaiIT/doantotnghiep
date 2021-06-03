<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Log In</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="{{route('dangnhap')}}" method="post">
						@csrf
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="Email" class="form-control" placeholder=" " name="email" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " name="password" required="" id="password1">
						</div>
						
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Đăng nhập">
						</div>
						<p class="text-center dont-do mt-3">
							<a href="#" data-toggle="modal" data-target="#exampleModal3">
								Quên mật khẩu</a>
						</p>
						
						<p class="text-center dont-do mt-3">Don't have an account?
							<a href="#" data-toggle="modal" data-target="#exampleModal2">
								Đăng ký</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- register -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Register</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="{{route('dangky')}}" method="post">
						@csrf
						<div class="form-group">
							<label class="col-form-label">Tên đăng nhập</label>
							<input type="text" class="form-control" placeholder=" " name="name" >
						</div>
						<div class="form-group">
							<label class="col-form-label">Số điện thoại</label>
							<input type="text"  class="form-control" placeholder=" " name="sdt">
						</div>
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" " name="email"  >
						</div>
						<div class="form-group">
							<label class="col-form-label">Mật khẩu</label>
							<input type="password" class="form-control" placeholder=" " name="password" id="password1" >
						</div>
						<div class="form-group">
							<label class="col-form-label">Mật khẩu</label>
							<input type="password" class="form-control" placeholder=" " name="re_password" id="password1">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Register">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
								<label class="custom-control-label" for="customControlAutosizing2">I Accept to the Terms & Conditions</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Xác nhận mật khẩu -->
	<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Xác nhận mật khẩu</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="{{route('postlaymk')}}" method="post">
						@csrf
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" " name="email"  >
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Xác nhận">
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>