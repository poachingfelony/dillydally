<?php echo validation_errors(); ?>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_url();?>assets/assets_login/images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
                </span>
                
				<!-- <form class="login100-form validate-form p-b-33 p-t-5"> -->
                <?php $attributes = ['class'=>'login login100-form validate-form p-b-33 p-t-5', 'id'=>'loginForm'];
                    echo form_open("Users/login", $attributes); ?>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <?php $data = [
                            'name'      => 'user_id',
                            'id'        => 'user_id',
                            'class'     => 'input100',
                            'value'     => '',
                            'placeholder'=> 'User ID',
                            'type'      => 'text',
                            'maxlength' => '100',
                            'size'      => '',
                            'style'     => ''
                        ];
                        echo form_input($data); ?>
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
                        <?php $data = [
                            'name'      => 'password',
                            'id'        => 'password',
                            'class'     => 'input100',
                            'value'     => '',
                            'placeholder'=> 'Password',
                            'type'      => 'password',
                            'maxlength' => '100',
                            'size'      => '',
                            'style'     => ''
                        ];
                        echo form_input($data); ?>
                        <!-- <input class="input100" type="password" name="pass" placeholder="Password"> -->
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
                    <?php $data = [
                        'name'    => 'button',
                        'id'      => 'button',
                        'class'   => 'login100-form-btn',
                        'value'   => 'true',
                        'type'    => 'submit',
                        'content' => 'Submit'
                    ];

                    echo form_button($data); ?>
					</div>
                <?php echo form_close(); ?>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/assets_login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/assets_login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/assets_login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/assets_login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url();?>assets/assets_login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/assets_login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/assets_login/js/main.js"></script>








<script>
    $( document ).ready(function() {
        $("#head").append(`<!--===============================================================================================-->	
            <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/assets_login/images/icons/favicon.ico"/>
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/assets_login/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/assets_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/assets_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/assets_login/vendor/animate/animate.css">
        <!--===============================================================================================-->	
            <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/assets_login/vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/assets_login/vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/assets_login/vendor/select2/select2.min.css">
        <!--===============================================================================================-->	
            <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/assets_login/vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/assets_login/css/util.css">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/assets_login/css/main.css">
        <!--===============================================================================================-->
        `);
    });

    $("#title").val("Login");
</script>