<?php
require_once __DIR__ . '/../services/UserService.php';

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
        require __DIR__ . '/../views/user_list.php';
        require __DIR__ . '/../views/form.php';
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
