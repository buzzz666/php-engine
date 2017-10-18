<?php include ROOT . '/views/layout/header.php' ?>

<section class="full-height">
    <div class="container">
        <div class="row">
            <?php include ROOT . '/views/layout/aside.php' ?>

            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="/template/images/product-details/1.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->
                                <?php if($product['is_new']): ?>
                                    <img src="/template/images/product-details/new.jpg" class="newarrival" alt="" />
                                <?php endif; ?>
                                <h2><?php echo $product['name'] ?></h2>
                                <p>Код товара: <?php echo $product['code'] ?></p>
                                <span class="aviablity">
                                    <span>$<?php echo $product['price'] ?></span>
                                    <?php if($product['availability']): ?>
                                        <label>Количество:</label>
                                        <input type="text" value="" />
                                        <button type="button" class="btn btn-fefault cart">
                                            <i class="fa fa-shopping-cart"></i>
                                            В корзину
                                        </button>
                                    <?php endif; ?>
                                </span>
                                <p><b>Наличие:</b> <?php echo ($product['availability']) ? 'Есть на складе' : 'Нет на складе';?></p>
                                <p><b>Производитель:</b> <?php echo $product['brand'] ?></p>
                            </div><!--/product-information-->
                        </div>
                    </div>
                    <div class="row">                                
                        <div class="col-sm-12">
                            <h5>Описание товара</h5>
                            <p><?php echo $product['description'] ?></p>
                        </div>
                    </div>
                </div><!--/product-details-->

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layout/footer.php' ?>