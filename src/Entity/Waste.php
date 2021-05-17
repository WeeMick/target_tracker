<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Waste
 *
 * @ORM\Table(name="waste")
 * @ORM\Entity
 */
class Waste
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
     * @ORM\Column(name="waste_type", type="string", length=30, nullable=false)
     */
    private $wasteType;


}
