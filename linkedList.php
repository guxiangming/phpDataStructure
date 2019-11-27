<?php

class LinkedList
{
   private $list=[];
   
   public function get($index){
    //获取链表位置
    $value=null;
    while(current($this->list)){
        if(key($this->list)==$index){
            $value=current($this->list);
        }
        next($this->list);
    }
    reset($this->list);
    return $value;
   }

   public function add($value,$index=0){
       
      array_splice($this->list,$index,0,$value);
   }

   public function remove($index){
        array_splice($this->list,$index,1);
   }

   public function size(){
        return count($this->list);
   }

   public function isEmpty(){
       return !next($this->list);
   }
}

$linkedList=new LinkedList();
$linkedList->add(1);
$linkedList->add(2);
var_dump($linkedList);
print $linkedList->get(1);