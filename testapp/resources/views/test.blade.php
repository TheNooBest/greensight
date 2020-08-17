<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Test page</title>
    </head>
    <body>
        Hello!<br>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <form method="post">
            @csrf
            <input type="text" name="name" value=""><br>
            <input type="password" name="password" value=""><br>
            <input type="submit" name="add_new" value="add new"><br>
            <input type="submit" name="get_all" value="get all"><br>
            <input type="submit" name="show_last" value="Показать последние 10шт">
        </form>
    </body>
</html>
