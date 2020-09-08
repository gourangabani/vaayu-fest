$(document).ready(function () {
    if (getParams(window.location.href)['request'] == 'themes') {
        $('#read-theme-table').DataTable({
            ajax: './handler.php?request=themes',
            columnDefs: [{
                targets: -1,
                render: function (data, type, row) {
                    return '<a href=\"https://candidexpressions.net/admin/update' + '?request=theme' + '&type=update' + '&id=' + row.theme_id + '\" role=\"button\" target=\"_blank\" class=\"btn btn-warning\">Update</a>';
                }
            }],
            columns: [{
                    data: 'theme_id'
                },
                {
                    data: 'theme_title'
                },
                {
                    data: 'theme_image_filename'
                },
                {
                    data: 'update'
                }
            ]
        });
    } else if (getParams(window.location.href)['request'] == 'posts') {
        $('#read-post-table').DataTable({
            ajax: './handler.php?request=posts',
            columnDefs: [{
                targets: -1,
                render: function (data, type, row) {
                    return '<a href=\"https://candidexpressions.net/admin/update' + '?request=post' + '&type=update' + '&id=' + row.post_id + '\" role=\"button\" target=\"_blank\" class=\"btn btn-warning\">Update</a>';
                }
            }],
            columns: [{
                    data: 'post_id'
                },
                {
                    data: 'post_title'
                },
                {
                    data: 'creator_name'
                },
                {
                    data: 'partner_name'
                },
                {
                    data: 'post_date'
                },
                {
                    data: 'theme_title'
                },
                {
                    data: 'post_creative_filename'
                },
                {
                    data: 'post_type'
                },
                {
                    data: 'post_is_choice'
                },
                {
                    data: 'update'
                }
            ]
        });
    } else if (getParams(window.location.href)['request'] == 'elements') {
        $('#read-element-table').DataTable({
            ajax: './handler.php?request=elements',
            columnDefs: [{
                targets: -1,
                render: function (data, type, row) {
                    return '<a href=\"https://candidexpressions.net/admin/update' + '?request=element' + '&type=update' + '&id=' + row.element_id + '\" role=\"button\" target=\"_blank\" class=\"btn btn-warning\">Update</a>';
                }
            }],
            columns: [{
                    data: 'element_id'
                },
                {
                    data: 'element_type'
                },
                {
                    data: 'post_title'
                },
                {
                    data: 'update'
                }
            ]
        });
    } else if (getParams(window.location.href)['request'] == 'creators') {
        $('#read-creator-table').DataTable({
            ajax: './handler.php?request=creators',
            columnDefs: [{
                targets: -1,
                render: function (data, type, row) {
                    return '<a href=\"https://candidexpressions.net/admin/update' + '?request=creator' + '&type=update' + '&id=' + row.creator_id + '\" role=\"button\" target=\"_blank\" class=\"btn btn-warning\">Update</a>';
                }
            }],
            columns: [{
                    data: 'creator_id'
                },
                {
                    data: 'creator_name'
                },
                {
                    data: 'creator_instagram_url'
                },
                {
                    data: 'creator_facebook_url'
                },
                {
                    data: 'creator_email'
                },
                {
                    data: 'update'
                }
            ]
        });
    } else if (getParams(window.location.href)['request'] == 'partners') {
        $('#read-partner-table').DataTable({
            ajax: './handler.php?request=partners',
            columnDefs: [{
                targets: -1,
                render: function (data, type, row) {
                    return '<a href=\"https://candidexpressions.net/admin/update' + '?request=partner' + '&type=update' + '&id=' + row.partner_id + '\" role=\"button\" target=\"_blank\" class=\"btn btn-warning\">Update</a>';
                }
            }],
            columns: [{
                    data: 'partner_id'
                },
                {
                    data: 'partner_name'
                },
                {
                    data: 'partner_banner_filename'
                },
                {
                    data: 'partner_email'
                },
                {
                    data: 'partner_phone'
                },
                {
                    data: 'update'
                }
            ]
        });
    } else if (getParams(window.location.href)['request'] == 'events') {
        $('#read-event-table').DataTable({
            ajax: './handler.php?request=events',
            columnDefs: [{
                targets: -1,
                render: function (data, type, row) {
                    return '<a href=\"https://candidexpressions.net/admin/update' + '?request=event' + '&type=update' + '&id=' + row.event_id + '\" role=\"button\" target=\"_blank\" class=\"btn btn-warning\">Update</a>';
                },
            }],
            columns: [{
                    data: 'event_id'
                },
                {
                    data: 'event_title'
                },
                {
                    data: 'event_date'
                },
                {
                    data: 'event_time'
                },
                {
                    data: 'event_content_filename'
                },
                {
                    data: 'partner_name'
                },
                {
                    data: 'update'
                }
            ]
        });
    } else if (getParams(window.location.href)['request'] == 'chronicles') {
        $('#read-chronicle-table').DataTable({
            ajax: './handler.php?request=chronicles',
            columnDefs: [{
                targets: -1,
                render: function (data, type, row) {
                    return '<a href=\"https://candidexpressions.net/admin/update' + '?request=chronicle' + '&type=update' + '&id=' + row.chronicle_id + '\" role=\"button\" target=\"_blank\" class=\"btn btn-warning\">Update</a>';
                }
            }],
            columns: [{
                    data: 'chronicle_id'
                },
                {
                    data: 'chronicle_speaker_name'
                },
                {
                    data: 'chronicle_chapter'
                },
                {
                    data: 'chronicle_speaker_image_filename'
                },
                {
                    data: 'chronicle_video_filename'
                },
                {
                    data: 'update'
                }
            ]
        });
    }
});