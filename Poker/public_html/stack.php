<?php 
class Stack{
    private $maxSize;
    private $elements;
    private $top;
    
    public function Stack($newMaxSize){
        if(is_numeric($newMaxSize)){
            $this->maxSize = $newMaxSize;
            $this->top = -1;
        }
    }
    
    public function push($element){
        if($this->top < $this->maxSize)
	{
	    $this->top++;
            $this->elements[$this->top] = $element;
            //echo $this->elements[$this->top][2]." <br>";
            }
    }
    
    public function pop(){
        if($this->top > -1)
        {
            $element = $this->elements[$this->top];
            unset($this->elements[$this->top]);
	    $this->top--;
            return $element;
        }
    }
    
    public function peek(){
        if($this->top > -1)
        {
           return $this->elements[$this->top];
        }
        
    }
}
