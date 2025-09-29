<?php 

namespace App\Http\Repositories;

interface UserRepositoryInterface
{
    public function findByEmail(string $email);
}