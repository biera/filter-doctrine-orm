<?php declare(strict_types=1);

namespace Biera\Filter\Binding\Doctrine\ORM\Test\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="roles")
 */
class Role
{
    const ACTOR = 'actor';
    const DIRECTOR = 'director';
    const SCREENWRITER = 'screenwriter';

    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    private string $id;

    /**
     * @ORM\Column(type="string")
     */
    private string $value;

    public function __construct(string $id, string $value)
    {
        $this->validate($value);
        $this->id = $id;
        $this->value = $value;
    }

    private function validate($value): void
    {
        $reflection = new \ReflectionClass($this);

        foreach ($reflection->getConstants() as $constantValue) {
            if ($constantValue === $value) {
                return;
            }
        }

        throw new \RuntimeException("Invalid value: {$value}");
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
