<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>La Nacion RSS - Economía</title>
</head>
<body>
<?php
$file = "http://contenidos.lanacion.com.ar/herramientas/rss/categoria_id=432";
$data = simplexml_load_file($file); 

echo '<center>';
echo '<img src="'.$data->icon.'" alt="Icono La Nacion" />';
echo '<H1><a href='.$data->id.'>'.$data->title.'</a></H1>';
echo '<a href="'.$data->link->attributes()->href.'">Link RSS</a><br/>';	
echo $data->updated.'<br/>'; 
echo $data->rights.'<br/>';
echo '</center><br/><br/>';


foreach ($data->entry as $item){ 
		

	echo '<h2><a href='.$item->link->attributes()->href.'>'.$item->title.'</a></h2><br />';
	echo date($item->updated).'<br />';
        echo '<b>'.$item->summary.'</b><br/>';
	if ($item->content->div){ 
                echo 'En Formato: '.$item->content->attributes().'<br/>';
		echo $item->content->div.'<br/>';	
      			  if ($item->content->div->img){
             			   echo '<img src="' .$item->content->div->img->attributes(). '" alt="gallery image" /><br />';
			}
	}	
	if ($item->author){
		echo '<a href="'.$item->author->uri.'">'.$item->author->name.'</a><br/>';	
		echo '<a href="mailto:'.$item->author->email.'"/>Email</a><br/>';		
	}
	if ($item->category){
		echo 'Categoria: '. $item->category->attributes(). '<br/>';			
	}

	echo '<br/><br/>';
	
}
?>
	        				                        
</body>
</html>