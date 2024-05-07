<x-master>
    <section class="Cuisiniers">
        <div class="back-icons" style="margin-top: 100px; margin-left: 80px">
            <a href="/"><i class="fas fa-arrow-left" style="color: #bb2337;"></i></a>
        </div>
        <h2 style="">Tous les Cuisiniers</h2>

        <div class="add">
            <a href="/Ajouterprofil">
                <i class="fa-solid fa-user-plus" style="color: #bb2337;"></i>ajouter votre profil</a>
         </div>
       
        <div class="cuisiniers-list">
            @foreach ($Cuisiniers as $Cuisinier)
            
            
            <div class="card">
                <a href="/profil" class="stretched-link">
                <img src="images/Pastilla.jpg" alt="Cuisinier 1">
                <h4>{{$Cuisinier->Nom}}</h4>
                <p>
                    <i class="fa-solid fa-map-marker-alt " style="color: #c0bebe;"></i>  {{$Cuisinier->Ville}}
                </p>
            </a>

            </div>
    
            @endforeach
            <div class="card">
                <a href="/profil" class="stretched-link">
                <img src="images/Pastilla.jpg" alt="Cuisinier 1">
                <h4>Nom du Cuisinier</h4>
                <p>
                    <i class="fa-solid fa-map-marker-alt " style="color: #c0bebe;"></i>  Al-hoceima
                </p>
            </a>

            </div>

            <div class="card">
                <img src="images/Harira.jpeg" alt="Cuisinier 2">  
                <h4>Nom du Cuisinier</h4>
                <p><i class="fa-solid fa-map-marker-alt " style="color: #c0bebe;"></i>  Al-hoceima</p>

                {{-- <p>Spécialités : Entremetier</p> --}}
                {{-- <p>Expérience : 12 ans</p>
                <p><i class="fa-solid fa-phone"></i> +212 123 456 789</p>       --}}
            </div>
            <div class="card">
                <img src="images/Couscous_royal.jpg" alt="Cuisinier 3">                
                <h4>Nom du Cuisinier</h4>
                <p><i class="fa-solid fa-map-marker-alt " style="color: #c0bebe;"></i>  Al-hoceima</p>

                {{-- <p>Spécialités : Friturier</p> --}}
                {{-- <p>Expérience : 12 ans</p>
                <p><i class="fa-solid fa-phone"></i> +212 123 456 789</p>                 --}}
            </div>
            <div class="card">
                <img src="images/Couscous_royal.jpg" alt="Cuisinier 3">
                <h4>Nom du Cuisinier</h4>
                <p><i class="fa-solid fa-map-marker-alt " style="color: #c0bebe;"></i>  Al-hoceima</p>

                {{-- <p>Spécialités : Tajines, Couscous</p> --}}
                {{-- <p>Expérience : 12 ans</p>
                <p><i class="fa-solid fa-phone"></i> +212 123 456 789</p>     --}}
            </div>

            <div class="card">
                <img src="images/macarons.jpg" alt="Cuisinier 3">             
                <h4>Nom du Cuisinier</h4>
                <p><i class="fa-solid fa-map-marker-alt " style="color: #c0bebe;"></i>  Al-hoceima</p>

                {{-- <p>Spécialités :  Pâtissier</p> --}}
                {{-- <p>Expérience : 12 ans</p>
                <p><i class="fa-solid fa-phone"></i> +212 123 456 789</p>     --}}
            </div>
            <div class="card">
                <a href="/profil" class="stretched-link">
                <img src="images/Pastilla.jpg" alt="Cuisinier 1">
                <h4>Nom du Cuisinier</h4>
                <p>
                    <i class="fa-solid fa-map-marker-alt " style="color: #c0bebe;"></i>  Al-hoceima
                </p>
                {{-- <p>Spécialités : Friturier</p> --}}
                {{-- <p>Expérience : 12 ans</p>
                <p><i class="fa-solid fa-phone"></i> +212 123 456 789</p> --}}
            </a>

            </div>
            <div class="card">
                <img src="images/poisson.jpeg" alt="Cuisinier 1">                
                <h4>Nom du Cuisinier</h4>
                <p><i class="fa-solid fa-map-marker-alt " style="color: #c0bebe;"></i>  Al-hoceima</p>

                {{-- <p>Spécialités : Poissonier</p> --}}
                {{-- <p>Expérience : 12 ans</p>
                <p><i class="fa-solid fa-phone"></i> +212 123 456 789</p>      --}}
            </div>
            <div class="card">
                <img src="images/Couscous_royal.jpg" alt="Cuisinier 3">                
                <h4>Nom du Cuisinier</h4>
                <p><i class="fa-solid fa-map-marker-alt " style="color: #c0bebe;"></i>  Al-hoceima</p>

                {{-- <p>Spécialités : Friturier</p> --}}
                {{-- <p>Expérience : 12 ans</p>
                <p><i class="fa-solid fa-phone"></i> +212 123 456 789</p>                 --}}
            </div>

            <div class="card">
                <img src="images/Harira.jpeg" alt="Cuisinier 2"> 
                <h4>Nom du Cuisinier</h4>
                <p><i class="fa-solid fa-map-marker-alt " style="color: #c0bebe;"></i>  Al-hoceima</p>

                {{-- <p>Spécialités :Entremetier</p> --}}
                {{-- <p>Expérience : 12 ans</p>
                <p><i class="fa-solid fa-phone"></i> +212 123 456 789</p>                 --}}
            </div>

             <div class="card">
                <img src="images/Couscous_royal.jpg" alt="Cuisinier 3">                
                <h4>Nom du Cuisinier</h4>
                <p><i class="fa-solid fa-map-marker-alt " style="color: #c0bebe;"></i>  Al-hoceima</p>

                {{-- <p>Spécialités : Friturier</p> --}}
                {{-- <p>Expérience : 12 ans</p>
                <p><i class="fa-solid fa-phone"></i> +212 123 456 789</p>                 --}}
            </div>
            <div class="card">
                <a href="/profil" class="stretched-link">
                <img src="images/Pastilla.jpg" alt="Cuisinier 1">
                <h4>Nom du Cuisinier</h4>
                <p>
                    <i class="fa-solid fa-map-marker-alt " style="color: #c0bebe;"></i>  Al-hoceima
                </p>
                {{-- <p>Spécialités : Friturier</p> --}}
                {{-- <p>Expérience : 12 ans</p>
                <p><i class="fa-solid fa-phone"></i> +212 123 456 789</p> --}}
            </a>

            </div>
        </div>
    </section>
</x-master>