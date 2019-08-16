<?php

class Db
{
 private $mysqli;
 private $table;
//root','', 'test');

    public function start($setTable)
    {
        include 'config.php';
        $this->mysqli = new mysqli($login['server'],
                                    $login['user'],
                                    $login['pass'],
                                    $login['base']);
        $this->table = $setTable;
    }
    public function query($sql)
    {
        $result = $this->mysqli->query($sql);
        if($result){return $result;}
        else{return 0;}
    }
    public function clear($str,$type=0) {
        if($type==0) $str = trim($str);
        $str = strip_tags($str);
        if(get_magic_quotes_gpc()) $str = stripslashes($str);
//        $str = mysql_escape_string($str);
        return $str;
    }
    public function select($cols, $param='', $value='')
    {
        $cols = $this->clear($cols);
        $param = $this->clear($param);
        $value = $this->clear($value);
        if (trim($param)!=NULL and trim($value)!=NULL){
            $res = $this->query("SELECT $cols FROM ".$this->table."WHERE $param='$value'");
            $res = $res->fetch_assoc();
            return $res;
        }else{
            $result = $this->query("SELECT $cols FROM ".$this->table."");
            $res = "";
            do{
                $res = $cols;
            }while($cols = $result->fetch_assoc());
            return $res;
        }

    }
}

?>
