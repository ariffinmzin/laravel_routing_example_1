<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="/formsubmission" method="post">
        @csrf
        <input type="text" name="name"><br>
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>