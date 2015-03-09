<table class="table table-bordered table-hover table-striped">
    <tr>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <?php
    foreach ($posts as $post) {
        $meta = get_post_meta($post->ID);
        ?>
        <tr>
            <td><pre><?php print_r($meta); ?></pre></td>
            <td></td>
            <td></td>
        </tr>
    <?php }
    ?>
</table>

