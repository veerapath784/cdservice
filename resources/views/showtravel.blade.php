<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>อำเภอเชียงดาว Chiang Dao</title>
    <!-- Main styles for this application-->
    <link rel="shortcut icon" type="image/png" href="/images/logo.png">

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/shop-homepage.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Niramit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<style>
a:link	{
    text-decoration:none;
    color: #075;
    }
    a:visited	{
    text-decoration:none;
    color: #075;
    }
    </style>

</head>

<body>

    <!-- Navigation -->
    <div class="header w-100 ">
        <br><br>
        <h1 class="font" style=" text-shadow: 2px 2px #fff;
        font-size: 80px; font-weight: bold;">อำเภอเชียงดาว จังหวัดเชียงใหม่</h1>
    </div>


    <div class="text-run font">
        <marquee direction="left">เชียงดาวชายแดน ถ้ำสวยดอยสูง พระสถูปเมืองงาย กำเนิดสายแม่ปิง

        </marquee>
    </div>


    <nav class="navbar  navbar-expand-lg navbar-dark py-md-1 font"
        style="    background: none repeat scroll 0 0 #202e31;">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar10">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar10">
                <ul class="navbar-nav nav-fill w-100">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">หน้าหลัก
                            <span class="sr-only">(current)</span>
                        </a>
                    </li> <span class="nav-item" style="color:aliceblue; margin-top:5px;">|</span>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ข้อมูลอำเภอ
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/history">ประวัติอำเภอเชียงดาว</a>
                            <a class="dropdown-item" href="/department">หน่วยงานต่างๆในอำเภอ</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <span class="nav-item" style="color:aliceblue; margin-top:5px;">|</span>
                    <li class="nav-item">
                        <a class="nav-link" href="#">สถานที่ท่องเที่ยว</a>
                    </li> <span class="nav-item" style="color:aliceblue; margin-top:5px;">|</span>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ที่พัก/รีสอร์ท</a>
                    </li> <span class="nav-item" style="color:aliceblue; margin-top:5px;">|</span>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ติดต่อเรา</a>
                    </li>
                </ul>
            </div>

    </nav>
    <div class="slogan font2">
        <h4>
            ยินดีต้อนรับเข้าสู่ "อำเภอเชียงดาว" โทรศัพท์: 0-5345-5176 FAX: 0-5345-5176
        </h4>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-9 bg-white my-4">
                <div class="row">
                    <ol class="breadcrumb bg-ligh mt-2 ml-3">
                        <li><a href="{!! url('/') !!}">หน้าแรก </a></li>
                        &nbsp;&nbsp;&rarr;&nbsp;&nbsp;
                        <li><a href="{!! url('/travel') !!}">สถานที่ท่องเที่ยว </a></li>
                        &nbsp;&nbsp;&rarr;&nbsp;&nbsp;
                        <li class="active">{!! $travel->title !!}
                        </li>
                    </ol>

                    <div class="col-md-11">
                        <hr>
                        <h2 class="fontsupermarket">{{$travel->title}}</h2>
                        <br>
                        <p>{!!$travel->detail!!}</p>
                    </div>
                </div>
            </div>

                    <div class="col-md-3 my-4">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2Fcategory%2FGovernment-Organization%2F%25E0%25B8%2597%25E0%25B8%25B5%25E0%25B9%2588%25E0%25B8%25A7%25E0%25B9%2588%25E0%25B8%25B2%25E0%25B8%2581%25E0%25B8%25B2%25E0%25B8%25A3%25E0%25B8%25AD%25E0%25B8%25B3%25E0%25B9%2580%25E0%25B8%25A0%25E0%25B8%25AD%25E0%25B9%2580%25E0%25B8%258A%25E0%25B8%25B5%25E0%25B8%25A2%25E0%25B8%2587%25E0%25B8%2594%25E0%25B8%25B2%25E0%25B8%25A7-512270082197213%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1730915820521210" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>
            <div class="ml-5">
                <div class="fb-comments" data-href="http://localhost:8000/news/{!! $url !!}" data-width=""
                    data-numposts="5">
                </div>
            </div>
            <!-- /.row -->
        </div>

    </div>
    </div>

    <!-- Page Content -->


    <!-- /.row -->
    <br>
    <!-- Footer -->
    <footer class="py-5 bg-dark" style=" color: #07524b; border-style: solid; border-width: 10px 0px 0px 0px;">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
        </div>
        <!-- /.container -->
    </footer>


    <!-- /.container -->



    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
