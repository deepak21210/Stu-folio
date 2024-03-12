<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asign_Staffs</title>
</head>

<body>

<?php
   include('../config.php');
   include("./fetch_courses.php");
   include("./fetch_semesters.php");
   include("./fetch_staff.php");
?>

<select id="semesterSelect">
    <option value="">Select Semester</option>
    <!-- Semester options will be populated dynamically -->
</select>

<select id="courseSelect">
    <option value="">Select Course</option>
    <!-- Course options will be populated dynamically based on selected semester -->
</select>

<select id="staffSelect">
    <option value="">Select Staff</option>
    <!-- Staff options will be populated dynamically -->
</select>


</body>
<script>
    // Function to fetch semesters and populate the semester dropdown
function populateSemesters() {
    $.ajax({
        url: 'fetch_semesters.php',
        type: 'GET',
        success: function(response) {
            var semesters = JSON.parse(response);
            $('#semesterSelect').empty();
            $('#semesterSelect').append('<option value="">Select Semester</option>');
            $.each(semesters, function(index, semester) {
                $('#semesterSelect').append('<option value="' + semester + '">' + semester + '</option>');
            });
        }
    });
}

// Function to fetch courses based on selected semester and populate the course dropdown
function populateCourses(semester) {
    $.ajax({
        url: 'fetch_courses.php',
        type: 'GET',
        data: { semester: semester },
        success: function(response) {
            var courses = JSON.parse(response);
            $('#courseSelect').empty();
            $('#courseSelect').append('<option value="">Select Course</option>');
            $.each(courses, function(index, course) {
                $('#courseSelect').append('<option value="' + course.Course_Code + '">' + course.Course_Name + '</option>');
            });
        }
    });
}

// Function to fetch staff members and populate the staff dropdown
function populateStaff() {
    $.ajax({
        url: 'fetch_staff.php',
        type: 'GET',
        success: function(response) {
            var staff = JSON.parse(response);
            $('#staffSelect').empty();
            $('#staffSelect').append('<option value="">Select Staff</option>');
            $.each(staff, function(index, person) {
                $('#staffSelect').append('<option value="' + person.registerno + '">' + person.name + '</option>');
            });
        }
    });
}

$(document).ready(function() {
    populateSemesters();

    $('#semesterSelect').change(function() {
        var selectedSemester = $(this).val();
        if (selectedSemester) {
            populateCourses(selectedSemester);
        } else {
            $('#courseSelect').empty();
        }
    });

    $('#courseSelect').change(function() {
        populateStaff();
    });
});

populateSemesters();
</script>
</html>