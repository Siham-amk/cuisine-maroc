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
                        <th><p>Age :</p></th>
                        <td><p>47ans</p></td>
                    </tr><tr>
                        <th> <p>Spécialités :</p></th>
                        <td> <p> AHMED DADDI</p></td>
                    </tr>
                    <tr>
                        <th><p>Disponibilité :</p></th>
                        <td><p>  18/19/2024</p></td>
                    </tr>
                    <tr>
                        <th><p>Adresse : </p></th>
                        <td><p> AHMED DADDI</p></td>
                    </tr>
                    <tr>
                        <th><p>Expérience : </p></th>
                        <td><p> 12 ans</p></td>
                    </tr>
                    
                        <th><p>Description :</p></th>
                        <td><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo asperiores iusto facilis vitae id doloribus in corporis adipisci eaque placeat!</p></td>
                    </tr>
                    <tr><th><p><i class="fas fa-phone"> </i> telephone :</p></th><td><p id="numero-telephone"><a href="">  ***********</a></p></td> 
                    </tr>

                    <tr>
                        <tr>
                            <th><p> <i class="fas fa-envelope"></i> </i>  Email :</p></th>
                            <td><p id="adresse-email"><a href=""> *************************</a></p></td>
                    </tr>
                </table>

                
                
                  <!-- Bloc de paiement -->
                  <div id="bloc-paiement" style="display: none;">
                    <!-- Contenu du bloc de paiement -->
                    <h3 id="titre-paiement"></h3>
                    <p id="message-paiement"></p>
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