<?php

use App\Propiedad;

// Check from where is this file calling to return the specific amount of data 
if ($_SERVER["SCRIPT_NAME"] === "/bienesraices/anuncios.php") {
    // From anuncios.php 
    $propiedades = Propiedad::all();
} else {
    // From index.php 
    $propiedades = Propiedad::get(3);
}

?>

<div class="contenedor-anuncios">
    <?php foreach ($propiedades as $propiedad) { ?>

        <div class="anuncio">

            <img src="/bienesraices/img/<?php echo $propiedad->imagen; ?>" alt="Anuncio" loading="lazy" />

            <div class="contenido-anuncio">
                <h3><?php echo $propiedad->titulo; ?></h3>
                <p><?php echo $propiedad->descripcion; ?></p>
                <p class="precio">$<?php echo $propiedad->precio; ?></p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img src="build/img/icono_wc.svg" alt="icono wc" loading="lazy" ; />
                        <p><?php echo $propiedad->wc; ?></p>
                    </li>
                    <li>
                        <img src="build/img/icono_estacionamiento.svg" alt="icono estacionamienticono_estacionamiento" loading="lazy" ; />
                        <p><?php echo $propiedad->estacionamientos; ?></p>
                    </li>
                    <li>
                        <img src="build/img/icono_dormitorio.svg" alt="icono dormiicono_dormitorio" loading="lazy" ; />
                        <p><?php echo $propiedad->habitaciones; ?></p>
                    </li>
                </ul>
                <a href="anuncio.php?id=<?php echo $propiedad->id; ?>" class="boton-amarillo-block">See property</a>
            </div>
            <!-- contenido anuncio end -->
        </div>
        <!-- anuncio end -->
    <?php } ?>

</div>
<!-- contenedor anuncio end -->