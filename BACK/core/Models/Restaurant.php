<?php

namespace Models;



class Restaurant extends AbstractModel implements \JsonSerializable
{

    protected string $tableName = "restaurants";

    private $id;
    private $name;
    private $adress;
    private $city;


    /**
     * Ajouter un restaurant dans la BDD
     *
     * @param Restaurant $restaurant
     *
     * @return void
     *
     */
    public function save(Restaurant $restaurant):void{

        $sql = $this->pdo->prepare("INSERT INTO {$this->tableName} (name, adress, city) VALUES
        (:name, :adress, :city)");

        $sql->execute([
            "name" => $restaurant->name,
            "adress" => $restaurant->adress,
            "city" => $restaurant->city
        ]);




    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return[
           "id" => $this->id,
           "name" =>$this->name,
           "adress"=> $this->adress,
           "city" => $this->city
        ];
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * @param mixed $adress
     */
    public function setAdress($adress): void
    {
        $this->adress = $adress;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }
}