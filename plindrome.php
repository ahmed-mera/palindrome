<?php
// ! first modo
 function checkWord($word){
     if(empty($word) || $word == ' '){echo 'this word can NOT be embty :( <br />' ; return false ; }
    $palindrome = trim(str_split($word));
    $palindrome = strtolower(implode(array_reverse($palindrome),''));
      echo (!strcmp(strtolower($word),$palindrome))? 'this word is PALINDROME <br />' :  'this word is NOT palindrome <br />';
 }
  checkWord(' ');

// ! second modo
function checkWordSecondModo($word){
    if(empty($word) || $word == ' '){echo 'this word can NOT be embty :( <br />' ; return false ; }
     echo (!strcmp(strtolower($word),strtolower(strrev($word))))? 'this word is PALINDROME <br />' :  'this word is NOT palindrome <br />';
}
 checkWordSecondModo('osaso');

// ! threed modo
function checkWordThreeModo ($word){
    $word = strtolower($word);
    for($i = 0 ; $i < strlen($word) ; $i++):
            if($word[$i] != $word[strlen($word) - $i -1 ]){
                return false;
                echo  'this word is NOT palindrome <br />';
            }
    endfor;
}
checkWordThreeModo ('ahmed');
?>

<!-- nkjg353jrnkofr3nko3frnok -->

<script>
    // ! first modo
 let checkWord = word => {
     if( word == ' ' || word == '' ){document.write( 'this word can NOT be embty :( <br />') ; return false ; }
    let palindrome = word.trim().split('').reverse();
    palindrome = palindrome.join('');
       const ststus = (! word.trim().localeCompare(palindrome))? 'this word is PALINDROME <br />' :  'this word is NOT palindrome <br />';
       document.write(ststus);
    }
  checkWord('osaso ');

  // ! second modo
function checkWordThreeModo (word){
    word = word.ToLowerCase();
    for($i = 0 ; $i < $word.length ; $i++){
            if(word[$i] != word[$word.length - $i -1 ]){
                return false;
                document.write('this word is NOT palindrome <br />');
            }
        }
}
checkWordThreeModo ('ahmed');

</script>