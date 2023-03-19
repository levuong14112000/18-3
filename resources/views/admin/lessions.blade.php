@extends('admin.admin')
@section('admincontent')
@if(session('msg'))
@if(session('msg') == 'exists')
<div class="alert alert-danger">
    <p>Bài học đã tồn tại</p>
</div>
@else
<div class="alert alert-success">
    <p>Thêm thành công</p>
</div>
@endif
@endif
<h1 class="text-center">Lession</h1>
<div class="input-value">
    <form action="/admin/lessions/add" method="post" enctype="multipart/form-data">
        @csrf
        <lable>Bài Học :</lable>
        <input class="form-control" type="text" name="lession_name" placeholder="Nhập Bài Học">
        <lable>Mô Tả</lable>
        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
        <lable>Môn Học</lable>
        <br>
        <select name="subject_id" id="" class="form-control">
            @foreach($data1 as $item)
            <option value="{{$item->subject_id}}">{{$item->subject_name}}</option>
            @endforeach
        </select>
        <button style="margin: 10px 0px 10px 0px;" class="btn btn-primary" type="submit">Gửi</button>
    </form>

</div>
<hr>
<div class="show-value">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Bài Học</th>
                <th scope="col">Môn Học</th>
                <th scope="col">Thao Tác</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach($data_lessions as $item)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$item->lession_name}}</td>
                <td>{{$item->subject_name}}</td>
                <td>
                    <button class="btn btn-primary" onclick="transferData('{{$item->lession_id}}','{{$item->lession_name}}','{{$item->description}}','{{$item->subject_id}}')" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa-solid fa-pen "></i>
                    </button>
                    <a class="btn btn-danger" href="/admin/lessions/delete/{{$item->lession_id}}">
                        <i class="fa-solid fa-trash"></i>
                    </a>

                </td>
            </tr>
            @endforeach
            <tr>
        </tbody>
    </table>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <form action="/admin/lessions/edit" method="post" enctype="multipart/form-data">
                        @csrf
                        <lable>Bài Học :</lable>
                        <input class="form-control" type="text" id="id" name="id" hidden>
                        <input class="form-control" type="text" id="lession_name" name="lession_name" placeholder="Nhập Bài Học">
                        <lable>Mô Tả</lable>
                        <textarea name="description" id="description"  class="form-control" id="" cols="30" rows="10"></textarea>
                        <lable>Môn Học</lable>
                        <br>
                        <select name="subject_id" id="subject_id" class="form-control">
                            @foreach($data1 as $item)
                            <option value="{{$item->subject_id}}">{{$item->subject_name}}</option>
                            @endforeach
                        </select>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function transferData(id, name, description, subid) {
        $('#id').val(id);
        $('#lession_name').val(name);
        $('#description').val(description);
        $('#subject_id').val(subid);

    }
</script>
@endsection