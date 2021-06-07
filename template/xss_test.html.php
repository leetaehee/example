<!DOCTYPE html>
<html>
    <head>
        <title>XSS.</title>
        <meta charset="utf-8">
    </head>
    <body>
        Hi. <br>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type="text"  name="memo" value="<?php echo $value; ?>">
            <input type="submit" value="전송하기">
        </form>
    </body>
</html>