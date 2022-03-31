<?php 
class Authenticator{

    private $repo;
    /**
     * Authenticator object constructor
     * 
     * @param Repository$repo The server's database
     */
    function __construct(Repository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Validate the password against the app password
     * 
     * @param string $email the user email
     * @param string $password the password to be validated
     * @return bool 
     */
    public function signIn($email, $password){
        $user = $this->repo->getUser($email);
        if($user){
            return password_verify($password, $user['password']);
        }
    }

    /**
     * Create a new user or return an error if form infos are not valid
     * @param string $uid the user email
     * @param string $password the password to be validated
     * @param string $confirm_password the confirmation password
     * @return string the error message, empty if success
     */
    public function register($user){
        if($user['user_password'] != $user['user_confirm_password']){
            return "Passwords are not the same";
        }
        return $this->repo->createUser($user);
    }

    /**
     * Generate a JWT-like token to keep the user authenticated
     * 
     * @return string The generated token
     */
    public function generateToken($email){

        //set expiration time at t + 2hour and encode it to b64
        $header = json_encode(['typ' => 'JWT', 'alg' => 'HS256']);
        $b64header = base64_encode($header);
        $payload = $email;
        $b64payload = base64_encode($payload);

        //generate signature and encode it to b64
        $signature = hash_hmac('sha256', $b64header . '.' . $b64payload, env('APP_KEY'), true);
        $b64sign = base64_encode($signature);

        return $token = $b64header . "." . $b64payload . "." . $b64sign;
    }

    /**
     * Validate token authenticity and check for it's timeout
     * 
     * @param string $token the token to validate
     * @return string the user id if it's token is valid
     */
    public function validateToken($token){

        //cut the token
        $data = explode('.', $token);

        //if the token has 3 parts
        if(sizeof($data) === 3 ){

            //decode data
            $header = base64_decode($data[0]);
            $payload = base64_decode($data[1]);
            $sign = base64_decode($data[2]);

            //create hash from user stored data
            $hash = hash_hmac('sha256', $data[0] . '.' . $data[1], env('APP_KEY'), true);

            //using time attack safe comparison to check if token is valid
            if(hash_equals($hash, $sign)) return $this->repo->getUser($payload);
        }
        return false;
    }
}