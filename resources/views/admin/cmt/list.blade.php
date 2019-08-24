@extends('admin.master')
@section('title','List comment')
@section('content')
<div class="module">
        <div class="module-head">
            <h3>List comment</h3>
        </div>
        <div class="module-body table">
            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                <thead>
                    <tr>
                        <th width="3%">STT</th>
                        <th>Content</th>
                        <th>Username</th>
                        <th>New</th>
                        <th width="7%">Work</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cmt as $key => $val1)
                    @foreach($new as $val2)
                    @foreach($user as $val3)
                    @if($val1->user_id == $val3->id)
                    @if($val1->new_id == $val2->id)
                    <tr class="odd gradeX">
                        <td width="3%">{{$key}}</td>
                        <td>{{$val1->content}}</td>
                        <td>{{$val3->username}}</td>
                        <td>{{$val2->title}}</td>
                        <td width="15%">
                            <a href="{{route('admin.cmt.get.edit',$val1->id)}}" class="btn btn-small btn-info">SỬA</a>
                            <a href="{{route('admin.cmt.get.delete',$val1->id)}}" class="btn btn-small btn-danger xacnhan">XÓA</a>
                        </td>
                    </tr>
                    @endif
                    @endif
                    @endforeach
                    @endforeach
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th width="3%">STT</th>
                        <th>Content</th>
                        <th>Username</th>
                        <th>New</th>
                        <th width="7%">Work</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
