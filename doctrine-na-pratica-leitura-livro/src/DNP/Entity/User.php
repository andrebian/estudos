<?php

namespace DNP\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
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
     * @ORM\Column(type="string", length=20, unique=true)
     *
     * @var string
     */
    private $login;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     *
     * @var string
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @var string
     */
    private $avatar;

    /**
     * @ORM\OneToOne(targetEntity="Subscription", mappedBy="user")
     * */
    private $subscription;

    /**
     * @ORM\OneToMany(targetEntity="Enrollment", mappedBy="user", cascade={"all"}, orphanRemoval=true, fetch="LAZY")
     */
    private $enrollmentCollection;

    /**
     * @ORM\OneToMany(targetEntity="Course", mappedBy="teacher", cascade={"all"}, orphanRemoval=true, fetch="LAZY")
     * 
     * @var Doctrine\Common\Collections\Collection
     */
    protected $courseCollection;

    /**
     * @ORM\ManyToMany(targetEntity="Lesson", inversedBy="userLessons", cascade={"all"})
     * @ORM\JoinTable(name="lessons_users",
     *   joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *   inverseJoinColumns={@ORM\JoinColumn(name="lesson_id", referencedColumnName="id")}
     * )
     */
    private $lessonCollection;

    /**
     * @ORM\OneToMany(targetEntity="Profile", mappedBy="user", cascade={"all"}, orphanRemoval=true, fetch="LAZY")
     * 
     * @var Doctrine\Common\Collections\Collection
     */
    protected $profileCollection;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function getSubscription()
    {
        return $this->subscription;
    }

    public function getEnrollmentCollection()
    {
        return $this->enrollmentCollection;
    }

    public function getCourseCollection()
    {
        return $this->courseCollection;
    }

    public function getLessonCollection()
    {
        return $this->lessonCollection;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
        return $this;
    }

    public function setSubscription($subscription)
    {
        $this->subscription = $subscription;
        return $this;
    }

    public function setEnrollmentCollection($enrollmentCollection)
    {
        $this->enrollmentCollection = $enrollmentCollection;
        return $this;
    }

    public function setCourseCollection(Doctrine\Common\Collections\Collection $courseCollection)
    {
        $this->courseCollection = $courseCollection;
        return $this;
    }

    public function setLessonCollection($lessonCollection)
    {
        $this->lessonCollection = $lessonCollection;
        return $this;
    }

    public function getProfileCollection()
    {
        return $this->profileCollection;
    }

    public function setProfileCollection(Doctrine\Common\Collections\Collection $profileCollection)
    {
        $this->profileCollection = $profileCollection;
        return $this;
    }

    public function __construct()
    {
        $this->courseCollection = new ArrayCollection;
        $this->lessonCollection = new ArrayCollection;
        $this->profileCollection = new ArrayCollection;
        $this->enrollmentCollection = new ArrayCollection;
    }

}
