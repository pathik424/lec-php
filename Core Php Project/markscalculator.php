<?php
// Function to calculate percentage
function calculatePercentage($marks) {
    $totalMarks = 500; // Total marks for all subjects
    $percentage = ($marks / $totalMarks) * 100;
    return $percentage;
}

// Function to calculate grade
function calculateGrade($percentage) {
    if ($percentage >= 90) {
        return 'A+';
    } elseif ($percentage >= 80) {
        return 'A';
    } elseif ($percentage >= 70) {
        return 'B';
    } elseif ($percentage >= 60) {
        return 'C';
    } elseif ($percentage >= 50) {
        return 'D';
    } else {
        return 'F';
    }
}

// Input marks for each subject
$physics = 85;
$chemistry = 92;
$biology = 78;
$mathematics = 88;
$computer = 95;

// Calculate total marks
$totalMarks = $physics + $chemistry + $biology + $mathematics + $computer;

// Calculate percentage
$percentage = calculatePercentage($totalMarks);

// Calculate grade
$grade = calculateGrade($percentage);

// Display the results
echo "Physics Marks: $physics<br>";
echo "Chemistry Marks: $chemistry<br>";
echo "Biology Marks: $biology<br>";
echo "Mathematics Marks: $mathematics<br>";
echo "Computer Marks: $computer<br>";
echo "Total Marks: $totalMarks<br>";
echo "Percentage: $percentage%<br>";
echo "Grade: $grade<br>";
?>

