<?php 

namespace App\Http\Services;

use App\Http\Repositories\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    protected $userRepo;

    public function __construct(UserRepositoryInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function login(array $crendentials): bool
    {
        $user = $this->userRepo->findByEmail($crendentials['email']); 

        if ($user && Hash::check($crendentials['password'], $user->password)){
            Auth::login($user); // save info user to session , flag
            return true;
        }

        return false;
    }

    public function logout(): void
    {
        Auth::logout();
    }

}
