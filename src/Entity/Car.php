<?php 

namespace App\Entity;

use DateTime;
use App\Entity\Brand;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Table 'car"
 * 
 * @ORM\Entity
 */
class Car
{
    /**
     * Column 'id'
     * Primary Key
     * Auto-increment
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * 
     */
    private $id;

    /**
     * Column 'model'
     * 
     * @ORM\Column(type="string", length=255)
     * 
     * @Assert\NotBlank
     * @Assert\Length(max = 100)
     *
     * @var String
     */
    private $model;

    /**
     * Column 'year'
     * 
     * @ORM\Column(type="datetime")
     * 
     * @Assert\NotBlank
     *
     * @var DateTime
     */    
    private $year;

    /** 
     * Column 'price'
     * 
     * @ORM\Column(type="integer")
     * 
     * @Assert\NotBlank
     * @Assert\Positive
     * 
     * @var Int
     */
    private $price;

    /**
     * Column 'model'
     * 
     * @ORM\Column(type="string", length=255)
     * 
     * @Assert\NotBlank
     * @Assert\Length(max = 80)
     *
     * @var String
     */
    private $color;

    /**
     * Column 'created_at'
     *
     * @ORM\Column(type="datetime", options={"default" : "CURRENT_TIMESTAMP"})
     * 
     * @var DateTime
     */
    private $createdAt;

    /**
     * Column 'updated_at'
     *
     * @ORM\Column(type="datetime", nullable=true)
     * 
     * @var DateTime
     */
    private $updatedAt;

    /**
     * Column 'brand_id'
     * 
     * @ORM\ManyToOne(targetEntity=Brand::class, inversedBy="cars")
     *
     */
    private $brand;

    public function __toString()
    {
        return $this->name;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getBrand(): ?Brand
    {
        return $this->brand;
    }

    public function setBrand(?Brand $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get column 'id'
     */ 
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get the value of year
     */ 
    public function getYear(): ?DateTimeInterface
    {
        return $this->year;
    }

    /**
     * Set the value of year
     *
     * @return  self
     */ 
    public function setYear(?\DateTimeInterface $year)
    {
        $this->year = $year;

        return $this;
    }
}