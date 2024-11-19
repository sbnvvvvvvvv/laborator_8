<?php
class Teacher extends Human
{
    public $job;
    public $year;
    public $expirience;
    public $cash;

    public function about_th()
    {
        echo "Информация: "."<br>".
        "Имя: ".$this -> name."<br>".
        "Возраст: ".$this -> age."<br>".
        "Пол: ".$this -> gender."<br>".
        "Должность: ".$this -> job."<br>".
        "Год начала работы: ".$this -> year."<br>".
        "Стаж: ".$this -> expirience."<br>".
        "Зарплата: ".$this -> cash."<br>";
    }

    public function change_job($job)
    {
        $this -> job = $job;
    }

    public function change_cash($cash)
    {
        $this -> cash = $cash;
    }

    public function init($name, $age, $gender, $job, $year, $expirience, $cash)
    {
        $this -> name = $name;
        $this -> age = $age;
        $this -> gender = $gender;
        $this -> job = $job;
        $this -> year = $year;
        $this -> expirience = $expirience;
        $this -> cash = $cash;
    }
}





?>