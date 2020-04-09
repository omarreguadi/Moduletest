<?php


namespace App;


class User
{

    /** @var string $email */
    private $email;

    /** @var string $nom */
    private $nom;

    /** @var string $prenom */
    private $prenom;

    /** @var int $age */
    private $age;

    public function __construct(string $email, string $nom, string $prenom, int $age)
    {
        $this->setEmail($email);
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return User
     */
    public function setEmail(string $email): User
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return User
     */
    public function setNom(string $nom): User
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     * @return User
     */
    public function setPrenom(string $prenom): User
    {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     * @return User
     */
    public function setAge(int $age): User
    {
        $this->age = $age;
        return $this;
    }

    public function isValid(): bool
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        if (empty($this->prenom)) {
            return false;
        }

        if (empty($this->nom)) {
            return false;
        }

        if ($this->age < 13) {
            return false;
        }

        return true;
    }

}