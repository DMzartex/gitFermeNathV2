<?php
if(isset($_SESSION['flashMessage'])):
    $messageFlash = $_SESSION['flashMessage'];
    $color = $_SESSION['flashColor'];
    unset($_SESSION['flashMessage']);
    unset($_SESSION['flashColor']);?>
    <div class="mt-2 mb-2 alert alert-<?= $color ?>" role="alert"><?=$messageFlash?></div>
<?php endif; ?>
