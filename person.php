<?php


class person
{
    public $firstname, $lastname, $dob, $city;  // переменные для данных

    /*
     * функция set заполняет переменные
     * */
    public function set($firstname, $lastname, $dob, $city){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->dob = $dob;
        $this->city = $city;
    }

    /*
     * функция get возвращает данные в зависимости от требуемого формата
     * */
    public function get($template = "%firstname%;%lastname%;%dob%;%city%"){
        $str = str_replace('%firstname%', $this->firstname, $template);
        $str = str_replace('%lastname%', $this->lastname, $str);
        $str = str_replace('%dob%', $this->dob, $str);
        $str = str_replace('%city%', $this->city, $str);
        return $str;
    }
}