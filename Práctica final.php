<! DOCTYPE html>
<html lang="es" dir="ltr">
  <cabeza>
    <meta charset="utf-8">
    <título>Formulario en HTML>
    <link rel="hoja de estilo" href="css/style.css">
    < tipo descript ="text/javascript" src="js/funciones.js"> >
  </cabeza>
  <cuerpo>
      <encabezado>
        <h1>Formulario>
      </encabezado>
      <nav>>
      <sección>
        <div id="datosGenerales">
          <h2>Datos Generales>
          <p>etiqueta de < para="clave">Cve. Etiqueta>
          < tipo deentrada ="texto" nombre="clave" id="clave" tamaño="8" maxlength="5" marcador de posición="Alfanumérico" requerido>
          </p>
          <p>etiqueta < para="nombre">Nombre>
          < tipo deentrada ="texto" nombre="nombre" id="nombre" tamaño="20" maxlength="50" marcador de posición="Nombre(s) " requerido(s)" >
          </p>
          <p>etiqueta < para="apellido">apellido>
          < tipo deentrada ="texto" nombre="apellido" id="apellido" tamaño="20" maxlength="80" marcador de posición="Apellido(s) " requerido(s) " requerido(s)" >
          </p>
        </Div>
        <div id="datosTrabajo">
          <h2>Datos Trabajo>
          <p>
            <etiqueta para="salario">Salario $< /etiqueta>
            < tipo deentrada ="número" clase="numero" nombre="salario" id="salario" tamaño="10" maxlength="10" marcador de posición=" Alcalde acero" required onchange="calcularNomina()">
          </p>
          <p>
            <etiqueta para="dias">Días Trabajados>
            < tipode entrada ="número" clase="numero" nombre="dias" id="dias" size="5" maxlength="8" valor = "15" marcador de posición="15" requerido onchange="calcularNomina()">
          </p>
          <etiqueta para="tipo"><p>Tipo Empleado>
                <p>< tipode entrada ="radio" nombre="tipo" id="tipo" valor="A"  activado="calcularNomina()">Administrativo>
                <p>< tipode entrada ="radio" nombre="tipo" id="tipo" valor="O" onchange="calcularNomina()">Operativo>
          </etiqueta>
        </Div>
        <div id="nomina">
          <h2>Nómina>
          <p>
            <etiqueta para="importe">Importe $>
            < tipo deentrada ="texto" clase="numero" nombre="importe" id="importe" tamaño="10" readonly>
          </p>
        </Div>
        <div id="botones">
          <p>botón de < onclick="calcularNomina()">botón Calcular>
          < tipo deentrada ="resetear" nombre="limpiar" id="limpiar" valor="Limpiar">>
        </Div>
    </sección>
      <piede página>< /pie depágina>
  </cuerpo>
</HTML>
