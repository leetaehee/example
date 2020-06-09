<!DOCTYPE html>
<html lang="ko">
    <head>
        <title>부트스트랩 4.0</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstrap css -->
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./bootstrap/css/bootstrap-theme.min.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">스터디 관리 사이트</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            스터디<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">스터디 조회</a></li>
                            <li><a href="#">스터디 생성</a></li>
                            <li><a href="#">스터디 홍보</a></li>
                            <li><a href="#">스터디 신고</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            나의 스터디<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">운영중인 스터디</a></li>
                            <li><a href="#">활동중인 스터디</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            마이페이지<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">내정보조회</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-user"></span>
                            회원가입
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-log-in"></span>
                            로그인
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Jquery Library-->
        <script src="./js/jquery-3.5.1.min.js"></script>

        <!-- bootstrap js Library  -->
        <script src="./bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>