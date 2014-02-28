<?php

namespace DNP\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="courses")
 */
class Course
{

    /**
     * @ORM\Id @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var integer
     */
    protected $id;

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
     * @ORM\Column(type="decimal", precision=6, scale=2)
     *
     * @var float
     */
    private $value;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="courseCollection", cascade={"persist", "merge", "refresh"})
     * 
     * @var User
     */
    protected $teacher;

    /**
     * @ORM\OneToMany(targetEntity="Lesson", mappedBy="course", cascade={"all"}, orphanRemoval=true, fetch="LAZY")
     * 
     * @var Doctrine\Common\Collections\Collection
     */
    protected $lessonCollection;

    /**
     * @ORM\OneToMany(targetEntity="Enrollment", mappedBy="course", cascade={"all"}, orphanRemoval=true, fetch="LAZY")
     */
    private $enrollmentCollection;

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

    public function getValue()
    {
        return $this->value;
    }

    public function getTeacher()
    {
        return $this->teacher;
    }

    public function getLessonCollection()
    {
        return $this->lessonCollection;
    }

    public function getEnrollmentCollection()
    {
        return $this->enrollmentCollection;
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

    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    public function setTeacher(User $teacher)
    {
        $this->teacher = $teacher;
        return $this;
    }

    public function setLessonCollection(Doctrine\Common\Collections\Collection $lessonCollection)
    {
        $this->lessonCollection = $lessonCollection;
        return $this;
    }

    public function setEnrollmentCollection($enrollmentCollection)
    {
        $this->enrollmentCollection = $enrollmentCollection;
        return $this;
    }

    public function __construct()
    {
        $this->lessonCollection = new ArrayCollection;
        $this->enrollmentCollection = new ArrayCollection;
    }

}
