
<?php

require_once '3 Inventario.php';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

class Player {
    private string $nickname;
    private int $nivel;
    private Inventario $inventario;

                       //-> PARÂMETROS: nickname
    public function __construct(string $nickname) { 
        $this->nickname = $nickname; //----------> atribui o valor do PARÂMETRO $nickname à PROPRIEDADE $nickname
        $this->nivel = 1; //---------------------> atribui o valor 1 -------------------- à PROPRIEDADE $nivel
        $this->inventario = new Inventario(); //-> cria um novo inventário e atribui ---- à PROPRIEDADE $inventario
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function coletarItem(Item $item): bool { //-> booleano (TRUE/FALSE)
        return $this->inventario->adicionar($item); //-> adiciona o item ao inventário

                                                    //-> obs: FUNÇÃO ADICIONAR:
                                                    //-> se o tamanho do item for MENOR que a capacidade livre = TRUE
                                                    //-> se o tamanho do item for MAIOR que a capacidade livre = FALSE
    }

    public function soltarItem(Item $item): bool { //-> booleano (TRUE/FALSE)
        return $this->inventario->remover($item); //--> remove o item do inventário

                                                   //-> obs: FUNÇÃO REMOVER:
                                                   //-> se o item --- EXISTIR na array = TRUE
                                                   //-> se o item NÃO EXISTIR na array = FALSE
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function subirNivel(): void { //-------------------------> booleano (TRUE/FALSE)
        $this->nivel++; //------------------------------------------> soma +1 ao nível
        $this->inventario->capacidadeAumentar($this->nivel * 3); //-> nova capacidade do inventário = novo nível * 3
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function getNickname(): string { //------> método público para retornar o NICKNAME do player
        return $this->nickname;
    }
    public function getNivel(): int { //------------> método público para retornar o NIVEL do player
        return $this->nivel;
    }
    public function getCapacidadeLivre(): int {  //-> método público para retornar a CAPACIDADE LIVRE do INVENTÁRIO do player
        return $this->inventario->capacidadeLivre();
    }

}

?>
