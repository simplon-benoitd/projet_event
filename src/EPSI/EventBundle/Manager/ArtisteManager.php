<?php

namespace EPSI\EventBundle\Manager;

use Doctrine\ORM\EntityManager;
use EPSI\EventBundle\Entity\Artiste;

class ArtisteManager extends BaseManager
{

    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getArtistes()
    {
        return $this
            ->getRepository()
            ->GetAllArtiste();
    }

    public function getArtisteById(int $id){
        return $this
            ->getRepository()
            ->GetArtisteById($id);
    }

    public function getRepository()
    {
        return $this->em->getRepository('EPSIEventBundle:Artiste');
    }

    public function saveArtiste(Artiste $artiste)
    {
        $this->persistAndFlush($artiste);
    }

}