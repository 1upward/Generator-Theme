<h1>Добавить отзыв</h1>

<form action="/wp-admin/admin.php?page=gen_reviews" method="post">
    <p>Введите отзыв <textarea name="text"></textarea> </p>
    <p>Введите ФИО <input type="text" name="fio" id=""/></p>
    <p>Введите название фирмы <input type="text" name="name" id=""/></p>
    <p>введите ссылку <input type="text" name="link" id=""/></p>
    <input type="submit" name="reviews" value = "Добавить отзыв"/>
</form>