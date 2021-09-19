<?php
namespace App\Models;

class User extends Db {
    protected $username;
    protected $email;
    protected $password;

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    // CRUD OPERATIONS
        public function create(array $data)
        {
            $this->username = $data['username'];
            $this->email = $data['email'];
            $this->password = $data['password'];

            $salt = SALT_PWD;
            $pwd = $this->password;
            $pwd_salted = hash_hmac("sha256", $pwd, $salt);
            $pwd_hashed = password_hash($pwd_salted, PASSWORD_ARGON2ID);

            $connection = $this->connect();

            if($connection && !empty($this->username) && !empty($this->password)) {
                $query = $connection->prepare("INSERT INTO users SET username = :username,password = :password,email = :email");
                $result = $query->execute(array(
                    "username" => $this->username,
                    "password" => $pwd_hashed,
                    "email" => $this->email
                ));

                return $result;
            }
        }

        public function read(int $id)
        {
            return $this;
        }

        public function update(int $id, array $data)
        {

        }

        public function delete(int $id)
        {

        }

}