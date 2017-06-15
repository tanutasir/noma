// $(function() {
//     $('#file_upload').uploadify({
//         'swf'      : '<?php asset("libs/uploadify/uploadify.swf");?>',
//          'uploader' : '/admin/uploadcar'
//         // Put your options here
//     });
// });
$(function() {
    $('.sorted_table').sortable({
        containerSelector: 'table',
        itemPath: '> tbody',
        itemSelector: 'tr',
        placeholder: '<tr class="placeholder"/>'
    });
});
