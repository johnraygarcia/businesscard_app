<div role="main" class="main">
    <div class="inner">
        <div class="form-wrap transparent">
            <h1>Contact Information</h1>       
            <?php echo form_open('', array('method'=>'post', 'class'=>'contact-form')) ?>
            <?php echo validation_errors(); ?>
            <?php 
                if(isset($success) && $success == true) {
                    echo "<p class='success_message'>Successfully Saved. <a href='".  site_url("TwentyFourSeven_Controller/viewBusinessCard?id=" . $contactID ) . "'><strong>Click to view your Business Card.</strong></a></p>";                    
                }
            ?>
                <div class="left">
                    <div class="form-el-con"><label for="FirstName">First Name</label><input type="text" name="FirstName" class="required" <?php echo set_value("FirstName") ?> ></div>
                    <div class="form-el-con"><label for="LastName">Last Name</label><input type="text" name="LastName" class="required" <?php echo set_value("LastName") ?> ></div>
                    <div class="form-el-con"><label for="LastName">Phone</label><input type="text" name="Phone" class="required" <?php echo set_value("Phone") ?> ></div>
                    <div class="form-el-con"><label for="Email">Email</label><input type="text" name="Email" class="required" <?php echo set_value("Email") ?> ></div>
                    <div class="form-el-con"><label for="Address">Address</label><textarea name="Address" class="required" <?php echo set_value("Address") ?> ></textarea></div>
                    <div class="form-el-con"><label for="City">City</label><input type="text" name="City" class="required" <?php echo set_value("City") ?> ></div>
                    <div class="form-el-con"><label for="State">State</label><input type="text" name="State" class="required" <?php echo set_value("State") ?> ></div>                       
                    <div class="form-el-con"><label for="Zipcode">Zip Code</label><input type="text" name="Zipcode" class="required" <?php echo set_value("Zipcode") ?> ></div>
                    <div class="clearfix"><input type="submit" value="Submit"></div>        
                </div>
            </form>
        </div>
    </div>

</div>
<footer>
</footer>

</body>
</html>