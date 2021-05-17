<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaperCardboard
 *
 * @ORM\Table(name="paper_cardboard")
 * @ORM\Entity
 */
class PaperCardboard
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="building", type="string", length=30, nullable=false)
     */
    private $building;

    /**
     * @var float|null
     *
     * @ORM\Column(name="january", type="float", precision=10, scale=0, nullable=true)
     */
    private $january;

    /**
     * @var float|null
     *
     * @ORM\Column(name="february", type="float", precision=10, scale=0, nullable=true)
     */
    private $february;

    /**
     * @var float|null
     *
     * @ORM\Column(name="march", type="float", precision=10, scale=0, nullable=true)
     */
    private $march;

    /**
     * @var float|null
     *
     * @ORM\Column(name="april", type="float", precision=10, scale=0, nullable=true)
     */
    private $april;

    /**
     * @var float|null
     *
     * @ORM\Column(name="may", type="float", precision=10, scale=0, nullable=true)
     */
    private $may;

    /**
     * @var float|null
     *
     * @ORM\Column(name="june", type="float", precision=10, scale=0, nullable=true)
     */
    private $june;

    /**
     * @var float|null
     *
     * @ORM\Column(name="july", type="float", precision=10, scale=0, nullable=true)
     */
    private $july;

    /**
     * @var float|null
     *
     * @ORM\Column(name="august", type="float", precision=10, scale=0, nullable=true)
     */
    private $august;

    /**
     * @var float|null
     *
     * @ORM\Column(name="september", type="float", precision=10, scale=0, nullable=true)
     */
    private $september;

    /**
     * @var float|null
     *
     * @ORM\Column(name="october", type="float", precision=10, scale=0, nullable=true)
     */
    private $october;

    /**
     * @var float|null
     *
     * @ORM\Column(name="november", type="float", precision=10, scale=0, nullable=true)
     */
    private $november;

    /**
     * @var float|null
     *
     * @ORM\Column(name="december", type="float", precision=10, scale=0, nullable=true)
     */
    private $december;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return float|null
     */
    public function getJanuary(): ?float
    {
        return $this->january;
    }

    /**
     * @param float|null $january
     */
    public function setJanuary(?float $january): void
    {
        $this->january = $january;
    }

    /**
     * @return float|null
     */
    public function getFebruary(): ?float
    {
        return $this->february;
    }

    /**
     * @param float|null $february
     */
    public function setFebruary(?float $february): void
    {
        $this->february = $february;
    }

    /**
     * @return float|null
     */
    public function getMarch(): ?float
    {
        return $this->march;
    }

    /**
     * @param float|null $march
     */
    public function setMarch(?float $march): void
    {
        $this->march = $march;
    }

    /**
     * @return float|null
     */
    public function getApril(): ?float
    {
        return $this->april;
    }

    /**
     * @param float|null $april
     */
    public function setApril(?float $april): void
    {
        $this->april = $april;
    }

    /**
     * @return float|null
     */
    public function getMay(): ?float
    {
        return $this->may;
    }

    /**
     * @param float|null $may
     */
    public function setMay(?float $may): void
    {
        $this->may = $may;
    }

    /**
     * @return float|null
     */
    public function getJune(): ?float
    {
        return $this->june;
    }

    /**
     * @param float|null $june
     */
    public function setJune(?float $june): void
    {
        $this->june = $june;
    }

    /**
     * @return float|null
     */
    public function getJuly(): ?float
    {
        return $this->july;
    }

    /**
     * @param float|null $july
     */
    public function setJuly(?float $july): void
    {
        $this->july = $july;
    }

    /**
     * @return float|null
     */
    public function getAugust(): ?float
    {
        return $this->august;
    }

    /**
     * @param float|null $august
     */
    public function setAugust(?float $august): void
    {
        $this->august = $august;
    }

    /**
     * @return float|null
     */
    public function getSeptember(): ?float
    {
        return $this->september;
    }

    /**
     * @param float|null $september
     */
    public function setSeptember(?float $september): void
    {
        $this->september = $september;
    }

    /**
     * @return float|null
     */
    public function getOctober(): ?float
    {
        return $this->october;
    }

    /**
     * @param float|null $october
     */
    public function setOctober(?float $october): void
    {
        $this->october = $october;
    }

    /**
     * @return float|null
     */
    public function getNovember(): ?float
    {
        return $this->november;
    }

    /**
     * @param float|null $november
     */
    public function setNovember(?float $november): void
    {
        $this->november = $november;
    }

    /**
     * @return float|null
     */
    public function getDecember(): ?float
    {
        return $this->december;
    }

    /**
     * @param float|null $december
     */
    public function setDecember(?float $december): void
    {
        $this->december = $december;
    }

    /**
     * @return string
     */
    public function getBuilding(): string
    {
        return $this->building;
    }

    /**
     * @param string $building
     */
    public function setBuilding(string $building): void
    {
        $this->building = $building;
    }



}
