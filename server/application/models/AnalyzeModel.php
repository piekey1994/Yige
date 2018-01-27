<?php

class AnalyzeModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function getTypeData($openid)
    {
        $query=$this->db->query("select 
        (select count(*) from clothespress,clothe WHERE clothespress.openid='".$openid."' AND clothe.clotheid=clothespress.clotheid AND clothe.location=0 AND clothe.clothetype=0 ) as shangyi,
        (select count(*) from clothespress,clothe WHERE clothespress.openid='".$openid."' AND clothe.clotheid=clothespress.clotheid AND clothe.location=0 AND clothe.clothetype=1 ) as kuzi,
        (select count(*) from clothespress,clothe WHERE clothespress.openid='".$openid."' AND clothe.clotheid=clothespress.clotheid AND clothe.location=0 AND clothe.clothetype=2 ) as waitao,
        (select count(*) from clothespress,clothe WHERE clothespress.openid='".$openid."' AND clothe.clotheid=clothespress.clotheid AND clothe.location=0 AND clothe.clothetype=3 ) as xiezi,
        (select count(*) from clothespress,clothe WHERE clothespress.openid='".$openid."' AND clothe.clotheid=clothespress.clotheid AND clothe.location=0 AND clothe.clothetype=4 ) as qita");
        return $query->result_array();
    }
    public function getSeasonData($openid){
        $query=$this->db->query("select 
        (select count(*) from clothespress,clothe WHERE clothespress.openid='".$openid."' AND clothe.clotheid=clothespress.clotheid AND clothe.location=0 AND clothe.clotheseason=0 ) as chunqiu,
        (select count(*) from clothespress,clothe WHERE clothespress.openid='".$openid."' AND clothe.clotheid=clothespress.clotheid AND clothe.location=0 AND clothe.clotheseason=1 ) as xia,
        (select count(*) from clothespress,clothe WHERE clothespress.openid='".$openid."' AND clothe.clotheid=clothespress.clotheid AND clothe.location=0 AND clothe.clotheseason=2 ) as dong");
        return $query->result_array();
    }
    public function getColorData($openid)
    {
        $query=$this->db->query("select 
        (select count(*) from clothespress,clothe WHERE clothespress.openid='".$openid."' AND clothe.clotheid=clothespress.clotheid AND clothe.location=0 AND clothe.clothecolor=0 ) as hei,
        (select count(*) from clothespress,clothe WHERE clothespress.openid='".$openid."' AND clothe.clotheid=clothespress.clotheid AND clothe.location=0 AND clothe.clothecolor=1 ) as bai,
        (select count(*) from clothespress,clothe WHERE clothespress.openid='".$openid."' AND clothe.clotheid=clothespress.clotheid AND clothe.location=0 AND clothe.clothecolor=2 ) as hui,
        (select count(*) from clothespress,clothe WHERE clothespress.openid='".$openid."' AND clothe.clotheid=clothespress.clotheid AND clothe.location=0 AND clothe.clothecolor=3 ) as hong,
        (select count(*) from clothespress,clothe WHERE clothespress.openid='".$openid."' AND clothe.clotheid=clothespress.clotheid AND clothe.location=0 AND clothe.clothecolor=4 ) as zong,        (select count(*) from clothespress,clothe WHERE clothespress.openid='".$openid."' AND clothe.clotheid=clothespress.clotheid AND clothe.location=0 AND clothe.clothecolor=0 ) as hei,
        (select count(*) from clothespress,clothe WHERE clothespress.openid='".$openid."' AND clothe.clotheid=clothespress.clotheid AND clothe.location=0 AND clothe.clothecolor=5 ) as cheng,
        (select count(*) from clothespress,clothe WHERE clothespress.openid='".$openid."' AND clothe.clotheid=clothespress.clotheid AND clothe.location=0 AND clothe.clothecolor=6 ) as huang,
        (select count(*) from clothespress,clothe WHERE clothespress.openid='".$openid."' AND clothe.clotheid=clothespress.clotheid AND clothe.location=0 AND clothe.clothecolor=7 ) as lv,
        (select count(*) from clothespress,clothe WHERE clothespress.openid='".$openid."' AND clothe.clotheid=clothespress.clotheid AND clothe.location=0 AND clothe.clothecolor=8 ) as lan,        (select count(*) from clothespress,clothe WHERE clothespress.openid='".$openid."' AND clothe.clotheid=clothespress.clotheid AND clothe.location=0 AND clothe.clothecolor=0 ) as hei,
        (select count(*) from clothespress,clothe WHERE clothespress.openid='".$openid."' AND clothe.clotheid=clothespress.clotheid AND clothe.location=0 AND clothe.clothecolor=9 ) as zi");
        return $query->result_array();
    }
}