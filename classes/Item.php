
<?php

class Item {

    private string $name;
    private int $tamanho;
    private string $classe;

    public function __construct(string $name, int $tamanho, string $classe) {
        $this->name = $name; 
        $this->tamanho = $tamanho;
        $this->classe = $classe;
    }

    public function getName(): string { 
        return $this->name;
    }
    public function getTamanho(): int {
        return $this->tamanho;
    }
    public function getClasse(): string { 
        return $this->classe;
    }

}

?>
