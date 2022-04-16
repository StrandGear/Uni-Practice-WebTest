<?php
    include_once 'header.php';

   /* на будущее когда надо записать рез-т
   session_start();

    if (isset($_SESSION["name"])) {
        if (isset($_SESSION["surname"]))
        {
            if(isset($_POST["record"])) {
                header("location: profile.php");
                die();
            }
        }
    }

    if (!isset($_SESSION["name"])) {
        if (!isset($_SESSION["surname"]))
        {
            if(isset($_POST["record"])) {
                header("location: registration.php");
                die();
            }
        }
    }
    */
?>

    <div class="content" id="end">
        <h1>ТЕСТ</h1>
        <div class="one_column modal_window">
            <h3>1. Компьютерная сеть – это</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1" name="q_2" class="5ffe533b830ahbhd5551">
                    <label for="q1">ЭВМ</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2" name="q_2" class="5gdffftaaalkk62681nn">
                    <label for="q2">ЭВМ с выходом в Интернет</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3" name="q_2" class="5ffe533b830f08a03263">
                    <label for="q3">система связи двух или более компьютеров и/или компьютерного оборудования</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4" name="q_2" class="5ffe533b8301hahah17s">
                    <label for="q4">WI-FI</label>
                    </li>
            </ul>

            <h3>2. Персональная сеть относится типу</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1" name="q_1" class="5ffe533b830ahbhd5551">
                    <label for="q1">среды передачи</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2" name="q_1" class="5ffe533b830f08a03263" >
                    <label for="q2">территориальной распространённости</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3" name="q_1" class="5gdffftaaalkk62681nn" >
                    <label for="q3">топологии</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4" name="q_1" class="5ffe533b8301hahah17s">
                    <label for="q4">методу коммуникации</label>
                    </li>
            </ul>

            <h3>3. Какого типа сети не существует?</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1" name="q_3" class="5ffe533b830ahbhd5551">
                    <label for="q1">организации взаимодействия</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2" name="q_3" class="5gdffftaaalkk62681nn" >
                    <label for="q2">топологии</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3" name="q_3" class="5ffe533b830f08a03263" >
                    <label for="q3">ограниченной</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4" name="q_3" class="5ffe533b8301hahah17s">
                    <label for="q4">скорости передачи</label>
                    </li>
            </ul>

            <h3>4. Скорость передачи информации – это</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1" name="q_4" class="5ffe533b830ahbhd5551">
                    <label for="q1">нагрузка на трафик</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2" name="q_4" class="5ffe533b8301hahah17s" >
                    <label for="q2">количество передаваемой информации</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3" name="q_4" class="5gdffftaaalkk62681nn" >
                    <label for="q3">время загрузки</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4" name="q_4" class="5ffe533b830f08a03263">
                    <label for="q4">количество бит, символов или блоков, передаваемых за единицу времени</label>
                    </li>
            </ul>
            <button id="finish_test" onclick="checkAnswers()">Завершить</button>
            <!-- <input type="submit" name="record" value="Записать результат"> -->
        </div>
    </div>
</body>
</html>