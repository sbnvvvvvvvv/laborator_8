<?php

    require __DIR__.'/human.php';
    require __DIR__.'/students.php';
    require __DIR__.'/teacher.php';
    $andrey = new Teacher();

    $andrey -> init("Андрей", "34", "Мужской", "Информатик", 2015, 9, 45000);
    $andrey -> about_th();
    echo "<br>";echo "<br>";
    $andrey -> change_job("Историк");
    $andrey -> change_cash(18000);
    $andrey -> about_th();
    echo "<br>";echo "<br>";

    $Petya = new Student();
    $Petya -> init("Петя", "16", "Мужской", "21ИТ25", 2021, "Староста");
    $Petya -> about_st();
    echo "<br>";echo "<br>";
    $Petya -> change_groop("21ИТ26");
    $Petya -> change_stuff("Физорг");
    $Petya -> about_st();
    echo "<br>";echo "<br>";





?>