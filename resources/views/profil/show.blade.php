<x-master>
    
    <div class="profil">

        <div class="back-icons">
            <a href="/"><i class="fas fa-arrow-left" style="color: #bb2337;"></i></a>
        </div>
        <div class="info-profil">
            <div class="img-plats">
                <img src="images/Pastilla.jpg" alt="Cuisinier 3">             


            </div>
            <div class="info">
                <table >
                    <tr>
                        <th > <p>Nom du Chef :  </p>
                        </th>
                        <td > <p> AHMED DADDI</p>
                        </td>
                    </tr>
                    <tr>
                        <th> <p>Spécialités :</p></th>
                        <td> <p>couscos, pstilla ...</p></td>
                    </tr>
                    <tr>
                        <th><p>Disponibilité :</p></th>
                        <td><p> Du lundi au vendredi</p></td>
                    </tr>
                    <tr>
                        <th><p>Adresse : </p></th>
                        <td><p> al Al-hoceima</p></td>
                    </tr>
                   
                    <tr>
                      
                        <th><p>Lieu de travail :</p></th>
                        <td><p> A domicile et autres lieux sur demande</p></td>
                    </tr>
                   

                   
                </table>
                <button  id="afficher-paiement">    
                  Contacter-Moi</button>

                
                
                  <!-- Bloc de paiement -->
                  <div id="bloc-paiement" style="display: none;">
                    <span id="fermer-paiement" style="cursor: pointer; float: right;">&times;</span><br>
                    <!-- Contenu du bloc de paiement -->
                    <h3 id="titre-paiement">Paiement requis pour contacter le chef</h3>
                    <p id="message-paiement">Veuillez effectuer un paiement pour accéder aux informations détaillées du chef et pour profiter de nos services premium.</p>
                    <!-- Bouton de paiement -->
                    <button id="bouton-paiement">Payer maintenant</button>
                </div>

            </div>
        </div>
        <h2>Mes plats</h2>

        <div class="photos">
            <div class="responsive">
                <div class="gallery">
                  
                    <img src="images/macarons.jpg" alt="Forest" width="600" height="400" onclick="openModal('/images/macarons.jpg')">
                 
                  <div class="desc">Add a description of the image here</div>
                </div>
              </div>
              
              <div class="responsive">
                <div class="gallery">
                  <a target="_blank" href="img_lights.jpg">
                    <img src="images/Harira.jpeg" alt="Northern Lights" width="600" height="400" onclick="openModal('/images/macarons.jpg')">
                  </a>
                  <div class="desc">Add a description of the image here</div>
                </div>
              </div>
              
              <div class="responsive">
                <div class="gallery">
                  <a target="_blank" href="img_mountains.jpg">
                    <img src="images/Couscous_royal.jpg" alt="Mountains" width="600" height="400">
                  </a>
                  <div class="desc">Add a description of the image here</div>
                </div>
              </div>

              <div class="responsive">
                <div class="gallery">
                  <a target="_blank" href="img_mountains.jpg">
                    <img src="images/poisson.jpeg" alt="Mountains" width="600" height="400">
                  </a>
                  <div class="desc">Add a description of the image here</div>
                </div>
              </div>
        </div>
        <div id="myModal" class="modal">
          <span class="close" onclick="closeModal()">&times;</span>
          <img class="modal-content" id="modalImg" src="">
          <div class="btn-container">
              <button class="btn btn-prev" onclick="prevImage()">&#10094;</button>
              <button class="btn btn-next" onclick="nextImage()">&#10095;</button>
          </div>
      </div>
    
        <h2>Vedios</h2>
        <div class="Vedios">

        <div class="video-container">
  
            <div class="responsive-video">
              <iframe src="video/v1.mp4" width="500" height="338" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            </div>
            <div class="desc">Add a description of the image here</div>

        </div>
            
        <div class="video-container">
            <div class="responsive-video">
              <iframe src="video/v1.mp4" width="500" height="338" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
              
            </div>
            <div class="desc">Add a description of the image here</div> 
          </div>
        </div>
        
        <div class="video-container">
            <div class="responsive-video">
              <iframe src="video/v1.mp4" width="500" height="338" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
              
            </div>
            <div class="desc">Add a description of the image here</div> 
          </div>
        </div>
        
         
       

    </div>

</x-master>