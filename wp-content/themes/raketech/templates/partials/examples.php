<div>
    <dl>
        <dt>Checkbox</dt>
        <dd><?= $checkbox ? 'true' : 'false'; ?></dd>
        <dt>Checkboxes</dt>
        <dd><?= gc_formatted_list( $checkboxes ); ?></dd>
        <dt>Checkboxes 2</dt>
        <dd><?= gc_formatted_list( $checkboxes_2 ); ?></dd>
        <dt>Image</dt>
        <dd>
            <?php if ( ! empty( $image ) ) : ?>
                <?php gc_lazy_attachment_image( $image ); ?>
            <?php else : ?>
                No file uploaded
            <?php endif; ?>
        </dd>
        <dt>File</dt>
        <dd>
            <?php if ( ! empty( $file ) ) : ?>
                <?php gc_lazy_attachment_image( $file ); ?>
            <?php else : ?>
                No file uploaded
            <?php endif; ?>
        </dd>
        <dt>Multi Post</dt>
        <dd><?= gc_formatted_list( $multi_post ); ?></dd>
        <dt>Post</dt>
        <dd><?= $blog_post; ?></dd>
        <dt>Radio</dt>
        <dd><?= $radio; ?></dd>
        <dt>Radio 2</dt>
        <dd><?= $radio_2; ?></dd>
        <dt>Range</dt>
        <dd><?= $range; ?></dd>
        <dt>Select</dt>
        <dd><?= $select; ?></dd>
        <dt>Select 2</dt>
        <dd><?= $select_2; ?></dd>
        <dt>Text</dt>
        <dd><?= $text; ?></dd>
        <dt>Textarea</dt>
        <dd><?= $textarea; ?></dd>
        <dt>Toggle</dt>
        <dd><?= $toggle ? 'true' : 'false'; ?></dd>
    </dl>
</div>
