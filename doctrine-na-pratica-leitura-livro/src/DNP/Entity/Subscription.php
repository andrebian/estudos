<?php

namespace DNP\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="subscriptions")
 */
class Subscription
{

    /**
     * @ORM\Id @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var integer
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="User", inversedBy="subscription")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * */
    private $user;

    /**
     * @ORM\Column(type="integer", nullable=false)
     *
     * @var int
     */
    private $status;

    /**
     * @ORM\Column(type="datetime")
     * @var datetime
     */
    protected $started;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     * @var datetime
     */
    protected $finished;

    public function getId()
    {
        return $this->id;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getStarted()
    {
        return $this->started;
    }

    public function getFinished()
    {
        return $this->finished;
    }

    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    public function setStarted(datetime $started)
    {
        $this->started = $started;
        return $this;
    }

    public function setFinished(datetime $finished)
    {
        $this->finished = $finished;
        return $this;
    }

}
