
<div class="container">
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
    <h4 class="card-title mt-3 text-center">Success</h4>
    <?php if(isset($register_id)) :?>
        <?php $this->session->set_flashdata('user_id', $register_id); ?>
        <div class="alert alert-success" role="alert">
            <p>New user made with the ID: <b><?php echo $register_id; ?></b></p>
        </div>
        <div class="alert alert-warning" role="alert">
            <i>Notice: Use this ID along with the provided password to log into the applicaiton.</i>
        </div>
    <?php else: ?>
        No recent registration available.
    <?php endif;
        echo form_open(base_url()."Users/register"); 
        $data = [
            'class'   => 'btn btn-primary btn-block',
            'type'    => 'button'
        ];
        echo anchor('Users/register', 'Got It', $data);
        echo form_close();
    ?>
</article>
</div>
</div>