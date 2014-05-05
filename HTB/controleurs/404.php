<?php
if (!empty($_SERVER['HTTP_REFERER'])) {
  echo '<p><a href="'.$_SERVER['HTTP_REFERER'].'">Retour page précédente</a></p>';
}
?>