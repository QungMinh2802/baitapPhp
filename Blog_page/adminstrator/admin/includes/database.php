<?php
class database
{

    private $dns = "mysql:host=bsqmesbs7p3ghpu22jjh-mysql.services.clever-cloud.com;dbname=bsqmesbs7p3ghpu22jjh";
    private $user = "u2ybjmdqswaweszh";
    private $pass = "TbqsCxA2WCjnt5wOmKPy";
    private $conn;

    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO($this->dns, $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {
            echo "Connect failed" . $e->getMessage();
        }
        return $this->conn;
    }
}


?>