<h1>Contactenos</h1>
<section id="contactenos" class="seccion">
            <iframe width="520" height="400" frameborder="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20Mosquera+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='http://maps-website.com/es'>Clic</a>
            <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=18e9a57a12f0282d310fd033ae7a74b3776a01fe'></script>
            <div class="container-fluid">
                <div class="row">
                    <div class="columna columna-50 columna-mobile-100 empujar-50 empujar-mobile-0 sinpadding-mobile">
                        <form action="<?=base_url?>contacto/contactoForm" method="POST">
                            <div class="form-block">
                                <label for="">Nombre:</label>
                                <input type="text" name="nombre" class="form-control" placeholder="nombre" required>
                            </div>
                            <div class="form-block">
                                <label for="">Email:</label>
                                <input type="email" name="email" class="form-control" placeholder="email" required>
                            </div>
                            <div class="form-block">
                                <label for="">Asunto:</label>
                                <input type="text" name="asunto" class="form-control" placeholder="email" required>
                            </div>
                            <div class="form-block">
                                <label for="">Mensaje:</label>
                                <textarea name="texto"class="form-control" placeholder="Escribenos tu consulta" required></textarea>
                            </div>
                            <div class="form-block bloque-ultimo">
                                <input type="submit" class="boton-negro" value="Enviar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>