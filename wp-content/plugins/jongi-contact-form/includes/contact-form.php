<?php 

// Show the contact form:
function show_contact_form()
{
    include_once JCF_PLUGIN_PATH . '/includes/templates/contact-form-tml.php';
}

// Load the plugin files (CSS, Scripts, etc):
function jcf_files()
{
   wp_enqueue_style('jcf_bootstrap','//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
   wp_enqueue_script('jcf_jquery','//code.jquery.com/jquery-3.7.1.min.js');
}

// Create REST Endpoint:
/** WP REST API START */
function create_rest_endpoint()
{
    register_rest_route('v1/contact-form','submit',[
        'methods'   => 'POST',
        'callback'  => 'handle_enquiry' // Call Back to handle our Data
    ]);
}

// Function to handle our Data
function handle_enquiry($data)
{
    $params = $data->get_params();

    // Verify the nonce 
    if(!wp_verify_nonce($params['_wpnonce'],'wp_rest'))
    {
        return new WP_REST_Response('Message not sent',422);
        // HTTP code 422 : the server understands the content type of the request entity, and the syntax of the request entity is correct, but it was unable to process the contained instructions
    }

    // Unset the unnecessary values 
    unset($params['_wpnonce']);
    unset($params['_wp_http_referer']);

    // Send the email message
    $headers = [];
    $admin_email = get_bloginfo('admin_email');
    $admin_name = get_bloginfo('name');

    $headers[] = "From: {$admin_name} <{$admin_email}>";
    $headers[] = "Reply-to: {$params['name']} <{$params['email']}>";
    $headers[] = "Content-type: text/html";
    $message = [];
    $subject = "New Enquiry from {$params['name']}";
    $message.= "Message has been received from {$params['name']} <br>";

    echo 'DETAILS:';

    foreach($params as $label => $value)
    {
        $message.= ucfirst($label) . ': ' .$value . '<br>';
    }

    wp_mail($admin_email, $subject, $message, $headers);

    return new WP_REST_Response('Message sent successfully',200);
}
/** WP REST API END */

add_shortcode('jongi_contact_form','show_contact_form'); // Hook to call the contact form template (contact-form-tml.php)
add_action('wp_enqueue_scripts','jcf_files'); // Hook to load CSS,and JS 
add_action('rest_api_init','create_rest_endpoint');  // Hook to create REST ENDPOINT