<?php
require_once __DIR__ . '/../model/User.php';
require_once __DIR__ . '/../../config/database/database.php';

class UserService
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function getAllUsers()
    {
        $stmt = $this->db->query('SELECT * FROM users');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addUser(User $user)
    {
        $stmt = $this->db->prepare('INSERT INTO users (name, congrad, matricula) VALUES (:name, :congrad, :matricula)');
        $stmt->execute([
            ':name' => $user->name,
            ':congrad' => $user->congrad,
            ':matricula' => $user->matricula
        ]);
    }
}
