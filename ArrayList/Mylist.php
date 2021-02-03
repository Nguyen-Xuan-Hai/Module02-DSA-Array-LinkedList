<?php


class Mylist
{
    private $size;
    private $elements;

    public function __construct()
    {
        $this->elements = array();
    }
    function isEmpty(){
        if (!empty($this->elements)){
            return true;
        }else{
            return "No value in array";
        }
    }
    function add($obj){
        array_push($this->elements,$obj);
    }
    function getElements(){
        return $this->elements;
    }
    function size(){
        return count($this->elements);
    }
    function remove($index){
        if ($this->isEmpty()){
            for ($i = 0; $i < $this->size();$i++){
                if ($index == $i){
                    array_splice($this->elements,$i,1);
                }
            }
        }else{
            return "No value delete";
        }
    }
    function get($index){
        if ($this->isEmpty()){
            for ($i = 0;$i < $this->size();$i++){
                if ($index === 1){
                    return $this->elements[$i];
                }
            }
        }
    }
    function clear(){
        $this->elements = array();
    }
    function addAll($arr){
        $this->elements = array_merge($this->elements,$arr);
    }
    function indexOf($obj){
        if ($this->isEmpty()){
            for ($i = 0;$i < $this->size();$i++){
                if ($obj === $this->elements[$i]){
                    $arr[] = $i;
                }
            }
            return $arr;
        } else{
            return "No value in array";
        }
    }
    function sort(){
        if ($this->isEmpty()){
            sort($this->elements);
        }
    }
    function insert($index,$obj){
        if ($this->isEmpty()){
            for ($i = 0;$i < $this->size();$i++){
                if ($index === $i){
                    array_splice($this->elements,$i,1,$obj);
                }
            }
        }
    }

}