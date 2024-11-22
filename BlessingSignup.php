
<?php
$studentName = $_POST['name'];
$dob = $_POST['dob'];
$fatherName = $_POST['fatherName'];
$fatherId = $_POST['fatherId'];
$fatherTel = $_POST['fatherTel'];
$motherName = $_POST['motherName'];
$motherId = $_POST['motherId'];
$motherTel = $_POST['motherTel'];
$reportCard = $_POST['reportCard'];
$vacciform = $_POST['vacciform'];
$gender = $_POST['gender'];
$hobby = $_POST['hobby'];
$fruits = $_POST['fruits'];
?>
<html>
    <head></head>
<p>Your Information is here: </p>
<Table border="1" cellspacing="0" padding="1">
    <tr>
        <th>Subject</th>
        <th>Information</th>
    </tr>
    <tr>
        <td>Student Name</td>
        <td><?php echo $studentName; ?></td>
    </tr>
    <tr>
        <td>Student's date of Birth</td>
        <td><?php echo $dob; ?></td>
    </tr>
    <tr>
        <td>Student's vaccination form</td>
        <td><?php echo $vacciform; ?></td>
    </tr>
    <tr>
        <td>Student's report card</td>
        <td><?php echo $reportCard; ?></td>
    </tr>
    <tr>
        <td>Father's Name</td>
        <td><?php echo $fatherName; ?></td>
    </tr>
    <tr>
        <td>Father's National Id</td>
        <td><?php echo $fatherId; ?></td>
    </tr>
    <tr>
        <td>Father's Tel</td>
        <td><?php echo $fatherTel; ?></td>
    </tr>
    <tr>
        <td>Mother's name</td>
        <td><?php echo $motherName; ?></td>
    </tr>
    <tr>
        <td>Mother's national Id</td>
        <td><?php echo $motherName; ?></td>
    </tr>
    <tr>
        <td>Mother's Tel</td>
        <td><?php echo $motherTel; ?></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><?php echo $gender; ?></td>
    </tr>
    <tr>
        <td>Hobby</td>
        <td><?php echo $hobby; ?></td>
    </tr>
    <tr>
        <td>Fruits</td>
        <td><?php echo $fruits; ?></td>
    </tr>
</Table>