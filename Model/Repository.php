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

    /**
     * Get offers from database
     * 
     * @return void|array An array of all the offers in database
     */
    public function getOffers(){

        $query = "SELECT * FROM ".env('DB_OFFER_TABLE');
 
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
     * Create a new project
     * 
     * @param array $project An array that will be saved in database
     * @return void|int the newly created project id
     */
    public function createArray($array){

        $query = "INSERT INTO ".$this->project_table." (title, category, banner_image, images, links, article) VALUES (:title, :category, :banner_image, :images, :links, :article)";

        //Prepare the query
        if($this->conn == null){
            $this->connect();
        }
        $stmt = $this->conn->prepare($query);
        
        //Execute the query, also check if query was successful
        $stmt->execute([
        'title' => $array['title'],
        'category' => $array['category'],
        'banner_image' => $array['banner_image'],
        'images' => json_encode($array['images']),
        'links' => json_encode($array['links']),
        'article' => json_encode($array['article'])
        ]);

        if($stmt->rowCount() <= 0){
            http_response_code(400);
            include($_SERVER['DOCUMENT_ROOT'].'/errors/400.html'); 
            die();
        }

        //Return newly created array's id
        $query = "SELECT id FROM ".$this->table." ORDER BY id DESC LIMIT 1";

        if($this->conn == null){
            $this->connect();
        }
        $stmt = $this->conn->query($query);

        $id = $stmt->fetch();
        return $id;
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