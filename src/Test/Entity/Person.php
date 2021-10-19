<?php declare(strict_types=1);

namespace Biera\Filter\Binding\Doctrine\ORM\Test\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="persons")
 */
class Person
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="string")
     */
    private string $id;

    /** @ORM\Column(type="string") */
    private string $fullName;

    /** @ORM\Column(type="date", nullable=true) */
    private ?\DateTimeInterface $birthday;

    /**
     * @ORM\ManyToMany(targetEntity="Role")
     * @ORM\JoinTable(
     *  name="persons_roles",
     *  joinColumns={@ORM\JoinColumn(name="person_id", referencedColumnName="id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="role_id", referencedColumnName="id")}
     * )
     */
    private iterable $roles;

    public function __construct(
        string $id,
        string $fullName,
        ?\DateTimeInterface $birthday,
        /** @var Role[] $roles */
        iterable $roles
    ) {
        $this->id = $id;
        $this->fullName = $fullName;
        $this->birthday = $birthday;
        $this->roles = $roles;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getFullName(): string
    {
        return $this->fullName;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->birthday;
    }

    public function getRoles(): iterable
    {
        return $this->roles;
    }
}
