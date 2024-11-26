
<?php

require_once '1 Item Classe.php';

////////////////////////////////////////////////////////////////////////////////////////////

class Ataque extends Item { //----------------------> ATAQUE = nova subclasse da classe ITEM
    public function __construct(string $name) { //--> __construct da subclasse ATAQUE
        parent::__construct($name, 7, 'Ataque'); //-> __construct da classe ITEM
    }
}
class Defesa extends Item { //----------------------> DEFESA = nova subclasse da classe ITEM
    public function __construct(string $name) { //--> __construct da subclasse DEFESA
        parent::__construct($name, 4, 'Defesa'); //-> __construct da classe ITEM
    }
}
class Magia extends Item { //----------------------> MAGIA = nova subclasse da classe ITEM
    public function __construct(string $name) { //-> __construct da subclasse MAGIA
        parent::__construct($name, 2, 'Magia'); //-> __construct da classe ITEM
    }
}

?>
