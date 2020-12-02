<?php
class TayNguyenFactory implements GiongCayTrongFactory{

    public function chonGiong(Giong $giong)
    {
       if ($giong->showGiong() == "Cao su"){
           return new CaoSu();
       }elseif ($giong->showGiong() == "Cà phê"){
           return new CaPhe();
       }elseif ($giong->showGiong() == "Tiêu"){
           return new Tieu();
       }
    }
}