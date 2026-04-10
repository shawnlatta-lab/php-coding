# LinkedIn Learning Python course by Joe Marini
# Example file for variables and basic types


# Basic data types in Python: Numbers, Strings, Booleans 
# Variable names must start with a letter or _, and can have numbers. They are case sensitive.
<?php

print("Working on the LinkedIn Learning Python course by Joe Marini - Variables and simple data types.");
print("https://www.linkedin.com/learning/learning-python-25309312/variables-and-simple-data-types");
print(" ");
print("PART ONE: Variables");
print(" ");
$myint = 10
$myfloat = 13.2576
$mystr = "This is a string"
$mystr2 = " like the cheese I like to eat."
$mystr3 = "YUM! "
$mybool = True

# We can display the content of a variable using the print() function
print("SING ALONG WITH ME!");
print("The variables we can use are called as such, called as such.  The variables we can use are called as such are as follows:");
print(" ");
print("$myint = ", $myint)
print("$myfloat = ", $myfloat)
print("$mystr = ", $mystr)
print("$mybool = ", $mybool)
print(" ");
print(" ");
# Operators are used to perform operations on variables
print("PART TWO: Mathmatical Operators");
print(" ");
print("And now is it time for some simple calculations:");
print(" ");
print("I'm Addition: $myint + $myfloat = ", $myint + $myfloat)
print("I'm Subtraction: $myint - $myfloat = ", $myint - $myfloat)
print("I'm Multiply: $myint × $myfloat = ", $myint * $myfloat)
print("And I'm DIVIDE! $myint ÷ $myfloat = ", $myint / $yfloat)
print(" ");
print("And now a bit more - Let's go Modulo!");
print(" ");
print("$myint % 3 = ", $myint % 3)
print(" ");
print("''In computing and mathematics, the modulo operation returns the remainder or signed remainder of a division, after one number is divided by another, the latter being called the modulus of the operation.''");
print(" ");
print("Let's use another example: 27 % 6 = ", 27 % 6)
#print("You can check it by dividing 27 by 3 and then subtract 6. ");
print(" ");
#print("27 ÷ 3 =", 27/(27%6), "-6 = abs[", abs((27/(27%6)) - 6), "]");
#print("The contestant whose bid is closest to the actual retail price of the prize without going over:");
#print(round(abs((27/(27%6)) - 6)))
#print(" ");
print("''ONE MORE TIME WE'RE GONNA MODULO-ATE YEAH YEAH YEAH.''");
print(" ");
print("Let's use another example: 27 % 7 = ", 27 % 7)
#print("27 ÷ 6 =", 27/(27%7), "-7 = abs[", abs((27/(27%7)) - 7), "]");
#print("Round to the nearest whole number:");
#print(round(abs((27/(27%7)) - 7)))
#print(" ");
#print("Python uses bankers' rounding, so 2.5 rounds to 2.");
#print(" ");
print("PART THREE: ''Keep Feelin' Concatenation''");
$another_str = 'Are the voices in your head calling '
$gloria_str = 'GLORIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA?'
print(" ");
print("Two strings have been defined: $another_str & $gloria_str. $another_str is ''" + $another_str + "'' and $gloria_str is ''" + $gloria_str+ "''");
print($another_str + $gloria_str)
print("This called concatenation");
print(" ");
print("You can also use concatenation and a math symbol for a repetitive print");
print("$mystr + $mystr2");
print($mystr +$ $mystr2)
print("$mystr3 * 3"); 
print($mystr3 * 3) 
print($mystr + $mystr2, " ", ($mystr3 * 3))
print(" ");
# Logical and comparison operators 
print(" ");
print("PART FOUR: Let's get Logical. Logical. I wanna get Logical.");
print(" ");
print("Does $myint == 10?");
print($myint == 10)
print("Does $myfloat != 20?");
print($myfloat != 20)
print("Does $myint > 20?");
print($myint > 20)
print("Does $myfloat < 20?");
print($myfloat < 10)
print("Is $myint > 20 AND $myfloat < 13.2?");
print($myint > 5 and $myfloat < 13.2)
print(" ");
print(" ");
# The comparison operators need to be in lower case.
print("PART FIVE: ''Oh, I'm just a girl, lucky me Twiddle-dum, there's no comparison.''");
print(" ");
print("Are either $myint > 5 OR $myfloat < 13.2 true?");
print($myint > 5 or $myfloat < 13.2)
print("Are either $myint > 5 OR $myfloat < 13.25 true?");
print($myint > 5 or $myfloat < 13.25)
print("Are either $myint > 5 OR $myfloat < 13.257 true?");
print($myint > 5 or $myfloat < 13.257)
print("Are either $myint > 5 OR $myfloat < 13.2576 true?");
print($myint > 5 or $myfloat < 13.2576)
print("This statement is true because it passes the first condition. Let me show you:");
print("Does $myint > 5?");
print($myint > 5)
print("Does $myfloat < 13.2576?");
print($myfloat < 13.2576)
print("Now let's try a similar kind of check, this time with the AND keyword");
print("Is it true that $myint > 5 AND $myfloat < 13.2576?");
print($myint > 5 and $myfloat < 13.2576)
print("This statement is false because it fails the second condition.");
print("Yes, $myfloat is 13.2576, but the logic is check if it less than 13.2576. You have to explicitly state the equals check.");
print("Is it true that $myint > 5 AND $myfloat =< 13.2576?");
print$($myint > 5 and $myfloat <= 13.2576)
print("Now you see that the answer is TRUE.");
print("Time to use the NOT operand now.");
print("Is ''not ($myint > 5 AND $myfloat =< 13.2576)'' true?");
print(not($myint > 5 and $myfloat <= 13.2576))
print("Now you see that the answer is FALSE.");
print(" ");


# re-declaring a variable works
print("PART SIX: Changing a variable.");
print("$myint = ", $myint)
print("Let's change it up!");
$myint = "''I just found out there's no such thing as the real world /  Just a lie you've got to rise above''"
print("$myint = ", $myint)
?>