


<div class="container mx-auto"style="max-width: 400px;">
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
    <?php 
        $attributes = ['class'=>'', 'id'=>'registerForm'];
        echo form_open("Users/register", $attributes); 
    ?>
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
         </div>
        <?php $data = [
                'name'      => 'first_name',
                'id'        => 'first_name',
                'class'     => 'form-control',
                'value'     => set_value('first_name'),
                'placeholder'=> 'First Name',
                'type'      => 'text',
                'maxlength' => '',
                'size'      => '',
                'style'     => ''
            ];
            echo form_input($data); 
        ?>
    </div> <!-- form-group// -->
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
         <?php $data = [
                'name'      => 'last_name',
                'id'        => 'last_name',
                'class'     => 'form-control',
                'value'     => set_value('last_name'),
                'placeholder'=> 'Last Name',
                'type'      => 'text',
                'maxlength' => '',
                'size'      => '',
                'style'     => ''
            ];
            echo form_input($data); 
        ?>    
    </div> <!-- form-group// -->
    <!-- for this, get data in controller and pass to this pagethen recursively load -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
		<select class="form-control">
			<option selected=""> Select Manager</option>
			<option>Designer</option>
			<option>Manager</option>
			<option>Accaunting</option>
		</select>
	</div> <!-- form-group end.// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <?php $data = [
                'name'      => 'create_password',
                'id'        => 'create_password',
                'class'     => 'form-control',
                'value'     => '',
                'placeholder'=> 'Create Password',
                'type'      => 'password',
                'maxlength' => '',
                'size'      => '',
                'style'     => ''
            ];
            echo form_input($data); 
        ?>    
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <?php $data = [
                'name'      => 'repeate_password',
                'id'        => 'repeate_password',
                'class'     => 'form-control',
                'value'     => '',
                'placeholder'=> 'Repeate Password',
                'type'      => 'password',
                'maxlength' => '',
                'size'      => '',
                'style'     => ''
            ];
            echo form_input($data); 
        ?>    
    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <?php $data = [
                'name'    => 'submit_register',
                'id'      => 'submit_register',
                'class'   => 'btn btn-primary btn-block',
                'value'   => '',
                'type'    => 'submit',
                'content' => 'Create Account'
            ];
            echo form_button($data); 
        ?>
    </div> <!-- form-group// -->                                                                   
    <?php echo form_close(); ?>
</article>
</div> <!-- card.// -->

<!-- show validation errors -->
<?php foreach ($errors = $this->form_validation->error_array() as $error) : ?>
        <div class="alert alert-warning" role="alert"><?php echo $error; ?></div>
<?php endforeach; ?>
<?php foreach ((array) $errors = $this->session->flashdata('message') as $msg) : ?>
        <div class="alert alert-warning" role="alert"><?php echo $msg; ?></div>
<?php endforeach; ?>
</div> 
<!--container end.//-->
