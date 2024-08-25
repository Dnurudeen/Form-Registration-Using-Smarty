<?php
class User {
    private $username;
    private $email;
    private $password;

    // Constructor to initialize user data
    public function __construct($username, $email, $password) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    // Validate the username: alphanumeric, 3-20 characters
    public function validateUsername() {
        return preg_match('/^[a-zA-Z0-9]{3,20}$/', $this->username);
    }

    // Validate the email using PHP's built-in filter
    public function validateEmail() {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }

    // Validate the password: min 8 characters, letters and numbers
    public function validatePassword() {
        return strlen($this->password) >= 8 &&
               preg_match('/[A-Za-z]/', $this->password) &&
               preg_match('/[0-9]/', $this->password);
    }

    // Getter for username
    public function getUsername() {
        return $this->username;
    }

    // Getter for email
    public function getEmail() {
        return $this->email;
    }

    // Simulate user creation (e.g., saving to a database)
    public function createUser() {
        // Normally, you would save the user to a database here.
        // For simplicity, we're just returning true.
        return true;
    }
}
?>
