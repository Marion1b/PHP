<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class User
{
    private ? int $id = null;
    public function __construct(
        private string $username,
        private string $email,
        private string $password,
        private string $role,
        private string $created_at
    )
    {
        
    }

    public function getId():int{
        return $this->id;
    }

    public function setId(int $id):void{
        $this->id = $id;
    }

    /**
     * Get the value of username
     */
    public function getUsername(): string
    {
            return $this->username;
    }

    /**
     * Set the value of username
     */
    public function setUsername(string $username): void
    {
            $this->username = $username;
    }

    /**
     * Get the value of email
     */
    public function getEmail(): string
    {
            return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail(string $email): void
    {
            $this->email = $email;
    }

    /**
     * Get the value of password
     */
    public function getPassword(): string
    {
            return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword(string $password): void
    {
            $this->password = $password;
    }

    /**
     * Get the value of role
     */
    public function getRole(): string
    {
            return $this->role;
    }

    /**
     * Set the value of role
     */
    public function setRole(string $role): void
    {
            $this->role = $role;
    }

    /**
     * Get the value of created_at
     */
    public function getCreatedAt(): string
    {
            return $this->created_at;
    }

    /**
     * Set the value of created_at
     */
    public function setCreatedAt(string $created_at): void
    {
            $this->created_at = $created_at;
    }
}