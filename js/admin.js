jQuery(document).ready(function ($) {
    jQuery('.custom_media_upload').click(function() {
        var send_attachment_bkp = wp.media.editor.send.attachment;
        wp.media.editor.send.attachment = function(props, attachment) {
            jQuery('.custom_media_image').attr('src', attachment.url);
            jQuery('.custom_media_url').val(attachment.url);
// jQuery('.custom_media_id').val(attachment.id);
            wp.media.editor.send.attachment = send_attachment_bkp;
        }
        wp.media.editor.open();
        return false;
    });
});


