@extends('backend.layout.master')
@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/admin">หน้าหลัก</a>
    </li>
    <li class="breadcrumb-item active">จัดการระบบ</li>
    <li class="breadcrumb-item active">ข่าวสาร</li>
</ol>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <i class="icon icon-puzzle"></i> ข่าวสาร

        <a href="/admin/article/create" class="float-right btn btn-primary btn-sm" id="toggleForm">
            <i class="fa fa-plus"></i> เพิ่ม </a>
    </div>
    <div class="card-body">
        <h4>ข่าวสาร</h4>
    </div>
    <table class="table">
            <thead>
                <tr class="text-center">
                    <th>#</th>
                    <th>หมวดหมู่ข่าว</th>
                    <th>หัวเรื่อง</th>
                    <th>จัดการ</th>
                </tr>
            </thead>

            @foreach($articles as $article)
            <tbody>
                <tr class="text-center">
                    <td>{{$article->id}}</td>
                    <td>{{$article->category['name']}}</td>
                    <td>{{$article->title}}</td>

                    <td>
                        <a href="/admin/article/{{$article->id}}/edit"
                            class="btn btn-warning btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>

                        <a href="javaScript: deleteItem('{{$article->id}}')" class="btn btn-sm btn-danger">
                            <i class="fa fa-times"></i> ลบ
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @section('script')
    <script>
        var deleteItem = function deleteItem(id) {

            swal.fire({
                title: "แน่ใจหรือไม่ ?",
                text: "คุณต้องการลบข้อมูลนี้จริงหรือไม่ ?",
                type: "warning",
                showCancelButton: true,
            }).then(function (result) {
                if (result.value) {
                    axios.delete('/admin/article/' + id).then(function (response) {
                        window.location.href = "/admin/article";
                    }).catch(function (error) {
                        console.log(error.response)
                        swal('เกิดข้อผิดพลาด', 'ไม่สามารถลบข้อมูลได้ \n ' + error.response
                            .statusText,
                            'error');
                    });
                }
            })


        }

    </script>
    @endsection

</div>
@endsection
