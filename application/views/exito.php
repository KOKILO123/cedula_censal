<div class="row">
    <a href="<?php echo base_url() . 'index.php/marcoController/generar_JSON' ?>"  class="btn btn-info">Volver a generar</a>
</div>
<div class="row">
    <div class="alert alert-success" role="alert">
        ÉXITO AL GENERAR DATA
    </div>

    <?php echo realpath(dirname(__FILE__)); ?>
    <table class="table table-bordered">
        <tr class="eclcabprintbl">
            <td>Archivo de Datos</td>
            <td>Fecha de Creación</td>
        </tr>
        <?php
        echo $table;
        ?>

    </table>
</div>

