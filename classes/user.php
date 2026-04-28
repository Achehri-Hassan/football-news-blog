

<?php

require_once "config/connection.php";

class User
{
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    // Register new user
    public function create($name, $email, $password, $role = "user")
    {
        $sql = "INSERT INTO users 
                (name_user, email_user, password_user, role) 
                VALUES 
                (:name, :email, :password, :role)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            "name" => $name,
            "email" => $email,
            "password" => $password,
            "role" => $role
        ]);
    }


    // Get all users (optional for admin)
    public function all()
    {
        $sql = "SELECT * FROM users ORDER BY id_user DESC";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>