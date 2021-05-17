<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Month
 *
 * @ORM\Table(name="month")
 * @ORM\Entity
 */
class Month
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
     * @ORM\Column(name="month", type="string", length=10, nullable=false)
     */
    private $month;

    /**
     * @return string
     */
    public function getMonth(): string
    {
        return $this->month;
    }

    /**
     * @param string $month
     */
    public function setMonth(string $month): void
    {
        $this->month = $month;
    }


}
