<?php

class authModel
{
    private $conn;

    function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=spta", "root", "");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    // ==========================
    // REGISTER USER
    // ==========================
    function register($data)
    {
        $role = $data['role'];
        $username = trim($data['username']);
        $password = password_hash($data['password'], PASSWORD_DEFAULT);

        if ($role == "Teacher") {

            $sql = "INSERT INTO teacher 
                    (teach_fname, teach_mname, teach_lname, teach_extn, teach_email, teach_contact_no, username, password, role_T)
                    VALUES 
                    (:teach_fname, :teach_mname, :teach_lname, :teach_extn, :teach_email, :teach_contact_no, :username, :password, :role_T)";

            $stmt = $this->conn->prepare($sql);

            return $stmt->execute([
                'teach_fname' => $data['teach_fname'],
                'teach_mname' => $data['teach_mname'],
                'teach_lname' => $data['teach_lname'],
                'teach_extn' => $data['teach_extn'],
                'teach_email' => $data['teach_email'],
                'teach_contact_no' => $data['teach_contact_no'],
                'username' => $username,
                'password' => $password,
                'role_T' => $data['role_T']
            ]);
        }

        if ($role == "Parent") {

            $sql = "INSERT INTO parent
                    (parent_fname, parent_mname, parent_lname, parent_extn, parent_email, parent_address, parent_relationship, parent_contact_no, username, password, role_P)
                    VALUES
                    (:parent_fname, :parent_mname, :parent_lname, :parent_extn, :parent_email, :parent_address, :parent_relationship, :parent_contact_no, :username, :password, :role_P)";

            $stmt = $this->conn->prepare($sql);

            return $stmt->execute([
                'parent_fname' => $data['parent_fname'],
                'parent_mname' => $data['parent_mname'],
                'parent_lname' => $data['parent_lname'],
                'parent_extn' => $data['parent_extn'],
                'parent_email' => $data['parent_email'],
                'parent_address' => $data['parent_address'],
                'parent_relationship' => $data['parent_relationship'],
                'parent_contact_no' => $data['parent_contact_no'],
                'username' => $username,
                'password' => $password,
                'role_P' => $data['role_P']
            ]);
        }
    }

    // ==========================
    // LOGIN (CHECK BOTH TABLES)
    // ==========================
    function login($username)
    {
        // Check teacher table
        $sql1 = "SELECT * FROM teacher WHERE username = :username LIMIT 1";
        $stmt1 = $this->conn->prepare($sql1);
        $stmt1->execute(['username' => $username]);
        $teacher = $stmt1->fetch(PDO::FETCH_ASSOC);

        if ($teacher) return $teacher;

        // Check parent table
        $sql2 = "SELECT * FROM parent WHERE username = :username LIMIT 1";
        $stmt2 = $this->conn->prepare($sql2);
        $stmt2->execute(['username' => $username]);
        $parent = $stmt2->fetch(PDO::FETCH_ASSOC);

        return $parent;
    }
}
