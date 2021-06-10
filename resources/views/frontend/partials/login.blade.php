<div id="nt_login_canvas" class="nt_fk_canvas dn lazyload">
    <form id="customer_login" class="nt_mini_cart flex column h__100 is_selected">
        <div class="mini_cart_header flex fl_between al_center">
            <div class="h3 widget-title tu fs__16 mg__0">Login</div>
            <i class="close_pp pegk pe-7s-close ts__03 cd"></i></div>
        <div class="mini_cart_wrap">
            <div class="mini_cart_content fixcl-scroll">
                <div class="fixcl-scroll-content"><p class="form-row">
                    <label for="CustomerEmail">Email <span class="required">*</span></label>
                    <input type="email" name="email" id="CustomerEmail" autocomplete="email" autocapitalize="off">
                </p>
                    <p class="form-row">
                        <label for="CustomerPassword">Password <span class="required">*</span></label>
                        <input type="password" value="" name="password" autocomplete="current-password" id="CustomerPassword">
                    </p><input type="submit" class="button button_primary w__100 tu js_add_ld" value="Sign In">
                    <br>
                    <p class="mb__10 mt__20">New customer?
                        <a href="#" data-id="#RegisterForm" class="link_acc">Create your account</a>
                    </p>
                    <p>Lost password?
                        <a href="#" data-id="#RecoverForm" class="link_acc">Recover password</a>
                    </p>
                </div>
            </div>
        </div>
    </form>

    <form id="RecoverForm" class="nt_mini_cart flex column h__100">
        <div class="mini_cart_header flex fl_between al_center">
            <div class="h3 widget-title tu fs__16 mg__0">Recover password</div>
            <i class="close_pp pegk pe-7s-close ts__03 cd"></i></div>
        <div class="mini_cart_wrap">
            <div class="mini_cart_content fixcl-scroll">
                <div class="fixcl-scroll-content">
                    <p class="form-row">
                        <label for="RecoverEmail">Email address</label>
                        <input type="email" value="" name="email" id="RecoverEmail" class="input-full" autocomplete="email" autocapitalize="off">
                    </p>
                    <input type="submit" class="button button_primary w__100 tu js_add_ld" value="Reset Password">
                    <br>
                    <p class="mb__10 mt__20">Remembered your password?
                        <a href="#" data-id="#customer_login" class="link_acc">Back to login</a>
                    </p>
                </div>
            </div>
        </div>
    </form>

    <form id="RegisterForm" class="nt_mini_cart flex column h__100">
        <div class="mini_cart_header flex fl_between al_center">
            <div class="h3 widget-title tu fs__16 mg__0">Register</div>
            <i class="close_pp pegk pe-7s-close ts__03 cd"></i>
        </div>
        <div class="mini_cart_wrap">
            <div class="mini_cart_content fixcl-scroll">
                <div class="fixcl-scroll-content">
                    <p class="form-row">
                        <label for="-FirstName">First Name</label>
                        <input type="text" name="f-name" id="-FirstName" autocomplete="given-name">
                    </p>
                    <p class="form-row">
                        <label for="-LastName">Last Name</label>
                        <input type="text" name="last_name" id="-LastName" autocomplete="family-name">
                    </p>
                    <p class="form-row">
                        <label for="-email">Email <span class="required">*</span></label>
                        <input type="email" name="email" id="-email" class="" autocapitalize="off" autocomplete="email" aria-required="true">
                    </p>
                    <p class="form-row">
                        <label for="-password">Password <span class="required">*</span></label>
                        <input type="password" name="password" id="-password" class="" autocomplete="current-password" aria-required="true">
                    </p>
                    <input type="submit" value="Register" class="button button_primary w__100 tu js_add_ld">
                    <br>
                    <p class="mb__10 mt__20">Already have an account?
                        <a href="#" data-id="#customer_login" class="link_acc">Login here</a>
                    </p>
                </div>
            </div>
        </div>
    </form>
</div>
