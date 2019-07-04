@extends('layout.master')
@section('content')
<div class="container">
    <div class="row" style="padding-right:3px">
        <div class="col-lg-3  my-4">
            <div class="search font mb-3">
                <input class="form-control" type="text" placeholder="ค้นหา..." aria-label="Search">
            </div>
            <div class="mb-3">
                <div class="header-box font ">
                    <h5> นายอำเภอเชียงดาว</h5>
                </div>
                <div class="font border">
                    <div class="text-center mb-2 mt-1">
                        <img src="/images/img.jpg" width="200" height="235" alt="First slide">
                    </div>
                    <h6 class="bold">นาย ชัชวาลย์ พุทธโธ</h6>
                    <h6 class="bold">นายอำเภอเชียงดาว</<h6>
                </div>
            </div>


            <div class="mb-3">
                <div class="header-box font ">
                    <h5> เมนูหลัก</h5>
                </div>
                <div size="3" class="font top-menu ">
                    <div style="font-size: 100%;">
                        <img src="https://goo.gl/2HR6XB">
                        <span=""="" style="font-size:100%;">
                            <span family="TH SarabunIT๙">
                                <a href="https://thephadho.blogspot.com/p/blog-page_2.html"
                                    target="_blank">วิสัยทัศน์/พันธกิจ</a>
                            </span>
                        </span>
                    </div>
                    <div style="font-size: 100%;">
                        <img src="https://goo.gl/ec1ZEd" style="font-size: 100%;">
                        <span=""="" style="font-size:100%;"> </span><span=""="" style="font-size:100%;">
                            <span family="TH SarabunIT๙">
                                <a href="https://thephadho.blogspot.com/p/blog-page_6.html"
                                    target="_blank">ข้อมูลบุคลากร</a>
                            </span>
                        </span>
                    </div>

                    <img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-person-stalker-16.png"
                        style="font-size: 100%;">
                    <span=""="" style="font-size:100%;"></span>
                    <span=""="" style="font-size:100%;">
                        <span family="TH SarabunIT๙">
                            <a href="https://thephadho.blogspot.com/p/blog-page_23.html"
                                target="_blank">โครงสร้างการบริหารงาน</a>
                        </span>
                    </span>
                </div>


            </div>
            <div class="mb-3">
                <div class="header-box font ">
                    <h5> วีดีโอแนะนำ</h5>
                </div>
                <div class="font border">
                    <div class="text-center mb-2 mt-1">
                        test
                    </div>

                </div>
            </div>
        </div>


        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
            <div style=" color: #2a9d8f; border-style: solid; border-width: 0px 0px 5px 0px;"
                id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    @php($i = 0)
                    @foreach($banners as $banner)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" @if($i==0) class="active"
                        @endif></li>
                    @php($i++)
                    @endforeach
                </ol>
                <div class="carousel-inner" role="listbox">

                    @php($j = 0)
                    @foreach($banners as $banner)

                    <div class="carousel-item  @if($j == 0) active @endif"
                        style="background-image: url('{{$banner->thumbnail}}'); background-repeat: no-repeat;
                        background-size: 100% 100%; max-width: 100%;  height:400px;">

                        <div class="carousel-caption d-none d-md-block">
                            <h5 style="background-color: #111;  opacity:0.7;">
                                <a href="{{$banner->link}}" style="color:ivory">{{$banner->title}}</a></h4>
                        </div>
                    </div>
                    @php($j++)
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


            <div style=" border: 6px solid #fff; background-color: #fff;">
                <h3 class="fontPrompt mb-3" style="border-left: 6px solid #FDE313;
     background: linear-gradient(to left, #aaffa9 40%, #1D976C 100%);">
        <span class="font" style="margin-left:15px; color:#fff;"><i class="fas fa-newspaper"></i> ข่าวใหม่ล่าสุด </span></h3>
                <div class="row">
                    @foreach ($latestArticle as $article)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" style="background-repeat: no-repeat;
                                background-size: 100% 100%; max-width: 100%;  height:200px;" src="{{$article->thumbnail}}" alt=""></a>
                            <div class="card-body articel">
                                <h5 class="card-title">
                                   {{$article->title}}

                                </h5>

                                <p class="card-text" style="font-size:13px;">{!!$article->description!!}  <a href="">อ่านต่อ</a></p>
                                <h6 class="card-text  articel" ><i class="far fa-calendar-alt"></i> {!!$article->date!!}</h6>
                            </div>

                        </div>
                    </div>
                    @endforeach
{{--
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Item Two</a>
                                </h4>
                                <h5>$24.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
                                    numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Item Three</a>
                                </h4>
                                <h5>$24.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
                                    numquam aspernatur!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div> --}}



                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.col-lg-9 -->
    </div>
</div>

@endsection
