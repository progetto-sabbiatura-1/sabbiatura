<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-white">
<h1>Grazie {{$user['name']}} per averci contattato!</h1>
    <h2>Verrai contattato al più presto.</h2>
    <h4>Il tuo messaggio era: 
        {{$user['body']}}</h4>
</body>
</html>
    
