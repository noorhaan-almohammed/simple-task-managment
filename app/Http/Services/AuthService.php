<?php
namespace App\Http\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthService
{
    /**
     * Register a new user with the given data.
     *
     * @param array $data The user data including 'name', 'email', and 'password'.
     * @return User The created user instance.
     * @return $token sting
     */
    public function register(array $data)
    {
        $path = $data['img_profile_url']->store('uploads/users', 'public');
        $data['img_profile_url'] = $path;

        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        $refreshToken = JWTAuth::claims(['type' => 'refresh'])->fromUser($user);

        $token = Auth::login($user);
        return [
            'user' => Auth::user(),
            'token' => $token,
            'refresh_token' => $refreshToken,
        ];
    }
    /**
     * Attempt to log in with the given credentials.
     *
     * @param array $credentials The login credentials including 'email' and 'password'.
     * @return array|false The authentication token if successful, false otherwise.
     */
    public function attemptLogin(array $credentials)
    {
        if (!$token = Auth::attempt($credentials)) {
            return false;
        }

        $user = Auth::user();

        $refreshToken = JWTAuth::claims(['type' => 'refresh'])->fromUser($user);

        return [
            'user' => $user,
            'token' => $token,
            'refresh_token' => $refreshToken,
        ];
    }


    /**
     * Log out the currently authenticated user.
     *
     * @return
     */
    public function logout($request)
    {
        $user = Auth::user()->name;
        $request->user()->tokens()->delete();
        Auth()->logout();
        return $user;

    }
}
