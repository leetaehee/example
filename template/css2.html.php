<!DOCTYPE html>
<html>
    <head>
        <title>코딩의 민족</title>
        <meta charset="utf-8">
    </head>

    <style>
        .container
        {
            width: 300px;
            height: 400px;
            background-color: gray;
            text-align: center;
            line-height: 400px;
        }

        .info
        {
            /*
            width: 100%;
            margin-left: -7px;
            */
            line-height: normal;

            background-color: lime;
            display: inline-block;
            vertical-align: middle;
        }

        .helper
        {
            display: inline-block;
            height: 100%;
            vertical-align: middle;

            /*
            width: 10px;
            background-color:red;
             */
        }
    </style>

    <body>
       <div class="container">
           <div class="helper"></div>
           <div class="info">
               <h1>Hello!</h1>
               <p>My name is young.</p>
           </div>
       </div>
    </body>
</html>