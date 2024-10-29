
<div id="success_message" class="alert alert-success" style="display:none"></div>

<form id="enquiry">
    <h2>Sending an Enquiry about <?php the_title();?></h2>
    
    <input type="hidden" name="registration" value="<?php the_field('registration');?>">
    <!-- <input type="hidden" name="post_id" value="<?php //echo get_the_ID();?>"> -->
    <div class="form-group row">
        <div class="col-lg-6">
            <label for="fname">First Name</label>
            <input type="text" name="fname" placeholder="First Name" class="form-control" required>
        </div>

        <div class="col-lg-6">
        <label for="lname">Last Name</label>
            <input type="text" name="lname" placeholder="Last Name" class="form-control" required>
        </div>
    </div> 
<br>
    <div class="form-group row">
        <div class="col-lg-6">
        <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email Address" class="form-control" required>
        </div>

        <div class="col-lg-6">
        <label for="phone">Phone</label>
            <input type="tel" name="phone" placeholder="Phone" class="form-control" required>
        </div>
    </div>
<br>
    <div class="form-group">
            <label for="enquiry">Enquiry</label>
            <textarea name="enquiry" class="form-control" placeholder="Your Enquiry" required></textarea>
    </div>
<br>
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-block">Send your enquiry</button>
    </div>


</form>

<script>

    (function($){
        $('#enquiry').submit(function(event){
          event.preventDefault();
          var endpoint = '<?php echo admin_url('admin-ajax.php');?>';
          var form = $('#enquiry').serialize();
          var formdata = new FormData;
          formdata.append('action','enquiry');
          formdata.append('enquiry','form');

          $.ajax(endpoint,{
                type:'POST',
                data:formdata,
                processData:false,
                contentType:false,

                success:function(res){
                   $('#enquiry').fadeOut(200);

                    $('#success_message').text('Thanks for your enquiry').show();
                    $('#enquiry').trigger('reset');
                    $('#enquiry').fadeIn(500);
                },
                error: function(err){

                }
          })
    })
   
    })(jQuery)
</script>