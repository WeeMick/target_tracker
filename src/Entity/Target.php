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
