<?php
    class connect
    {
        var $db = null;
        
        public function __construct()
        {
            $dsn = 'mysql:host=localhost;dbname=thuanshop';
            $user = 'root';
            $pass = '';
            try {
                $this->db = new PDO($dsn, $user, $pass,
                array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
                
            } catch (\Throwable $th) {
                //throw $th;
                echo "that bai";
            }
        }
        //	lấy đúng 1 ID nên lấy fetch vô luôn
	    public function getInstance($select)
	    {
	    	$results = $this->db->query($select)->fetch();
	    	return $results;
	    }
	
        //	Lấy nhiều rows
	    public function getList($select)
	    {
	    	$results=$this->db->query($select);
	    	// echo $results;
	    	return($results);
	    }
        //	https://viblo.asia/p/cai-dat-ung-dung-php-thuan-su-dung-mvc-va-oop-4P856aA3lY3
	    public function exec($query)
	    {
	    	$results=$this->db->exec($query);
	    	// echo $results;
	    	return($results);
	    }
    }
?>