<?php
global $wpdb;
$table = $wpdb->prefix.'employees';
$rawdata = $wpdb->get_results("SELECT * FROM $table");


// Display the table
if ($rawdata) {
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Full Names</th>';
    echo '<th>Phone</th>';
    echo '<th>Email</th>';
    echo '<th>Department</th>';
    echo '<th>Department</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($rawdata as $employee) {
        echo '<tr>';
        echo '<td>' . $employee->name . '</td>';
        echo '<td>' . $employee->phone . '</td>';
        echo '<td>' . $employee-> email. '</td>';
        echo '<td>' . $employee-> department. '</td>';
        echo '<td>' . $employee-> role. '</td>';

        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo 'No Employees found in the system yet.';
}
?>