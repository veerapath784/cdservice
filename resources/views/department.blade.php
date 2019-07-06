@extends('layout.master')
@section('content')


<div class="col-lg-9">


    <div class="my-4" style=" border: 6px solid #fff; background-color: #fff;">
        <h3 class="fontPrompt mb-3" style="border-left: 6px solid #FDE313;
background: linear-gradient(to left, #aaffa9 40%, #1D976C 100%);">
<span class="font" style="margin-left:15px; color:#fff;"><i class="fas fa-newspaper"></i> หน่วยงานต่างๆในอำเภอเชียงดาว </span></h3>



       <div class="container font2">
            <table class="table table-bordered">
                    <thead>
                      <tr class="text-center">
                        <th scope="col">ลำดับที่</th>
                        <th scope="col">ชื่อหน่วยงาน</th>
                        <th scope="col">ที่ตั้ง</th>
                        <th scope="col">โทรศัพท์ / โทรสาร</th>
                      </tr>
                    </thead>
                    @foreach($departments as $department)
                    <tbody>
                      <tr class="text-center" style="font-size:14px;">
                        <th scope="row">{{$department->id}}</th>
                        <td width="200px;">{{$department->name}}</td>
                        <td width="400px;">{{$department->address}}</td>
                        <td width="130px;">{{$department->phone}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
          </div>
        <!-- /.row -->
    </div>
    </div>







@endsection
