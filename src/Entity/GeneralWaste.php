<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GeneralWaste
 *
 * @ORM\Table(name="general_waste")
 * @ORM\Entity
 */
class GeneralWaste
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
     * @var string|null
     *
     * @ORM\Column(name="january", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $january;

    /**
     * @var string|null
     *
     * @ORM\Column(name="february", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $february;

    /**
     * @var string|null
     *
     * @ORM\Column(name="march", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $march;

    /**
     * @var string|null
     *
     * @ORM\Column(name="april", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $april;

    /**
     * @var string|null
     *
     * @ORM\Column(name="may", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $may;

    /**
     * @var string|null
     *
     * @ORM\Column(name="june", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $june;

    /**
     * @var string|null
     *
     * @ORM\Column(name="july", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $july;

    /**
     * @var string|null
     *
     * @ORM\Column(name="august", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $august;

    /**
     * @var string|null
     *
     * @ORM\Column(name="september", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $september;

    /**
     * @var string|null
     *
     * @ORM\Column(name="october", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $october;

    /**
     * @var string|null
     *
     * @ORM\Column(name="november", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $november;

    /**
     * @var string|null
     *
     * @ORM\Column(name="december", type="decimal", precision=6, scale=3, nullable=true)
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
     * @return string|null
     */
    public function getJanuary(): ?string
    {
        return $this->january;
    }

    /**
     * @param string|null $january
     */
    public function setJanuary(?string $january): void
    {
        $this->january = $january;
    }

    /**
     * @return string|null
     */
    public function getFebruary(): ?string
    {
        return $this->february;
    }

    /**
     * @param string|null $february
     */
    public function setFebruary(?string $february): void
    {
        $this->february = $february;
    }

    /**
     * @return string|null
     */
    public function getMarch(): ?string
    {
        return $this->march;
    }

    /**
     * @param string|null $march
     */
    public function setMarch(?string $march): void
    {
        $this->march = $march;
    }

    /**
     * @return string|null
     */
    public function getApril(): ?string
    {
        return $this->april;
    }

    /**
     * @param string|null $april
     */
    public function setApril(?string $april): void
    {
        $this->april = $april;
    }

    /**
     * @return string|null
     */
    public function getMay(): ?string
    {
        return $this->may;
    }

    /**
     * @param string|null $may
     */
    public function setMay(?string $may): void
    {
        $this->may = $may;
    }

    /**
     * @return string|null
     */
    public function getJune(): ?string
    {
        return $this->june;
    }

    /**
     * @param string|null $june
     */
    public function setJune(?string $june): void
    {
        $this->june = $june;
    }

    /**
     * @return string|null
     */
    public function getJuly(): ?string
    {
        return $this->july;
    }

    /**
     * @param string|null $july
     */
    public function setJuly(?string $july): void
    {
        $this->july = $july;
    }

    /**
     * @return string|null
     */
    public function getAugust(): ?string
    {
        return $this->august;
    }

    /**
     * @param string|null $august
     */
    public function setAugust(?string $august): void
    {
        $this->august = $august;
    }

    /**
     * @return string|null
     */
    public function getSeptember(): ?string
    {
        return $this->september;
    }

    /**
     * @param string|null $september
     */
    public function setSeptember(?string $september): void
    {
        $this->september = $september;
    }

    /**
     * @return string|null
     */
    public function getOctober(): ?string
    {
        return $this->october;
    }

    /**
     * @param string|null $october
     */
    public function setOctober(?string $october): void
    {
        $this->october = $october;
    }

    /**
     * @return string|null
     */
    public function getNovember(): ?string
    {
        return $this->november;
    }

    /**
     * @param string|null $november
     */
    public function setNovember(?string $november): void
    {
        $this->november = $november;
    }

    /**
     * @return string|null
     */
    public function getDecember(): ?string
    {
        return $this->december;
    }

    /**
     * @param string|null $december
     */
    public function setDecember(?string $december): void
    {
        $this->december = $december;
    }




}
