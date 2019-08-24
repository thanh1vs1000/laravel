@extends('admin.master')
@section('title','New')
@section('content')
<div class="module">
    <div class="module-head">
        <h3>New</h3>
    </div>
    <div class="module-body">
        <form class="form-horizontal row-fluid" action="{{route('admin.new.post.create')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="control-group">
                <label class="control-label" for="basicinput">Title</label>
                <div class="form-control">
                    <input type="text" id="basicinput" name='title'  class="span12">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="basicinput">Description</label>
                <div class="form-control">
                    <input type="text" id="basicinput" name="description"  class="span12">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="basicinput">Author</label>
                <div class="form-control">
                    <input type="text" id="basicinput" value="@if($author){{$author}}@endif" name="author"  class="span8">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="basicinput">Avatar</label>
                <div class="controls">
                    <input type="file" id="basicinput" name="avatar" class="span8 img-upload" >
                    <br>
                    <img style="padding: 10px 10px;
                    background-color: white;
                    box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);
                    -moz-box-shadow: 0 1px 2px rgba(34,25,25,0.4);
                    -webkit-box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);" class="img-bnupload" src="{{asset('admin_layout/images/default.png')}}" width="50px" height="50px">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="basicinput">Category</label>
                <div class="controls">
                    <select tabindex="1" name="category" data-placeholder="Select here.." class="span8">
                        <option value="">Select here..</option>
                        @foreach($cate as $val)
                            @if($val->status == 1)
                                <option>{{$val->cate}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="basicinput">Status</label>
                <div class="controls">
                    <select tabindex="1" name="status" data-placeholder="Select here.." class="span4">
                        <option value="">Select here..</option>
                        <option value="0">Ẩn</option>
                        <option value="1">Hoạt Động</option>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="basicinput">Content</label>
                <div class="form-control">
                    <textarea class="span8" id="editor-vip" name="content" rows="5"></textarea>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox"  onchange="document.getElementById('cli').disabled = !this.checked;" />
                        Confirm
                    </label>
                    @if (count($errors) > 0)
                    <div class="alert alert-danger span8">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        @foreach ($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button id="cli" type="submit" class="btn btn-danger" disabled>Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('script')
    CKEDITOR.replace('editor-vip',config);
    $('.img-bnupload').click(function(){
        $('.img-upload').click();
        //var a = $('input[type="file"]').val();
        //$(".img-bnupload").attr("src",a);
    });
    $('.img-upload').change( function(event) {
        var tmppath = URL.createObjectURL(event.target.files[0]);
            $(".img-bnupload").fadeIn("fast").attr('src',tmppath);       
        });
@endsection