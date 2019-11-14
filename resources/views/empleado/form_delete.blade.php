<p>Confirme si desea dar de baja a
    <?php
    $nombre = $emp->emp_nombre;
    $paterno = $emp->emp_appaterno;
    $materno = $emp->emp_apmaterno;
    echo $nombre . " " . $paterno . " " . $materno;
    ?>
</p>
{{--<div class="form-group" hidden>--}}
    {{--<input type="text" name="emp_estado" class="form-control"  value="Inactivo">--}}
{{--</div>--}}

<div class="form-group" hidden>
    <input type="text" class="form-control" name="emp_estado" value="Inactivo">
</div>