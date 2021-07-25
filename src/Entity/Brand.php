<?php 

namespace App\Entity;

use DateTime;
use App\Entity\Car;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Table 'brand"
 * 
 * @ORM\Entity
 */
class Brand
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
    private $name;

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
    private $country;

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
     * @ORM\OneToMany(targetEntity=Car::class, mappedBy="brand")
     */
    private $cars;

    public function __toString()
    {
        return $this->name;
    }

    public function __construct()
    {
        $this->cars = new ArrayCollection();
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

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

    /**
     * @return Collection|Car[]
     */
    public function getCars(): Collection 
    {
        return $this->cars;
    }

    public function addCar(Car $car): self
    {
        if (!$this->cars->contains($car)) {
            $this->cars[] = $car;
            $car->setBrand($this);
        }

        return $this;
    }

    public function removeCar(Car $car): self
    {
        if ($this->cars->removeElement($car)) {
            // set the owning side to null (unless already changed)
            if ($car->getBrand() === $this) {
                $car->setBrand(null);
            }
        }

        return $this;
    }

    /**
     * Get column 'id'
     */ 
    public function getId()
    {
        return $this->id;
    }
}