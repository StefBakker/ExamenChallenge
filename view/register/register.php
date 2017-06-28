<div class="container">
    <br><br><br><br>
    <h1 class="well">Registration Form</h1>
    <div class="col-lg-12 well">
        <div class="row">
            <form action="<?= URL ?>register/createUser" method="POST">
                <div class="col-sm-12">
                    <!-- Username -->
                    <div class="row">
                        <div class="col-sm-5 form-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" placeholder="Enter Username Here.." class="form-control">
                        </div>
                        <!-- Password -->
                        <div class="col-sm-5 form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Enter Password Here.." class="form-control">
                        </div>
                    </div>
                    <!-- First Name -->
                    <div class="row">
                        <div class="col-sm-5 form-group" for="firstname">
                            <label for="firstname">First Name</label>
                            <input type="text" id="firstname" name="firstname" placeholder="Enter First Name Here.." class="form-control">
                        </div>
                        <!-- Last Name -->
                        <div class="col-sm-5 form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" id="lastname" name="lastname" placeholder="Enter Last Name Here.." class="form-control">
                        </div>
                    </div>
                    <!-- Address -->
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea  type="text" id="address" name="address" placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
                    </div>
                    <!-- City -->
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label for="city">City</label>
                            <input type="text" id="city" name="city" placeholder="Enter City Name Here.." class="form-control">
                        </div>
                        <!-- Zip -->
                        <div class="col-sm-4 form-group">
                            <label for="postalcode">Zip</label>
                            <input id="postalcode" name="postalcode" placeholder="Enter Zip Code Here.." class="form-control">
                        </div>
                    </div>
                    <!-- Phone number -->
                    <div class="form-group">
                        <label for="phonenumber">Phone Number</label>
                        <input type="text" id="phonenumber" name="phonenumber" placeholder="Enter Phone Number Here.." class="form-control">
                    </div>
                    <!-- E-mail -->
                    <div class="form-group">
                        <label for="Email">Email Address</label>
                        <input type="text" id="email" name="email" placeholder="Enter Email Address Here.." class="form-control">
                    </div>
                        <input type="hidden" name="stylist" value=0>
                    <button class="btn btn-success">Register!</button>
                </div>
            </form>
        </div>
    </div>
</div>