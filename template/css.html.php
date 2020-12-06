<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">

        <title>CSS 예제파일.</title>

        <link href="https://fonts.googleapis.com/css2?family=Nerko+One&family=Roboto:wght@100&display=swap" rel="stylesheet">
        <link href="fonts.googleapis.com/earlyaccess/jejugothic.css" rel="stylesheet">

        <link href="./css/common.css" rel="stylesheet">

        <style>
            .div-box {
                width: 500px;
                height: 300px;
                /*background-color:blue;*/
                margin-left: auto;
                margin-right: auto;
                font-family: "Times New Romans", Times, Serif;
            }

            .div-box .title {
                text-align: center;
            }

            .google-font-1 {
                font-family: 'Roboto', sans-serif;
            }

            .google-font-2 {
                font-family: 'Nerko One', cursive;
            }

            .google-font-3 {
                font-family: 'Jeju Gothic', sans-serif;
            }
        </style>
    </head>
        <body>
            <div class="div-box">
                <h1 class="title">테스트 파일!</h1>
                <h2 class="google-font-1">Hello, Google!</h2>
                <h2 class="google-font-2">Hello, Google!</h2>
                <h2 class="google-font-3">안녕, 구글!!</h2>
                <p class="bm-font">배달의민족 폰트</p>
            </div>
        </body>
</html>