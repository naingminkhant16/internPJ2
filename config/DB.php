<?php

namespace config;

use PDO;
use PDOException;

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class DB
{
    private const dbhost = "localhost:8080";
    private const dbname = "internpj2";
    private const username = "root";
    private const password = '';
    protected $pdo;
    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:dbhost=" . self::dbhost . ";dbname=" . self::dbname, self::username, self::password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function register($data)
    {
        try {
            $query = "INSERT INTO users(name, email,password, phone)
                    VALUES (:name, :email, :password,:phone, NOW())";
            $statement = $this->pdo->prepare($query);
            $statement->execute($data);

            return $this->pdo->lastInsertId();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function get($id)
    {
        try {
            $statement = $this->pdo->prepare("SELECT * FROM users WHERE id=:id");
            $statement->execute([
                ":id" => $id
            ]);
            return $statement->fetch();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function login($email, $password)
    {
        $statement = $this->pdo->prepare(
            "SELECT * FROM users WHERE email = :email"
        );
        $statement->execute([
            ':email' => $email
        ]);
        $user = $statement->fetch();
        if (!empty($user)) {
            if (password_verify($password, $user->password)) {
                $_SESSION['user']['user_id'] = $user->id;
                $_SESSION['user']['user_name'] = $user->name;
                header("location: ../index.php");
            } else {
                header("location: ../login.php?errPsw");
            }
        } else {
            header("location: ../login.php?errEmail");
        }
    }
    public function update($data)
    {
        try {
            $statement = $this->pdo->prepare("UPDATE users SET name=:name,email=:email,password=:password,phone=:phone WHERE id=:id");
            return $statement->execute($data);

            // print_r($this->pdo->lastInsertId());
            // die();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
