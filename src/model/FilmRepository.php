<?php
namespace App\Model;

use App\Database\Database;
use App\Model\Film;
use App\Model\Realisateur;
use PDO;

class FilmRepository{

      /** @var PDO */
      private $connexion;

      public function __construct()
      {
          $database = new Database();
          $this->connexion = $database->getConnexion();
      }
  
       /**
     * récupére tous les acteurs
     *
     * @return Film[] tableau de film
     */
    public function findAll(): array
    {
        //requete et affichage des Films
        $sql = 'SELECT film.*, r.nom as rNom, r.prenom as rPrenom FROM film left join realisateur as r on r.id = film.realisateur_id ';
        $statement = $this->connexion->query($sql);
        $statement->execute();
        $resultat = $statement->fetchAll(PDO::FETCH_ASSOC);

        $filmTab = [];
        foreach ($resultat as $filmArray) {
            $realisateur = new Realisateur($filmArray['realisateur_id'], $filmArray['rPrenom'], $filmArray['rNom']);
            $film = new Film($filmArray['id'], $filmArray['titre'], $filmArray['duree'], $realisateur);
            $filmTab[] = $film;
        }

        return $filmTab;
    }
}