<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Review
 *
 * @ORM\Table(name="review", indexes={@ORM\Index(name="fk_user", columns={"id_user"}), @ORM\Index(name="fk_avis", columns={"id_avis"}), @ORM\Index(name="id_avis", columns={"id_avis"})})
 * @ORM\Entity
 */
class Review
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_review", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReview;

    /**
     * @var int
     *
     * @ORM\Column(name="id_avis", type="integer", nullable=false)
     */
    private $idAvis;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var int
     *
     * @ORM\Column(name="opinion", type="integer", nullable=false)
     */
    private $opinion;

    public function getIdReview(): ?int
    {
        return $this->idReview;
    }

    public function getIdAvis(): ?int
    {
        return $this->idAvis;
    }

    public function setIdAvis(int $idAvis): self
    {
        $this->idAvis = $idAvis;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getOpinion(): ?int
    {
        return $this->opinion;
    }

    public function setOpinion(int $opinion): self
    {
        $this->opinion = $opinion;

        return $this;
    }


}
