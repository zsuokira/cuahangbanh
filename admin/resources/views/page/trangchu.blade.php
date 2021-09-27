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
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Tên sản phẩm</th>
                                            <th>Loại sản phẩm</th>
                                            <th>Mô tả</th>
                                            <th>Giá bán</th>
                                            <th>Giá khuyến mãi</th>
                                            <th>Hình ảnh</th>
                                            <th>Đơn vị</th>
                                            <th>Thông tin</th>
                                            <th>Ngày tạo</th>
                                            <th>Ngày sửa</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Tên sản phẩm</th>
                                            <th>Loại sản phẩm</th>
                                            <th>Mô tả</th>
                                            <th>Giá bán</th>
                                            <th>Giá khuyến mãi</th>
                                            <th>Hình ảnh</th>
                                            <th>Đơn vị</th>
                                            <th>Thông tin</th>
                                            <th>Ngày tạo</th>
                                            <th>Ngày sửa</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                            <td>$320,800</td>
                                            <td>$320,800</td>
                                            <td>$320,800</td>
                                            <td>$320,800</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
         
 @endsection