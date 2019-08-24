@extends('admin.master')
@section('title','List user')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12">
                            <!-- DATA TABLE -->
                            <h3 class="title-5 m-b-35">data table</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">


                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                    <tr>
                                        <th>Tên</th>
                                        <th>Họ và tên</th>
                                        <th>Địa Chỉ</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($user as $key => $val)
                                    <tr class="tr-shadow">
                                        <td>{{$val->username}}</td>
                                        <td>
                                            <span class="block-email">{{$val->fullname}}</span>
                                        </td>
                                        <td class="desc">{{$val->age}}</td>
                                       
                                        </td>
                                        <td width="15%">



                                                <a   href="{{route('admin.user.get.edit',$val->id)}}" class="btn btn-small btn-info" >
                                                   SỬA
                                                </a>
                                                <a  class="btn btn-small btn-danger "  href="{{route('admin.user.get.delete',$val->id)}}" >
                                                    XÓA
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- END DATA TABLE -->
                        </div>
                    </div>


            </div>
        </div>
    </div>
@endsection
