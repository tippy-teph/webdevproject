<?php
    include_once("../dbConnection/.php");
    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $id = $_POST['code'];
        $id = $_POST['name'];

        if(empty($code) || empty($name)) {
            if(empty($code)) {
                echo "<font color='red'>Subject Code field is empty.</font><br/>";
            }
            if(empty($name)) {
                echo "<font color='red'>Subject Name field is empty.</font><br/>";
            }
        }
        else{
            mysql_query($dbc,"UPDATE tblsubjects SET Subject_Code='$code', Subject_Name='$name' WHERE Subject_ID='$id'");
            header("Location: ../index.php")
        }
    }

    function edit(){
        $sql = "UPDATE tblsubjects SET Subject_Code=:code, Subject_Name=:name WHERE Subject_ID = :id;";

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