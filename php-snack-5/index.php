<!-- Crea una classe Indumento che ha un materiale come proprieta' da popolare nel costruttore.

Crea due sottoclassi Scarpa e Cappello, che avranno una proprieta' speciale ognuna 
oltre a richiamare il costruttore del parent. 

Istanziare un indumento, una scarpa e un cappello con il var_dump e verificare 
su schermo le differenze.  -->

<?php 
class Indumento {
    protected $materiale;
    
    function __construct(string $materiale = 'Sintetico'){
        $this->materiale=$materiale;
    }
}
class Scarpa extends Indumento{
    private $taglia;

    function __construct(int $taglia, string $materiale){
        parent::__construct($materiale);
        $this->taglia = $taglia;
    }
}

class Cappello extends Indumento{
    private $visiera;

    function __construct(bool $visiera, string $materiale){
        parent::__construct($materiale);
        $this->visiera = $visiera;
    }
}

var_dump(new Indumento());
var_dump(new Scarpa(44, 'Tessuto'));
var_dump(new Cappello(true, 'Tessuto'));
?>