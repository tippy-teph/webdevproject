<?php
    $query = "SELECT * FROM tblsubjects";
    $result = mysql_query($dbc, $query);

    function fetch($record_id){
        $sql = "SELECT * FROM tblsubjects WHERE Subject_ID = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }
?>