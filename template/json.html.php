<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">

        <title>JSON 파일을 읽어보아요!</title>
    </head>
    <body>
        <h1>JSON.</h1>

        <!-- JQuery Library-->
        <script src="./js/jquery-3.5.1.min.js"></script>

        <!-- script -->
        <script>
            $(function(){
                /**
                 * json_data.json
                 */
                /**
                    {
                        "abc" : "안녕하세요, 말티즈를 출력해보겠습니다.",
                        "한글날" : "한글날에는 뭐할까요?"
                    }
                 */
                const jsonData = {};

                $.getJSON('./json/json_data.json', function(data){
                    $.each(data, function(key, value){
                        jsonData[key] = value;
                    });
                    console.log(jsonData); // undefined를 찍는데 왜 그럴까요?
                    console.log(jsonData.abc);
                    
                });
            });
        </script>
    </body>
</html>