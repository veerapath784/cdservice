@extends('layout.master')
<style>
.column div span {
	position: absolute;
	bottom: -20px;
	left: 0;
	z-index: -1;
	display: block;
	width: 100%;
	margin: 0;
	padding: 0;
	color: #444;
	font-size: 18px;
	text-decoration: none;
	text-align: center;
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
	opacity: 0;
}
figure {
	width: 100%;
	height: 100%;
	margin: 0;
	padding: 0;
	background: #fff;
	overflow: hidden;
}
figure:hover+span {
	bottom: -36px;
	opacity: 1;
}



/* Zoom In #1 */
.hover01 figure img {
	-webkit-transform: scale(1);
	transform: scale(1);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover01 figure:hover img {
	-webkit-transform: scale(1.3);
	transform: scale(1.3);
}

</style>
@section('content')

<div class="container font">
    <div class="col-lg-12">
        <div class="my-4" style=" border: 6px solid #fff; background-color: #fff;">
            <h3 class="fontPrompt mb-3" style="text-align:center; border-left: 6px solid #FDE313;
background: linear-gradient(to left, #aaffa9 40%, #1D976C 100%);">
                <span class="font" style="margin-left:15px; color:#fff;">แหล่งท่องเที่ยว </span></h3>
            <div class="container " style="font-size:13px;">
                <div class="row">
                    @foreach ($latestTravel as $travel)
                    <div class="col-md-4 mb-5">
                        <div class="card h-100">
                                <div class="hover01 column">
                            <figure><img class="card-img-top" src="{{$travel->thumbnail}}" alt="">
                                </div>
                            <div class="card-body">
                                <h3 class="card-title">{{$travel->title}}</h3>
                                <p class="card-text">{!!$travel->description!!}</p>
                            </div>
                            <div class="card-footer">
                                <a href="/travel/{!! $travel->id !!}" class="btn r"
                                    style="background-color: #07524b; color:#ffffff;font-size:12px;">เพื่มเติม
                                    &rarr;</a>
                            </div>
                        </figure>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
</div>


@endsection
