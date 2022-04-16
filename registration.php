<?php
    include_once 'header.php';

    if (isset($_SESSION["name"])) {
        if (isset($_SESSION["surname"]))
        {
            header("location: profile.php");
            die();
        }
    }
?>
    
    <div class="content">
        <h1>Регистрация</h1>
        <div class="one_column modal_window">
            <form action="login.php" method="post">
                <p>Ваше имя</p>
                <input type="text" name="name">
                <p>Ваша фамилия</p>
                <input type="text" name="surname">
                <p>Задайте пароль</p>
                <input type="password" name="password" style="display: block; margin-bottom: 20px">
                <label for="studentCheck" style="margin-top: 10px;">
                <ul>
                    <li>
                    <input type="radio" id="student" name="role" value="Учащийся">
                    <label for="student">Учащийся</label>
                    </li>
                    <li>
                    <input type="radio" id="professor" name="role" value="Преподаватель">
                    <label for="professor">Преподаватель</label>
                    </li>
                    <li>
                    <input type="radio" id="admin" name="role" value="Администратор">
                    <label for="admin">Администратор</label>
                    </li>
                </ul>
                <input type="submit" name="registration_submit" value="Подтвердить" > 
                <p style="margin-top: 10px;">или</p>
                <input style="margin-top: 0;" type="button" value="Войти с логином" onclick="location.href = 'login.php';">
            </form>
        </div>

    </div>
</body>
</html>