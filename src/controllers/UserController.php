<?php
class UserController
{
    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function index()
    {
        $users = $this->userService->getAllUsers();
        require __DIR__ . '/../views/UserList.php';
        require __DIR__ . '/../views/Form.php';
        // criar um render para isso aqui
    }

    public function store()
    {
        $name = $_POST['name'] ?? '';
        $congrad = $_POST['congrad'] ?? '';
        $matricula = $_POST['matricula'] ?? '';

        if ($name && $congrad && $matricula) {
            $user = new User($name, $congrad, $matricula);
            $this->userService->addUser($user);
        }

        header('Location: /');
    }
}
