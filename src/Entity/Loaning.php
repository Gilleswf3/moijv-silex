<?php

namespace Entity;

/**
 * Description of Loaning
 *
 * @author Etudiant
 */
class Loaning
{

    /**
     * iD of loaning
     * @var integer
     */
    private $id;

    /**
     * date_start
     * @var \Datetime
     */
    private $dateStart;

    /**
     * date_end
     * @var \Datetime
     */
    private $dateEnd;

    /**
     * game
     * @var integer
     */
    private $game;

    /**
     * user
     * @var integer
     */
    private $user;

    function getId()
    {
        return $this->id;
    }

    function getDateStart()
    {
        return $this->dateStart;
    }

    function getDateEnd()
    {
        return $this->dateEnd;
    }

    function getGame()
    {
        return $this->game;
    }

    function getUser()
    {
        return $this->user;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function setDateStart($dateStart)
    {
        if ($dateStart instanceof string) {
            $dateStart = \DateTime::createFromFormat("Y/m/d", $dateStart);
        }
        $this->dateStart = $dateStart;
    }

    function setDateEnd($dateEnd)
    {
        if ($dateEnd instanceof string) {
            $dateEnd = \DateTime::createFromFormat("Y/m/d", $dateEnd);
        }
        $this->dateEnd = $dateEnd;
    }

    function setGame($game)
    {
        $this->game = $game;
    }

    function setUser($user)
    {
        $this->user = $user;
    }

}
