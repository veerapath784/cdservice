@extends('backend.layout.master')
@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/admin">หน้าหลัก</a>
    </li>
    <li class="breadcrumb-item active">จัดการระบบ</li>
    <li class="breadcrumb-item active">ระบบปฏิบัติการ</li>
</ol>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <i class="icon icon-puzzle"></i> ระบบปฏิบัติการ

        <a href="/admin/article/create" class="float-right btn btn-primary btn-sm" id="toggleForm">
            <i class="fa fa-plus"></i> เพิ่ม </a>
    </div>
    <div class="card-body">
        <h4>ระบบปฏิบัติการ</h4>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>ชื่อระบบ</th>
                <th>เวอร์ชั่น</th>
                <th>บิวต์</th>
                <th>ปี</th>
                <th>ความคิดเห็น</th>
                <th>จัดการ</th>
                <th>จัดการ</th>
            </tr>
        </thead>

        <tbody>
            <tr>

                <td>
                    <a href="/admin/manage/operatingSystem/#/edit"
                        class="btn btn-warning btn-sm">
                        <i class="fa fa-edit"></i>
                    </a>

                    <a href="javaScript: deleteItem('#')" class="btn btn-sm btn-danger">
                        <i class="fa fa-times"></i> ลบ
                    </a>
                </td>
            </tr>

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
                    axios.delete('/admin/manage/operatingSystem/' + id).then(function (response) {
                        window.location.href = "/admin/manage/operatingSystem";
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
