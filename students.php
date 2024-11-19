<?php
class Student extends Human
{
    public $groop;
    public $year;
    public $stuff;


    public function about_st()
    {
        echo "Информация: "."<br>".
        "Имя: ".$this -> name."<br>".
        "Возраст: ".$this -> age."<br>".
        "Пол: ".$this -> gender."<br>".
        "Группа: ".$this -> groop."<br>".
        "Год поступления: ".$this -> year."<br>".
        "Должность в группе: ".$this -> stuff."<br>";
    }

    public function change_groop($groop)
    {
        $this -> groop = $groop;
    }

    public function change_stuff($stuff)
    {
        $this -> stuff = $stuff;
    }

    public function init($name, $age, $gender, $groop, $year, $stuff)
    {
        $this -> name = $name;
        $this -> age = $age;
        $this -> gender = $gender;
        $this -> groop = $groop;
        $this -> year = $year;
        $this -> stuff = $stuff;
    }
}









?>