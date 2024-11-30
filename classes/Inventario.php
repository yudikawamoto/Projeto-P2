
<?php

class Inventario {

    private int $capacidadeMaxima;
    private array $itens = [];

    public function __construct(int $capacidadeInicial = 20) {                      
        $this->capacidadeMaxima = $capacidadeInicial;                               
    }

    public function adicionar(Item $item): bool {                                   
        if ($this->capacidadeLivre() >= $item->getTamanho()) {                      
            $this->itens[] = $item;                                                 
            return true;                                                            
        }
        return false;                                                               
    }

    public function remover(Item $item): bool {                                      
        foreach ($this->itens as $itemPosicao => $itemNome) {                        
            if ($itemNome === $item) {                                              
                unset($this->itens[$itemPosicao]);                                  
                return true;                                                        
            }
        }
        return false;                                                               
    }

    public function capacidadeLivre(): int {
        $ocupado = array_reduce($this->itens, function($tamanhoTotal, $item) {      
            return $tamanhoTotal + $item->getTamanho();                             
        }, 0);                                                                      
        return $this->capacidadeMaxima - $ocupado;                                  
    }

    public function capacidadeAumentar(int $quantidade): void {                     
        $this->capacidadeMaxima += $quantidade;                                     
    }

}

?>

