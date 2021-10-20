@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Home</a> / <span>Sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
							@foreach($loai as $l)
							<li><a href="{{route('loaisanpham',$l -> id)}}">{{$l -> type_name}}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>{{$loai_sp -> type_name}}</h4>
							<div class="beta-products-details">
								<p class="pull-left">Panna Cotta - Tiệm Bánh Handmade</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($sp_theoloai as $sp)
								<div class="col-sm-4">
									<div class="single-item">
									@if($sp ->promotion_price != 0)
                                            	<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div>
                                        </div>
                                        @endif()
										<div class="single-item-header">
											<a href="{{route('chitietsanpham',$sp -> id_product)}}"><img src="source/image/product/{{$sp -> image}}" alt="" height="250px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$sp -> product_name}}</p>
											<p class="single-item-price">
												@if($sp->promotion_price != 0)
											<span class="flash-del">{{number_format($sp->unit_price)}}đ</span>
												<span class="flash-sale">{{number_format($sp->promotion_price)}}đ</span>
												@else
												<span >{{number_format($sp->unit_price)}}đ</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('themgiohang',$sp -> id_product)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chitietsanpham',$sp -> id_product)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản phẩm khác</h4>
							<div class="beta-products-details">
								<p class="pull-left">Panna Cotta - Tiệm Bánh Handmade</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
							@foreach($sp_khac as $spk)
								<div class="col-sm-4">
									<div class="single-item">
									@if($spk ->promotion_price != 0)
                                            	<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div>
                                        </div>
                                        @endif()
										<div class="single-item-header">
											<a href="{{route('chitietsanpham',$spk -> id_product)}}"><img src="source/image/product/{{$spk -> image}}" alt="" height="250px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$spk -> product_name}}</p>
											<p class="single-item-price">
												@if($spk->promotion_price != 0)
											<span class="flash-del">{{number_format($spk->unit_price)}}đ</span>
												<span class="flash-sale">{{number_format($spk->promotion_price)}}đ</span>
												@else
												<span >{{number_format($spk->unit_price)}}đ</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('themgiohang',$spk -> id_product)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chitietsanpham',$spk -> id_product)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<div class = "row">{{$sp_khac -> links()}}</div>
							<div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection