<?php declare(strict_types=1);

namespace Biera\Filter\Binding\Doctrine\ORM\Test\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="genres")
 */
class Genre
{
    const ACTION = 'action';
    const COMEDY = 'comedy';
    const DOCUMENT = 'document';
    const ADVENTURE = 'adventure';
    const DRAMA = 'drama';
    const BIOGRAPHY = 'biography';
    const CRIME = 'crime';
    const MUSICAL = 'musical';
    const THRILLER = 'thriller';
    const HORROR = 'horror';
    const ROMANCE = 'romance';
    const FANTASY = 'fantasy';

    /**
     * @ORM\Id()
     * @ORM\Column(type="string")
     */
    private string $id;

    /** @ORM\Column(type="string") */
    private string $name;

    public function __construct(string $id, string $name)
    {
        $this->validate($name);
        $this->id = $id;
        $this->name = $name;
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

    public function getName(): string
    {
        return $this->name;
    }
}
