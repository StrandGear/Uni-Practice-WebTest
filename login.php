<?php
    include_once 'header.php';

    session_start();

    if (isset($_SESSION["name"])) {
        if (isset($_SESSION["surname"]))
        {
            echo 'git update -start';
             if (isset($_POST["score"])){
                $score = htmlspecialchars($_POST["score"]);
                $_SESSION["score"] = $score;
                print_r($score);
                $db->exec("UPDATE users SET Score = '\"$score\" ' WHERE ID = ' ".$_SESSION["id"]." ' ");
             }
            echo 'git update -end';
            header("location: profile.php");
            die();
        }
    }
    
    $role;
    if (isset($_POST["login_submit"])) {
        $name = htmlspecialchars($_POST["name"]);
        $surname = htmlspecialchars($_POST["surname"]);
        $password = htmlspecialchars(sha1($_POST["password"]));

        if (!empty($name) && $password != sha1("") && !empty($surname)){

            $users = $db->query("SELECT * FROM `users`");
            $triggeruser= false;

            while ($user = $users->fetch()){
                if ($name === $user["Name"] && $password === $user["Password"] && $surname === $user["Surname"]) {
                    $triggeruser = true;
                    $_SESSION["name"] = $name;
                    $_SESSION["surname"] = $surname;
                    $_SESSION["role"] = $user["Role"];
                    $_SESSION["id"] = $user["ID"];
                    header("location: profile.php");
                }
            }
            if(!$triggeruser)
                echo "No user found";
        }
        else
        echo "Some field is empty";
    }
    
    if (isset($_POST["registration_submit"])){
        $name = htmlspecialchars($_POST["name"]);
        $surname = htmlspecialchars($_POST["surname"]);
        $password = htmlspecialchars(sha1($_POST["password"]));
        $role = htmlspecialchars($_POST["role"]);
        
        $registered = true;
        $db->exec("INSERT INTO `users` (`Name`, `Surname`, `Password`, `Role`) VALUES (\"$name\", \"$surname\", \"$password\", \"$role\")");   
        debug($name);
        debug($surname);
    }

?>
    <div class="content">
        <h1>Вход</h1>
        <div class="one_column modal_window">
            <form action="" method="post">
                <p>Имя</p>
                <input type="text" name="name" id="name_field">
                <p>Фамилия</p>
                <input type="text" name="surname" id="surname_field">
                <p>Пароль</p>
                <input type="password" name="password">
                <input type="submit" name="login_submit" value="Подтвердить">
                <p style="margin-top: 10px;">или</p>
                <input style="margin-top: 0;" type="button" value="Регистрация" onclick="location.href = 'registration.php';">
                <?php
            // $request = $db->query("SELECT * FROM `users`")->fetchAll();
            // debug($request);
                ?>
            </form>
        </div>

    </div>
</body>
<script>
    if(<?=$registered?>)
    {
        document.getElementById("name_field").value = '<?=$name?>';
        document.getElementById("surname_field").value = '<?=$surname?>';
    }
    else {
        document.getElementById("name_field").value = '';
        document.getElementById("surname_field").value = '';
    }
</script>
</html>
