<div class="col-sm-12">
<?php 
	if(isset($query)) 
    {
        for($i=0;$i<count($query);$i++)
        {
        	//e.id, e.nombre, e.lugar, e.maps, e.fecha_ini, e.fecha_fin, e.aforo, e.descripcion, e.logo, c.nombre
            
        	$this->table->add_row("<table border=1 id=" . $query[$i]->id . "><tr><td colspan='2'> " . $query[$i]->nombre . " (" . $query[$i]->cat . ")</td></tr><tr><td> " . $query[$i]->lugar . "<br>" .  $query[$i]->fecha_ini . " - " . $query[$i]->fecha_fin . "</td><td> " . $query[$i]->descripcion . "<br> " . $query[$i]->logo ."</td></tr></table>" );
            echo $this->table->generate();
        }
    }
?>
</div>   