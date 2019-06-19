@extends('backend.layout.master')
@section('content')
<div class="card">
    <div class="card-header"><i class="fa fa-cubes"></i> เพิ่มหมวดหมู่ข่าว</div>
    <div class="card-body">
        <h4>โปรดกรอกข้อมูลให้ครบถ้วน</h4>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="/admin/category" method="POST" >
            @csrf

            <div class="form-group mt-5 col-md-8">
                    <label for="inputVersion">หมวดหมู่ข่าว: </label>
                    <input type="text" name="name"  class="form-control" placeholder="กรอกหมวดหมู่ข่าว">
                </div>



            <button class="btn btn-primary"> <i class="fa fa-save"></i> บันทึก</button>
        </form>
    </div>
</div>

@endsection
