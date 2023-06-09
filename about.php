<?php

require_once dirname(__FILE__).'/data/bdd.php';

include_once dirname(__FILE__).'/partials/_head.php';
include_once dirname(__FILE__).'/partials/_header.php';
?>

<?php

$about = getData('ABOUT');


?>



<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4 rounded-circle" src="./images/pexels-wencheng-jiang-6635795.jpg" alt="" width="400" height="400">
    <h1 class="display-5 fw-bold text-body-emphasis"><?php echo $about[0]['name']; ?></h1>
    <h3><?php echo $about[0]['title']; ?></h3>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4"><?php echo $about[0]['bio']; ?></p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
      </div>
    </div>
  </div>

<?php


$about=getData('EDUCATION');

$about=getData('EXPERIENCE');

?>
<?php include_once dirname(__FILE__).'/partials/_footer.php'; ?>