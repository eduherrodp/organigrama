<div class="div_nivel dirAsuntosJuridicos">
    <a id="open_dgajepl" class="verDescripcion"></a>
    <div class="dropdown-content-I">
        <div class="card bg-light ficha">
            <div class="card-body">
                <div class="avatar">
                    <img src="<?php $persona =null;
                    echo $persona['foto']; ?>" alt="<?php echo $persona['nombre']; ?>">
                </div>
                <h5 class="card-title"><?php echo $persona['nombre']; ?></h5>
                <h6 class="card-subtitle"><?php echo $persona['cargo']; ?></h6>
                <a class="btn" href="mailto:<?php echo $persona['correo']; ?>">
                    <i class="material-icons">mail</i>
                    <span><?php echo $persona['correo']; ?></span>
                </a>
                <a class="btn" href="tel:<?php echo $persona['telefono']; ?>">
                    <i class="material-icons">phone</i>
                    <span><?php echo $persona['telefono']; ?></span>
                </a>
                <a class="btn" href="<?php echo $persona['cv']; ?>">
                    <i class="material-icons">description</i>
                    <span>CV</span>
                </a>
                <a class="btn funciones" href="#">
                    <i class="material-icons">expand_more</i>
                </a>
            </div>
        </div>
    </div>
</div>
