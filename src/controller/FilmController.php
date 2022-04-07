<?php

namespace App\Controller;

use App\Entity\Film;
use App\Model\FilmRepository;

/**
 * Controller des flms
 */
class FilmController extends AbstractController
{
    /** @var FilmRepository */
    private $filmRepo;

    public function __construct()
    {
        $this->filmRepo = new FilmRepository();
    }

    public function list(): void
    {
        $films = $this->filmRepo->findAll();
        $title = 'Liste Film';
        //recup la vue pour affichage
        $this->renderView('film/liste', compact('films', 'title'));
    }
}
