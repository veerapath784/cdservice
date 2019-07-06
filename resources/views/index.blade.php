@extends('layout.master')
@section('content')


<!-- /.col-lg-3 -->

<div class="col-lg-9">
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
        <h3 class="fontPrompt mb-3" style="border-left: 6px solid #ffc13d !important;
     background: linear-gradient(to left, #aaffa9 40%, #07524b 100%);">
            <span class="font" style="margin-left:15px; color:#fff;"><i class="fas fa-newspaper"></i> ข่าวใหม่ล่าสุด
            </span></h3>
        @foreach ($latestArticle as $article)
        <div class="card mb-4">
            <img class="card-img-top" style="background-repeat: no-repeat;
            background-size: 100% 100%; max-width: 100%;  height:350px;" src="{{$article->thumbnail}}"
                alt="Card image cap">
            <div class="card-body articel">
                <h2 class="card-title">{{$article->title}}</h2>
                <p class="card-text">{!!$article->description!!} </p>
                <a href="#" class="btn r" style="background-color: #202e31; color:#ffffff;">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted articel ">
                <i class="far fa-calendar-alt"></i> {!!$article->date!!}

            </div>
        </div>
        @endforeach
    </div>
    <!-- /.row -->
</div>



@endsection
