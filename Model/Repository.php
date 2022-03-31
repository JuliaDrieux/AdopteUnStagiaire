<?php
//Block access from file
if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
    include_once $_SERVER['DOCUMENT_ROOT'].'/errors/403.html';
    die();
}

/**
 * The class that is responsible for database connection and that stores and handle allowed queries
 * 
 */
class Repository{

    /**
     * @Reminder
     * 
     * prepare statement
     * $stmt = $this->conn->prepare($query);
     * 
     * bind param
     * $stmt->bindParam(':email', $this->email);
     * 
     * execute statement
     * $stmt->execute()
     * 
     * count the number of result
     * $num = $stmt->rowCount();
     * 
     * fetching rows
     * $row = $stmt->fetch(PDO::FETCH_ASSOC);
     */

    /**
     * The connection to the database
     * @var PDO|null 
     */
    private $conn = null;

    /**
     * Get the database connection
     */
    public function connect(){

        try{
            $this->conn = new PDO("mysql:host=" . env("DB_HOST") . ";port=" . env("DB_PORT") . ";dbname=" . env("DB_NAME"), env("DB_USERNAME"), env("DB_PASSWORD"));
        }catch(PDOException $exception){
            echo $exception->getMessage();
            http_response_code(500);
            include($_SERVER['DOCUMENT_ROOT'].'/errors/500.html');
            die();
        }
    }

    public function createUser($user){

        if($this->getUser($user["user_mail"])){
            return "Email taken";
        }

        $query = "INSERT INTO ".env('DB_USER_TABLE')." (name, surname, campus, email, password) VALUES (:name, :surname, :campus, :email, :password)";

        //Prepare the query
        if($this->conn == null){
            $this->connect();
        }
        $stmt = $this->conn->prepare($query);
        
        //Execute the query, also check if query was successful
        $stmt->execute([
        'name' => $user['user_name'],
        'surname' => $user['user_surname'],
        'campus' => $user['user_campus'],
        'email' => $user['user_mail'],
        'password' => password_hash($user['user_password'], PASSWORD_DEFAULT),
        ]);

        if($stmt->rowCount() <= 0){
            http_response_code(400);
            include($_SERVER['DOCUMENT_ROOT'].'/errors/400.html'); 
            die();
        }
    }

    public function getUser($email){
        $query = "SELECT * FROM ".env('DB_USER_TABLE')." WHERE email = :email";
        //Prepare the query
        if($this->conn == null){
            $this->connect();
        }
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['email' => $email]);

        if($stmt->rowCount() > 0){
            $user = $stmt->fetch();
            return $user;
        }else {
            return false;
        }

    }

    /**
     * Get companies from database
     * 
     * @return void|array An array of all the companies in database
     */
    public function getCompanies(){
        
        $query = "SELECT name, businessSector, traineesRecruited FROM ".env('DB_COMPANY_TABLE');

        //Prepare the query
        if($this->conn == null){
            $this->connect();
        }
        $stmt = $this->conn->prepare($query);
    
        //Execute the query, also check if query was successful
        if($stmt->execute()){
            //Get record
            $companies = $stmt->fetchAll();
            return $companies;
        }else{
            http_response_code(400);
            include($_SERVER['DOCUMENT_ROOT'].'/errors/400.html'); 
            die();
        }
    }

    public function addCompany($company){

        $query = "INSERT INTO ".env('DB_COMPANY_TABLE')." (name, businessSector, traineesRecruited) VALUES (:name, :businessSector, :traineesRecruited)";

        //Prepare the query
        if($this->conn == null){
            $this->connect();
        }
        $stmt = $this->conn->prepare($query);
        
        //Execute the query, also check if query was successful
        $stmt->execute([
        'name' => $company['company_name'],
        'businessSector' => $company['company_businessSector'],
        'traineesRecruited' => $company['company_traineesRecruited'],
        ]);

        if($stmt->rowCount() <= 0){
            http_response_code(400);
            include($_SERVER['DOCUMENT_ROOT'].'/errors/400.html'); 
            die();
        }

    }

    /**
     * Get offers from database
     * 
     * @return void|array An array of all the offers in database
     */
    public function getOffers(){
        
        $query = "SELECT publicationDate, name, salary, duration, category, availablePositions, email FROM ".env('DB_OFFER_TABLE')." JOIN company ON offer.id_Company = company.id";

        //Prepare the query
        if($this->conn == null){
            $this->connect();
        }
        $stmt = $this->conn->prepare($query);
    
        //Execute the query, also check if query was successful
        if($stmt->execute()){
            //Get record
            $offers = $stmt->fetchAll();
            return $offers;
        }else{
            http_response_code(400);
            include($_SERVER['DOCUMENT_ROOT'].'/errors/400.html'); 
            die();
        }
    }

    /**
     * Create a new offer
     * 
     * @param array $offer An array that will be saved in database
     * @return void|int the newly created offer id
     */
    public function addOffer($offer){

        $query = "INSERT INTO ".env('DB_OFFER_TABLE')." (publicationDate, id_Company, salary, duration, category, availablePositions, email) VALUES (:publicationDate, :id_Company, :salary, :duration, :category, :availablePositions, :email)";

        //Prepare the query
        if($this->conn == null){
            $this->connect();
        }
        $stmt = $this->conn->prepare($query);
        
        //Execute the query, also check if query was successful
        $stmt->execute([
        'id_Company' => 1,
        /*'id_Company' => $offer['id_Company'],*/
        'publicationDate' => date("Y-m-d"),
        'salary' => $offer['offer_salary'],
        'duration' => $offer['offer_duration'],
        'category' => $offer['offer_category'],
        'availablePositions' => $offer['offer_availablePositions'],
        'email' => $offer['offer_email'],
        ]);

        if($stmt->rowCount() <= 0){
            http_response_code(400);
            include($_SERVER['DOCUMENT_ROOT'].'/errors/400.html'); 
            die();
        }

    }

    /**
     * Update an existing array
     * 
     * @param array $array An array that will be saved in database
     */
    public function updateArray($array){
        $query = "UPDATE ".$this->table." SET title =:title, category =:category, banner_image =:banner_image, images =:images, links =:links, article =:article WHERE id= :id";
 
        //Prepare the query
        if($this->conn == null){
            $this->connect();
        }
        $stmt = $this->conn->prepare($query);
    
        //Execute the query, also check if query was successful
        $stmt->execute([
            'id' => $array['id'],
            'title' => $array['title'],
            'category' => $array['category'],
            'banner_image' => $array['banner_image'],
            'images' => json_encode($array['images']),
            'links' => json_encode($array['links']),
            'article' => json_encode($array['article'])
            ]);
    }

    /**
     * Delete a row in database
     * 
     * @param int $id the of the array that will be deleted
     */
    public function deleteArray($id){
        $query = "DELETE FROM ".$this->table." WHERE id = :id";

        //Prepare the query
        if($this->conn == null){
            $this->connect();
        }
        $stmt = $this->conn->prepare($query);

        $stmt->execute(['id' => $id]);

        if($stmt->rowCount() <= 0){
            http_response_code(400);
            include($_SERVER['DOCUMENT_ROOT'].'/errors/400.html'); 
            die();
        }
    }
}
?>