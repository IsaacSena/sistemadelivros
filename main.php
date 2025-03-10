<?php 
    namespace PHP\Modelo;
    require_once('Cliente.php');
    require_once('Cadastrolivros.php');
    require_once('Formapagamento.php');
    require_once('Compra.php');
    require_once('Cartao.php');

    use PHP\Modelo\Cartao;
    use PHP\Modelo\Compra;
    use PHP\Modelo\Cliente;
    use PHP\Modelo\Cadastrolivros;
    use PHP\Modelo\Formapagamento;

    $cartao1 = new Cartao('131231313','213121','1234');
    
    $cliente1 = new Cliente('Isaac','Rua Vicente','11960172522','17/04/02',
    'bankaiminazuki','urahara',$cartao1);

    $livro1 = new Cadastrolivros(1,'As Aventuras','Mateus','Aventura','Pavanis',49,10);

    $pagamento1 = new Formapagamento('Crédito á vista');

    $compra1 = new Compra(1,$cliente1,$livro1,$pagamento1);


    echo "<br><br>".$cliente1->imprimir(); 
    echo "<br><br>".$cartao1->imprimir();
    echo "<br><br>".$livro1->imprimir();
    echo "<br><br>".$pagamento1->imprimir();
    echo "<br><br>".$compra1->imprimir();

    
    echo "<br><br>Querido professor, gostaria que o senhor soubesse que me dediquei ao máximo, usei todos os meus neurônios, mas infelizmente não sou inteligente o suficiente para a programação. Obrigado pela aula. Deus te abençoe. Amém."
   
    
    

?>