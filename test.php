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
                    <input type="radio" id="q1_1" name="q_1" class="5ffe533b830ahbhd5551">
                    <label for="q1_1">ЭВМ</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2_1" name="q_1" class="5gdffftaaalkk62681nn">
                    <label for="q2_1">ЭВМ с выходом в Интернет</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3_1" name="q_1" class="5ffe533b830f08a03263">
                    <label for="q3_1">система связи двух или более компьютеров и/или компьютерного оборудования</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4_1" name="q_1" class="5ffe533b8301hahah17s">
                    <label for="q4_1">WI-FI</label>
                    </li>
            </ul>

            <h3>2. Персональная сеть относится типу</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1-2" name="q_2" class="5ffe533b830ahbhd5551">
                    <label for="q1-2">среды передачи</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2-2" name="q_2" class="5ffe533b830f08a03263" >
                    <label for="q2-2">территориальной распространённости</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3-2" name="q_2" class="5gdffftaaalkk62681nn" >
                    <label for="q3-2">топологии</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4-2" name="q_2" class="5ffe533b8301hahah17s">
                    <label for="q4-2">методу коммуникации</label>
                    </li>
            </ul>

            <h3>3. Какого типа сети не существует?</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1_3" name="q_3" class="5ffe533b830ahbhd5551">
                    <label for="q1_3">организации взаимодействия</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2_3" name="q_3" class="5gdffftaaalkk62681nn" >
                    <label for="q2_3">топологии</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3_3" name="q_3" class="5ffe533b830f08a03263" >
                    <label for="q3_3">ограниченной</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4_3" name="q_3" class="5ffe533b8301hahah17s">
                    <label for="q4_3">скорости передачи</label>
                    </li>
            </ul>

            <h3>4. Скорость передачи информации – это</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1_4" name="q_4" class="5ffe533b830ahbhd5551">
                    <label for="q1_4">нагрузка на трафик</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2_4" name="q_4" class="5ffe533b8301hahah17s" >
                    <label for="q2_4">количество передаваемой информации</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3_4" name="q_4" class="5gdffftaaalkk62681nn" >
                    <label for="q3_4">время загрузки</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4_4" name="q_4" class="5ffe533b830f08a03263">
                    <label for="q4_4">количество бит, символов или блоков, передаваемых за единицу времени</label>
                    </li>
            </ul>

            <h3>5. LAN – это</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1_5" name="q_5" class="5ffe533b830ahbhd5551">
                    <label for="q1_5">лимитированные сети</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2_5" name="q_5" class="5ffe533b830f08a03263" >
                    <label for="q2_5">локальные сети</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3_5" name="q_5" class="5gdffftaaalkk62681nn" >
                    <label for="q3_5">личные сети</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4_5" name="q_5" class="5ffe533b8301hahah17s">
                    <label for="q4_5">персональные сетии</label>
                    </li>
            </ul>

            <h3>6. Локальная сеть строится</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1_6" name="q_6" class="5ffe533b830f08a03263">
                    <label for="q1_6">на базе среды передачи данных</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2_6" name="q_6" class="5ffe533b830ahbhd5551" >
                    <label for="q2_6">на базе антенны</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3_6" name="q_6" class="5gdffftaaalkk62681nn" >
                    <label for="q3_6">на базе ЭВМ</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4_6" name="q_6" class="5ffe533b8301hahah17s">
                    <label for="q4_6">на базе адаптера</label>
                    </li>
            </ul>

            <h3>7. В одноранговых сетях каждый компьютер имеет ... права</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1_7" name="q_7" class="5ffe533b830ahbhd5551">
                    <label for="q1_7">ограниченные</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2_7" name="q_7" class="5ffe533b830f08a03263" >
                    <label for="q2_7">одинаковые</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3_7" name="q_7" class="5gdffftaaalkk62681nn" >
                    <label for="q3_7">защищённые</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4_7" name="q_7" class="5ffe533b8301hahah17s">
                    <label for="q4_7">открытые</label>
                    </li>
            </ul>

            <h3>8. Аббревиатура глобальных сетей – это</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1_8" name="q_8" class="5ffe533b830ahbhd5551">
                    <label for="q1_8">GAN</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2_8" name="q_8" class="5gdffftaaalkk62681nn" >
                    <label for="q2_8">WMN</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3_8" name="q_8" class="5ffe533b830f08a03263" >
                    <label for="q3_8">WAN</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4_8" name="q_8" class="5ffe533b8301hahah17s">
                    <label for="q4_8">GMN</label>
                    </li>
            </ul>

            <h3>9. Какие линии связи не используются в глобальных сетях?</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1_9" name="q_9" class="5ffe533b830f08a03263">
                    <label for="q1_9">серверные</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2_9" name="q_9" class="5ffe533b830ahbhd5551" >
                    <label for="q2_9">телефонные</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3_9" name="q_9" class="5gdffftaaalkk62681nn" >
                    <label for="q3_9">сотовые</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4_9" name="q_9" class="5ffe533b8301hahah17s">
                    <label for="q4_9">телеграфные</label>
                    </li>
            </ul>

            <h3>10. Всемирной системой взаимосвязанных компьютерных сетей называют</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1_10" name="q_10" class="5ffe533b830ahbhd5551">
                    <label for="q1_10">веб-сайт</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2_10" name="q_10" class="5ffe533b830f08a03263" >
                    <label for="q2_10">Интернет</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3_10" name="q_10" class="5gdffftaaalkk62681nn" >
                    <label for="q3_10">сервер</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4_10" name="q_10" class="5ffe533b8301hahah17s">
                    <label for="q4_10">спутник</label>
                    </li>
            </ul>

            <h3>11. Сервер – это компьютеры, которые…</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1_11" name="q_11" class="5ffe533b830f08a03263">
                    <label for="q1_11">предоставляют доступ к собственным и сетевым ресурсам других компьютеров</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2_11" name="q_11" class="5ffe533b830ahbhd5551" >
                    <label for="q2_11">имеют подключение к сети Интернет</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3_11" name="q_11" class="5gdffftaaalkk62681nn" >
                    <label for="q3_11">запускают другие компьютеры в одной сети</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4_11" name="q_11" class="5ffe533b8301hahah17s">
                    <label for="q4_11">получают и передают информацию, к подключенным приёмникам</label>
                    </li>
            </ul>

            <h3>12. Клиент – это</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1_12" name="q_12" class="5ffe533b830ahbhd5551">
                    <label for="q1_12">человек, пользующийся компьютером</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2_12" name="q_12" class="5ffe533b830f08a03263" >
                    <label for="q2_12">компьютер, пользующийся услугами серверов</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3_12" name="q_12" class="5gdffftaaalkk62681nn" >
                    <label for="q3_12">компьютер, подключенный к Интернету</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4_12" name="q_12" class="5ffe533b8301hahah17s">
                    <label for="q4_12">пользователь, зарегистрированный в сети</label>
                    </li>
            </ul>

            <h3>13. Где находится сетевая плата?</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1_13" name="q_13" class="5ffe533b830f08a03263">
                    <label for="q1_13">в разъёме материнской платы</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2_13" name="q_13" class="5ffe533b830ahbhd5551" >
                    <label for="q2_13">в точке доступа</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3_13" name="q_13" class="5gdffftaaalkk62681nn" >
                    <label for="q3_13">в жёстком диске</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4_13" name="q_13" class="5ffe533b8301hahah17s">
                    <label for="q4_13">в дисководе</label>
                    </li>
            </ul>

            <h3>14. Что из этого не подходит для построения локальной сети с большим количеством компьютеров?</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1_14" name="q_14" class="5ffe533b830ahbhd5551">
                    <label for="q1_14">компьютер</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2_14" name="q_14" class="5gdffftaaalkk62681nn" >
                    <label for="q2_14">свитч</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3_14" name="q_14" class="5ffe533b830f08a03263" >
                    <label for="q3_14">патч-корд</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4_14" name="q_14" class="5ffe533b8301hahah17s">
                    <label for="q4_14">хаб</label>
                    </li>
            </ul>

            <h3>15. Что прежде всего относят к ПО компьютерных сетей?</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1_15" name="q_15" class="5ffe533b830ahbhd5551">
                    <label for="q1_15">маршрутизаторы</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2_15" name="q_15" class="5ffe533b830f08a03263" >
                    <label for="q2_15">сетевые операционные системы</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3_15" name="q_15" class="5gdffftaaalkk62681nn" >
                    <label for="q3_15">точка доступа</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4_15" name="q_15" class="5ffe533b8301hahah17s">
                    <label for="q4_15">адаптеры</label>
                    </li>
            </ul>

            <h3>16. Сетевая ОС – это</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1_16" name="q_16" class="5ffe533b830ahbhd5551">
                    <label for="q1_16">ОС с выходом в Интернет</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2_16" name="q_16" class="5ffe533b8301hahah17s" >
                    <label for="q2_16">ОС, подключённая к другой ОС</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3_16" name="q_16" class="5gdffftaaalkk62681nn" >
                    <label for="q3_16">ОС, работающая по принципу “открытого доступа”</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4_16" name="q_16" class="5ffe533b830f08a03263">
                    <label for="q4_16">ОС со встроенными сетевыми средствами (протоколами, уровнями)</label>
                    </li>
            </ul>

            <h3>17. Основное правило сетевой ОС</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1_17" name="q_17" class="5ffe533b830ahbhd5551">
                    <label for="q1_17">защищенность</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2_17" name="q_17" class="5ffe533b830f08a03263" >
                    <label for="q2_17">многопользовательность</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3_17" name="q_17" class="5gdffftaaalkk62681nn" >
                    <label for="q3_17">уникальность</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4_17" name="q_17" class="5ffe533b8301hahah17s">
                    <label for="q4_17">интегрированность</label>
                    </li>
            </ul>

            <h3>18. Сетевой протокол – это</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1_18" name="q_18" class="5ffe533b830f08a03263">
                    <label for="q1_18">набор правил, определяющий принципы взаимодействия компьютеров в сети</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2_18" name="q_18" class="5ffe533b830ahbhd5551" >
                    <label for="q2_18">уникальный номер компьютера, подключённого к сети</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3_18" name="q_18" class="5gdffftaaalkk62681nn" >
                    <label for="q3_18">адрес компьютера</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4_18" name="q_18" class="5ffe533b8301hahah17s">
                    <label for="q4_18">регистрация компьютера в сети</label>
                    </li>
            </ul>

            <h3>19. От чего зависит выбор протокола?</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1_19" name="q_19" class="5ffe533b830f08a03263">
                    <label for="q1_19">от типа сети</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2_19" name="q_19" class="5ffe533b830ahbhd5551" >
                    <label for="q2_19">от типа ЭВМ</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3_19" name="q_19" class="5gdffftaaalkk62681nn" >
                    <label for="q3_19">от типа подключения</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4_19" name="q_19" class="5ffe533b8301hahah17s">
                    <label for="q4_19">от типа использования</label>
                    </li>
            </ul>

            <h3>20. За что отвечает протокол HTTP?</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1_20" name="q_20" class="5ffe533b830ahbhd5551">
                    <label for="q1_20">за передачу файлов</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2_20" name="q_20" class="5ffe533b8301hahah17s" >
                    <label for="q2_20">за удалённый доступ</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3_20" name="q_20" class="5gdffftaaalkk62681nn" >
                    <label for="q3_20">за целостность данных</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4_20" name="q_20" class="5ffe533b830f08a03263">
                    <label for="q4_20">за передачу гипертекста</label>
                    </li>
            </ul>

            <h3>21. Что нужно компьютеру для его нахождения в сети?</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1_21" name="q_21" class="5ffe533b830ahbhd5551">
                    <label for="q1_21">подключение к Интернету</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2_21" name="q_21" class="5ffe533b830f08a03263" >
                    <label for="q2_21">IP-адрес</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3_21" name="q_21" class="5gdffftaaalkk62681nn" >
                    <label for="q3_21">разрешение доступа</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4_21" name="q_21" class="5ffe533b8301hahah17s">
                    <label for="q4_21">администратор сети</label>
                    </li>
            </ul>

            <h3>22. Из скольких частей состоит IP-адрес?</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1_22" name="q_22" class="5ffe533b830ahbhd5551">
                    <label for="q1_22">из одной</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2_22" name="q_22" class="5ffe533b8301hahah17s" >
                    <label for="q2_22">из двух</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3_22" name="q_22" class="5gdffftaaalkk62681nn" >
                    <label for="q3_22">из трёх</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4_22" name="q_22" class="5ffe533b830f08a03263">
                    <label for="q4_22">из четырёх</label>
                    </li>
            </ul>

            <h3>23. Какой возможный диапазон чисел для IP-адреса?</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1_23" name="q_23" class="5ffe533b830ahbhd5551">
                    <label for="q1_23">от 0 до 128</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2_23" name="q_23" class="5ffe533b830f08a03263" >
                    <label for="q2_23">от 0 до 255</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3_23" name="q_23" class="5gdffftaaalkk62681nn" >
                    <label for="q3_23">от 0 до 256</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4_23" name="q_23" class="5ffe533b8301hahah17s">
                    <label for="q4_23">от 0 до 512</label>
                    </li>
            </ul>

            <h3>24. Идентификатор .com относится к ... типу организации</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1_24" name="q_24" class="5ffe533b830ahbhd5551">
                    <label for="q1_24">образовательному</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2_24" name="q_24" class="5gdffftaaalkk62681nn" >
                    <label for="q2_24">международному</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3_24" name="q_24" class="5ffe533b830f08a03263" >
                    <label for="q3_24">коммерческому</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4_24" name="q_24" class="5ffe533b8301hahah17s">
                    <label for="q4_24">некоммерческому</label>
                    </li>
            </ul>

            <h3>25. DNS – это</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1_25" name="q_25" class="5ffe533b830ahbhd5551">
                    <label for="q1_25">доменные способ адресации</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2_25" name="q_25" class="5ffe533b8301hahah17s" >
                    <label for="q2_25">сами домены</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3_25" name="q_25" class="5gdffftaaalkk62681nn" >
                    <label for="q3_25">доменное подключение</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4_25" name="q_25" class="5ffe533b830f08a03263">
                    <label for="q4_25">доменные имена серверов</label>
                    </li>
            </ul>

            <h3>26. На что указывают идентификаторы в DNS?</h3>
            <ul>
                    <li>
                    <input type="radio" id="q1_26" name="q_26" class="5ffe533b830f08a03263">
                    <label for="q1_26">на страну</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q2_26" name="q_26" class="5ffe533b830ahbhd5551" >
                    <label for="q2_26">на тип подключения</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q3_26" name="q_26" class="5gdffftaaalkk62681nn" >
                    <label for="q3_26">на скорость подключения</label>
                    </li>
                    <br>
                    <li>
                    <input type="radio" id="q4_26" name="q_26" class="5ffe533b8301hahah17s">
                    <label for="q4_26">на тип организации</label>
                    </li>
            </ul>
            <button id="finish_test" onclick="checkAnswers()">Завершить</button>
            <p id="score"></p>
            <!-- <input type="submit" name="record" value="Записать результат"> -->
        </div>
    </div>
</body>
</html>