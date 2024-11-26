
<?php

class Item {

    private string $name;
    private int $tamanho;
    private string $classe;

                       //-> PARÂMETROS: name, tamanho e classe
    public function __construct(string $name, int $tamanho, string $classe) {
        $this->name = $name; //-> atribui o valor do PARÂMETRO $name à PROPRIEDADE $name
        $this->tamanho = $tamanho;
        $this->classe = $classe;
    }
    // __construct():
    // quando cria-se um novo objeto de uma classe (usando a palavra-chave new),
    // o método __construct() é chamado automaticamente (nunca é chamado manualmente)
    // e ele atribui os valores das PROPRIEDADES ao objeto criado

    ////////////////////////////////////////////////////////////////////////////////////////

    public function getName(): string { //-> método público para retornar o NOME do item
        return $this->name;
    }
    public function getTamanho(): int { //-> método público para retornar o TAMANHO do item
        return $this->tamanho;
    }
    public function getClasse(): string { //-> método público para retornar a CLASSE do item
        return $this->classe;
    }

}

?>
