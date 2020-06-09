<!DOCTYPE html>
<html lang="ko">
    <head>
        <title>부트스트랩 4.0</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstrap css -->
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">

        <!-- font Awesome CDN -->
        <link rel="stylesheet"
              href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
              integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
              crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a class="navbar-brand" href="#">스터디 관리 사이트</a>
            <button class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            스터디
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">스터디 생성</a>
                            <a class="dropdown-item" href="#">스터디 조회</a>
                            <a class="dropdown-item" href="#">스터디 홍보</a>
                            <a class="dropdown-item" href="#">스터디 신고</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            나의 스터디
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">운영중인 스터디</a>
                            <a class="dropdown-item" href="#">활동중인 스터디</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            마이페이지
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">내 정보 조회</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-sign-in-alt"></i> 로그인
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-user-plus"></i> 회원가입
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