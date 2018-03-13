<?php 

class myFeed {
    //private $mixiFeed;
    //private $lineFeed;
    private $allUrl=[];
    
    public function __construct() {
    $this->allFeedUrl();

    }
    //mixi用
    public function mixiFeed () {
        
        //件数
        $num_of_data = 5;
        
        $outData = "";
        $eCall = "test";
        for ($i=0; $i<$num_of_data; $i++) {
            $entry = $this->allUrl[0]['mixi']->entry[$i];
            $title = $entry->title;
            $link  = $entry->link->attributes()->href;
            echo $link."<br>";
            
        }
        
       
    }
    
    
    public function allFeedUrl () {
        $mixiFeed = simplexml_load_file("http://alpha.mixi.co.jp/feed");
        $lineFeed = simplexml_load_file("https://engineering.linecorp.com/ja/blog/rss2");
        
        $this->allUrl[] = [
            'mixi'=>$mixiFeed,
            'line'=>$lineFeed
            ];
       
    }
    
}

// $test = new myFeed();
// $test->mixiFeed();


?>