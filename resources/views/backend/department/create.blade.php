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
        <form action="/admin/department" method="POST" >
            @csrf

            <div class="form-group mt-5 col-md-6">
                    <label for="inputVersion">ชื่อหน่วยงาน : </label>
                    <input type="text" name="name"  class="form-control" placeholder="กรอกชื่อหน่วยงาน">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputText">ที่ตั้ง :</label>
                    <textarea  class="form-control" rows="3" name="address"></textarea>
            </div>
                <div class="form-group col-md-6">
                    <label for="inputVersion">เบอร์ติดต่อ : </label>
                    <input type="text" name="phone"  class="form-control" placeholder="กรอกเบอร์ติดต่อ">
                </div>



            <button class="btn btn-primary"> <i class="fa fa-save"></i> บันทึก</button>
        </form>
    </div>
</div>

@endsection
