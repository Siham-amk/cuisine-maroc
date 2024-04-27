

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuisine Maroc</title>
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" >
    <script src="https://kit.fontawesome.com/9669377fba.js" crossorigin="anonymous"></script>
</head>
<body>
@include('partials.menu')

{{$slot}}

@include('partials.footer')
<script>
    const menuIcons = document.querySelector('.menu_icons');
    const menuList = document.querySelector('.menu ul');

    menuIcons.addEventListener('click', () => {
        menuList.classList.toggle('active');
    });

</script>

</body>
</html>