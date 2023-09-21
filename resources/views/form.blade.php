<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="/save">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" >

    <label>Email:</label>
    <input type="email" name="email" >

    <label >Num:</label>
    <input type="number" name="number">

    <select name="slct">
        <option>man</option>
        <option>woman</option>
    </select>
    

    <button type="submit" name="save">Submit</button>
</form>

</body>
</html>