<?php
namespace App\Models;

class User extends Db {
    protected $username;
    protected $email;
    protected $password;

    // CRUD OPERATIONS
        public function createUser(array $data)
        {
            $this->username = $data['username'];
            $this->password = $data['password'];

/*            $pwd = $this->password;
            $pwd_salted = hash_hmac("sha256", $pwd, SALT_PWD);
            $pwd_hashed = password_hash($pwd_salted, PASSWORD_DEFAULT);*/

            $connection = $this->connect();

            if($connection && !empty($this->username) && !empty($this->password)) {
                $query = $connection->prepare("INSERT INTO users SET username = :username,password = :password");

                $result = $query->execute(array(
                    "username" => $this->username,
                    "password" => $this->password,
                ));

                return $result;
            }
        }

        public function readUser(array $data)
        {
            $this->username = $data['username'];
            $this->password = $data['password'];

            if (!empty($this->username) && !empty($this->password)) {

                //read from database
                $connection = $this->connect();

                $query = $connection->prepare("SELECT * FROM users WHERE username = :username");
                $query->execute(array('username' => $this->username));
                $query = $query->fetch();

                if ($query) {
                    // login.php
/*                    $pwd = $this->password;
                    $pwd_salted = hash_hmac("sha256", $pwd, SALT_PWD);
                    $pwd_hashed = password_hash($pwd_salted, PASSWORD_DEFAULT);*/

                    if ($this->password === $query["password"]) {
                        return true;
                    }
                    else {
                        return "Wrong password or username";
                    }
                }
            }
        }

        public function update(int $id, array $data)
        {

        }

        public function delete(int $id)
        {

        }

}