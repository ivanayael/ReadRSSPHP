<?php
$file = "http://contenidos.lanacion.com.ar/herramientas/rss/categoria_id=432";

$data = simplexml_load_file($file); 
?>
<pre>
<?php
	print_r($data); 
?>
</pre>;

