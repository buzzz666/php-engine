<?php include ROOT . '/views/layout/header_admin.php'; ?>

<section class="admin-height">
    <div class="container">
        <div class="row">

            <?php include ROOT . '/views/layout/aside_admin.php' ?>

            <div class="col-sm-9">                
                <h4 class="margin-bottom">Удаление товара №<?= $id ?></h4>
                <p>Действительно удалить этот товар?</p>
                <form method="post">
                    <input type="submit" name="submit" value="Удалить">
                </form>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layout/footer_admin.php'; ?>