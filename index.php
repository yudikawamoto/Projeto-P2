
<?php

require_once 'classes/1 Item Classe.php';
require_once 'classes/2 Item Subclasses.php';
require_once 'classes/3 Inventario.php';
require_once 'classes/4 Player.php';

/////////////////////////////////////////////////////////////////////

echo "<br>";

echo "CRIANDO NOVOS PLAYERS:<br>";

echo "<br>";

$player1 = new Player("Jogador 1");
echo "- " . $player1->getNickname() . " foi criado com sucesso.<br>";

$player2 = new Player("Jogador 2");
echo "- " . $player2->getNickname() . " foi criado com sucesso.<br>";

echo "<br><br>";

//////////////////////////////////////////////////////////////////////////////

echo "CRIANDO NOVOS ITENS:<br>";

echo "<br>";

$item1 = new Ataque("Espada"); //-> classe Item, subclasse Ataque, nome Espada
echo "- " . $item1->getName() . " foi criado com sucesso.<br>";

$item2 = new Defesa("Escudo"); //-> classe Item, subclasse Defesa, nome Escudo
echo "- " . $item2->getName() . " foi criado com sucesso.<br>";

$item3 = new Magia("Poção"); //---> classe Item, subclasse Magia, nome Poção
echo "- " . $item3->getName() . " foi criado com sucesso.<br>";

echo "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "EXIBINDO A CAPACIDADE LIVRE E<br>
      ADICIONANDO ITENS AO INVENTÁRIO:<br>";

echo "<br>";

echo "- Jogador 1: Capacidade livre no inventário: " . $player1->getCapacidadeLivre() . ".<br>";

$player1->coletarItem($item1);
echo "- " . $player1->getNickname() . ": Coletou o item: " . $item1->getName() . " (tamanho: " . $item1->getTamanho() . ").<br>";

$player1->coletarItem($item2);
echo "- " . $player1->getNickname() . ": Coletou o item: " . $item2->getName() . " (tamanho: " . $item2->getTamanho() . ").<br>";

echo "- Jogador 1: Capacidade livre no inventário: " . $player1->getCapacidadeLivre() . ".<br>";

echo "<br>";

echo "- Jogador 2: Capacidade livre no inventário: " . $player2->getCapacidadeLivre() . ".<br>";

$player2->coletarItem($item3);
echo "- " . $player2->getNickname() . ": Coletou o item: " . $item3->getName() . " (tamanho: " . $item3->getTamanho() . ").<br>";;

echo "- Jogador 2: Capacidade livre no inventário: " . $player2->getCapacidadeLivre() . ".<br>";

echo "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "EXIBINDO O NÍVEL DO PLAYER E A<br>
      ATUAL CAPACIDADE LIVRE DO INVENTÁRIO:<br>";

echo "<br>";

echo "- Jogador 1: Nível: " . $player1->getNivel() . ".<br>";

echo "- Jogador 1: Capacidade livre no inventário: " . $player1->getCapacidadeLivre() . ".<br>";

echo "<br>";

echo "- Jogador 2: Nível: " . $player2->getNivel() . ".<br>";

echo "- Jogador 2: Capacidade livre no inventário: " . $player2->getCapacidadeLivre() . ".<br>";

echo "<br><br>";

////////////////////////////////////////////////////////////////////////////////////////////////

echo "SUBINDO O NÍVEL DO PLAYER E EXIBINDO A<br>
      NOVA CAPACIDADE LIVRE DO INVENTÁRIO:<br>";

echo "<br>";

$player1->subirNivel();
echo "- Jogador 1: Nível: " . $player1->getNivel() . " (Subiu de nível).<br>";
echo "- Jogador 1: Capacidade livre no inventário: " . $player1->getCapacidadeLivre() . ".<br>";
echo "- obs: Capacidade anterior: 9 + (Nível: 2 * Múltiplicador: 3).<br>";

echo "<br>";

$player2->subirNivel();
echo "- Jogador 2: Nível: " . $player2->getNivel() . " (Subiu de nível).<br>";
echo "- Jogador 2: Capacidade livre no inventário: " . $player2->getCapacidadeLivre() . ".<br>";
echo "- obs: Capacidade anterior: 18 + (Nível: 2 * Múltiplicador: 3).<br>";

echo "<br>";

$player2->subirNivel();
echo "- Jogador 2: Nível: " . $player2->getNivel() . " (Subiu de nível).<br>";
echo "- Jogador 2: Capacidade livre no inventário: " . $player2->getCapacidadeLivre() . ".<br>";
echo "- obs: Capacidade anterior: 24 + (Nível: 3 * Múltiplicador: 3).<br>";

echo "<br><br>";

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "TESTE DE INVENTÁRIO CHEIO:<br>";

echo "<br>";

echo "- Jogador 1: Capacidade livre no inventário: " . $player1->getCapacidadeLivre() . ".<br>";

while ($player1->coletarItem($item2)) {
    echo "- " . $player1->getNickname() . ": Coletou o item: " . $item2->getName() . " (tamanho: " . $item2->getTamanho() . ").<br>";
    echo "- Jogador 1: Capacidade livre no inventário: " . $player1->getCapacidadeLivre() . ".<br>";

                                                            //-> while:
                                                            //-> o loop continuará adicionando o item
                                                            //-> enquanto a FUNÇÃO COLETARITEM retornar TRUE

                                                            //-> dentro da função coletarItem, existe a FUNÇÃO ADICIONAR:
                                                            //-> se o tamanho do item for MENOR que a capacidade livre = TRUE
                                                            //-> se o tamanho do item for MAIOR que a capacidade livre = FALSE
}

echo "<br>";

echo "- Impossível adicionar mais unidades do item: " . $item2->getName() . " (tamanho: " . $item2->getTamanho() . ").<br>";
echo "- O tamanho do item (" . $item2->getTamanho() . ") excede a capacidade livre (" . $player1->getCapacidadeLivre() . ") do inventário.<br>";

echo "<br>";

?>
