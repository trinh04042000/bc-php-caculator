
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Calculator</h2>
<form method="post" action="{{ route('calculator') }}">
    @csrf
    <input type="text" name="number1" placeholder="number1">
    <input type="text" name="number2" placeholder="number2">

    <input type="submit" value="+" name="operator">Addition</input>
    <input type="submit" value="-" name="operator">Subtraction</input>
    <input type="submit" value="*" name="operator">Multiplication</input>
    <input type="submit" value="/" name="operator">Division</input>
</form>
<p>ket qua la: {{ isset($result) ? $result : ' ' }}</p>

</body>
</html>
