<?php get_header(); ?>

<?php require 'includes/navigation.php' ?>


<?php

$random_password = wp_generate_password( $length = 12, $include_standard_special_chars = true );
$user_id = wp_create_user($_POST['hub_email'], $random_password, $_POST['hub_email']);

$u = new WP_User( $user_id );
$u->remove_role( 'subscriber' );
$u->add_role( 'author' );


$post_id = wp_insert_post( array(
    'post_author'           => $user_id,
    'post_title'            => $_POST['hub_name'],
    'post_type'             => 'mvv_hub',
    'post_name'             => $_POST['hub_city'] . '_' . $_POST['hub_name']
) );

echo $post_id;


$fields = array(
    "hub_email",
    "hub_city",
    "hub_state",
    "hub_country",
    "hub_contact_person",
    "hub_twitter",
    "hub_phone",
    "hub_address",
    "hub_offer",
    "hub_capacity",
    "hub_description",
    "hub_for_free",
    "hub_for_net_cost"
);

foreach ($fields as $field) {
    update_post_meta($post_id, $field, $_POST[$field]);
}



?>

<section>
    <div class="container flex">
        <div class="text editable">
            <h2><?php pll_e('hub_registration_success_message_header') ?></h2>
            <p><?php pll_e('hub_registration_success_message') ?></p>
        </div>
    </div>
    <div class="container flex" style="margin-top: 1rem;">
    <div class="text editable">
            <div class="button">
                <a style="background: {{ plan.color }}" href="https://join.slack.com/t/makervsvirus/shared_invite/zt-d0jrseye-16B4eZm1lkX~Hi8V7zFbiw" target="_blank">
                    <?php pll_e('support_join_slack') ?></a>
            </div>
        </div>
        <div class="text editable">
            <div class="button">
                <a style="background: {{ plan.color }}" href="/wp-admin" target="_blank">
                    <?php pll_e('login_to_wordpress') ?></a>
            </div>
        </div>
    </div>
</section>