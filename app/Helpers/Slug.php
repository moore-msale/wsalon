<?php
  use App\Slug;
  function ruToEnLetter($text){
    $old = $text;

    $cyr  = array('а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у',
            'ф','х','ц','ч','ш','щ','ъ', 'ы','ь', 'э', 'ю','я','А','Б','В','Г','Д','Е','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У',
            'Ф','Х','Ц','Ч','Ш','Щ','Ъ', 'Ы','Ь', 'Э', 'Ю','Я' );
    $lat = array( 'a','b','v','g','d','e','io','zh','z','i','y','k','l','m','n','o','p','r','s','t','u',
            'f' ,'h' ,'ts' ,'ch','sh' ,'sht' ,'a', 'i', 'y', 'e' ,'yu' ,'ya','A','B','V','G','D','E','Zh',
            'Z','I','Y','K','L','M','N','O','P','R','S','T','U',
            'F' ,'H' ,'Ts' ,'Ch','Sh' ,'Sht' ,'A' ,'Y' ,'Yu' ,'Ya' );

    $text = mb_strtolower(str_replace($cyr,$lat, $text));

    if($text != $old){
      $slug = Slug::where('word',$text)->first();
      if(!$slug){
        $slug = new Slug;
        $slug->word = $text;
        $slug->from = $old;
        $slug->save();
      }
    }

    return $text;
  }

  function enToRuLetter($text){
    $slug = Slug::where('word',$text)->first();
    if($slug){
      $text = $slug->from;
    }
     return $text;
  }
