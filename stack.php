<?php
// 简单的顺序栈
class stack{
    private $_stack=[];
    private $_size=0;
    public function __construct($size=10)
    {
        $this->_size=$size;
    }

    public function pop(){
        if(count($this->_stack)==0){
            return false;
        }
        return array_pop($this->_stack);
    }
    public function push($value){
        if(count($this->_stack)==$this->_size){
            return false;
        }
        array_push($this->_stack,$value);
        return true;
    }
    public function size(){
        return count($this->_stack);
    }
    public function isEmpty(){
        return current($this->_stack)==false;
    }

    
    
}
$stack=new stack(15);
    $stack->push(1);
    $stack->push(2);
    $stack->pop();
    $stack->pop();