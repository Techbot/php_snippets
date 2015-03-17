  <?php
  
  class anything{

  function replace_in_array ($search, $replacement, $array) {
     $map = function ($text) use ($search, $replacement) {
         return str_replace ($search, $replacement, $text);
     };
     return array_map ($map, $array);
   }

}

$array = array('one two three','two','three');

$thing = new anything();

$newThing = $thing->replace_in_array('two','_',$array);

print_r ($newThing);
