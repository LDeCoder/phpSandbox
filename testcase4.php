<?php
function check_brackets_balance($string, $bracket_map = false) {
    $bracket_map = $bracket_map ?: [ '[' => ']', '{' => '}', '(' => ')' ];
    $bracket_map_flipped = array_flip($bracket_map);
    $length = mb_strlen($string);
    $brackets_stack = [];
    for ($i = 0; $i < $length; $i++) {
        $current_char = $string[$i];
        if (isset($bracket_map[$current_char])) {
            $brackets_stack[] = $bracket_map[$current_char];
        } else if (isset($bracket_map_flipped[$current_char])) {
            $expected = array_pop($brackets_stack);
            if (($expected === NULL) || ($current_char != $expected)) {
                return false;
            }
        }
    }
   echo empty($brackets_stack);
}
?>




function validBraces($braces){
  
}



/**
* @param $str input string
* @returns boolean true if all brackets are properly opened and closed, false otherwise
*/
function checkBraces($str)
{
    $strlen = strlen($str); // cache string length for performance
    $openbraces = 0;

    for ($i = 0; $i < $strlen; $i++)
    {
        $c = $str[$i];
        if ($c == '<') // count opening bracket
            $openbraces++;
        if ($c == '>') // count closing bracket
            $openbraces--;

        if ($openbraces < 0) // check for unopened closing brackets
            return false;
    }

    return $openbraces == 0; // check for unclosed open brackets
}
Using this code as a basis, it shouldn't be too hard to implement a check to verify whether or not the tag name of opening and closing brackets also matches - but I'll leave that to you :-)











/*Description:

Write a function that takes a string of braces, and determines if the order of the braces is valid. It should return true if the string is valid, and false if it's invalid.

This Kata is similar to the Valid Parentheses Kata, but introduces new characters: brackets [], and curly braces {}. Thanks to @arnedag for the idea!

All input strings will be nonempty, and will only consist of parentheses, brackets and curly braces: ()[]{}.

What is considered Valid?

A string of braces is considered valid if all braces are matched with the correct brace.

Examples

"(){}[]"   =>  True
"([{}])"   =>  True
"(}"       =>  False
"[(])"     =>  False
"[({})](]" =>  False
*/
//a very smart solution
/*
function validBraces(braces){
  var matches = { '(':')', '{':'}', '[':']' };
  var stack = [];
  var currentChar;

  for (var i=0; i<braces.length; i++) {
    currentChar = braces[i];

    if (matches[currentChar]) { // opening braces
      stack.push(currentChar);
    } else { // closing braces
      if (currentChar !== matches[stack.pop()]) {
        return false;
      }
    }
  }

  return stack.length === 0; // any unclosed braces left?
}*/

//My solution
/*function validBraces(braces){
  var opposites={
      "(": ")",
      "{": "}",
      "[": "]"
      }
  if(braces.length % 2 !==0){ 
    return false;
  }
  if(braces.length===2){
    if(opposites[braces[0]]!==braces[1]){
      return false;
    }else{
      return true;
    }
  }else{
    for(var i=0; i<braces.length; i++){
      if(opposites[braces[i]]===braces[i+1]){
        var newBraces=braces.slice(0, i)+braces.slice(i+2);
        return validBraces(newBraces);
      }
    }
    return false;
  }
 
}
*/

//Another Solution using RegExp 

function validBraces(braces){
 while(/\(\)|\[\]|\{\}/g.test(braces)){braces = braces.replace(/\(\)|\[\]|\{\}/g,"")}
 return !braces.length;
}
//Another clever but ineffective solution
function validBraces(braces){
  while(braces.indexOf("{}") != -1 || braces.indexOf("()") != -1 || braces.indexOf("[]") != -1){
    braces = braces.replace("{}", "").replace("()", "").replace("[]", "");
  }
  return braces.length == 0;
}