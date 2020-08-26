<P style="font-weight: 1rem; color:brown; font-family: 'Georgia';">
    <?php
        echo RUTA_URL . $datos['titulo'];   
     ?>
<ul>
    <?php foreach($datos['articulos'] as $articulo) : ?>
        <li>
            <?php
                echo $articulo->titulo;
            ?>
        
        </li>

    <?php endforeach;?>
</ul>

<ul>
    <?php foreach($datos['cuenta'] as $cuenta) : ?>
        <li>
            <?php
                echo $articulo->titulo;
            ?>
        
        </li>

    <?php endforeach;?>
</ul>

</P>