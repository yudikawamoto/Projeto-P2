

<?php

require_once 'Inventario.php';

class Player {
    private string $nickname;
    private int $nivel;
    private Inventario $inventario;

    public function __construct(string $nickname) { 
        $this->nickname = $nickname;                                    
        $this->nivel = 1;                                               
        $this->inventario = new Inventario();                           
    }

    public function coletarItem(Item $item): bool {                     
        return $this->inventario->adicionar($item);                     
    }

    public function soltarItem(Item $item): bool {                      
        return $this->inventario->remover($item);                       
    }

    public function subirNivel(): void {                                
        $this->nivel++;                                                 
        $this->inventario->capacidadeAumentar($this->nivel * 3);        
    }

    public function getNickname(): string {                             
        return $this->nickname;
    }

    public function getNivel(): int {                                   
        return $this->nivel;
    }

    public function getCapacidadeLivre(): int {                         
        return $this->inventario->capacidadeLivre();
    }
}

?>
