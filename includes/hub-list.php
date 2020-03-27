<?php

$posts = get_posts(array(
    'post_type'         => 'mvv_hub',
    'posts_per_page'    =>  -1,
    'orderby'           => 'title',
    'order'              => 'ASC'
));

?>


<table class="default-table">
    <thead>
        <tr>
            <th><?php pll_e('offer_table_name') ?></th>
            <th><?php pll_e('offer_table_location') ?></th>
            <th><?php pll_e('offer_table_offer') ?></th>
            <th><?php pll_e('offer_table_capacity') ?></th>
            <th><?php pll_e('offer_table_contact') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($posts as $post) : ?>
            <tr>
                <td>
                    <a href="{{hub.link}}" target="_blank"><?php echo get_the_title() ?></a>
                </td>
                <td>
                    <?php echo get_post_meta($post->ID, 'hub_city', true) ?><br />
                    <?php echo get_post_meta($post->ID, 'hub_state', true) ?><br />
                    <?php echo get_post_meta($post->ID, 'hub_country', true) ?>
                </td>
                <td>
                    <?php echo nl2br( get_post_meta($post->ID, 'hub_offer', true) ) ?>
                </td>
                <td>
                    <?php echo nl2br( get_post_meta($post->ID, 'hub_capacity', true) ) ?>
                </td>
                <td>
                    <?php echo get_post_meta($post->ID, 'hub_contact_person', true) ?><br />
                    <?php echo get_post_meta($post->ID, 'hub_email', true) ?><br />
                    <?php echo get_post_meta($post->ID, 'hub_twitter', true) ?><br />
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>