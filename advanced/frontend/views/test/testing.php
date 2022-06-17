<?php

echo 'we are here';

?>

<h1>Welcome to my first Controller</h1>

<h2><?=$vNumber?></h2>
<h2><?=$vName?></h2>
<?php
  foreach($vArray as $arr){
    echo '<h2>' . $arr . '</h2>';
  }
?>