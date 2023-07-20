<?php
try {
    require_once("./head.php");
    require_once("./php/database.config.php");
    // Connect to database
    $conn = databaseConnector();

    if ($conn != false) {
        // Write sql query
        $sqlQuery = "SELECT * FROM students;";

        // Execute query and store result
        $result = mysqli_query($conn, $sqlQuery);
    } else {
        $msg = "Can't connect to database";
    }
    databaseConnectorClose($conn);
} catch (Exception $e) {
    $msg = "Please try again";
}
?>

<div class="table-responsive my-5">
    <form method="post" action="./php/read.fun.php">
        <table class="table table-sm table-striped" id="myTable">
            <thead>
                <tr class="bg-primary">
                    <th>Student name</th>
                    <th>Father name</th>
                    <th>Mother name</th>
                    <th>Student aadhar no</th>
                    <th>Mobile no</th>
                    <th>Permanent address</th>
                    <th>Citizen</th>
                    <th>Gender</th>
                    <th>Admission</th>
                    <th>Income</th>
                    <th>Merit rank</th>
                    <th>Email</th>
                    <th>Whatsapp no</th>
                    <th>Birth date</th>
                    <th>Religion</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $data["student_name"] ?></td>
                        <td><?= $data["father_name"] ?></td>
                        <td><?= $data["mother_name"] ?></td>
                        <td><?= $data["student_aadhar_number"] ?></td>
                        <td><?= $data["father_mobile_number"] ?></td>
                        <td><?= $data["permanent_address"] ?></td>
                        <td><?= $data["citizen"] ?></td>
                        <td><?= $data["gender"] ?></td>
                        <td><?= $data["category_of_admission"] ?></td>
                        <td><?= $data["parents_annual_income"] ?></td>
                        <td><?= $data["tenth_merit_rank"] ?></td>
                        <td><?= $data["email_id"] ?></td>
                        <td><?= $data["student_whatsapp_number"] ?></td>
                        <td><?= $data["birth_date"] ?></td>
                        <td><?= $data["religion"] ?></td>
                        <td><Button value="<?= $data["r_id"] ?>" name="edit" class="btn btn-warning ">Edit</Button></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </form>
</div>
<?php require_once("./foot.php"); ?>