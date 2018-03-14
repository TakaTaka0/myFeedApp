<?php 

class myFeed {
    //private $mixiFeed;
    //private $lineFeed;
    private $allUrl=[];
    
    public function __construct() {
    $this->getAllFeedUrl();

    }
    //mixi用
    public function mixiFeed () {
        
        //件数取得
        $num_of_data = 5;
        for ($i=0; $i<$num_of_data; $i++) {
            
            $entry = $this->allUrl[0]['mixi']->entry[$i];
            $title = $entry->title;
            $summary = $entry->summary;
            
            //summaryの文字数を取得して文字数制限を付けて切り出す
            $countSum = mb_strlen($summary, 'UTF-8');
            $strSum = mb_substr($summary, 0, round($countSum/2));
            
            //画像のsrcを取得する
            $content = $entry->content;
            preg_match("/<img(.+?)>/", $content, $match);
            preg_match_all('/src="(.+?)"/', $match[1], $src);
            
            $getSrc = $src[1][0];
            $link  = $entry->link->attributes()->href;
            echo "<a href=$link>$title</a><p>$strSum</p><img src=$getSrc width='193' height='130'></img><br>";
        }
       
    }
    
    
    public function getAllFeedUrl () {
        $mixiFeed = simplexml_load_file("http://alpha.mixi.co.jp/feed");
        $lineFeed = simplexml_load_file("https://engineering.linecorp.com/ja/blog/rss2");
        
        $this->allUrl[] = [
            'mixi'=>$mixiFeed,
            'line'=>$lineFeed
            ];
       
    }
    
}

function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}


?>