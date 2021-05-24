<?php

namespace App\Entity;

use App\Repository\PerformanceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PerformanceRepository::class)
 */
class Performance
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $department;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $objective;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $kpi;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $baseline_year;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $year_2017_2018;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $year_2018_2019;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $year_2019_2020;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $target;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $target_date;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $tracking;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDepartment(): ?string
    {
        return $this->department;
    }

    public function setDepartment(string $department): self
    {
        $this->department = $department;

        return $this;
    }

    public function getObjective(): ?string
    {
        return $this->objective;
    }

    public function setObjective(string $objective): self
    {
        $this->objective = $objective;

        return $this;
    }

    public function getKpi(): ?string
    {
        return $this->kpi;
    }

    public function setKpi(string $kpi): self
    {
        $this->kpi = $kpi;

        return $this;
    }

    public function getBaselineYear(): ?\DateTimeInterface
    {
        return $this->baseline_year;
    }

    public function setBaselineYear(?\DateTimeInterface $baseline_year): self
    {
        $this->baseline_year = $baseline_year;

        return $this;
    }

    public function getYear20172018(): ?\DateTimeInterface
    {
        return $this->year_2017_2018;
    }

    public function setYear20172018(?\DateTimeInterface $year_2017_2018): self
    {
        $this->year_2017_2018 = $year_2017_2018;

        return $this;
    }

    public function getYear20182019(): ?\DateTimeInterface
    {
        return $this->year_2018_2019;
    }

    public function setYear20182019(?\DateTimeInterface $year_2018_2019): self
    {
        $this->year_2018_2019 = $year_2018_2019;

        return $this;
    }

    public function getYear20192020(): ?\DateTimeInterface
    {
        return $this->year_2019_2020;
    }

    public function setYear20192020(?\DateTimeInterface $year_2019_2020): self
    {
        $this->year_2019_2020 = $year_2019_2020;

        return $this;
    }

    public function getTarget(): ?string
    {
        return $this->target;
    }

    public function setTarget(?string $target): self
    {
        $this->target = $target;

        return $this;
    }

    public function getTargetDate(): ?\DateTimeInterface
    {
        return $this->target_date;
    }

    public function setTargetDate(?\DateTimeInterface $target_date): self
    {
        $this->target_date = $target_date;

        return $this;
    }

    public function getTracking(): ?string
    {
        return $this->tracking;
    }

    public function setTracking(?string $tracking): self
    {
        $this->tracking = $tracking;

        return $this;
    }
}
