<?php

class Database
{
    private $_db;

    
    public function __construct()
    {
        try {
            $this->_db = new PDO("mysql:host=dbserver;dbname=rjorel",
                                 "rjorel",
                                 "truc");
        }
        catch (PDOException $e) {
            echo "Connection failure : " . $e->getMessage();
        }
    }

    
    public function fetch($req)
    {
        if (!$req) return null;

        $data = $req->fetch(PDO::FETCH_OBJ);
        $req->closeCursor();
        return $data;
    }

    public function fetchAll($req)
    {
        if (!$req) return null;

        $data = $req->fetchAll(PDO::FETCH_OBJ);
        $req->closeCursor();
        return $data;
    }


    public function getJobs()
    {
        return $this->fetchAll($this->_db->query("SELECT * FROM Jobs"));
    }

    public function getJobByID($jobID)
    {
        $req = $this->_db->prepare("SELECT * FROM Jobs WHERE jobID = ?");
        return $this->fetch($req->execute(array($jobID)));
    }


    public function addJob($imageURL, $url, $latitude, $longitude, $description)
    {
        $req = $this->_db->prepare("INSERT INTO Jobs(jobImageUrl, jobUrl, jobLatitude, jobLongitude, jobDescription)
                                                VALUES(?, ?, ?, ?, ?)");
        $req->execute(array($imageURL, $url, $latitude, $longitude, $description));
        $req->closeCursor();
    }
    
    public function updateJob($jobID, $jobImageUrl, $jobUrl, $jobLatitude, $jobLongitude, $jobDescription)
    {
        $req = $this->_db->prepare("UPDATE Jobs SET jobImageUrl = ?, jobUrl = ?, jobLatitude = ?, jobLongitude = ?,
                                    jobDescription = ? WHERE jobID = ?");
        $req->execute(array($jobImageUrl, $jobUrl, $jobLatitude, $jobLongitude, $jobDescription, $jobID));
        $req->closeCursor();
    }

    public function deleteJob($jobID)
    {
        $req = $this->_db->prepare("DELETE FROM Jobs WHERE jobID = ?");
        $req->execute(array($jobID));
        $req->closeCursor();
    }
}
