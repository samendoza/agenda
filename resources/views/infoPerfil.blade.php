<form method="POST" action="/info" id="infoperfil" class="infoPerfil">
    <div class="form-group">
        <label for="in_nombre" class="control-label"> Nombre </label><br>
        <input type="text" name="nombre" id="in_nombre" maxlength="50" minlength="4" placeholder="Nombre(s)" required><br>
    </div>

    <div class="form-group">
        <label for="in_apPat" class="control-label"> Apellido Paterno </label><br>
        <input type="text" name="apPat" id="in_apPat" maxlength="50" minlength="4" placeholder="Apellido Paterno" required><br>
    </div>

    <label for="in_apMat"> Apellido Materno </label>
    <input type="text" name="apMat" id="in_apMat" maxlength="50" minlength="4" placeholder="Apellido Materno" required><br>

    <label for="rd_genero"> Género </label>
    <div id="rd_genero">
        <label for="rb_masculino"> Masculino</label>
        <input type="radio" name="sexo" id="rb_masculino" value="masculino" class="ui-checkboxradio ui-helper-hidden-accessible">
        <label for="rb_fememnino"> Femenino </label>
        <input type="radio" name="sexo" id="rb_fememnino" value="femenino" >
    </div><br>

    <label for="sct_estado"> Estado donde vives </label>
    <select name="estado" id="sct_estado">
        <option value="Aguascalientes">Aguascalientes</option>
        <option value="Baja California">Baja California</option>
        <option value="Baja California Sur">Baja California Sur</option>
        <option value="Campeche">Campeche</option>
        <option value="Chiapas">Chiapas</option>
        <option value="Chihuahua">Chihuahua</option>
        <option value="Coahuila">Coahuila</option>
        <option value="Colima">Colima</option>
        <option value="Distrito Federal">Distrito Federal</option>
        <option value="Durango">Durango</option>
        <option value="Estado de Mexico">Estado de México</option>
        <option value="Guanajuato">Guanajuato</option>
        <option value="Guerrero">Guerrero</option>
        <option value="Hidalgo">Hidalgo</option>
        <option value="Jalisco">Jalisco</option>
        <option value="Michoacan">Michoacán</option>
        <option value="Morelos">Morelos</option>
        <option value="Nayarit">Nayarit</option>
        <option value="Nuevo Leon">Nuevo León</option>
        <option value="Oaxaca">Oaxaca</option>
        <option value="Puebla">Puebla</option>
        <option value="Queretaro">Querétaro</option>
        <option value="Quintana Roo">Quintana Roo</option>
        <option value="San Luis Potosi­">San Luis Potosí­</option>
        <option value="Sinaloa">Sinaloa</option>
        <option value="Sonora">Sonora</option>
        <option value="Tabasco">Tabasco</option>
        <option value="Tamaulipas">Tamaulipas</option>
        <option value="Tlaxcala">Tlaxcala</option>
        <option value="Veracruz">Veracruz</option>
        <option value="Yucatan">Yucatán</option>
        <option value="Zacatecas">Zacatecas</option>
    </select><br>

    <label for="dp_fechaNac">Elige tu fecha de nacimiento</label>
    <div id="dp_fechaNac"></div><br>

    <fieldset>
        <legend> Gustos generales </legend>
        <div id="ckb_gustos">
            <input type="checkbox" id="in_musica" name="gustos" value="musica"><label for="in_musica"> Música </label>
            <input type="checkbox" id="in_deportes" name="gustos" value="deportes"> <label for="in_deportes"> Deportes </label>
            <input type="checkbox" id="in_baile" name="gustos" value="baile"> <label for="in_baile"> Baile </label>
            <input type="checkbox" id="in_lectura" name="gustos" value="lectura"> <label for="in_lectura"> Lectura </label>
        </div>
    </fieldset><br>



</form>