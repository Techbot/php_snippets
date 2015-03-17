<?php class Example {
    private $search;

    public function __construct ($search)
    {
        $this->search = $search;
         echo $this->search;
       }
 
       public function setSearch ($search) {
         $this->search = $search;
       }
 
       public function getReplacer ($replacement)
       {
            return function ($text) use ($replacement) {
                echo $text;
                return str_replace ($this->search, $replacement, $text);
            };
       }
}

$example    = new Example ('hello');
$replacer   = $example->getReplacer ('goodbye');
echo $replacer ('hello world'); // goodbye world
$example->setSearch ('world');
echo $replacer ('hello world'); // hello goodbye

