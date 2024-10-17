<?php include 'include/header.php'?>



<section class="container-fluid" >
    <div class="container contact-form">
        <form action="submit" >
            <h2 class="text-center section-title__title">Doctor Registration</h2>
            <h5 class="text-center mb-3">Personal Information</h5>
            <div class="row">
                <div class="select-field col-lg-4 col-md-6">
                    <select name="profession" type="text"  name="profession" required>
                        <option value=""></option>
                        <option value="doctor">Doctor</option>
                        <option value="pharmasist">Pharmasist</option>
                    </select>
                    <label>Profession</label>
                </div>
                <div class="input-field col-lg-4 col-md-6">
                    <input type="text" name="name" required>
                    <label>Full Name</label>
                </div>
                <div class="input-field col-lg-4 col-md-6">

                    <input type="number" name="age" required>
                    <label>Age </label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col-lg-4 col-md-6">
                    <input type="text" name="sex" required>
                    <label>Sex</label>
                </div>
                <div class="input-field col-lg-4 col-md-6">
                    <input type="number" name="phone" required>
                    <label>Phone</label>
                </div>
                <div class="input-field col-lg-4 col-md-6">
                    <input type="text" name="registration" required>
                    <label>Registration No.</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col-lg-4 col-md-6">
                    <input type="email" name="email" required>
                    <label>Email Id</label>
                </div>
                <div class="input-field col-lg-8 col-md-9">
                    <input type="text" name="relative" required>
                    <label>Father/Mother/Husband/Wife</label>
                </div>
            </div>
            <h5 class="text-center mb-3 mt-2">Address</h5>
            <div class="row">
                <div class="input-field col-lg-4 col-md-6">
                    <input type="text" name="village" required>
                    <label>Village</label>
                </div>
                <div class="input-field col-lg-4 col-md-6">
                    <input type="text" name="ps" required>
                    <label>Police Station</label>
                </div>
                <div class="input-field col-lg-4 col-md-6">
                    <input type="text" name="pin" required>
                    <label>Postal Code</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col-lg-4 col-md-6">
                    <input type="text" name="po" required>
                    <label>Post Office</label>
                </div>
                <div class="input-field col-lg-4 col-md-6">
                    <input type="text" name="district" required>
                    <label>District</label>
                </div>
                <div class="input-field col-lg-4 col-md-6">
                    <input type="text" name="state" required>
                    <label>State</label>
                </div>
            </div>
            <h5 class="text-center mb-3 mt-2">Work Address</h5>
            <div class="row">
                <div class="input-field col-lg-6 col-md-6">
                    <input type="text" name="buildingNo" required>
                    <label>Building No.</label>
                </div>
                <div class="input-field col-lg-6 col-md-6">
                    <input type="text" name="landmark" required>
                    <label>Landmark</label>
                </div>

            </div>
            <div class="row">
                <div class="input-field col-lg-6 col-md-6">
                    <input type="text" name="workDistrict" required>
                    <label>Work District</label>
                </div>
                <div class="input-field col-lg-6 col-md-6">
                    <input type="text" name="state" required>
                    <label>State</label>
                </div>

            </div>
            <div class="row">
                <button class="form-next-btn justify-content-center text-center align-center " type="submit">
                    Submit
                </button>
            </div>



        </form>

    </div>
</section>




<?php include 'include/footer.php'?>