<?php include ROOT . '/views/layout/header_admin.php'; ?>

<section class="admin-height">
    <div class="container">
        <div class="row">

            <?php include ROOT . '/views/layout/aside_admin.php' ?>

            <div class="col-sm-9">

                <a href="/admin/product/create" class="btn btn-default button-default admin-button margin-bottom"><i class="fa fa-plus"></i> Добавить товар</a>
                
                <h4 class="margin-bottom">Список товаров</h4>
                <table class="table-bordered table-striped table">
                    <tr>
                        <th>ID товара</th>
                        <th>Артикул</th>
                        <th>Название товара</th>
                        <th>Цена</th>
                        <th>Ред.</th>
                    </tr>
                    <?php foreach ($productsList as $product): ?>
                        <tr>
                            <td><?php echo $product['id']; ?></td>
                            <td><?php echo $product['code']; ?></td>
                            <td><?php echo $product['name']; ?></td>
                            <td><?php echo $product['price']; ?></td>  
                            <td><a href="/admin/product/update/<?php echo $product['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o fa-lg delete-button"></i></a></td>
                            <td><a href="/admin/product/delete/<?php echo $product['id']; ?>" title="Удалить"><i class="fa fa-times fa-lg delete-button"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layout/footer_admin.php'; ?>