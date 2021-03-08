class Family {
    public static $surname='Черных';
    public static $sex='Мужчина';
    public static $age=32;
    public static $occupation='Работа';
}
class Father extends Family {
    public static $status='Отец';
    public static $name='Иван';

    public function occupation(){
        echo $this->occupation;
    }
}
class Mother extends Family {
    public static $status='Мать';
    public static $name='Светлана';
    public static $sex='Женщина';

    public function occupation(){
        echo $this->occupation;
    }
}
class Child extends Family {
    public static $status='Ребенок';
    public static $name='Вася';
    public static $age=7;
    public static $occupation='Учеба';

    public function occupation(){
        echo $this->occupation;
    }
}
