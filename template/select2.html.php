<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">

        <title>Select2 테스트</title>
    </head>
    <body>
        <select id="food" name="food[]" class="js-example-basic-multiple"  multiple="multiple" style="width: 280px;">
            <option value="회">회</option>
            <option value="치킨">치킨</option>
            <option value="닭발">닭발</option>
            <option value="탕수육">탕수육</option>
            <option value="피자">피자</option>
            <option value="양꼬치">양꼬치</option>
            <option value="삼겹살">삼겹살</option>
            <option value="장어">장어</option>
        </select>
        <!-- Jquery Library-->
        <script src="./js/jquery-3.5.1.min.js"></script>

        <!-- select2 -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script>
            $(document).ready(function() {
                $("#food").select2();
            });
        </script>
    </body>
</html>