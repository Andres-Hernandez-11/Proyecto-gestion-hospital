<div class="navbar">

    <h2>Panel Administrativo</h2>

    <div class="user">
        <?= htmlspecialchars($_SESSION['usuario']['nombre']) ?>
    </div>

</div>

<?php if(isset($_SESSION['success'])): ?>

<div class="alert success">

    <?= $_SESSION['success'] ?>

</div>

<?php unset($_SESSION['success']); ?>

<?php endif; ?>


<?php if(isset($_SESSION['error'])): ?>

<div class="alert error">

    <?= $_SESSION['error'] ?>

</div>

<?php unset($_SESSION['error']); ?>

<?php endif; ?>