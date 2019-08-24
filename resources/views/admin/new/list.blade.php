@extends('admin.master')
@section('title','List new')
@section('content')
<div class="module">
    <div class="module-head">
        <h3>List news</h3>
    </div>
    <div class="module-body table">
        <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
            <thead>
                <tr>
                    <th width="3%">STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Mô tả</th>
                    <th>Giá</th>
                    <th>Danh Mục</th>
                    <th>Ảnh</th>
                    <th>Ngày Cập Nhật</th>
                    <th>Trạng thái</th>
                    <th width="7%">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                @foreach($new as $key => $val)
                <tr class="odd gradeX">
                    <td width="3%">{{$key}}</td>
                    <td>{{$val->title}}</td>
                    <td>{{$val->description}}</td>
                    <td>{{$val->author}}</td>
                    <td>{{$val->category}}</td>
                    <td><img src="{{asset($val->avatar)}}" width="50px" height="50px"></td>
                    <td>{{$val->updated_at}}</td>
                    <td>
                        @if($val->status == 0)
                            Ẩn
                        @endif
                        @if($val->status == 1)
                            Hoạt Động
                        @endif
                    </td>
                    <td width="15%">
                        <a href="{{route('admin.new.get.edit',$val->id)}}" class="btn btn-small btn-info">SỬA</a>
                        <a href="{{route('admin.new.get.delete',$val->id)}}" class="btn btn-small btn-danger xacnhan">XÓA</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th width="3%">STT</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Avatar</th>
                    <th>Status</th>
                    <th width="7%">Work</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection
