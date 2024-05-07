<x-master>


    <section class="home">
        <h1>Bienvenue sur Cuisine Maroc</h1>
        <p>Trouvez les meilleurs chefs et spécialités</p>
        {{-- <button>s'inscrire</button> --}}
    </section>

    <section class="Cuisiniers">
        <h2>les Cuisiniers</h2>
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

               
            </div>

            <div class="card">
                <img src="images/Couscous_royal.jpg" alt="Cuisinier 3">
                <h4>Nom du Cuisinier</h4>
                <p><i class="fa-solid fa-map-marker-alt " style="color: #c0bebe;"></i>  Al-hoceima</p>

            </div>

            <div class="card">
                <img src="images/macarons.jpg" alt="Cuisinier 3">             
                <h4>Nom du Cuisinier</h4>
                <p><i class="fa-solid fa-map-marker-alt " style="color: #c0bebe;"></i>  Al-hoceima</p>

                
            </div>

            <div class="card">
                <img src="images/poisson.jpeg" alt="Cuisinier 1">                
                <h4>Nom du Cuisinier</h4>
                <p><i class="fa-solid fa-map-marker-alt " style="color: #c0bebe;"></i>  Al-hoceima</p>

               
            </div>

            <div class="card">
                <img src="images/Harira.jpeg" alt="Cuisinier 2"> 
                <h4>Nom du Cuisinier</h4>
                <p><i class="fa-solid fa-map-marker-alt " style="color: #c0bebe;"></i>  Al-hoceima</p>

                
            </div>

             <div class="card">
                <img src="images/Couscous_royal.jpg" alt="Cuisinier 3">                
                <h4>Nom du Cuisinier</h4>
                <p><i class="fa-solid fa-map-marker-alt " style="color: #c0bebe;"></i>  Al-hoceima</p>

                
            </div>
        </div>
    </section>
    
    {{-- <h2>Rechercher par spécialités</h2>

    <section class="specialite">
    
        <div class="card-sp">
            <img src="images/poisson.jpeg" alt="Cuisinier 1">            
            <h4>Poissonier</h4>           
        </div>

        <div class="card-sp">
            <img src="images/macarons.jpg" alt="Cuisinier 2">
            <h4>Pâtissier</h4>            
        </div>

        <div class="card-sp">
            <img src="images/Couscous_royal.jpg" alt="Cuisinier 3">
            <h4>Saucier</h4>               
        </div>

        <div class="card-sp">
            <img src="images/Harira.jpeg" alt="Cuisinier 3">            
            <h4>Friturier</h4>
        
        </div> <div class="card-sp">
            <img src="images/Pastilla.jpg" alt="Cuisinier 3">            
            <h4>Entremetier</h4>               
        </div>
    
</section> --}}

</x-master>
