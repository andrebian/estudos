<?php

namespace DNP\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="lessons")
 */
class Lesson
{

    /**
     * @ORM\Id @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var integer
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     *
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     *
     * @var string
     */
    private $description;

    /**
     * @ORM\Column(type="text", nullable=true)
     *
     * @var string
     */
    private $video;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @var string
     */
    private $permalink;

    /**
     * @ORM\ManyToOne(targetEntity="Course", inversedBy="lessonCollection", cascade={"persist", "merge", "refresh"})
     * 
     * @var Course
     */
    private $course;

    /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="lessonCollection")
     */
    private $userLessons;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getVideo()
    {
        return $this->video;
    }

    public function getPermalink()
    {
        return $this->permalink;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function getUserLessons()
    {
        return $this->userLessons;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function setVideo($video)
    {
        $this->video = $video;
        return $this;
    }

    public function setPermalink($permalink)
    {
        $this->permalink = $permalink;
        return $this;
    }

    public function setCourse(Course $course)
    {
        $this->course = $course;
        return $this;
    }

    public function setUserLessons($userLessons)
    {
        $this->userLessons = $userLessons;
        return $this;
    }

}
