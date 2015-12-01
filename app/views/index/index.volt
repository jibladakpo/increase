<h1>Welcome to Increase!</h1>

{{link_to("index/index", "Register Here!")}}
<div>
<?php use Ajax\bootstrap\html\base\CssRef;
$panel=$this->jquery->bootstrap()->htmlPanel("panel-4","Contenu","Header");
$panel->setStyle(CssRef::CSS_INFO);
 echo $panel;
 ?>