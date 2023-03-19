@extends('admin.admin')
@section('admincontent')

<h1 class="text-center">Subject</h1>
<div class="input-value">
    <form action="/admin/subjects/add" method="post" enctype="multipart/form-data">
        @csrf
        <lable>Tên Môn Học :</lable>
        <input class="form-control" type="text" name="sub_name" placeholder="Nhập Tên Môn Học">
        <!-- <lable>Nội Dung</lable>
        <textarea name="sub_content" class="form-control" id="" cols="30" rows="10"></textarea> -->
        <lable>Hình</lable>
        <input class="form-control" type="file" name="sub_picture">
        <lable>Khoá Học</lable>
        <select name="course_id" id="">
            @foreach($data_course as $item)
            <option value="{{$item->course_id}}">{{$item->course_name}}</option>
            @endforeach
        </select>
        <lable>Giảng Viên</lable>
        <select name="user_id" id="">
            @foreach($data_user as $itemu)
            <option value="{{$itemu->user_id}}">{{$itemu->full_name}}</option>
            @endforeach
        </select>
        <lable>HOT</lable>
        <select name="hot" id="">
            <option value="0">Normal</option>
            <option value="1">HOT</option>
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
                <th scope="col">Môn Học</th>
                <!-- <th scope="col">Nội Dung</th> -->
                <th scope="col">Khoá Học</th>
                <th scope="col">Giảng Viên</th>
                <th scope="col">HOT</th>
                <th scope="col">Thao Tác</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach($data as $item)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$item->subject_name}}</td>
                <!-- <td>{{$item->content}}</td> -->
                <td>{{$item->course_name}}</td>
                <td>{{$item->full_name}}</td>
                <td>{{$item->hot}}</td>
                <!-- <td>{{$item->hot}}</td> -->
                <td>
                    <button class="btn btn-primary" onclick="transferData('{{$item->subject_id}}','{{$item->subject_name}}','{{$item->course_id}}','{{$item->user_id}}','{{$item->hot}}')" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa-solid fa-pen "></i>
                    </button>
                    <a class="btn btn-danger" href="/admin/subjects/delete/{{$item->subject_id}}">
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
                    <form action="/admin/subjects/edit" method="post" enctype="multipart/form-data">
                        @csrf
                        <lable>Tên Môn Học :</lable>
                        <input class="form-control" type="text" id="id" name="id" hidden>
                        <input class="form-control" type="text" id="sub_name" name="sub_name" placeholder="Nhập Tên Môn Học">
                        <!-- <lable>Nội Dung</lable>
        <textarea name="sub_content" class="form-control" id="" cols="30" rows="10"></textarea> -->
                        <!-- <lable>Hình</lable>
                        <input class="form-control" type="file" name="sub_picture"> -->
                        <lable>Khoá Học</lable>
                        <select name="course_id" id="course_id">
                            @foreach($data_course as $item)
                                <option value="{{$item->course_id}}">{{$item->course_name}}</option>
                            @endforeach
                        </select>
                        <lable>Giảng Viên</lable>
                        <select name="user_id" id="user_id">
                            @foreach($data_user as $itemu)
                            <option value="{{$itemu->user_id}}">{{$itemu->full_name}}</option>
                            @endforeach
                        </select>
                        <lable>HOT</lable>
                        <select name="hot" id="hot">
                            <option value="0">Normal</option>
                            <option value="1">HOT</option>
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
    function transferData(id, name, course_id, user_id, hot) {
        $('#id').val(id);
        $('#sub_name').val(name);
        $('#course_id').val(course_id);
        $('#user_id').val(user_id);
        $('#hot').val(hot);

    }
</script>
@endsection