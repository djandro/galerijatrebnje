<?php

// content and left or right
if($this->countModules('left and right') == 0) $contentwidth = "12";
if($this->countModules('left or right') == 1) $contentwidth = "8";
if($this->countModules('left and right') == 1) $contentwidth = "4";

// topleft and topright
$topoffsetwidth = "9";
if($this->countModules('topleft and topright') == 1) $topoffsetwidth = "6";

//maintop
$maintop = 0;
if ($this->countModules('maintop1')) $maintop++;
if ($this->countModules('maintop2')) $maintop++;
if ($this->countModules('maintop3')) $maintop++;
if ($this->countModules('maintop4')) $maintop++;

if ( $maintop == 4  ) {                  
    $maintopmodwidth = 'col-md-3';   
}if ( $maintop == 3 ) {                 
    $maintopmodwidth = 'col-md-4';  
}if ( $maintop == 2 ) {                
    $maintopmodwidth = 'col-md-6'; 
} else if ($maintop == 1) {      
    $maintopmodwidth = 'col-md-12';  
}

//mainbottom
$mainbottom = 0;
if ($this->countModules('mainbottom1')) $mainbottom++;
if ($this->countModules('mainbottom2')) $mainbottom++;
if ($this->countModules('mainbottom3')) $mainbottom++;
if ($this->countModules('mainbottom4')) $mainbottom++;

if ( $mainbottom == 4  ) {                  
    $mainbottommodwidth = 'col-md-3';   
}if ( $mainbottom == 3 ) {                 
    $mainbottommodwidth = 'col-md-4';  
}if ( $mainbottom == 2 ) {                
    $mainbottommodwidth = 'col-md-6'; 
} else if ($mainbottom == 1) {      
    $mainbottommodwidth = 'col-md-12';  
}

?>
