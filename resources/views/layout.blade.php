<!DOCTYPE html>
<html>
<head>
    <title>Chợ xe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="body-m">
    <header>
            <section>
                <div class="container">
                    <div class="sub-header">
                        <a href="http://127.0.0.1:8000/home" class="text-deco"><img src="/img/logo_white.png" alt=""></a>
                        <a href="http://127.0.0.1:8000/contact" class="text-deco"><i class="fa fa-get-pocket" style="font-size:24px"></i>Car audit</a>
                        <a href="#" class="text-deco"><span class="glyphicon glyphicon-phone-alt" style="font-size: 24px;"></span>Purchase and  sale procedure </a>
                        <a href="#" class="text-deco"><i class="material-icons" style="font-size: 24px;">&#xe02f;</i>New</a>
                    </div>
                    <div class="second-header">
                        <div class="search-a"><input  type="search" name="" id="" placeholder="tìm kiếm xe tại đây"></div>
                        <div class="log-a">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                @guest
                                    <a style="float: left;" href="{{ route('login') }}">Login</a>
                                    <a style="float: left;" href="{{ route('register') }}">Register</a>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </header>
    </div>

@yield('content')

</body>
</html>