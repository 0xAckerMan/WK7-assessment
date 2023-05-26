<?php get_header(); ?>

<style>
    /* Table styles */
    table {
        border-collapse: collapse;
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
    }
    
    th, td {
        padding: 10px;
        text-align: center;
        border: 1px solid #ddd;
    }
    
    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }
    
    /* Table hover effect */
    tr:hover {
        background-color: #f9f9f9;
    }
    
    /* Table striped rows */
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    
    /* Table caption */
    caption {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
        text-align: left;
    }
</style>

<?php
global $wpdb;
$table = $wpdb->prefix.'employees';
$rawdata = $wpdb->get_results("SELECT * FROM $table");

// Display the table
if ($rawdata) {
    echo '<table>';
    echo '<caption>Employee List</caption>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Full Names</th>';
    echo '<th>Phone</th>';
    echo '<th>Email</th>';
    echo '<th>Department</th>';
    echo '<th>Role</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($rawdata as $employee) {
        echo '<tr>';
        echo '<td>' . $employee->names . '</td>';
        echo '<td>' . $employee->phone . '</td>';
        echo '<td>' . $employee->email . '</td>';
        echo '<td>' . $employee->department . '</td>';
        echo '<td>' . $employee->role . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo 'No Employees found in the system yet.';
}
?>
<?php get_footer(); ?>