<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://kit.fontawesome.com/71290ec34f.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><i class="fa-solid fa-bars"></i></li>
            </ul>
        </nav>
    </header>
<script>
    $('nav li').on('click', function () {
        $(this)
          .find('i')
          .toggleClass('fa-x')
          .toggleClass('fa-bars');

    });
</script>
</body>
</html>