<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tải Về</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">BẢNG GIÁ CHI TIẾT KHOÁ HỌC</h1>
    <div class="set-mar container">
        <table class="table" border="1" cellpa>
            <thead>
                <tr>
                    <th scope="col">Courses</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Lessions</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($xuat as $x)
                <tr>
                    <td>{{$x->course_name}}</td>
                    <td>{{$x->subject_name}}</td>
                    <td>{{$x->lession_name}}</td>
                    <td>{{$x->price}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
</body>

</html>
