
<?php

class Inventario {

    private int $capacidadeMaxima;
    private array $itens = [];

    public function __construct(int $capacidadeInicial = 20) { //-> define a capacidade inicial
        $this->capacidadeMaxima = $capacidadeInicial; //----------> define a capacidade máxima de acordo com a incial
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function adicionar(Item $item): bool { //--------------> booleano (TRUE/FALSE)

        if ($this->capacidadeLivre() >= $item->getTamanho()) { //-> se a capacidade livre é maior ou igual ao tamanho do item a ser adicionado
            $this->itens[] = $item; //----------------------------> adiciona o item na array "itens"
            return true; //---------------------------------------> retorno booleano TRUE (inventário tem espaço)
        }
        return false; //------------------------------------------> retorno booleano FALSE (inventário sem espaço)
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function remover(Item $item): bool { //---------------> booleano (TRUE/FALSE)
        foreach ($this->itens as $itemPosicao => $itemNome) { //-> foreach = percorre todos os itens da array "itens"
                                                              //-> $itemPosicao = número do item na posição da array (ex: 0, 1, 2, ...)
                                                              //-> $itemNome = nome do item na posição da array (ex: Ataque, Defesa, Magia, ...)

            if ($itemNome === $item) { //------------------------> se o nome do item na posição da array = nome do item que foi solicitado a remoção
                unset($this->itens[$itemPosicao]); //------------> unset = remove o item da array "itens"
                return true; //----------------------------------> retorno booleano TRUE (item encontrado na array)
            }
        }
        return false; //-----------------------------------------> retorno booleano FALSE (item não encontrado na array)
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function capacidadeLivre(): int {
        $ocupado = array_reduce($this->itens, function($tamanhoTotal, $item) { //-> array_reduce = percorre a array "itens" e reduz a um único valor
            return $tamanhoTotal + $item->getTamanho(); //------------------------> soma ao $tamanhoTotal o tamanho de cada item que está no inventário
        }, 0); //-----------------------------------------------------------------> $tamanhoTotal inicia em 0
        return $this->capacidadeMaxima - $ocupado; //-----------------------------> capacidade máxima - ocupado = capacidade livre
    }

    public function capacidadeAumentar(int $quantidade): void { //-> void = função sem retorno
        $this->capacidadeMaxima += $quantidade; //-----------------> capacidade máxima atual + quantidade a ser aumentado = nova capacidade máxima
    }

}

?>
