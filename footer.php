   <div class="ir-arriba">
     <i class="fas fa-arrow-up"></i>
    </div>
    <footer id="myFooter">
        <div class="cont-footer">
            <div class="row">

                <div class="col-sm-2">
                    <h5>ACCESOS RÁPIDOS</h5>
                    <hr>
                    <ul>
                        <li><a href="#">Directorio de Planteles</a>
                            <p>Consulta información específica de los planteles Conalep Durango y las carreras que ofrecemos.</p>
                        </li>
                        <li><a href="#">Conalep Nacional</a>
                            <p>Consulta el portal Nacional Conalep.</p>
                        </li>
                    </ul>

                    <div id="accesos" >
                        <a href="https://login.microsoftonline.com/common/oauth2/authorize?response_type=code%20id_token&scope=openid&response_mode=form_post&redirect_uri=http%3A%2F%2Falumno.conalep.edu.mx%3A38383%2FSAEAlumno%2Fhome%2F&client_id=7e0e108a-0cc5-4b20-ad74-4448d7ab5487&resource=https%3a%2f%2fgraph.windows.net&nonce=0cfb53d0-01e6-41ea-9abc-0304d566b6e1&site_id=500879" target="_blank" id="P-Alumnos"><i class="enlaces fas fa-user-graduate"></i> Portal Alumnos</a>
                        <a href="https://login.microsoftonline.com/common/oauth2/authorize?response_type=code%20id_token&scope=openid&response_mode=form_post&redirect_uri=http%3A%2F%2Fadministrativo.conalep.edu.mx%2Fpad%2Fportal%2Finicio&client_id=dfbf2ef2-8b4d-4bed-9ecd-ab8d5420ea0f&resource=https%3a%2f%2fgraph.windows.net&nonce=358edc8d-a676-4278-a4fe-5b6bd91d6b1a&site_id=500879" target="_blank" id="P-Docentes"><i class="enlaces fas fa-chalkboard-teacher"></i>  Portal Docentes</a>
                        <a href="https://login.microsoftonline.com/common/oauth2/authorize?client_id=00000002-0000-0ff1-ce00-000000000000&redirect_uri=https%3a%2f%2foutlook.office365.com%2fowa%2f&resource=00000002-0000-0ff1-ce00-000000000000&response_mode=form_post&response_type=code+id_token&scope=openid&msafed=0&client-request-id=3b9daa5a-55ba-429d-a4f4-0e0da10e8c54&protectedtoken=true&domain_hint=conalep.edu.mx&nonce=636711190530859388.16d7a740-dd63-4677-bac7-07aab7a87e69&state=DYvBDsIgEAVBf8V4gy6h3QcH47dsy95aMSRVP989zBwmGe-cuxoXw5PJgTMjpVRpyVSWmkuJiRsEM4XWOIeZgbDKhkAQWSEFytXbe5v6V6bnUNmPx9Zfsus7ajvj8bt_mpUxtP8B" target="_blank" id="CorreoIn"><i class="enlaces fas fa-at"></i> Correo Institucional</a>
                   </div>
                </div>
                <div class="col-sm-2">
                    <h5>AVISO DE PRIVACIDAD</h5>
                    <hr>
                   <p>Aviso: puedes consultar nuestro aviso de privacidad con el siguiente enlace. Haz clic <a href="#">aquí</a> <i class="fas fa-arrow-circle-left"></i> para consultar. </p>
                   <div id="img-org">
                       <img src="img/orgullosamente-conalep.png" alt="Orgullosamente Conalep">
                   </div>
                </div>
                <div class="col-sm-2">
                <h5>CONTACTO</h5>
                <hr>
                <ul>
                    <li class="li-foot" ><i class="icon-foot-social fas fa-phone"></i>     (618) 817-96-26 y 817-12-68.</li>
                    <li class="li-foot" ><i class="icon-foot-social fas fa-map-marker-alt"></i>     Selenio Lote 1, Cd Industrial, 34208 Durango, Dgo.</li>
                    <li class="li-foot" ><i class="icon-foot-social fas fa-envelope"></i>     direccionconalepdgo@gmail.com</li>               
                </ul>
                <a href="#"><i class="icon-foot fab fa-facebook-square"></i></a>
                <a href="#"><i class="icon-foot fab fa-twitter-square"></i></a>
            </div>
            </div>
        </div>

 

    </footer>

   <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122674565-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122674565-1');
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  

<script src="js/main.js"></script>
<script src="js/nav.jquery.min.js"></script> 

<script src="js/librery/multislider.min.js"></script> 

<script>
		$('#mixedSlider').multislider({
			duration: 1000,
			interval: 3000
		});
</script>

<script>
    $('.nav').nav();
</script>

<script>
$(function(){
    // this will get the full URL at the address bar
    var url = window.location.href; 

    // passes on every "a" tag 
    $(".nav ul li a").each(function() {
            // checks if its the same on the address bar
        if(url == (this.href)) { 
            $(this).closest("li").addClass("active");
        }
    });
});
</script>

</body>
</html>