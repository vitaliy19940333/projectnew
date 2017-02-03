<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form method='post' action="/pages">
    <p align="center">
        <label for="name">Ник:</label><br>
        <input name="name" maxlength="50" type="text" size="18" />
    </p>
    <p align="center">
        <label for="message">Комментарий:</label><br>
        <textarea rows="5" cols="14" name="message"></textarea>
    </p>
    <p align="center">
        <input name="submit" type="submit" value="Добавить">
    </p>
    {!! csrf_field() !!}
</form>
</body>
</html>