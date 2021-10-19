<?php declare(strict_types=1);

namespace Biera\Filter\Binding\Doctrine\ORM\Test\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Biera\Filter\Binding\Doctrine\ORM\Test\MovieRepository")
 * @ORM\Table(name="movies")
 */
class Movie
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="string")
     */
    private string $id;

    /** @ORM\Column(type="string", length="128") */
    private string $title;

    /** @ORM\Column(type="integer") */
    private int $duration;

    /**
     * @ORM\ManyToMany(targetEntity="Genre")
     * @ORM\JoinTable(
     *  name="movies_genres",
     *  joinColumns={@ORM\JoinColumn(name="movie_id", referencedColumnName="id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="genre_id", referencedColumnName="id")}
     * )
     */
    private iterable $genre;

    /** @ORM\ManyToOne(targetEntity="Person") */
    private Person $director;

    /** @ORM\ManyToOne(targetEntity="Person") */
    private Person $screenwriter;

    /** @ORM\Column(type="date") */
    private \DateTimeInterface $releaseDate;

    /**
     * @ORM\ManyToMany(targetEntity="Person")
     * @ORM\JoinTable(
     *  name="movies_actors",
     *  joinColumns={@ORM\JoinColumn(name="movie_id", referencedColumnName="id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="actor_id", referencedColumnName="id")}
     * )
     */
    private iterable $actors;

    public function __construct(
        string $id,
        string $title,
        int $duration,
        iterable $genre,
        Person $director,
        Person $screenwriter,
        \DateTimeInterface $releaseDate,
        iterable $actors
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->duration = $duration;
        $this->genre = $genre;
        $this->director = $director;
        $this->screenwriter = $screenwriter;
        $this->releaseDate = $releaseDate;
        $this->actors = $actors;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    /** @return Genre[] */
    public function getGenre(): iterable
    {
        return $this->genre;
    }

    public function getDirector(): Person
    {
        return $this->director;
    }

    public function getScreenwriter(): Person
    {
        return $this->screenwriter;
    }

    public function getReleaseDate(): \DateTimeInterface
    {
        return $this->releaseDate;
    }

    public function getActors(): iterable
    {
        return $this->actors;
    }
}
