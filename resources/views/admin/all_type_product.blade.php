@extends('admin_layout')
@section('admin_content')   
 
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     DANH SÁCH DANH MỤC SẢN PHẨM
    </div>
    <div class="row w3-res-tb">
      <!-- <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div> -->
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
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <!-- <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label> -->
            </th>
            <th>Tên danh mục</th>
            <th>Mô tả</th>
           
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($all_type_product as $key => $type_pro)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td style ="width:30%;">{{$type_pro -> name}}</td>
            <td style ="width:60%;" ><span class="text-ellipsis">{{$type_pro -> description}}</span></td>
            <td style ="width:10%;" >
              <a href="{{route('update-type-product',$type_pro->id)}}" class="active" ui-toggle-class="">
              <i class="fa fa-pencil-square-o text-success text-active"></i>
            </a>
              <a href="{{route('delete-type-product',$type_pro->id)}}" class="active" ui-toggle-class="">
              <i class="fa fa-times text-danger text"></i>
            </a>
            </td>
          </tr>
          @endforeach()
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
     
    </footer>
  </div>
</div>
@endsection