<?php

namespace Entity;

/**
 * Description of Game
 *
 * @author Etudiant
 */
class Game
{

    /**
     * iD of game
     * @var integer
     */
    private $id;

    /**
     * title of game
     * @var integer
     */
    private $title;

    /**
     * image of game
     * @var string
     */
    private $image;

    /**
     * user
     * @var \Entity\User
     */
    private $user;

    /**
     * category
     * @var \Entity\Category
     */
    private $category;

    function getId()
    {
        return $this->id;
    }

    function getTitle()
    {
        return $this->title;
    }

    function getImage()
    {
        return $this->image;
    }

    function getUser()
    {
        return $this->user;
    }

    function getCategory()
    {
        return $this->category;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function setTitle($title)
    {
        $this->title = $title;
    }

    function setImage($image)
    {
        $this->image = $image;
    }

    function setUser($user)
    {
        $this->user = $user;
    }

    function setCategory($category)
    {
        $this->category = $category;
    }

}
