@extends('master');
@section('content');
<div id="layoutSidenav">
<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Quản Lý sản phẩm</div>
                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Quản lý Sản phẩm
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Loại sản phẩm
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="{{route('danhsachlsp')}}">Danh sách loại sản phẩm</a>
                                            <a class="nav-link" href="{{route('addlsp')}}">Thêm loại sản phẩm</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Sản phẩm
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="{{route('danhsachsp')}}">Danh sách sản phẩm</a>
                                            <a class="nav-link" href="{{route('addsp')}}">Thêm sản phẩm</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Thống kê</div>
                            <a class="nav-link" href="{{route('danhsachdh')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Đơn hàng
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    
	<div class="container">
		<div id="content">
			
			<form action="#" method="post" class="beta-form-checkout">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row">
					<div class="col-sm-3"></div>
                    <!-- @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                            {{$err}}
                            @endforeach
                        </div>
                    @endif
                    @if(Session::has('thanhcong'))
                    <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                    @endif -->
					<div class="col-sm-6">
						<h4>Đăng kí</h4>
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email">Email address*</label>
							<input type="email" name="email" required>
						</div>

						<div class="form-block">
							<label for="your_last_name">Fullname*</label>
							<input type="text" name="fullname" required>
						</div>

						<div class="form-block">
							<label for="adress">Address*</label>
							<input type="text" name="adress" value="Street Address" required>
						</div>


						<div class="form-block">
							<label for="phone">Phone*</label>
							<input type="text" name="phone" required>
						</div>
						<div class="form-block">
							<label for="password">Password*</label>
							<input type="password" name="password" required>
						</div>
						<div class="form-block">
							<label for="password">Re password*</label>
							<input type="password" name="re_password" required>
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Register</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
                </main>
                @endsection