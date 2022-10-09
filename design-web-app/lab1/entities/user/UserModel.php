<?php

namespace entities\user;

class UserModel
{
    protected EUserRole $userRole = EUserRole::User;
    protected string $firstName = '';
    protected string $lastName = '';
    protected string $phoneNumber = '';
    protected string $email = '';
    protected string $associatedAdminId = '';

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * @return EUserRole
     */
    public function getUserRole(): EUserRole
    {
        return $this->userRole;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @param string $phoneNumber
     */
    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @param EUserRole $userRole
     */
    public function setUserRole(EUserRole $userRole): void
    {
        $this->userRole = $userRole;
    }

    /**
     * @return string
     */
    public function getAssociatedAdminId(): string
    {
        return $this->associatedAdminId;
    }

    /**
     * @param string $associatedAdminId
     */
    public function setAssociatedAdminId(string $associatedAdminId): void
    {
        $this->associatedAdminId = $associatedAdminId;
    }
}