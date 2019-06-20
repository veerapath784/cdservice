@extends('backend.layout.master')
@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/admin">หน้าหลัก</a>
    </li>
    <li class="breadcrumb-item active">จัดการระบบ</li>
    <li class="breadcrumb-item active">หน่วยงาน</li>
</ol>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <i class="icon icon-puzzle"></i> หน่วยงาน

        <a href="/admin/department/create" class="float-right btn btn-primary btn-sm" id="toggleForm">
            <i class="fa fa-plus"></i> เพิ่ม </a>
    </div>
    <div class="card-body">
        <h4>หน่วยงาน</h4>
    </div>
    <table class="table">
            <thead>
                <tr class="text-center">
                    <th>#</th>
                    <th>ชื่อหน่วยงาน</th>
                    <th>ที่ตั้ง</th>
                    <th>เบอร์ติดต่อ</th>
                    <th>จัดการ</th>
                </tr>
            </thead>

            @foreach($departments as $department)
            <tbody>
                <tr class="text-center">
                    <td>{{$department->id}}</td>
                    <td>{{$department->name}}</td>
                    <td>{{$department->address}}</td>
                    <td>{{$department->phone}}</td>

                    <td>
                        <a href="/admin/department/{{$department->id}}/edit"
                            class="btn btn-warning btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>

                        <a href="javaScript: deleteItem('{{$department->id}}')" class="btn btn-sm btn-danger">
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
                    axios.delete('/admin/department/' + id).then(function (response) {
                        window.location.href = "/admin/department";
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
