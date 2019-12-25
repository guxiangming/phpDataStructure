<?php
    class SimpleQuque{
        private $_queue=[];
        private $_size=0;
        public function __construct($size=10)
        {
            $this->_size=$size;
            
        }

        //入队
        public function enqueue($value){
            if(count($this->_queue)>$this->_size){
                return false;
            }
            array_push($this->_queue,$value);
        }

        public function dequeue(){
            if(count($this->_queue)==0){
                return false;
            }
            return array_shift($this->_queue);
        }

        public function size(){
            return count($this->_queue);
        }
    }