<?php
// 'user' object
class user{
 
    // database connection and table name
    private $conn;
    private $table_name = "users";
 
    // object properties
    public $name;
    public $email;
    public $username;
    public $password;
    public $type;


    // constructor
    public function __construct($db){
        $this->conn = $db;
    }
 
// create new user record
function create(){
 
    // insert query
    $query = "INSERT INTO " . $this->table_name . "
            SET
                name = :name,
                email = :email,
                username = :username,
                password = :password,
                type = :type";
 
    // prepare the query
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $this->name=htmlspecialchars(strip_tags($this->name));
    $this->email=htmlspecialchars(strip_tags($this->email));
    $this->username=htmlspecialchars(strip_tags($this->username));
    $this->password=htmlspecialchars(strip_tags($this->password));
    $this->type=htmlspecialchars(strip_tags($this->type));
 
    // bind the values
    $stmt->bindParam(':name', $this->name);
    $stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':username', $this->username);
    $stmt->bindParam(':type', $this->type);

 
    // hash the password before saving to database
    $password_hash = password_hash($this->password, PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password_hash);
 
    // execute the query, also check if query was successful
    if($stmt->execute()){
        return true;
    }
 
    return false;
}
// check if given email exist in the database
function emailExists(){
 
    // query to check if email exists
    $query = "SELECT  name, username, password, type
            FROM " . $this->table_name . "
            WHERE email = ?
            LIMIT 0,1";
 
    // prepare the query
    $stmt = $this->conn->prepare( $query );
 
    // sanitize
    $this->email=htmlspecialchars(strip_tags($this->email));
 
    // bind given email value
    $stmt->bindParam(1, $this->email);
 
    // execute the query
    $stmt->execute();
 
    // get number of rows
    $num = $stmt->rowCount();
 
    // if email exists, assign values to object properties for easy access and use for php sessions
    if($num>0){
 
        // get record details / values
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
        // assign values to object properties
        $this->name = $row['name'];
        $this->username = $row['username'];
        $this->password = $row['password'];
        $this->type = $row['type'];
 
        // return true because email exists in the database
        return true;
    }
 
    // return false if email does not exist in the database
    return false;
}
} 

 
