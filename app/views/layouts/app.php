<?php require_once '../app/views/layouts/header.php'; ?>

<div class="container">

    <?php require_once '../app/views/layouts/sidebar.php'; ?>

    <div class="main">

        <?php require_once '../app/views/layouts/navbar.php'; ?>

        <div class="content">

            <?php require_once $view; ?>

        </div>

    </div>

</div>

<?php require_once '../app/views/layouts/footer.php'; ?>