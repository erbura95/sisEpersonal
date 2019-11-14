<div class="form-group">
    <label for="cat_nombre">Nombre de la categoría </label>
    <input type="text" name="cat_nombre" placeholder="Nueva categoría..."/>
</div>
<div class="form-group">
    <select data-live-search="true" name="cat_tipo" class="selectpicker show-menu-arrow test" data-size="5">
        <option selected="true" disabled="disabled">-Seleccionar-</option>
        <option value="Autoevaluación">Autoevaluación</option>
        <option value="Evaluador">Evaluador</option>
    </select>
</div>
<div>
    <button class="btn btn-primary" id="btn_aceptar" type="submit">Guardar</button>
    <button class="btn btn-danger" type="reset">Cancelar</button>
</div>