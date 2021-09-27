@extends('master')
@section('content')

<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm {{$sanpham -> name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Trang chủ</a> / <span>Thông tin chi tiết</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							<img src="source/image/product/{{$sanpham -> image}}" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title"><h2>{{$sanpham -> name}}</h2></p>
								<p class="single-item-price">
								@if($sanpham ->promotion_price == 0)
                                                     <span class="flash-sale">{{number_format($sanpham->unit_price)}}đ</span>
                                                @else
                                                <span class="flash-del">{{number_format($sanpham->unit_price)}}đ</span>
												<span class="flash-sale">{{number_format($sanpham->promotion_price)}}đ</span>
                                                @endif()
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

						
							<div class="space20">&nbsp;</div>

							<p>Đặt mua:</p>
							<div class="single-item-options">
								
								<a class="add-to-cart" href="{{route('themgiohang',$sanpham -> id)}}"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Mô tả sản phẩm</a></li>
							<li><a href="#tab-reviews">Reviews (0)</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<p>{{$sanpham -> description}}</p>
						</div>
						
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Sản Phẩm Tương Tự</h4>

						<div class="row">
							@foreach($sp_tuongtu as $sptt)
							<div class="col-sm-4">
								<div class="single-item">
								@if($sptt ->promotion_price != 0)
                                            	<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div>
                                        </div>
                                        @endif();
									<div class="single-item-header">
										<a href="{{route('chitietsanpham',$sptt -> id)}}"><img src="source/image/product/{{$sptt -> image}}" alt="" height="200px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$sptt -> name}}</p>
										<p class="single-item-price">
										@if($sptt->promotion_price != 0)
											<span class="flash-del">{{number_format($sptt->unit_price)}}đ</span>
												<span class="flash-sale">{{number_format($sptt->promotion_price)}}đ</span>
												@else
												<span >{{number_format($sptt->unit_price)}}đ</span>
												@endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="{{route('themgiohang',$sptt -> id)}}"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{route('chitietsanpham',$sptt -> id)}}">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<div class = "row">{{$sp_tuongtu -> links()}}</div>
					</div> <!-- .beta-products-list -->
				</div>
				
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
</div>
@endsection