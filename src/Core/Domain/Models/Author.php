<?php

namespace App\Core\Domain\Models;

use Doctrine\ORM\Mapping as ORM;


/**
 * Author.
 *
 * @ORM\Table(name="author")
 * @ORM\Entity()
 *
 */
class Author
{
    /**
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="CUSTOM")
     */
    private $id;

    /**
     * The name of the author
     *
     * @var string $name
     * @ORM\Column(type="string", length=255, nullable=false)
     *
     */
    private $name;

    /**
     * The description of the author
     *
     * @var string $description
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * Website URL of the author
     *
     * @var string $url
     *
     * @ORM\Column(type="string", nullable=true, length=255)
     *
     */
    private $url;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return (int) $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Author
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Author
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set Url
     *
     * @param string $url
     *
     * @return Author
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
