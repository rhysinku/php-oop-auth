<div id="update_modal" class="update_modal">
    <div class="update_modal__box">
        <div class="update_modal__header">
            <h3>Update your Profile</h3> <span id="modal_close">&#10006;</span>
        </div>

        <form class="form" id="updateUser">
            <div class="flex-col">
                <div class="input_form">
                    <span>First Name</span>
                    <input name="firstname" type="text" value="<?php echo $currentUser->firstname; ?>"
                        placeholder="New Firstname">
                </div>

                <div class="input_form">
                    <span>Last Name</span>
                    <input name="lastname" type="text" value="<?php echo $currentUser->lastname; ?>"
                        placeholder="New Lastname">
                </div>
            </div>

            <div class="input_form">
                <span>Username</span>
                <input name="username" type="text" value="<?php echo $currentUser->username; ?>"
                    placeholder="New Username">
            </div>
            <div class="input_form">
                <span>Email</span>
                <input name="email" type="text" value="<?php echo $currentUser->email; ?>" placeholder="New Email">
            </div>
            <div class="input_form">
                <span>Password</span>
                <input name="password" type="password" placeholder="New Password">
            </div>
            <div class="input_form">
                <span>Confirm Password</span>
                <input name="confirmpassword" type="password" placeholder="Confirm New Password">
            </div>
            <div class="form__btn_con">
                <button type="submit" class="btn">Update</button>
                <button class="btn">Close</button>
            </div>

        </form>

    </div>
</div>