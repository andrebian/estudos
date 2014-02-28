<?php

namespace DNP\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="progress")
 */
class Progress
{

    /**
     * @ORM\Id @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var integer
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $percent;

    /**
     * @ORM\ManyToOne(targetEntity="User", cascade={"persist", "merge", "refresh"})
     * 
     * @var User
     */
    protected $user;

    /**
     * @ORM\ManyToOne(targetEntity="Lesson", cascade={"persist", "merge", "refresh"})
     * 
     * @var Lesson
     */
    protected $lesson;

    /**
     * @ORM\Column(type="datetime")
     * 
     * @var Datetime
     */
    protected $created;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * 
     * @var Datetime
     */
    protected $updated;

    public function getId()
    {
        return $this->id;
    }

    public function getPercent()
    {
        return $this->percent;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getLesson()
    {
        return $this->lesson;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setPercent($percent)
    {
        $this->percent = $percent;
        return $this;
    }

    public function setUser(User $user)
    {
        $this->user = $user;
        return $this;
    }

    public function setLesson(Lesson $lesson)
    {
        $this->lesson = $lesson;
        return $this;
    }

    public function setCreated(Datetime $created)
    {
        $this->created = $created;
        return $this;
    }

    public function setUpdated(Datetime $updated)
    {
        $this->updated = $updated;
        return $this;
    }

}
