@extends('backend.layout.master')
@section('content')
<div class="card">
    <div class="card-header"><i class="fa fa-cubes"></i> เพิ่ม Banner</div>
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
        <form action="/admin/banner" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="form-group  col-md-8">
                    <label for="inputVersion">ชื่อ Banner: </label>
                    <input type="text" name="title"  class="form-control" placeholder="กรอกหัวข้อข่าว">
            </div>
                <div class="form-group  col-md-8">
                <input type="file" name="thumbnail" class="file">
                <div class="input-group col-xs-5">

                  <input type="text" name="thumbnail" class="form-control form-controll input-lg" disabled placeholder="อัพโหลดรูปภาพ">
                  <span class="input-group-btn">
                    <button class="browse btn btn-primary input-lg" type="button"><i class="fas fa-search"></i> เลือกรูปภาพ</button>
                  </span>
                </div>
                </div>

            <div class="form-group  col-md-8">
                <label for="inputVersion">ลิงค์ (ไปยังหน้าเว็บ) : </label>
                <input type="text" name="link"  class="form-control" placeholder="กรอกหัวข้อข่าว">
        </div>
        <div class="form-group col-md-3">
            <label>วัน - เวลาเริ่มต้น : <span class="text-danger">*</span></label>
            <input class="form-control"  id="start" name="start" type="date"
                >
        </div>
        <div class="form-group col-md-3">
            <label>วัน - เวลาสิ้นสุด : <span class="text-danger">*</span></label>
            <input class="form-control"  id="end" name="end" type="date"
                >



            <button class="btn btn-primary mt-4"> <i class="fa fa-save"></i> บันทึก</button>
        </form>
    </div>
</div>
@section('script')
<script>
    $(document).ready(function() {
    $('#summernote2').summernote({
        placeholder: 'เนื้อหา ข้อความ',
        tabsize: 1,
        height: 300,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  focus: true
      });
  });

  $(document).on('click', '.browse', function(){
  var file = $(this).parent().parent().parent().find('.file');
  file.trigger('click');
});
$(document).on('change', '.file', function(){
  $(this).parent().find('.form-controll').val($(this).val().replace(/C:\\fakepath\\/i, ''));
});

</script>
@endsection
@endsection
