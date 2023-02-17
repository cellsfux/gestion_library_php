<?php

namespace App\Models;


class LectureModel extends Model
{
    protected $id;
    protected $id_user;
    protected $id_book;
    protected $date_lecture;

    public function __construct()
    {
        $class = str_replace(__NAMESPACE__.'\\', '', __CLASS__);
        $this->table = strtolower(str_replace('Model', '', $class));
    }
    

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id_user
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     */
    public function setIdUser($id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of id_book
     */
    public function getIdBook()
    {
        return $this->id_book;
    }

    /**
     * Set the value of id_book
     */
    public function setIdBook($id_book): self
    {
        $this->id_book = $id_book;

        return $this;
    }

    /**
     * Get the value of date_lecture
     */
    public function getDateLecture()
    {
        return $this->date_lecture;
    }

    /**
     * Set the value of date_lecture
     */
    public function setDateLecture($date_lecture): self
    {
        $this->date_lecture = $date_lecture;

        return $this;
    }
}