<?php
class UserService
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function getAllUsers()
    {
        $stmt = $this->db->query('SELECT * FROM users'); // Transformar em uma repository
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
