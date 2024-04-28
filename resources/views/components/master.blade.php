

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


    let currentImageIndex = 0;
        const images = [
            "/images/macarons.jpg",
            "/images/Harira.jpeg",
            "/images/Couscous_royal.jpg",
            "/images/poisson.jpeg"
            // Add more image URLs as needed
        ];

        function openModal(imageUrl) {
            const modal = document.getElementById("myModal");
            const modalImg = document.getElementById("modalImg");
            modal.style.display = "flex";
            modalImg.src = imageUrl;
            currentImageIndex = images.indexOf(imageUrl);
        }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

        function nextImage() {
            currentImageIndex = (currentImageIndex + 1) % images.length;
            const modalImg = document.getElementById("modalImg");
            modalImg.src = images[currentImageIndex];
        }

        function prevImage() {
            currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
            const modalImg = document.getElementById("modalImg");
            modalImg.src = images[currentImageIndex];
        }

        // Close the modal when clicking outside the image
        window.onclick = function(event) {
            const modal = document.getElementById("myModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };
</script>

</body>
</html>