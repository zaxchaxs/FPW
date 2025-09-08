<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <h1>About Me!</h1>
        <h2>Halo, my nama adalah {{$myData['name']}}</h2>
        <h2>my umur adalah {{$myData['age']}}</h2>
        <h2>my email adalah {{$myData['email']}}</h2>

        <p>Array count: {{count($myData)}}</p>
    </section>
</body>

</html>