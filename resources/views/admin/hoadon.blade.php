@extends('admin_layout')
@section('admin_content') 
            <div class="table-agile-info">
              <div class="panel panel-default">
                <div class="panel-heading">
                DANH SÁCH Hoá Đơn
                </div>
                <div class="row w3-res-tb">
                  <div class="col-sm-4">
                  </div>
                  <div class="col-sm-3">
                    <div class="input-group">
                      <input type="text" class="input-sm form-control" placeholder="Search">
                      <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="button">Go!</button>
                      </span>
                    </div>
                  </div>
                </div>
                                 <?php
                                    $message = Session::get('message');
                                    if ($message) {
                                        # code...
                                        echo $message;
                                        Session::put('message'.null);
                                    }
                                ?>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">            
            </th>
            <th>ID Hoá Đơn</th>
            <th>Ngày đặt</th>  
            <th>Tổng Tiền</th>   
            <th>Hình Thức Thanh Toán</th>   
            <th>Ghi Chú</th>
            <th>Tên Khách Hàng</th>
            <th>Địa Chỉ</th>
            <th>Số Điện Thoại</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($hoadon as $hd)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td style ="width:20%;">{{$hd -> id_bill}}</td>
            <td style ="width:10%;" ><span class="text-ellipsis">{{$hd -> date_order}}</span></td>
            <td style ="width:10%;" ><span class="text-ellipsis">{{$hd -> total}}</span></td>
            <td style ="width:10%;" ><span class="text-ellipsis">{{$hd -> payment}}</span></td>
            <td style ="width:10%;" ><span class="text-ellipsis">{{$hd -> note}}</span></td>
            <td style ="width:10%;" ><span class="text-ellipsis">{{$hd -> name}}</span></td>
            <td style ="width:10%;" ><span class="text-ellipsis">{{$hd -> address}}</span></td>
            <td style ="width:10%;" ><span class="text-ellipsis">{{$hd -> phone_number}}</span></td>
            <td style ="width:10%;" >
              <a  onClick = "return confirm('Xác nhận xoá?')" href= "" class="active" ui-toggle-class="">
              <i class= "fa fa-times text-danger text"></i>
            </a>
            </td>
          </tr> 
          @endforeach
        </tbody>
      </table>
      <div class = "row">{{$hoadon->links()}} </div>
							<div class="space40">&nbsp;</div>
    </div>
    <footer class="panel-footer">
     
    </footer>
  </div>
</div>
@endsection