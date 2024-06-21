<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    abstract class  Transport {
        protected  int $idt ;
        protected  int $vitesse ;
        protected  int $cap ;

        public function __construct(int $idt, int $vitesse ,int $cap) {
            $this->idt = $idt;
            $this->vitesse = $vitesse;
            $this->cap = $cap ;
        }

        abstract public function info();
        abstract public function montant ();

    }
    class Autocar extends Transport{
        private $marque;
        private int $prix_par_ticket;

        public function __construct(int $idt ,int $vitesse ,int $cap , $marque ,int $prix_par_ticket) {
            parent::__construct($idt , $vitesse , $cap);
            $this->marque = $marque;
            $this->prix_par_ticket = $prix_par_ticket;
        }
        public function info(){
            echo "la vitesse : $this->vitesse  ,la capacité :.$this->cap. la marque : $this->marque le prix par ticket : $this->prix_par_ticket";
        }
        public function montant(){
            return $this->cap * $this->prix_par_ticket;
        }

    }
    $autocar = new Autocar(1, 100, 50, "Mercedes", 10);
    $autocar->info();
    echo "<br>Le montant total est: " . $autocar->montant();
     
     ?>
     
</body>
</html>