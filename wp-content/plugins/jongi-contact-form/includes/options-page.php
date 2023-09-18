<?php 
// NameSpaces
use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Load Carbon Fields Hook
function load_carbon_fields()
{
    // Boot Carbon Fields
    \Carbon_Fields\Carbon_Fields::boot();
}
// Create Options Page Hook
function create_options_page()
{
    Container::make( 'theme_options', __( 'Jongi Contact Form' ) )
    ->set_icon('dashicons-feedback')
    ->add_fields( array(
        // The Checkbox
        Field::make( 'checkbox', 'jcf_active', __( 'Active' ) ),
        // The Email Recipient Field
        Field::make( 'text', 'jcf_recipients', __( 'Email Recipient' ) )->set_help_text( 'The email address of the recepient' ),
        // The Email Submission Confirmation Field
        Field::make( 'textarea', 'jcf_confirm_message', __( 'Confirmation Message' ) )->set_help_text( 'The message that you wish the person submitting the form, to see' )
    ) );
}

// Hook in to WP Hooks system
add_action('after_setup_theme','load_carbon_fields'); // created new function/hook 'load_carbon_fields'
add_action('carbon_fields_register_fields','create_options_page'); // created new function/hook 'create_options_page'