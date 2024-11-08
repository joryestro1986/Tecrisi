<?php
/* EXPLORADOR DE CARPETAS Y ARCHIVOS CON PHP
 * Documento explora.php
 * Explorador de carpetas y archivos usando el sistema de ficheros de PHP.
 * Autor: Andrés de la Paz © 2010
 * Contacto: www.wextensible.com
 */

//Por defecto la primera vez que abrimos este explorador toma
//como carpeta la del php actual. La constante __FILE__ es la
//ruta del archivo PHP actual. Con dirname obtenemos la carpeta.
$ruta = dirname("C:\SEP_acapulco\SEP_PROCESO\SHCP P11 SEP 01157 2023 0578\SHCP P11 SEP 01157 2023 0578\SHCP P11 SEP 01157 2023 0578" )."/";
//Para abrir archivos necesitaremos poner la codificación
//adecuada con estos valores
$array_codif = Array(
"UTF-8",
"ISO-8859-1",
"ISO-8859-15"
);

//Por defecto usamos esta para htmlentities (ver más abajo)
$codificacion = "ISO-8859-1";

//Vemos si hay algo en el GET
if (isset($_GET)){
    foreach($_GET as $campo=>$valor){
        switch ($campo) {
            //Obtenemos una ruta, carpeta o archivo
            case "una-ruta":
                $ruta = htmlspecialchars($valor, ENT_QUOTES);
                if (get_magic_quotes_gpc() == 1) $ruta = stripslashes($ruta);
                break;
            //Vemos la codificación
            case "una-codificacion":
                $codificacion = htmlspecialchars($valor, ENT_QUOTES);
                if (get_magic_quotes_gpc() == 1) $codificacion = stripslashes($codificacion);
                break;

        }
    }
}

//Si la ruta es vacía, pone la del presente script
if ($ruta == "") $ruta = dirname(__FILE__)."/";

//Esta variable contendrá la lista de nodos (carpetas y archivos)
$presenta_nodos = "";

//Esta variable es para el contenido del archivo
$presenta_archivo = "";

//Si la ruta es una carpeta, la exploramos. Si es un archivo
//sacamos también el contenido del archivo.
if (is_dir($ruta)){//ES UNA CARPETA
    //Con realpath convertimos los /../ y /./ en la ruta real
    $ruta = realpath($ruta)."/";
    //exploramos los nodos de la carpeta
    $presenta_nodos = explora_ruta($ruta);
} else {//ES UN ARCHIVO
    $ruta = realpath($ruta);
    //Sacamos también los nodos de la carpeta
    $presenta_nodos = explora_ruta(dirname($ruta)."/");
    //Y sacamos el contenido del archivo
    $presenta_archivo = "<br />CONTENIDO DEL ARCHIVO: ".
    $ruta."<pre>".
    explora_archivo($ruta, $codificacion).
    "</pre>";
}
//Función para explorar los nodos de una carpeta
//El signo @ hace que no se muestren los errores de restricción cuando
//por ejemplo open_basedir restringue el acceso a algún sitio
function explora_ruta($ruta){
    //En esta cadena haremos una lista de nodos
    $cadena = "";
    //Para agregar una barra al final si es una carpeta
    $barra = "";
    //Este es el manejador del explorador
    $manejador = @dir($ruta);
    while ($recurso = $manejador->read()){
        //El recurso sera un archivo o una carpeta
        $nombre = "$ruta$recurso";
        if (@is_dir($nombre)) {//ES UNA CARPETA
            //Agregamos la barra al final
            $barra = "/";
            $cadena .= "CARPETA: ";
        } else {//ES UN ARCHIVO
            //No agregamos barra
            $barra = "";
            $cadena .= "ARCHIVO: ";
        }
        //Vemos si el recurso existe y se puede leer
        if (@is_readable($nombre)){
            $cadena .= "<a href=\"".$_SERVER["PHP_SELF"].
            "?una-ruta=$nombre$barra\">$recurso$barra</a>";
        } else {
            $cadena .= "$recurso$barra";
        }
        $cadena .= "<br />";
    }
    $manejador->close();
    return $cadena;
}

//Función para extraer el contenido de un archivo
function explora_archivo($ruta, $codif){
    //abrimos un buffer para leer el archivo
    ob_start();
    readfile($ruta);
    //volcamos el buffer en una variable
    $contenido = ob_get_contents();
    //limpiamos el buffer
    ob_clean();
    //retornamos el contenido después de limpiarlo
    //aplicando la codificación seleccionada
    return htmlentities($contenido, ENT_QUOTES, $codif);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
    <title>Explora carpetas</title>
    <meta http-equiv="X-UA-Compatible" content="IE=8" />
    ...
</head>
<body>
    ...
    <h3>Opciones de configuración PHP (restringen explorador)</h3>
    <ul>
    <?php
        $opciones = "<li><a href=\"http://docs.php.net/manual/es/ini.sect.safe-mode.php#ini.safe-mode\">".
        "<code>safe_mode</code></a> ";
        if (ini_get("safe_mode")){
            $opciones .= ": activado";
        } else {
            $opciones .= ": desactivado";
        }
        $opciones .= "</li>".
        "<li><a href=\"http://docs.php.net/manual/es/ini.core.php#ini.open-basedir\">".
        "<code>open_basedir</code></a>: ".ini_get("open_basedir")."</li>".
        "<li><a href=\"http://docs.php.net/manual/es/function.getmyuid.php\">".
        "<code>getmyuid()</code></a>: ".getmyuid()."</li>".
        "<li><a href=\"http://docs.php.net/manual/es/function.getmygid.php\">".
        "<code>getmygid()</code></a>: ".getmygid()."</li>";
        echo $opciones;
    ?>
    </ul>

    <h3>Exploración</h3>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
        Ruta <small>(En Windows pueden usarse ambas barras "/" y "\")</small>
        <br /><textarea rows="5" cols="50" name="una-ruta"
        ><?php echo $ruta; ?></textarea><br />
        Codificación para ver archivos:
        <select name="una-codificacion">
            <?php
                foreach ($array_codif as $i=>$val){
                    echo "<option value=\"$val\"";
                    if ($codificacion == $val) echo " selected=\"selected\"";
                    echo ">$val</option>";
                }
            ?>
        </select><br />
        <input type="submit" value="enviar" />
    </form>

    <?php
        echo "<br />$presenta_nodos";
        echo "<br />$presenta_archivo";
    ?>
</body>
</html>