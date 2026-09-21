# PHP Week 1 Practice

## Web Application Development – PHP & MySQL

This repository contains my **Week 1 PHP programming practice**, covering the fundamental concepts introduced in the **Web Application Development – PHP & MySQL** course.

The practice focuses on PHP output, variables, conditional statements, and switch statements. It also demonstrates how PHP can be combined with HTML to display and evaluate information dynamically.

---

## 1. PHP Output

This exercise demonstrates how PHP can display text and HTML content using the `echo` and `print` statements.

### Concepts Covered

* Using `echo` to display output.
* Using `print` to display output.
* Adding HTML line breaks using `<br>`.
* Displaying HTML headings through PHP.

### Code

```php
<?php

echo "Hello! Welcome to PHP. <br>";

print "This is my first PHP practice. <br><br>";

echo "<h2>Student Information</h2>";

?>
```

### Expected Output

```text
Hello! Welcome to PHP.

Student Information
```

---

## 2. PHP Variables

This exercise demonstrates how PHP variables can be used to store and display student information.

### Variables

```php
$studentName = "Amina Hassan";
$studentAge = 20;
$course = "Computer Science";
```

### Concepts Covered

* Declaring variables using `$`.
* Assigning values to variables.
* Storing text and numerical values.
* Displaying variable values using `echo`.

### Code

```php
<?php

$studentName = "Amina Hassan";
$studentAge = 20;
$course = "Computer Science";

echo "Student Name: $studentName <br>";
echo "Student Age: $studentAge <br>";
echo "Course: $course <br><br>";

?>
```

### Expected Output

```text
Student Name: Amina Hassan
Student Age: 20
Course: Computer Science
```

---

## 3. PHP Conditional Statements

Conditional statements allow a PHP program to make decisions based on specific conditions.

In this exercise, the student's mark is evaluated using `if`, `elseif`, and `else`.

### Code

```php
<?php

$mark = 85;

echo "<b>Mark Evaluation:</b><br>";

if ($mark >= 90) {

    echo "Excellent!<br>";

} elseif ($mark >= 70) {

    echo "Very Good!<br>";

} elseif ($mark >= 50) {

    echo "You passed.<br>";

} else {

    echo "You failed. Keep practicing.<br>";

}

?>
```

### Condition Explanation

| Mark         | Result                       |
| ------------ | ---------------------------- |
| 90 and above | Excellent!                   |
| 70 – 89      | Very Good!                   |
| 50 – 69      | You passed.                  |
| Below 50     | You failed. Keep practicing. |

Since the mark is **85**, the program displays:

```text
Mark Evaluation:
Very Good!
```

---

## 4. PHP Switch Statement

The `switch` statement is used when a program needs to compare one value with multiple possible cases.

In this exercise, the value stored in `$day` is checked against different days of the week.

### Code

```php
<?php

$day = "Friday";

echo "<br><b>Day Evaluation:</b><br>";

switch ($day) {

    case "Monday":
        echo "It is the beginning of the week.<br>";
        break;

    case "Wednesday":
        echo "It is the middle of the week.<br>";
        break;

    case "Friday":
        echo "The weekend is near.<br>";
        break;

    case "Sunday":
        echo "It is a relaxing day.<br>";
        break;

    default:
        echo "It is a normal day.<br>";

}

?>
```

### Expected Output

```text
Day Evaluation:
The weekend is near.
```

### Concepts Covered

* Using `switch` to evaluate a value.
* Creating multiple `case` statements.
* Using `break` to stop execution after a matching case.
* Using `default` when no case matches.

---

## 5. Concepts Practiced

The following PHP concepts were practiced during Week 1:

* PHP output using `echo`.
* PHP output using `print`.
* Creating and using variables.
* Storing student information.
* Using `if`, `elseif`, and `else`.
* Evaluating marks using conditional statements.
* Using `switch` and `case`.
* Using the `break` statement.
* Combining PHP with HTML.

---

## 6. Learning Outcome

By completing these exercises, I developed a better understanding of the fundamental concepts of PHP programming.

The practice provided hands-on experience with displaying information, storing data in variables, evaluating conditions, and controlling program flow using conditional statements.

---

## 7. Project Structure

The Week 1 practice is organized into PHP source files, screenshots, and documentation.

```text
Week1/
│
├── php_output.php
├── php_variables.php
├── php_control_structure.php
│
├── screenshots/
│   ├── php_output.png
│   ├── php_variables.png
│   └── php_control_structure.png
│
└── README.md
```

---

## 8. Progress

| Topic               | Status      |
| ------------------- | ----------- |
| PHP Output          | ✅ Completed |
| Echo and Print      | ✅ Completed |
| Variables           | ✅ Completed |
| Student Information | ✅ Completed |
| If / Elseif / Else  | ✅ Completed |
| Mark Evaluation     | ✅ Completed |
| Switch Statement    | ✅ Completed |
| Break Statement     | ✅ Completed |

---

## 9. Week 1 Completion

**Week 1 PHP programming practice has been successfully completed.**

---
