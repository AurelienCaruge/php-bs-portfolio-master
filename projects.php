<?php

require_once dirname(__FILE__) . '/data/bdd.php';

include_once dirname(__FILE__) . '/partials/_head.php';
include_once dirname(__FILE__) . '/partials/_header.php';

?>

<?php

$projects = getData('PROJECTS');

?>
<div class="container">
    <div class="row align-items-md-stretch m-3">

    <?php foreach ($projects as $project) : ?>

        <div class="col-md-6">
            <div class="h-100 p-5 text-bg-dark rounded-3">
                <h2><?php echo $project['title'] ?></h2>
                <p><?php echo $project['description'] ?></p>
                <button class="btn btn-outline-light" type="button"><?php echo $project['link'] ?></button>
            </div>
        </div>

        <?php endforeach; ?>

        <!-- <div class="col-md-6">
            <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                <h2>Add borders</h2>
                <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
                <button class="btn btn-outline-secondary" type="button">Example button</button>
            </div>
        </div> -->
    </div>
</div>

<?php include_once dirname(__FILE__) . '/partials/_footer.php'; ?>