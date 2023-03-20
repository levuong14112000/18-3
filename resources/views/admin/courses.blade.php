@extends('admin.admin')
@section('admincontent')
@if(session('msg'))
@if(session('msg') == 'exists')
<div class="alert alert-danger">
    <p>Khoá học đã tồn tại</p>
</div>
@else
<div class="alert alert-success">
    <p>Thêm thành công</p>
</div>
@endif
@endif
<h1 class="text-center">Courses</h1>
<div class="input-value">
    <form action="/admin/courses/add" method="post" enctype="multipart/form-data">
        @csrf
        <lable>Tên Khóa Học :</lable>
        <input class="form-control " type="text" name="txtcoursename" placeholder="Nhập Tên Khóa Học">
        <lable>Mô Tả</lable>
        <textarea name="txtdescription input-admin" class="form-control" id="" cols="30" rows="10"></textarea>
        <lable>Giá</lable>
        <input class="form-control " type="text" name="txtprice" placeholder="Nhập Giá">
        <lable>Thời Gian Khóa Học</lable>
        <input class="form-control " type="date" name="txtcourstime" placeholder="Nhập Thời Khóa Học">
        <lable>Thời Gian Học</lable>
        <input class="form-control " type="text" name="txtduration" placeholder="Nhập Thời Gian Học">
        <lable>Hình ảnh</lable>
        <input class="form-control " type="file" name="txtpicture" placeholder="Nhập ảnh">
        <lable>HOT</lable>
        <select class="form-control select-form input-admin" name="txthot" id="">
            <option value="0">Normal</option>
            <option value="1">HOT</option>
        </select>
        <button style=" margin: 10px 0px 10px 0px;" class="btn btn-primary" type="submit">Thêm</button>
    </form>

</div>
<hr>
<div class="show-value">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Khoá Học</th>
                <th>
                <input class="form-control " type="text" name="txtcoursename" placeholder="Nhập Tên Khóa Học"></th>
                <!-- <th scope="col">Mô Tả</th> -->
                <th scope="col">Giá</th>
                <th scope="col">Thời Gian Khoá Học</th>
                <th scope="col">Thời Gian Học</th>
                <th scope="col">Hình Ảnh</th>
                <th scope="col">Hot</th>
                <th scope="col">Thao Tác</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach($data_course as $item)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$item->course_name}}</td>
                <!-- <td>{{$item->description}}</td> -->
                <td>{{$item->price}}</td>
                <td>{{$item->course_time}}</td>
                <td>{{$item->duration}}</td>
                <td>{{$item->picture}}</td>
                <td>{{$item->hot}}</td>
                <td>
                    <button class="btn btn-primary" onclick="transferData('{{$item->course_id}}','{{$item->course_name}}','{{$item->price}}','{{$item->course_time}}','{{$item->duration}}','{{$item->hot}}')" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa-solid fa-pen "></i>
                    </button>
                    <a class="btn btn-danger" href="/admin/courses/delete/{{$item->course_id}}">
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
                    <form action="/admin/courses/edit" method="post" enctype="multipart/form-data">
                        @csrf
                        <lable>Tên Khóa Học :</lable>
                        <input class="form-control" type="text" id="id" name="id" hidden>
                        <input class="form-control" type="text" id="txtcoursename" name="txtcoursename" placeholder="Nhập Tên Khóa Học">
                        <lable>Mô Tả</lable>
                        <textarea name="txtdescription" class="form-control" id="txtdescription" cols="30" rows="10"></textarea>
                        <lable>Giá</lable>
                        <input class="form-control" type="text" id="txtprice" name="txtprice" placeholder="Nhập Giá">
                        <lable>Thời Gian Khóa Học</lable>
                        <input class="form-control" type="date" id="txtcourstime" name="txtcourstime" placeholder="Nhập Thời Khóa Học">
                        <lable>Thời Gian Học</lable>
                        <input class="form-control" type="text" id="txtduration" name="txtduration" placeholder="Nhập Thời Gian Học">
                        <!-- <lable>Hình ảnh</lable>
                <input class="form-control" type="file" name="txtpicture" placeholder="Nhập ảnh"> -->
                        <lable>HOT</lable>
                        <select class="form-control" name="txthot" id="txthot">
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
    function transferData(id, name, price, time, duration, hot) {
        $('#id').val(id);
        $('#txtcoursename').val(name);
        $('#txtprice').val(price);
        $('#txtcourstime').val(time);
        $('#txtduration').val(duration);
        $('#txthot').val(hot);

    }
</script>
@endsection
