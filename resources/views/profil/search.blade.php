<x-master>
    <main>
        <section id="services">
            <div class="back-icons" style="margin-top: 100px; margin-left: 120px">
                <a href="/"><i class="fas fa-arrow-left" style="color: #bb2337;"></i></a>
            </div>
            <h2 >Rechercher</h2>
            <!-- Form for service request -->
            <form id="search">
                <label for="service-type">Spécialités:</label>
                <select id="service-type" name="service-type">
                    <option value="catering">choisi</option>

                    <option value="catering">Pastilla</option>
                    <option value="personal-chef">Couscous</option>
                    <option value="personal-chef">Tajine</option>

                    <!-- Ajoutez d'autres options au besoin -->
                </select>
                <label for="ville">Ville:</label>
                <input type="text" id="ville" name="ville" placeholder="Entrez une ville">
                <button type="submit" class="btn">chercher</button>
            </form>
            

            <section class="cuisiniers-list" style="margin-top: 40px; margin-bottom: 40px">
                <div class="cuisiniers-list">
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
            </section>
        </section>
    </main>

</x-master>