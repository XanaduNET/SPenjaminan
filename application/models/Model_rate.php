<?php

class Model_rate extends CI_Model
{
    public function tampilrate()
    {
        $query = "SELECT `tblijp`.*, `tblcvr`.*, `tbljwk`.*, `tblopk`.*
                   FROM `tblijp` 
                   JOIN `tblcvr`
                   ON `tblijp`.`CVRid` = `tblcvr`.`CVRid`
                   JOIN `tbljwk`
                   ON `tblijp`.`JWKid` = `tbljwk`.`JWKid`
                   JOIN `tblopk`
                   ON `tblijp`.`OPKid` = `tblopk`.`OPKid`
         ";
        return $this->db->query($query);
    }
}

?>