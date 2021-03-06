<?php
// model/session.php
/**
 * @Entity @Table(name="sessions", indexes = { @Index(name = "date_idx", columns = { "lastAction" }) })
 **/
class Session
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
  
    /** @Column(type="string") **/
    protected $name;
  
    /** @Column(type="boolean") **/
    protected $isPrivate;
  
    /** @Column(type="string", nullable=true) **/
    protected $password;

    /** @Column(type="integer") **/ 
    protected $cardSet;
  
    /** @Column(type="datetime") **/ 
    protected $lastAction;
    
    /** @OneToMany(targetEntity="Member", mappedBy="session", fetch="EAGER", orphanRemoval=true) **/
    protected $members;
  
    /** @OneToMany(targetEntity="Poll", mappedBy="session", orphanRemoval=true) **/
    protected $polls;
  
    /** @ManyToOne(targetEntity="Poll", fetch="EAGER", cascade={"remove"}) **/
    protected $currentPoll;
  
    public function getId()
    {
    	  return $this->id;
    }
  
    // Getter and setter for name field
    public function getName()
    {
    	  return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
  
    // Getter and setter for isPrivate field
    public function getIsPrivate()
    {
    	  return $this->isPrivate;
    }
    public function setIsPrivate($isPrivate)
    {
        $this->isPrivate = $isPrivate;
    }
  
    // Getter and setter for password field
    public function getPassword()
    {
    	  return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    // Getter and setter for cardSet field
    public function getCardSet()
    {
    	  return $this->cardSet;
    }
    public function setCardSet($cardSet)
    {
        $this->cardSet = $cardSet;
    }

    // Getter and setter for lastAction field
    public function getLastAction()
    {
    	  return $this->lastAction;
    }
    public function setLastAction($lastAction)
    {
        $this->lastAction = $lastAction;
    }
  
    // Getter and setter for members association
    public function getMembers()
    {
    	  return $this->members;
    }
    
    // Getter and setter for members association
    public function getPolls()
    {
    	  return $this->polls;
    }
  
    // Getter and setter for currentPoll field
    public function getCurrentPoll()
    {
    	  return $this->currentPoll;
    }
    public function setCurrentPoll($currentPoll)
    {
        $this->currentPoll = $currentPoll;
    }
}