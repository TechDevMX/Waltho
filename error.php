<?php
require_once(__DIR__ . '/classes/Tools.php');

$headerMeta = array('title' => 'Página no encontrada | Waltho');
$headerResources = '
  <link href="'. Tools::getBaseUrl() .'/css/style-error.css" rel="stylesheet" type="text/css"/>';
require_once(__DIR__ .'/header.php');
?>

  <section id="error-section">
    <h2>La página que solicitó no existe</h2>
    <h3>Por favor visite la <a href="<?php echo Tools::getBaseUrl(); ?>/">página principal</a>.</h3>
  </section>

<?php require_once(__DIR__ .'/footer.php');
