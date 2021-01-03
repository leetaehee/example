<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">

        <title>자바스크립트 디버깅</title>
    </head>
    <body>
        <p id="p_value">안녕하세요.</p>

        <!-- Jquery Library-->
        <script src="./js/jquery-3.5.1.min.js"></script>
        <script>
            const READY_VALUE = 100;
            const $p = $("#p_value");
            $(document).ready(function(){
                let variable = READY_VALUE;

                console.log("<p> tag value = " + $p.html());

                variable = aa(variable);
                console.log("aa() : " + variable);

                variable = bb(variable);
                console.log("bb() : " + variable);

                variable = cc(variable);
                console.log("cc() : " + variable);
            });

            function aa(value)
            {
                console.log("debug 1 step");
                console.log("debug 1 step before: " + value);

                value += 1;

                return value;
            }

            function bb(value)
            {
                console.log("debug 2 step");
                console.log("debug 2 step before: " + value);

                value += 1;

                return value;
            }

            function cc(value)
            {
                console.log("debug 3 step");
                console.log("debug 3 step before: " + value);

                value += 1;

                return value;
            }
        </script>
    </body>
</html>