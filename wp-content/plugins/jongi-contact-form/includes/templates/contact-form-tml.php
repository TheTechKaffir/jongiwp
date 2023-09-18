<div class="container">
    <form id="contact_form">
        <!--Preventing bot spam particularly for the wp rest data-->
        <?php wp_nonce_field('wp_rest') ?>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email">
            <div id="emailHelp" class="form-text"><small><em>We'll never share your email with anyone else.</em></small></div>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" id="phone">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary w-100">Submit Form</button>
    </form>
</div>

<script>
    jQuery(document).ready(function($){
        $("#contact_form").submit(function(event){
            event.preventDefault();

            var form_data = $(this); // the 'this' refers to the '#contact_form'
            console.log(form_data.serialize())
            // Ajax Call
            $.ajax({
                type: 'POST',
                url: "<?= get_rest_url(null,'v1/contact-form/submit') ?>",
                data: form_data.serialize()
            })
        })
    });
 
</script>