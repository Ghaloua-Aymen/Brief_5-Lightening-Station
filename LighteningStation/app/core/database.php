<?php

Class Database
{
    public function db_connect()
    {
        try
        {
            $string = DB_TYPE .":host=".DB_HOST.";dbname=".DB_NAME.";";
            return $db = new PDO($string, 'root', '');
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }
    
    public function read($query, $data = [])
    {
        $db = $this->db_connect();
        $statement = $db->prepare($query);

        $check = $statement->execute($data);
        if(count($data) == 0)
        {
            $statement = $db->query($query);
            $check = 0;
            if($statement)
            {
                $check = 1;
            }
        }
        else
        {
            $check = $statement->execute($data);
        }

        
        if($check)
        {
            return $statement->fetchAll(PDO::FETCH_OBJ); 
        }
        else
        {
            return false;
        }
    }
    
    public function write($query, $data = [])
    {
        $db = $this->db_connect();
        $statement = $db->prepare($query);

        $check = $statement->execute($data);
        if(count($data) == 0)
        {
            $statement = $db->query($query);
            $check = 0;
            if($statement)
            {
                $check = 1;
            }
        }
        else
        {
            $check = $statement->execute($data);
        }

        
        if($check)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
}