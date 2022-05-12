
<?php 

class Article {
    public $prix;
    public $solde;
    public $image;
    public $nom;

    public function __construct($nom,$prix,$solde,$image)

    {
        $this->prix = $prix;
        $this->solde = $solde;
        $this->nom = $nom;
        $this->image = $image;
    }

    public function afficher_prix()
    {
        echo "$this->prix €";
    }

    public function afficher_nv_prix() 
    {
        $nv_prix = $this->prix * $this->solde;
        echo "<span style='text-decoration-line: line-through';> $this->prix € </span> 
        <span style='color:red'>$nv_prix €</span>";
    }

    public function afficher_nom() 
    {
        echo "$this->nom";
    }

    public function image(){

        echo $this->image;
    }

}


$article1 = new Article("Tenue complète ",45,0.45,1); //prix solde nom image
$article2 = new Article("Pantalon ",25,0.52,1);
$article3 = new Article("Pantalon ",30,0.75,1 );
$article4 = new Article("Tenue complète ",50,0.40,1 );
$article5 = new Article("Doudoune ",37,0.85,1 );
$article6 = new Article("Chaussures ",45,1,1);
$article7 = new Article("T Shirt ",18,0.60,1 );
$article8 = new Article("Jean ",30,0.75,1 );



?>



