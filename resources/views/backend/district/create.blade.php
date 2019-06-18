@extends('backend.layout.master')
@section('content')
<div class="card">
    <div class="card-header"><i class="fa fa-cubes"></i> เพิ่มระบบปฏิบัติการ</div>
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
        <form action="#" method="post">
            @csrf
            <div class="form-group">
                    <label for="inputText">ประวัติอำเภอ :</label>
                    <textarea id="summernote2" name="history"></textarea>
            </div>
            <div class="form-group">
                <label for="inputVersion">เวอร์ชัน: </label>
                <input type="text" name="version" value="{{old('version')}}" class="form-control" placeholder="กรอกเวอร์ชั่น">

            </div>
            <div class="form-group">
                <label for="inputBuild">หมายเลขบิวต์: </label>
                <input type="text" name="build" value="{{old('build')}}" class="form-control" placeholder="กรอกหมายเลขบิวต์">

            </div>
            <div class="form-group">
                <label for="inputYear">ปี</label>
                <input type="text" name="year" @if(empty(old('year'))) value="{{date('Y')}}" @else value="{{old('year')}}"
                    @endif class="form-control" placeholder="กรอกปี">

            </div>
            <div class="form-group">
                <label for="inputComment">ความคิดเห็น</label>
                <input type="text" name="comment" value="{{old('comment')}}" class="form-control" placeholder="กรอกความคิดเห็น">

            </div>
            <button class="btn btn-primary"> <i class="fa fa-save"></i> บันทึก</button>
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

</script>
@endsection
@endsection
