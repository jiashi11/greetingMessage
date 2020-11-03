<?php

class MyGreeter{
    protected $time;
    protected $greetingMessageMap;
    
    public function __construct()
    {
        $this->greetingMessageMap = [
            11 => '早上好',
            17 => '下午好',
            23 => '下午好',
        ];
    }
    
    public function greetingMessage(){
        
        $now = time();
        
        foreach ($this->greetingMessageMap as $k => $v){
            $tmpTime = mktime($k, 59, 59);
            
            if ($tmpTime >= $now){
                return $v;
            }
        }
    }
}


$greetingMessage = (new MyGreeter()) -> greetingMessage();

var_dump($greetingMessage);