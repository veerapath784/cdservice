@extends('layout.master')
@section('content')

<div class="col-lg-6">
    <div style=" color: #07524b; border-style: solid; border-width: 0px 0px 5px 0px;" id="carouselExampleIndicators"
        class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">
            @php($i = 0)
            @foreach($banners as $banner)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" @if($i==0) class="active" @endif></li>
            @php($i++)
            @endforeach
        </ol>
        <div class="carousel-inner" role="listbox">

            @php($j = 0)
            @foreach($banners as $banner)

            <div class="carousel-item  @if($j == 0) active @endif" style="background-image: url('{{$banner->thumbnail}}'); background-repeat: no-repeat;
                        background-size: 100% 100%; max-width: 100%;  height:330px;">

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
        <h3 class="fontPrompt mb-3" style="border-left: 6px solid #ffc13d !important;
     background: linear-gradient(to left, #aaffa9 40%, #07524b 100%);">
            <span class="font" style="margin-left:15px; color:#fff;"><i class="fas fa-newspaper"></i> บทความใหม่ล่าสุด
            </span></h3>
        @foreach ($latestArticle as $article)
        <div class="card mb-4">
            <div class="row">
            <div class="col-md-4">
            <img class="my-4 ml-3" style="background-repeat: no-repeat;
            background-size: 120% 120%; max-width: 120%;  height:100px;" src="{{$article->thumbnail}}"
                alt="Card image cap">
            </div>
            <div class="col-md-8">
            <div class="card-body articel">
                <h5 class="card-title" style="color:#36c;"> {{$article->title}}</h5>
                <p class="card-text ">{!!$article->description!!} </p>
                <a href="/news/{!! $article->id !!}" class="btn r" style="background-color: #07524b; color:#ffffff;font-size:12px;">เพื่มเติม &rarr;</a>
            </div>
        </div>
    </div>
            <div class="card-footer text-muted articel r">
                <i class="far fa-calendar-alt"></i> {!!$article->date!!}
                <i class="fas fa-user"></i> Admin

            </div>
        </div>
        @endforeach
        <div class="text-center font">
                <a href="#">บทความทั้งหมด</a>
            </div>
    </div>




    <!-- /.col-6 -->
</div>




@endsection
