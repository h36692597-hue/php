PHP Assignment 1 – Questions 1 to 5

University: Jamhuriya University of Science and Technology
Course: PHP & MySQL
Assignment: Assignment 1
Topic: PHP Programming Basics

Introduction

This README explains the first five questions of Assignment 1. The
programs are written in PHP and demonstrate basic programming concepts
such as conditional statements, comparison operators, loops, modulus,
and reversing a number.

────────

Question 1: Find the Greatest and Smallest Number

Description

This program compares three integer numbers and finds the greatest and
smallest number.

The program does not use built-in functions such as max() or min().
Instead, it uses if, elseif, comparison operators, and logical
operators.

Concepts Used

• Variables
• if and elseif
• Comparison operators (>, <)
• Logical operator (&&)

Example

```php
<?php

$a = 25;
$b = 10;
$c = 40;

if ($a > $b && $a > $c) {
    $greatest = $a;
} elseif ($b > $a && $b > $c) {
    $greatest = $b;
} else {
    $greatest = $c;
}

if ($a < $b && $a < $c) {
    $smallest = $a;
} elseif ($b < $a && $b < $c) {
    $smallest = $b;
} else {
    $smallest = $c;
}

echo "Greatest number = " . $greatest . "<br>";
echo "Smallest number = " . $smallest;

?>
```

Output

```text
Greatest number = 40
Smallest number = 10
```

────────

Question 2: Check Divisibility by 3 and 5

Description

This program checks whether a number is divisible by 3, 5, both, or
neither.

The modulus operator % is used to check the remainder after division.
If the remainder is 0, the number is divisible by that number.

Concepts Used

• if, elseif, and else
• Modulus operator (%)
• Logical operator (&&)

Example

```php
<?php

$num = 15;

if ($num % 3 == 0 && $num % 5 == 0) {
    echo "The number is divisible by both 3 and 5.";
} elseif ($num % 3 == 0) {
    echo "The number is divisible by 3.";
} elseif ($num % 5 == 0) {
    echo "The number is divisible by 5.";
} else {
    echo "The number is divisible by neither 3 nor 5.";
}

?>
```

Output

```text
The number is divisible by both 3 and 5.
```

────────

Question 3: Print Odd and Even Numbers

Description

This question has two parts:

1. Print odd numbers from 2 to 20.
2. Print even numbers from 35 down to 7.

A for loop is used to repeat the operation, while the modulus operator
checks whether each number is odd or even.

Part A: Odd Numbers from 2 to 20

```php
<?php

echo "Odd numbers from 2 to 20:<br>";

for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}

?>
```

Output

```text
3 5 7 9 11 13 15 17 19
```

Part B: Even Numbers from 35 to 7

```php
<?php

echo "Even numbers from 35 to 7:<br>";

for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}

?>
```

Output

```text
34 32 30 28 26 24 22 20 18 16 14 12 10 8
```

────────

Question 4: Numbers Divisible by 2 and 5

Description

This program prints all numbers between 50 and 2 that are divisible by
both 2 and 5.

The program uses a for loop and checks both conditions using the
logical && operator.

Concepts Used

• for loop
• Modulus operator (%)
• Logical operator (&&)
• Conditional statement

Example

```php
<?php

echo "Numbers divisible by 2 and 5:<br>";

for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }
}

?>
```

Output

```text
50 40 30 20 10
```

────────

Question 5: Reverse a Number

Description

This program reverses the digits of a given number.

For example:

```text
12345 → 54321
```

The program does not use the built-in strrev() function. Instead, it
uses a while loop, the modulus operator %, and intdiv().

Concepts Used

• while loop
• Modulus operator (%)
• intdiv()
• Variables
• Arithmetic operators

Example

```php
<?php

$num = 12345;
$reverse = 0;

while ($num > 0) {

    $digit = $num % 10;

    $reverse = ($reverse * 10) + $digit;

    $num = intdiv($num, 10);
}

echo "Reverse = " . $reverse;

?>
```

Output

```text
Reverse = 54321
```

How It Works

The modulus operator gets the last digit of the number.

For example:

```text
12345 % 10 = 5
```

Then intdiv($num, 10) removes the last digit:

```text
12345 → 1234 → 123 → 12 → 1
```

The extracted digits are placed into the reverse number:

```text
5 → 54 → 543 → 5432 → 54321
```
