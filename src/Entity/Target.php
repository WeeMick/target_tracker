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
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $objective_ref;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $impact_area;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $objective;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $baseline;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $owner;


    public function getObjectiveRef(): ?string
    {
        return $this->objective_ref;
    }

    public function setObjectiveRef(string $objective_ref): self
    {
        $this->objective_ref = $objective_ref;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getImpactArea(): ?string
    {
        return $this->impact_area;
    }

    public function setImpactArea(?string $impact_area): self
    {
        $this->impact_area = $impact_area;

        return $this;
    }

    public function getObjective(): ?string
    {
        return $this->objective;
    }

    public function setObjective(?string $objective): self
    {
        $this->objective = $objective;

        return $this;
    }

    public function getBaseline(): ?string
    {
        return $this->baseline;
    }

    public function setBaseline(?string $baseline): self
    {
        $this->baseline = $baseline;

        return $this;
    }


    public function getOwner()
    {
        return $this->owner;
    }


    public function setOwner(?string $owner): self
    {
        $this->owner = $owner;

        return $this;
    }



}
