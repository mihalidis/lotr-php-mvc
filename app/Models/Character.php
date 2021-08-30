<?php
namespace App\Models;

class Character
{
    protected $id;
    protected $name;
    protected $race;
    protected $realm;

    // GET METHODS
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getRace()
    {
        return $this->race;
    }

    public function getRealm()
    {
        return $this->realm;
    }

    // SET METHODS
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setDescription(string $race)
    {
        $this->race = $race;
    }

    public function setPrice(string $realm)
    {
        $this->realm = $realm;
    }

    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function read(int $id)
    {
        $this->name = 'Test name';
        $this->race = 'Test race';
        $this->realm = 'Test realm';

        return $this;
    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
}