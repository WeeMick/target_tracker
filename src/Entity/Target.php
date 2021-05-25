<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Target
 *
 * @ORM\Table(name="target")
 * @ORM\Entity
 */
class Target
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
     * @ORM\Column(name="objective_ref", type="string", length=10, nullable=false)
     */
    private $objectiveRef;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=10, nullable=false)
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="impact_area", type="string", length=25, nullable=true)
     */
    private $impactArea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objective", type="string", length=500, nullable=true)
     */
    private $objective;

    /**
     * @var string|null
     *
     * @ORM\Column(name="baseline", type="string", length=100, nullable=true)
     */
    private $baseline;

    /**
     * @var string
     *
     * @ORM\Column(name="owner", type="string", length=50, nullable=false)
     */
    private $owner;

    /**
     * @var string
     *
     * @ORM\Column(name="performance_indicator", type="string", length=500, nullable=false)
     */
    private $performance_indicator;

    /**
     * @var string
     *
     * @ORM\Column(name="target", type="string", length=500, nullable=false)
     */
    private $target;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $target_date;

    /**
     * @ORM\Column(name="target_2021", type="string", length=500, nullable=true)
     */
    private $target_2021;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $year_2017_2018;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $year_2018_2019;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $year_2019_2020;

    /**
     * @return string
     */
    public function getPerformanceIndicator(): string
    {
        return $this->performance_indicator;
    }

    /**
     * @param string $performance_indicator
     */
    public function setPerformanceIndicator(string $performance_indicator): void
    {
        $this->performance_indicator = $performance_indicator;
    }

    /**
     * @return string
     */
    public function getTarget(): string
    {
        return $this->target;
    }

    /**
     * @param string $target
     */
    public function setTarget(string $target): void
    {
        $this->target = $target;
    }

    /**
     * @return mixed
     */
    public function getTargetDate()
    {
        return $this->target_date;
    }

    /**
     * @param mixed $target_date
     */
    public function setTargetDate($target_date): void
    {
        $this->target_date = $target_date;
    }

    /**
     * @return mixed
     */
    public function getTarget2021()
    {
        return $this->target_2021;
    }

    /**
     * @param mixed $target_2021
     */
    public function setTarget2021($target_2021): void
    {
        $this->target_2021 = $target_2021;
    }




    /**
     * @return mixed
     */
    public function getYear20172018()
    {
        return $this->year_2017_2018;
    }

    /**
     * @param mixed $year_2017_2018
     */
    public function setYear20172018($year_2017_2018): void
    {
        $this->year_2017_2018 = $year_2017_2018;
    }

    /**
     * @return mixed
     */
    public function getYear20182019()
    {
        return $this->year_2018_2019;
    }

    /**
     * @param mixed $year_2018_2019
     */
    public function setYear20182019($year_2018_2019): void
    {
        $this->year_2018_2019 = $year_2018_2019;
    }

    /**
     * @return mixed
     */
    public function getYear20192020()
    {
        return $this->year_2019_2020;
    }

    /**
     * @param mixed $year_2019_2020
     */
    public function setYear20192020($year_2019_2020): void
    {
        $this->year_2019_2020 = $year_2019_2020;
    }

    /**
     * @return string
     */
    public function getProgressComments(): string
    {
        return $this->progress_comments;
    }

    /**
     * @param string $progress_comments
     */
    public function setProgressComments(string $progress_comments): void
    {
        $this->progress_comments = $progress_comments;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="progress_comments", type="string", length=500, nullable=true)
     */
    private $progress_comments;


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }



    /**
     * @return string
     */
    public function getObjectiveRef(): string
    {
        return $this->objectiveRef;
    }

    /**
     * @param string $objectiveRef
     */
    public function setObjectiveRef(string $objectiveRef): void
    {
        $this->objectiveRef = $objectiveRef;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string|null
     */
    public function getImpactArea(): ?string
    {
        return $this->impactArea;
    }

    /**
     * @param string|null $impactArea
     */
    public function setImpactArea(?string $impactArea): void
    {
        $this->impactArea = $impactArea;
    }

    /**
     * @return string|null
     */
    public function getObjective(): ?string
    {
        return $this->objective;
    }

    /**
     * @param string|null $objective
     */
    public function setObjective(?string $objective): void
    {
        $this->objective = $objective;
    }

    /**
     * @return string|null
     */
    public function getBaseline(): ?string
    {
        return $this->baseline;
    }

    /**
     * @param string|null $baseline
     */
    public function setBaseline(?string $baseline): void
    {
        $this->baseline = $baseline;
    }

    /**
     * @return string
     */
    public function getOwner(): string
    {
        return $this->owner;
    }

    /**
     * @param string $owner
     */
    public function setOwner(string $owner): void
    {
        $this->owner = $owner;
    }






}
