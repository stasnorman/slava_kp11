<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <h3>Кабинет пользователя</h3>
            
            <h4>Здравствуйте, <?php echo $user['name'];?>!</h4>
            <ul>
                <li><a href="/cabinet/edit">Редактировать личные данные</a></li>
                <li><a href="/admin/product">Управление проектами</a></li>
                <li><a href="/admin/category">Управление категориями проектов</a></li>
                <!-- <li><a href="/admin/order">Управление заказами</a></li> -->
            </ul>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>