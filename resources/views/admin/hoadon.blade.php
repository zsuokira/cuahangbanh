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
            <th>Tên danh mục</th>
            <th>Mô tả</th>         
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td style ="width:20%;"></td>
            <td style ="width:70%;" ><span class="text-ellipsis"></span></td>
            <td style ="width:10%;" >
              <a href="" class="active" ui-toggle-class="">
              <i class="fa fa-pencil-square-o text-success text-active"></i>
            </a>
              <a  onClick = "return confirm('Xác nhận xoá?')" href= "" class="active" ui-toggle-class="">
              <i class= "fa fa-times text-danger text"></i>
            </a>
            </td>
          </tr> 
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
     
    </footer>
  </div>
</div>
@endsection