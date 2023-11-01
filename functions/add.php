<!DOCTYPE html>
<html>
    <head>
        <title>Add Data</title>
</head>
    <body>
        <?php
            include_once("../dbConnection/mysqlconfig_connection.php");

            if(isset($_POST['Submit'])){
                $code = $_POST['code'];
                $name = $POST_['name'];

                if(empty($code) || empty($name)) {
                    if(empty($code)){
                        echo "<font color='red'>Subject Code field is empty.</font><br/>";
                    }
                    if(empty($name)){
                        echo "<font color='red'>Subject Name field is empty.</font><br/>";
                    }
                    echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
                }
                else {
                    $result = mysql_query($dbc, "INSERT INTO tblsubjects(Subject_Code, Subject_Name)VALUES('$code','$name')");
                    echo "<font color='green'>Data added successfully.";
                    echo "<br/><a herf='../index.php'>View Result</a>";
                }
            }

            function add(){
                $sql = "INSERT INTO tblsubjects (Subject_Code, Subject_Name) VALUES 
                ( :code, :name);";
        
                $query=$this->db->connect()->prepare($sql);
                $query->bindParam(':Subject_Code', $this->code);
                $query->bindParam(':Subject_Name', $this->name);
                
                if($query->execute()){
                    return true;
                }
                else{
                    return false;
                }	
            }
        
        ?>
    </body>
</html>