<?php

namespace App\Entity;

use App\Repository\TargetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TargetRepository::class)
 */
class Target
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $Objective_Ref;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $Status;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $Impact_Area;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $Objective;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $Baseline;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Owner;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Owner_Role;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObjectiveRef(): ?string
    {
        return $this->Objective_Ref;
    }

    public function setObjectiveRef(string $Objective_Ref): self
    {
        $this->Objective_Ref = $Objective_Ref;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->Status;
    }

    public function setStatus(string $Status): self
    {
        $this->Status = $Status;

        return $this;
    }

    public function getImpactArea(): ?string
    {
        return $this->Impact_Area;
    }

    public function setImpactArea(?string $Impact_Area): self
    {
        $this->Impact_Area = $Impact_Area;

        return $this;
    }

    public function getObjective(): ?string
    {
        return $this->Objective;
    }

    public function setObjective(?string $Objective): self
    {
        $this->Objective = $Objective;

        return $this;
    }

    public function getBaseline(): ?string
    {
        return $this->Baseline;
    }

    public function setBaseline(?string $Baseline): self
    {
        $this->Baseline = $Baseline;

        return $this;
    }

    public function getOwner(): ?string
    {
        return $this->Owner;
    }

    public function setOwner(string $Owner): self
    {
        $this->Owner = $Owner;

        return $this;
    }

    public function getOwnerRole(): ?string
    {
        return $this->Owner_Role;
    }

    public function setOwnerRole(string $Owner_Role): self
    {
        $this->Owner_Role = $Owner_Role;

        return $this;
    }
}
