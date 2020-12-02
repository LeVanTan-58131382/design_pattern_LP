<?php
class DBSCuuLong implements GiongCayTrongFactory{
    public function chonGiong(Giong $giong)
    {
        if ($giong->showGiong() == "Cam"){
            return new Cam();
        }elseif ($giong->showGiong() == "Xoai"){
            return new Xoai();
        }elseif ($giong->showGiong() == "Nhan"){
            return new Nhan();
        }elseif ($giong->showGiong() == "Sau Rieng"){
            return new SauRieng();
        }
    }
}
