@extends('backend.layout.master')
@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/admin">หน้าหลัก</a>
    </li>
    <li class="breadcrumb-item active">จัดการระบบ</li>
    <li class="breadcrumb-item active">Banners</li>
</ol>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <i class="icon icon-puzzle"></i> Banners

        <a href="/admin/banner/create" class="float-right btn btn-primary btn-sm" id="toggleForm">
            <i class="fa fa-plus"></i> เพิ่ม </a>
    </div>
    <div class="card-body">
        <h4>Banners</h4>
    </div>
    <table class="table">
            <thead>
                <tr class="text-center">
                    <th>#</th>
                    <th>รูปภาพ</th>
                    <th>หัวข้อข่าว</th>
                    <th>จัดการ</th>
                </tr>
            </thead>

            @foreach($banners as $banner)
            <tbody>
                <tr class="text-center">
                    <td >{{$banner->id}}</td>
                    <td ><img src="{{$banner->thumbnail}}" alt="{{$banner->name}}" width="280" ></td>
                    <td >{{$banner->title}}</td>

                    <td>
                        <a href="/admin/banner/{{$banner->id}}/edit"
                            class="btn btn-warning btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>

                        <a href="javaScript: deleteItem('{{$banner->id}}')" class="btn btn-sm btn-danger">
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
                    axios.delete('/admin/banner/' + id).then(function (response) {
                        window.location.href = "/admin/banner";
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
