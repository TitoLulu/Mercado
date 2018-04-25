<?php
    /*
    *Database connection class
    */
 
    /*
    *include database credentials
    */
    require_once('dbdetails.php');
 
    class Dbconnect{
        /*
        *properties
        */
        public $connecttodb;
        public $dbresult;
        //constructor
        /*
        *methods
        */
 
        /*
        *connection method
        *@return return true or false
        */
        public function connect(){
 
            //store connection to connecttodb connection property
            $this ->connecttodb=mysqli_connect(SERVER, USERNAME,
                PASWD,DBNAME);
            if (mysqli_connect_errno()){
                return false;
            }
            else {
                return $this ->connecttodb;
            }
 
        }
 
        /*
        *query method
        *@param sql to be executed
        *@return return true or false
        */
        public function query($sql){
            //check if the connection works
            if(!$this ->connect()){
                echo "connecton failure";
                return false;
 
            }
            //run query
            $this ->dbresult=mysqli_query($this ->connecttodb, $sql);
 
            //check if any record was returned
            if ($this->dbresult ==false)
            {
 
                echo "connecton failure11111";
                return false;
 
            }
            else {
                return true;
            }
        }
 
        /*
        *fetch method
        *@return return true or false
        */
        public function fetch(){
            //check if results has content
            if($this -> dbresult ==false){
 
                return false;
 
            }
            //return results
            return mysqli_fetch_all($this -> dbresult, MYSQLI_ASSOC);
 
        }


        public function insert($n,$p){
        if(!$this->connect()){
            return false;

        }
          $ins ="insert into products (title,category,brand,price, des,pimage,kwd) values('$pTitle','$pCat','$pBrand','$pPrice', '$pDes', '$pImg', 'pKwd')";
          $rs= mysql_query($ins);
                     //check if any record was returned
            if ($this -> dbresult ==false){
 
                return false;
 
            }
            else {
                return true;
            }
         }

		public function preventsqlInjection($name, $pwd,$fn,$ln,$email,$gen,$major){
			$connecttodb = $this->connect();
			 $sql = sprintf("INSERT INTO users (username,pwd,fname,lname,email,gender,major_id,userstatus, per_id) VALUES ('%s', '%s', 
			 '%s','%s','%s','%s','%s')",
			mysqli_real_escape_string($connecttodb, $name),
            mysqli_real_escape_string($connecttodb, $pwd),
            mysqli_real_escape_string($connecttodb, $fn),
			mysqli_real_escape_string($connecttodb, $ln),
			mysqli_real_escape_string($connecttodb, $email),
			mysqli_real_escape_string($connecttodb, $gen),
			mysqli_real_escape_string($connecttodb, $major));

			mysqli_query($connecttodb, $sql);

			mysqli_close($connecttodb);
			return true;
		}
		
		public function prepareStatement($name, $pwd,$fn,$ln,$email,$gen,$major){
			$conn=$this->connect();
			$stmt = $conn->prepare("INSERT INTO MyGuests (username,pwd,fname,lname,email,gender,major_id,userstatus, per_i)
			VALUES (?, ?, ?,?,?,?,?)");
			$stmt->bind_param("sss", $name, $pwd,$fn,$ln,$email,$gen,$major);
			return true;
			
		}
    }
 
    /*
    *test connection
    */
 
    //$mytestdb = new dbconnect();
    //var_dump($mytestdb->query("SELECT *FROM allmajor"));
 
?>