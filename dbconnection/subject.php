function add(){
        $sql = "INSERT INTO tblsubjects (Subject_Code, Subject_Name) VALUES 
        ( :code, :name);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':subject_code', $this->code);
        $query->bindParam(':subject_name', $this->name);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

function edit(){
        $sql = "UPDATE tblsubjects SET Subject_Code=:code, Subject_Name=:name WHERE Subject_Id = :id;";

        $query=$this->db->connect()->prepare($sql);
        $$query->bindParam(':subject_code', $this->code);
        $query->bindParam(':subject_name', $this->name);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function fetch($record_id){
        $sql = "SELECT * FROM tblsubjects WHERE Subject_Id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function delete(){
        $sql = "DELETE from tblsubjects WHERE Subject_Id = :id;";

        $query=$this->db->connect()->prepare($sql);
        $$query->bindParam(':subject_code', $this->code);
        $query->bindParam(':subject_name', $this->name);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }