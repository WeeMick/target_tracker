<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recycling
 *
 * @ORM\Table(name="recycling")
 * @ORM\Entity
 */
class Recycling
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
     * @var int|null
     *
     * @ORM\Column(name="january", type="integer", nullable=true)
     */
    private $january;

    /**
     * @var int|null
     *
     * @ORM\Column(name="february", type="integer", nullable=true)
     */
    private $february;

    /**
     * @var int|null
     *
     * @ORM\Column(name="march", type="integer", nullable=true)
     */
    private $march;

    /**
     * @var int|null
     *
     * @ORM\Column(name="april", type="integer", nullable=true)
     */
    private $april;

    /**
     * @var int|null
     *
     * @ORM\Column(name="may", type="integer", nullable=true)
     */
    private $may;

    /**
     * @var int|null
     *
     * @ORM\Column(name="june", type="integer", nullable=true)
     */
    private $june;

    /**
     * @var int|null
     *
     * @ORM\Column(name="july", type="integer", nullable=true)
     */
    private $july;

    /**
     * @var int|null
     *
     * @ORM\Column(name="august", type="integer", nullable=true)
     */
    private $august;

    /**
     * @var int|null
     *
     * @ORM\Column(name="september", type="integer", nullable=true)
     */
    private $september;

    /**
     * @var int|null
     *
     * @ORM\Column(name="october", type="integer", nullable=true)
     */
    private $october;

    /**
     * @var int|null
     *
     * @ORM\Column(name="november", type="integer", nullable=true)
     */
    private $november;

    /**
     * @var int|null
     *
     * @ORM\Column(name="december", type="integer", nullable=true)
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

    /**
     * @return int|null
     */
    public function getJanuary(): ?int
    {
        return $this->january;
    }

    /**
     * @param int|null $january
     */
    public function setJanuary(?int $january): void
    {
        $this->january = $january;
    }

    /**
     * @return int|null
     */
    public function getFebruary(): ?int
    {
        return $this->february;
    }

    /**
     * @param int|null $february
     */
    public function setFebruary(?int $february): void
    {
        $this->february = $february;
    }

    /**
     * @return int|null
     */
    public function getMarch(): ?int
    {
        return $this->march;
    }

    /**
     * @param int|null $march
     */
    public function setMarch(?int $march): void
    {
        $this->march = $march;
    }

    /**
     * @return int|null
     */
    public function getApril(): ?int
    {
        return $this->april;
    }

    /**
     * @param int|null $april
     */
    public function setApril(?int $april): void
    {
        $this->april = $april;
    }

    /**
     * @return int|null
     */
    public function getMay(): ?int
    {
        return $this->may;
    }

    /**
     * @param int|null $may
     */
    public function setMay(?int $may): void
    {
        $this->may = $may;
    }

    /**
     * @return int|null
     */
    public function getJune(): ?int
    {
        return $this->june;
    }

    /**
     * @param int|null $june
     */
    public function setJune(?int $june): void
    {
        $this->june = $june;
    }

    /**
     * @return int|null
     */
    public function getJuly(): ?int
    {
        return $this->july;
    }

    /**
     * @param int|null $july
     */
    public function setJuly(?int $july): void
    {
        $this->july = $july;
    }

    /**
     * @return int|null
     */
    public function getAugust(): ?int
    {
        return $this->august;
    }

    /**
     * @param int|null $august
     */
    public function setAugust(?int $august): void
    {
        $this->august = $august;
    }

    /**
     * @return int|null
     */
    public function getSeptember(): ?int
    {
        return $this->september;
    }

    /**
     * @param int|null $september
     */
    public function setSeptember(?int $september): void
    {
        $this->september = $september;
    }

    /**
     * @return int|null
     */
    public function getOctober(): ?int
    {
        return $this->october;
    }

    /**
     * @param int|null $october
     */
    public function setOctober(?int $october): void
    {
        $this->october = $october;
    }

    /**
     * @return int|null
     */
    public function getNovember(): ?int
    {
        return $this->november;
    }

    /**
     * @param int|null $november
     */
    public function setNovember(?int $november): void
    {
        $this->november = $november;
    }

    /**
     * @return int|null
     */
    public function getDecember(): ?int
    {
        return $this->december;
    }

    /**
     * @param int|null $december
     */
    public function setDecember(?int $december): void
    {
        $this->december = $december;
    }




}
