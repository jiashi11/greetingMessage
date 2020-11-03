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

// 是否需要自主传入时间, 传入什么格式?
// 是否需要根据不同用户返回不同语言的问候语?(中文,日文,英文等)
// 是否有时区的判断