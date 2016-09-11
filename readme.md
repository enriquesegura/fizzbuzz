# Fizzbuzz Kata

Writing a function which outputs the numbers from 1 to 100 bar. For multiples of 3 should instead "three" and spent on multiples of 5 "five". For multiples of 3 and 5 should be "both" output.

This is the traditional [fizzbuzz test](http://c2.com/cgi/wiki?FizzBuzzTest) with custom output fizzbuzz text.
## Example
~~~php

$fizzbuzz = new Fizzbuzz();

$fizzbuzz->setFizz("three");
$fizzbuzz->setBuzz("five");
$fizzbuzz->setFizzBuzz("both");

$fizzbuzz->output(100);
/*output:
1
2
three
4
five
three
7
8
three
five
11
three
13
14
both
16
... 
98
three
five
*/


~~~