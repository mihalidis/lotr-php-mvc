<?php
namespace App\Models;

class Character
{
    const CHARACTER_RACE = [
        'Human','Elf','Hobbit','Dwarf','Maiar','Ent','Orcs','Dragon','Great Spiders','Black Uruk','Ainur','God','Men','Half-elven','Goblin','Orc','Balrogs'
    ];


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

    public function setRace(string $race)
    {
        if(in_array(explode(",",$race)[0], self::CHARACTER_RACE)) {
            $this->race = $race;
        }
    }

    public function setRealm(string $realm)
    {
        if($realm == '' || $realm == NULL || $realm == 'NaN') {
            $this->realm = "Unknown Realmapp";
        } else {
            $this->realm = $realm;
        }

    }

    // CRUD OPERATIONS
/*    public function create(array $data)
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

    }*/
}