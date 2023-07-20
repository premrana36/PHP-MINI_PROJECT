<?php require_once("./head.php"); ?>
<div class="container mt-3" style="font-size: xx-large;">
    <div class="row">
        <div class="col-12">
            <h3>Export in .xlsx</h3>
            <form action="./php/export.fun.php" method="post">
                <div class="my-3">
                    <label class="form-lable">From</label>
                    <input class="form-control mt-1" type="date" name="from" required>
                </div>
                <div class="my-3">
                    <label class="form-lable">To</label>
                    <input class="form-control mt-1" type="date" name="to" required>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="student_name" id="defaultCheck1" checked>
                    <label class="form-check-label" for="defaultCheck1">
                        Student Name
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="father_name" id="defaultCheck2" checked>
                    <label class="form-check-label" for="defaultCheck2">
                        Father Name
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="mother_name" id="defaultCheck3" checked>
                    <label class="form-check-label" for="defaultCheck3">
                        Mother Name
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="student_aadhar_number" id="defaultCheck4" checked>
                    <label class="form-check-label" for="defaultCheck4">
                        Student aadhar number
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="father_mobile_number" id="defaultCheck5" checked>
                    <label class="form-check-label" for="defaultCheck5">
                        Father mobile number
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="permanent_address" id="defaultCheck6" checked>
                    <label class="form-check-label" for="defaultCheck6">
                        Permanent address
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="citizen" id="defaultCheck7" checked>
                    <label class="form-check-label" for="defaultCheck7">
                        Citizen
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gender" id="defaultCheck8" checked>
                    <label class="form-check-label" for="defaultCheck8">
                        Gender
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="category_of_admission" id="defaultCheck9" checked>
                    <label class="form-check-label" for="defaultCheck9">
                        Category of admission
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="parents_annual_income" id="defaultCheck10" checked>
                    <label class="form-check-label" for="defaultCheck10">
                        Parents annual income
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="tenth_merit_rank" id="defaultCheck11" checked>
                    <label class="form-check-label" for="defaultCheck11">
                        10th merit rank
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="email_id" id="defaultCheck12" checked>
                    <label class="form-check-label" for="defaultCheck12">
                        Email id
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="student_whatsapp_number" id="defaultCheck13" checked>
                    <label class="form-check-label" for="defaultCheck13">
                        Student whatsapp number
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="birth_date" id="defaultCheck14" checked>
                    <label class="form-check-label" for="defaultCheck14">
                        Birth date
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="religion" id="defaultCheck15" checked>
                    <label class="form-check-label" for="defaultCheck15">
                        Religion
                    </label>
                </div>
                <button class="btn btn-success my-4" type="submit" name="export" value="export">Export</button>
            </form>
        </div>
    </div>
</div>
<?php require_once("./foot.php") ?>