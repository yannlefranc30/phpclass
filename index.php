<?php
class thewitcher {
    // declaration des propiétés
    public $name;
    public $color;

    // declaration des methodes
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
}

$apple = new thewitcher(); // création d'un objet avec new
$banana = new thewitcher();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo $banana->get_name();
?>
