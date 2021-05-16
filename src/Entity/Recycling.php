<?php

namespace App\Entity;

use App\Repository\RecyclingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecyclingRepository::class)
 */
class Recycling
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $building;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $january;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $february;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $march;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $april;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $may;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $june;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $july;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $august;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $september;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $october;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $november;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $december;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBuilding(): ?string
    {
        return $this->building;
    }

    public function setBuilding(string $building): self
    {
        $this->building = $building;

        return $this;
    }

    public function getJanuary(): ?int
    {
        return $this->january;
    }

    public function setJanuary(?int $january): self
    {
        $this->january = $january;

        return $this;
    }

    public function getFebruary(): ?int
    {
        return $this->february;
    }

    public function setFebruary(?int $february): self
    {
        $this->february = $february;

        return $this;
    }

    public function getMarch(): ?int
    {
        return $this->march;
    }

    public function setMarch(?int $march): self
    {
        $this->march = $march;

        return $this;
    }

    public function getApril(): ?int
    {
        return $this->april;
    }

    public function setApril(?int $april): self
    {
        $this->april = $april;

        return $this;
    }

    public function getMay(): ?int
    {
        return $this->may;
    }

    public function setMay(?int $may): self
    {
        $this->may = $may;

        return $this;
    }

    public function getJune(): ?int
    {
        return $this->june;
    }

    public function setJune(?int $june): self
    {
        $this->june = $june;

        return $this;
    }

    public function getJuly(): ?int
    {
        return $this->july;
    }

    public function setJuly(?int $july): self
    {
        $this->july = $july;

        return $this;
    }

    public function getAugust(): ?int
    {
        return $this->august;
    }

    public function setAugust(?int $august): self
    {
        $this->august = $august;

        return $this;
    }

    public function getSeptember(): ?int
    {
        return $this->september;
    }

    public function setSeptember(?int $september): self
    {
        $this->september = $september;

        return $this;
    }

    public function getOctober(): ?int
    {
        return $this->october;
    }

    public function setOctober(?int $october): self
    {
        $this->october = $october;

        return $this;
    }

    public function getNovember(): ?int
    {
        return $this->november;
    }

    public function setNovember(?int $november): self
    {
        $this->november = $november;

        return $this;
    }

    public function getDecember(): ?int
    {
        return $this->december;
    }

    public function setDecember(?int $december): self
    {
        $this->december = $december;

        return $this;
    }
}
