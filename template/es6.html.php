<!DOCTYPE html>
<html>
    <head>
        <title>ES6</title>
        <meta charset="utf-8">
    </head>
    <body>

    <script>
        const example = { a: 123, b: {c: 124, d: 546}};

        // 구조분해 할당
        const { a, b: { d } } = example;

        console.log(a);
        console.log(d);

        const arr = [1,2,3,4,5];

        const [a1,b1,z1,e1,r1] = arr;

        console.log(a1);
        console.log(b1);
        console.log(z1);
        console.log(e1);
        console.log(r1);

    </script>
    </body>
</html>