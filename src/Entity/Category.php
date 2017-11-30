<?php

namespace Entity;

/**
 * Description of Category
 *
 * @author Etudiant
 */
class Category {
    /**
     * iD of Category
     * @var integer
     */
    private $id;

    /**
     * name of Category
     * @var integer
     */
    private $name;

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }
}