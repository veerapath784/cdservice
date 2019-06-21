@extends('backend.layout.master')
@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/admin">หน้าหลัก</a>
    </li>
    <li class="breadcrumb-item active">จัดการระบบ</li>
    <li class="breadcrumb-item active">แหล่งท่องเที่ยว</li>
</ol>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <i class="icon icon-puzzle"></i> แหล่งท่องเที่ยว

        <a href="/admin/travel/create" class="float-right btn btn-primary btn-sm" id="toggleForm">
            <i class="fa fa-plus"></i> เพิ่ม </a>
    </div>
    <div class="card-body">
        <h4>แหล่งท่องเที่ยว</h4>
    </div>
    <table class="table">
            <thead>
                <tr class="text-center">
                    <th>#</th>
                    <th>ชื่อแหล่งท่องเที่ยว</th>
                    <th>เบอร์ติดต่อ</th>
                    <th>จัดการ</th>
                </tr>
            </thead>

            @foreach($travels as $travel)
            <tbody>
                <tr class="text-center">
                    <td>{{$travel->id}}</td>
                    <td>{{$travel->title}}</td>
                    <td>{{$travel->phone}}</td>

                    <td>
                        <a href="/admin/travel/{{$travel->id}}/edit"
                            class="btn btn-warning btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>

                        <a href="javaScript: deleteItem('{{$travel->id}}')" class="btn btn-sm btn-danger">
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
                    axios.delete('/admin/travel/' + id).then(function (response) {
                        window.location.href = "/admin/travel";
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
