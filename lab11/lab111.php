<HTML LANG="es">
<HEAD>
    <TITLE>Laboratorio 11.1</TITLE>
    <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</HEAD>
<BODY>
<H1>Consulta de noticias</H1>
<?php
require_once("class/noticias.php");

$obj_noticia = new noticia();

// Paginación
$noticiasPorPagina = 5;
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
$inicio = ($pagina - 1) * $noticiasPorPagina;

// Utiliza la función consultarNoticiasPaginadas para obtener noticias y el total
$resultados = $obj_noticia->consultarNoticiasPaginadas($inicio, $noticiasPorPagina);
$noticias = $resultados['noticias'];
$totalNoticias = $resultados['total'];

if ($totalNoticias > 0) {
    $totalPaginas = ceil($totalNoticias / $noticiasPorPagina);
    $inicioNoticia = $inicio + 1;
    $finNoticia = min($inicio + $noticiasPorPagina, $totalNoticias);
    
    echo "Mostrando noticias de $inicioNoticia a $finNoticia de un total de $totalNoticias. ";
    
    if ($pagina > 1) {
        $paginaAnterior = $pagina - 1;
        echo "<a href='?pagina=$paginaAnterior'>Anterior</a> | ";
    }
    
    if ($pagina < $totalPaginas) {
        $paginaSiguiente = $pagina + 1;
        echo "<a href='?pagina=$paginaSiguiente'>Siguiente</a>";
    }
    
    echo "<br>";

    print ("<TABLE>\n");
    print ("<TR>\n");
    print ("<TH>Titulo</TH>\n");
    print ("<TH>Texto</TH>\n");
    print ("<TH>Categoria</TH>\n");
    print ("<TH>Fecha</TH>\n");
    print ("<TH>Imagen</TH>\n");
    print ("</TR>\n");

    foreach ($noticias as $resultado) {
        print ("<TR>\n");
        print ("<TD>" . $resultado['titulo'] . "</TD>\n");
        print ("<TD>" . $resultado['texto'] . "</TD>\n");
        print ("<TD>" . $resultado['categoria'] . "</TD>\n");
        print ("<TD>" . date("j/n/Y", strtotime($resultado['fecha'])) . "</TD>\n");

        if ($resultado['imagen'] != "") {
            print ("<TD><A TARGET='_blank' HREF='img/" . $resultado['imagen'] . "'><IMG BORDER='0' SRC='img/iconotexto.gif'></A></TD>\n");
        } else {
            print ("<TD>&nbsp;</TD>\n");
        }
        print ("</TR>\n");
    }
    print ("</TABLE>\n");
} else {
    print ("No hay noticias disponibles");
}
?>
</BODY>
</HTML>

