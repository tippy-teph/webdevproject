<?php
    include_once("../dbConnection/mysqlconfig_connection.php");
    $id = $_GET['id'];
    mysqli_query($dbc, "DELETE FROM tblsubjects WHERE Subject_ID='$id'");
    header("Location:../index.php");

    function delete(){
        $sql = "DELETE from tblsubjects WHERE Subject_ID = :id;";

        $query=$this->db->connect()->prepare($sql);
        $$query->bindParam(':Subject_Code', $this->code);
        $query->bindParam(':Subject_Name', $this->name);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }
?>