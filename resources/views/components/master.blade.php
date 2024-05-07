

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuisine Maroc</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
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
// -----------------------------------

    const afficherpaiement = document.getElementById('afficher-paiement');
    const blocPaiement = document.getElementById('bloc-paiement');
    const fermerPaiement = document.getElementById('fermer-paiement');

    afficherpaiement.addEventListener('click', () => {
        blocPaiement.style.display = 'block';
    });

    fermerPaiement.addEventListener('click', () => {
        blocPaiement.style.display = 'none';
    });
// ----------------------------------


        ;
        // document.getElementById('ajouterPhotooo').addEventListener('click', () => {
        //     console.log('Button clicked!'); // Check if this log appears in the console
        //     // alert('Maximum de photos atteint. Veuillez supprimer une photo pour en ajouter une nouvelle.');
        // });



</script>

</body>
</html>