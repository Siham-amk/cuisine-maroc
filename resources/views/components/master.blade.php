

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
// -----------------------------------
// Récupérer les éléments d'adresse e-mail, de numéro de téléphone et le bloc de paiement
const adresseEmail = document.getElementById('adresse-email');
const numeroTelephone = document.getElementById('numero-telephone');
const blocPaiement = document.getElementById('bloc-paiement');
const boutonPaiement = document.getElementById('bouton-paiement');
const titrePaiement = document.getElementById('titre-paiement');
const messagePaiement = document.getElementById('message-paiement');

// Variable pour suivre l'état d'affichage du bloc de paiement
let blocPaiementAffiche = false;

// Fonction pour afficher le bloc de paiement et mettre à jour son contenu
function afficherBlocPaiement(titre, message) {
    blocPaiement.style.display = 'block';
    titrePaiement.textContent = titre;
    messagePaiement.textContent = message;
    blocPaiementAffiche = true; // Mettre à jour l'état d'affichage
}

// Fonction pour cacher le bloc de paiement
function cacherBlocPaiement() {
    blocPaiement.style.display = 'none';
    blocPaiementAffiche = false; // Mettre à jour l'état d'affichage
}

// Événement de survol sur l'adresse e-mail
adresseEmail.addEventListener('mouseover', () => {
    afficherBlocPaiement("Paiement requis pour l'e-mail", "Veuillez effectuer un paiement pour accéder à l'adresse e-mail.");
});

// Événement de survol sur le numéro de téléphone
numeroTelephone.addEventListener('mouseover', () => {
    afficherBlocPaiement("Paiement requis pour le numéro de téléphone", "Veuillez effectuer un paiement pour accéder au numéro de téléphone.");
});

// Événement de clic sur le bouton de paiement
boutonPaiement.addEventListener('click', (event) => {
    event.stopPropagation(); // Empêcher la propagation de l'événement de clic pour éviter de cacher le bloc de paiement
    // Ajoutez ici votre logique de paiement, par exemple rediriger vers une page de paiement
    window.location.href = 'page_de_paiement.html';
});

// Événement de clic sur le document pour cacher le bloc de paiement
document.addEventListener('click', (event) => {
    if (blocPaiementAffiche) {
        cacherBlocPaiement();
    }
});


</script>

</body>
</html>