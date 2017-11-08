<?php

class voertuig {
public $rijdt;
public $beweegt;
}
class auto extends voertuig implements brandstof{
    public $vierWielen;
    public function verbranding(){
    echo "verbranding";
    }
}
interface brandstof{
public function verbranding();
}

$auto = new auto();
$auto->verbranding();
?>