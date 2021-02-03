<?php


class ArrayList
{
    public $arrayList;
    public function ArrayList($arr = ""){//Xây dựng một danh sách mới
        if (is_array($arr)== true){
            $this->arrayList = $arr;
        }
        return $this->arrayList = array();
    }
    public function add($obj){//Thêm một phần tử vào cuối danh sách này
        array_push($this->arrayList,$obj);
    }
    public function get($index){//Trả về phần tử tại vị trí đã chỉ định trong danh sách
        if ($this->isInteger($index) && $index < $this->size()){
            return $this->arrayList[$index];
        }
       return die("ERROR in ArrayList.get");
    }
    public function isInteger($toCheck){
        return preg_match("/^[0-9]+$/,$toCheck");
    }
}