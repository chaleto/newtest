<?php
class sel{
    public function __construct($table,$id){
        $this->table = $table;
        $this->id = $id;
    $sql = "SELECT ${id} FROM ${table}";
    $selected = $conn->prepare($sql);
    $selected->bindParam('id',$id,PDO::PARAM_STR);
    $selected->bindParam('table',$table,PDO::PARAM_STR);
    $selected->execute();

    while($row = $selected->fetch(PDO::FETCH_ASSOC)){
        echo $row['$id'];
    }
    }
}
$nc = new sel('users','user_name');


?>
