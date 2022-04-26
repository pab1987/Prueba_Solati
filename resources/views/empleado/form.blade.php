<label for="Nombre">  Nombre</label>
<input type="text" name="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:''}}" id="Nombre">
<br>
<label for="Apellido">  Apellido</label>
<input type="text" name="Apellido"  value="{{isset($empleado->Apellido)?$empleado->Apellido:''}}" id="Apellido" >
<br>
<label for="Correo">  Correo</label>
<input type="text" name="Correo"  value="{{isset($empleado->Correo)?$empleado->Correo:''}}" id="Correo">
<br>
<input type="submit" value="Guardar datos">