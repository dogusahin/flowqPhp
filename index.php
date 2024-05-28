<?php
$students = [
    [
        'name' => 'Dogukan Sahin',
        'points' => [85, 90, 78],
    ],
    [
        'name' => 'Batuhan Sahin',
        'points' => [92, 88, 84],
    ]
];

function addPoint(array &$student, int|float $point): void {
    $student['points'][] = $point;
}

function calculateAvarage(array $points): float {
    $total = array_sum($points);
    return $total / count($points);
}

function studentInfo(array $student): void {
    $average = calculateAvarage($student['points']);
    echo "Name: {$student['name']}, Average Point: " . number_format($average, 2) . "\n";
}

function addStudent(array &$students, string $name, array $points = []): void {
    $students[] = [
        'name' => $name,
        'points' => $points
    ];
}

addStudent($students, 'Erdal Sahin', [89, 94, 81]);
addStudent($students, 'Suleyman Sahin', [76, 85, 90]);

$newPoints = [
    [0, 95],
    [1, 91],
    [2, 88],
    [3, 84]
];

foreach ($newPoints as [$index, $point]) {
    addPoint($students[$index], $point);
}

foreach ($students as $student) {
    studentInfo($student);
}
?>
