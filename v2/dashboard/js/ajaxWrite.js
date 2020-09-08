$(document).ready(function () {
    let progressPlaceholder = $('#progress-placeholder');
    let responsePlaceholder = $('#response-placeholder');
    progressPlaceholder.removeClass('spinner-border');

    function resetPlaceholders() {
        progressPlaceholder.removeClass('spinner-border');
        responsePlaceholder.removeClass('alert-info');
        responsePlaceholder.removeClass('alert-success');
        responsePlaceholder.removeClass('alert-danger');
    }

    function populateInProcessPlaceholders() {
        progressPlaceholder.addClass('spinner-border');
        responsePlaceholder.addClass('alert-info');
    }

    function beforeSend() {
        progressPlaceholder.addClass('spinner-border');
        responsePlaceholder.addClass('alert-info');
        responsePlaceholder.html('Loading...');
    }

    function ajaxFetch(request) {
        return {
            data: 'data',
            dataType: 'json',
            type: 'GET',
            url: './handler.php' + '?request=' + request + '&type=' + getParams(window.location.href)['type'] + '&id=' + getParams(window.location.href)['id'],
            beforeSend: beforeSend(),
        };
    }

    function ajaxSend(data) {
        return {
            xhr: function () {
                xhr = new XMLHttpRequest;
                xhr.upload.onprogress = function (event) {
                    if (event.lengthComputable) {
                        let progressPercentage = event.loaded / event.total * 100;
                        populateInProcessPlaceholders();
                        responsePlaceholder.html(progressPercentage.toFixed(2) + '%');
                    }
                };
                return xhr;
            },
            data: data,
            dataType: 'json',
            type: 'POST',
            url: './handler.php',
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: beforeSend(),
        };
    }

    function ajaxFetchOnDone(response) {
        resetPlaceholders();
        responsePlaceholder.addClass('alert-success');
        responsePlaceholder.html(response.comment);
        setTimeout(function () {
            resetPlaceholders();
        }, 3000);
    }

    function ajaxSendOnSuccess(response) {
        resetPlaceholders();
        if (response.status == true) {
            responsePlaceholder.addClass('alert-success');
            responsePlaceholder.html(response.comment);
            setTimeout(function () {
                resetPlaceholders();
                responsePlaceholder.addClass('alert-info');
                responsePlaceholder.html('The page will close now.');
                window.close();
            }, 3000);
        } else {
            responsePlaceholder.addClass('alert-danger');
            responsePlaceholder.html(response.comment);
        }
    }

    function ajaxOnFail(response) {
        resetPlaceholders();
        responsePlaceholder.addClass('alert-danger');
        responsePlaceholder.html(response.comment);
    }

    if (getParams(window.location.href)['type'] == 'update') {
        if ((getParams(window.location.href)['request'] == 'theme') && ($('#update-theme-form').length != 0)) {
            $.ajax(ajaxFetch('themes'))
                .done(function (response) {
                    $('#theme-id-update').val(response.data.theme_id);
                    $('#theme-slug-update').val(response.data.theme_slug);
                    $('#theme-title-update').val(response.data.theme_title);
                    $('#theme-description-update').val(response.data.theme_description);
                    $('#theme-image-filename-update').val(response.data.theme_image_filename);
                    ajaxFetchOnDone(response);
                })
                .fail(function (response) {
                    ajaxOnFail(response);
                });
            let submittedForm = $('#update-theme-form');
            $(submittedForm).submit(function (event) {
                event.preventDefault();
                let submittedData = new FormData(this);
                let filename = $('#theme-slug-update').val().replace(' ', '-').toLowerCase();
                if (($('#sent-image').val()) != '') {
                    let extension = getFileExtension(($('#sent-image').val()).substring(($('#sent-image').val()).lastIndexOf('/') + 1));
                    submittedData.set('theme_image_filename', filename + '-image' + extension);
                }
                $.ajax(ajaxSend(submittedData))
                    .done(function (response) {
                        ajaxSendOnSuccess(response);
                    })
                    .fail(function (response) {
                        ajaxOnFail(response);
                    });
            })
        } else if ((getParams(window.location.href)['request'] == 'post') && ($('#update-post-form').length != 0)) {
            $.ajax(ajaxFetch('posts'))
                .done(function (response) {
                    $('#post-id-update').val(response.data.post_id);
                    $('#post-slug-update').val(response.data.post_slug);
                    $('#post-title-update').val(response.data.post_title);
                    $('#post-creator-id-update').val(response.data.post_creator_id);
                    $('#post-partner-id-update').val(response.data.post_partner_id);
                    $('#post-date-update').val(response.data.post_date);
                    $('#post-theme-id-update').val(response.data.post_theme_id);
                    $('#post-creative-filename-update').val(response.data.post_creative_filename);
                    $('#post-creative-artist-update').val(response.data.post_creative_artist);
                    $('#post-creative-source-update').val(response.data.post_creative_source);
                    $('#post-type-update').val(response.data.post_type);
                    $('#post-is-choice-update').val(response.data.post_is_choice);
                    $('#post-deleted-update').val(response.data.post_deleted);
                    ajaxFetchOnDone(response);
                })
                .fail(function (response) {
                    ajaxOnFail(response);
                });
            let submittedForm = $('#update-post-form');
            $(submittedForm).submit(function (event) {
                event.preventDefault();
                let submittedData = new FormData(this);
                let filename = $('#post-slug-update').val().replace(' ', '-').toLowerCase();
                if (($('#sent-image').val()) != '') {
                    let extension = getFileExtension(($('#sent-image').val()).substring(($('#sent-image').val()).lastIndexOf('/') + 1));
                    submittedData.set('post_creative_filename', filename + '-image' + extension);
                }
                $.ajax(ajaxSend(submittedData))
                    .done(function (response) {
                        ajaxSendOnSuccess(response);
                    })
                    .fail(function (response) {
                        ajaxOnFail(response);
                    });
            })
        } else if ((getParams(window.location.href)['request'] == 'element') && ($('#update-element-form').length != 0)) {
            let elementTextEditor = new Quill('#element-text-editor', {
                theme: 'bubble',
                placeholder: 'Text',
                modules: {
                    toolbar: false
                }
            });
            $.ajax(ajaxFetch('elements'))
                .done(function (response) {
                    $('#element-id-update').val(response.data.element_id);
                    $('#element-type-update').val(response.data.element_type);
                    $('#element-post-id-update').val(response.data.element_post_id);
                    $('#element-content-update').val(response.data.element_content);
                    elementTextEditor.root.innerHTML = response.data.element_content;
                    ajaxFetchOnDone(response);
                })
                .fail(function (response) {
                    ajaxOnFail(response);
                });
            let submittedForm = $('#update-element-form');
            $(submittedForm).submit(function (event) {
                event.preventDefault();
                let submittedData = new FormData(this);
                if (($('#element-type-update').val()) == 'text') {
                    submittedData.set('element_content', elementTextEditor.root.innerHTML);
                    $.ajax(ajaxSend(submittedData))
                        .done(function (response) {
                            ajaxSendOnSuccess(response);
                        })
                        .fail(function (response) {
                            ajaxOnFail(response);
                        });
                } else if ((($('#element-type-update').val()) == 'audio') || (($('#element-type-update').val()) == 'video')) {
                    submittedData.set('element_content', $('#element-url-update').val());
                    $.ajax(ajaxSend(submittedData))
                        .done(function (response) {
                            ajaxSendOnSuccess(response);
                        })
                        .fail(function (response) {
                            ajaxOnFail(response);
                        });
                } else if (($('#element-type-update').val()) == 'image') {
                    let element_post_slug;
                    $.ajax({
                            data: 'data',
                            dataType: 'json',
                            type: 'GET',
                            url: './handler.php' + '?request=' + 'element_post_slug' + '&type=' + getParams(window.location.href)['type'] + '&id=' + ($('#element-post-id-update').val()),
                            beforeSend: beforeSend(),
                        })
                        .done(function (response) {
                            console.log(response.data.post_slug);
                            element_post_slug = response.data.post_slug;
                            let filename = element_post_slug.replace(' ', '-').toLowerCase();
                            let extension = getFileExtension(($('#sent-image').val()).substring(($('#sent-image').val()).lastIndexOf('/') + 1));
                            submittedData.set('element_content', filename + '-image' + extension);
                            $.ajax(ajaxSend(submittedData))
                                .done(function (response) {
                                    ajaxSendOnSuccess(response);
                                })
                                .fail(function (response) {
                                    ajaxOnFail(response);
                                });
                        })
                        .fail(function (response) {
                            ajaxOnFail(response);
                        });
                }
            })
        } else if ((getParams(window.location.href)['request'] == 'creator') && ($('#update-creator-form').length != 0)) {
            $.ajax(ajaxFetch('creators'))
                .done(function (response) {
                    $('#creator-id-update').val(response.data.creator_id);
                    $('#creator-slug-update').val(response.data.creator_slug);
                    $('#creator-name-update').val(response.data.creator_name);
                    $('#creator-website-url-update').val(response.data.creator_website_url);
                    $('#creator-instagram-url-update').val(response.data.creator_instagram_url);
                    $('#creator-facebook-url-update').val(response.data.creator_facebook_url);
                    $('#creator-email-update').val(response.data.creator_email);
                    $('#creator-deleted-update').val(response.data.creator_deleted);
                    ajaxFetchOnDone(response);
                })
                .fail(function (response) {
                    ajaxOnFail(response);
                });
            let submittedForm = $('#update-creator-form');
            $(submittedForm).submit(function (event) {
                event.preventDefault();
                let submittedData = new FormData(this);
                $.ajax(ajaxSend(submittedData))
                    .done(function (response) {
                        ajaxSendOnSuccess(response);
                    })
                    .fail(function (response) {
                        ajaxOnFail(response);
                    });
            })
        } else if ((getParams(window.location.href)['request'] == 'partner') && ($('#update-partner-form').length != 0)) {
            let partner_informationTextEditor = new Quill('#partner-information-text-editor', {
                theme: 'bubble',
                placeholder: 'Text',
                modules: {
                    toolbar: false
                }
            });
            $.ajax(ajaxFetch('partners'))
                .done(function (response) {
                    $('#partner-id-update').val(response.data.partner_id);
                    $('#partner-slug-update').val(response.data.partner_slug);
                    $('#partner-name-update').val(response.data.partner_name);
                    $('#partner-banner-filename-update').val(response.data.partner_banner_filename);
                    $('#partner-information-text-update').val(response.data.partner_information_text);
                    $('#partner-website-url-update').val(response.data.partner_website_url);
                    $('#partner-instagram-url-update').val(response.data.partner_instagarm_url);
                    $('#partner-facebook-url-update').val(response.data.partner_facebook_url);
                    $('#partner-email-update').val(response.data.partner_email);
                    $('#partner-phone-update').val(response.data.partner_phone);
                    $('#partner-deleted-update').val(response.data.partner_deleted);
                    partner_informationTextEditor.root.innerHTML = decode_utf8(response.data.partner_information_text);
                    ajaxFetchOnDone(response);
                })
                .fail(function (response) {
                    ajaxOnFail(response);
                });
            let submittedForm = $('#update-partner-form');
            $(submittedForm).submit(function (event) {
                event.preventDefault();
                let submittedData = new FormData(this);
                let filename = $('#partner-slug-update').val().replace(' ', '-').toLowerCase();
                if (($('#sent-image').val()) != '') {
                    let extension = getFileExtension(($('#sent-image').val()).substring(($('#sent-image').val()).lastIndexOf('/') + 1));
                    submittedData.set('partner_banner_filename', filename + '-image' + extension);
                }

                submittedData.set('partner_information_text', partner_informationTextEditor.root.innerHTML);
                $.ajax(ajaxSend(submittedData))
                    .done(function (response) {
                        ajaxSendOnSuccess(response);
                    })
                    .fail(function (response) {
                        ajaxOnFail(response);
                    });
            })
        } else if ((getParams(window.location.href)['request'] == 'event') && ($('#update-event-form').length != 0)) {
            $.ajax(ajaxFetch('events'))
                .done(function (response) {

                    $('#event-id-update').val(response.data.event_id);
                    $('#event-title-update').val(response.data.event_title);
                    $('#event-description-update').val(response.data.event_description);
                    $('#event-date-update').val(response.data.event_date);
                    $('#event-time-update').val(response.data.event_time);
                    $('#event-venue-update').val(response.data.event_venue);
                    $('#event-registration-link-update').val(response.data.event_registration_link);
                    $('#event-content-filename-update').val(response.data.event_content_filename);
                    $('#event-content-type-update').val(response.data.event_content_type);
                    $('#event-partner-id-update').val(response.data.event_partner_id);
                    $('#event-deleted-update').val(response.data.event_deleted);
                    ajaxFetchOnDone(response);
                })
                .fail(function (response) {
                    ajaxOnFail(response);
                });
            let submittedForm = $('#update-event-form');
            $(submittedForm).submit(function (event) {
                event.preventDefault();
                let submittedData = new FormData(this);
                let filename = $('#event-title-update').val().replace(' ', '-').toLowerCase();
                if (($('#sent-image').val()) != '') {
                    let extension = getFileExtension(($('#sent-image').val()).substring(($('#sent-image').val()).lastIndexOf('/') + 1));
                    submittedData.set('event_content_filename', filename + '-image' + extension);
                }
                $.ajax(ajaxSend(submittedData))
                    .done(function (response) {
                        ajaxSendOnSuccess(response);
                    })
                    .fail(function (response) {
                        ajaxOnFail(response);
                    });
            })
        } else if ((getParams(window.location.href)['request'] == 'chronicle') && ($('#update-chronicle-form').length != 0)) {
            $.ajax(ajaxFetch('chronicles'))
                .done(function (response) {
                    $('#chronicle-id-update').val(response.data.chronicle_id);
                    $('#chronicle-speaker-name-update').val(response.data.chronicle_speaker_name);
                    $('#chronicle-speaker-description-update').val(response.data.chronicle_speaker_description);
                    $('#chronicle-chapter-update').val(response.data.chronicle_chapter);
                    $('#chronicle-comments-update').val(response.data.chronicle_comments);
                    $('#chronicle-speaker-image-filename-update').val(response.data.chronicle_speaker_image_filename);
                    $('#chronicle-video-filename-update').val(response.data.chronicle_video_filename);
                    ajaxFetchOnDone(response);
                })
                .fail(function (response) {
                    ajaxOnFail(response);
                });
            let submittedForm = $('#update-chronicle-form');
            $(submittedForm).submit(function (event) {
                event.preventDefault();
                let submittedData = new FormData(this);
                let filename = $('#chronicle-speaker-name-update').val().replace(' ', '-').toLowerCase();
                if (($('#sent-image').val()) != '') {
                    let extension = getFileExtension(($('#sent-image').val()).substring(($('#sent-image').val()).lastIndexOf('/') + 1));
                    submittedData.set('chronicle_speaker_image_filename', filename + '-image' + extension);
                }
                if (($('#sent-video').val()) != '') {
                    let extension = getFileExtension(($('#sent-video').val()).substring(($('#sent-video').val()).lastIndexOf('/') + 1));
                    submittedData.set('chronicle_video_filename', filename + '-chronicle' + extension);
                }
                $.ajax(ajaxSend(submittedData))
                    .done(function (response) {
                        ajaxSendOnSuccess(response);
                    })
                    .fail(function (response) {
                        ajaxOnFail(response);
                    });
            })
        }
    } else if (getParams(window.location.href)['type'] == 'create') {
        if ((getParams(window.location.href)['request'] == 'theme') && ($('#create-theme-form').length != 0)) {
            let submittedForm = $('#create-theme-form');
            $(submittedForm).submit(function (event) {
                event.preventDefault();
                let submittedData = new FormData(this);
                let filename = $('#theme-slug-create').val().replace(' ', '-').toLowerCase();
                if (($('#sent-image').val()) != '') {
                    let extension = getFileExtension(($('#sent-image').val()).substring(($('#sent-image').val()).lastIndexOf('/') + 1));
                    submittedData.set('theme_image_filename', filename + '-image' + extension);
                }
                $.ajax(ajaxSend(submittedData))
                    .done(function (response) {
                        ajaxSendOnSuccess(response);
                    })
                    .fail(function (response) {
                        ajaxOnFail(response);
                    });
            })
        } else if ((getParams(window.location.href)['request'] == 'post') && ($('#create-post-form').length != 0)) {
            let submittedForm = $('#create-post-form');
            $(submittedForm).submit(function (event) {
                event.preventDefault();
                let submittedData = new FormData(this);
                let filename = $('#post-slug-create').val().replace(' ', '-').toLowerCase();
                if (($('#sent-image').val()) != '') {
                    let extension = getFileExtension(($('#sent-image').val()).substring(($('#sent-image').val()).lastIndexOf('/') + 1));
                    submittedData.set('post_creative_filename', filename + '-image' + extension);
                }
                $.ajax(ajaxSend(submittedData))
                    .done(function (response) {
                        ajaxSendOnSuccess(response);
                    })
                    .fail(function (response) {
                        ajaxOnFail(response);
                    });
            })
        } else if ((getParams(window.location.href)['request'] == 'element') && ($('#create-element-form').length != 0)) {
            let elementTextEditor = new Quill('#element-text-editor', {
                theme: 'bubble',
                placeholder: 'Text',
                modules: {
                    toolbar: false
                }
            });
            let submittedForm = $('#create-element-form');
            $(submittedForm).submit(function (event) {
                event.preventDefault();
                let submittedData = new FormData(this);
                if (($('#element-type-create').val()) == 'text') {
                    submittedData.set('element_content', elementTextEditor.root.innerHTML);
                    $.ajax(ajaxSend(submittedData))
                        .done(function (response) {
                            ajaxSendOnSuccess(response);
                        })
                        .fail(function (response) {
                            ajaxOnFail(response);
                        });
                } else if ((($('#element-type-create').val()) == 'audio') || (($('#element-type-update').val()) == 'video')) {
                    submittedData.set('element_content', $('#element-url-create').val());
                    $.ajax(ajaxSend(submittedData))
                        .done(function (response) {
                            ajaxSendOnSuccess(response);
                        })
                        .fail(function (response) {
                            ajaxOnFail(response);
                        });
                } else if (($('#element-type-create').val()) == 'image') {
                    let element_post_slug;
                    $.ajax({
                            data: 'data',
                            dataType: 'json',
                            type: 'GET',
                            url: './handler.php' + '?request=' + 'element_post_slug' + '&type=' + getParams(window.location.href)['type'] + '&id=' + ($('#element-post-id-create').val()),
                            beforeSend: beforeSend(),
                        })
                        .done(function (response) {
                            console.log(response.data.post_slug);
                            element_post_slug = response.data.post_slug;
                            let filename = element_post_slug.replace(' ', '-').toLowerCase();
                            let extension = getFileExtension(($('#sent-image').val()).substring(($('#sent-image').val()).lastIndexOf('/') + 1));
                            submittedData.set('element_content', filename + '-image' + extension);
                            $.ajax(ajaxSend(submittedData))
                                .done(function (response) {
                                    ajaxSendOnSuccess(response);
                                })
                                .fail(function (response) {
                                    ajaxOnFail(response);
                                });
                        })
                        .fail(function (response) {
                            ajaxOnFail(response);
                        });
                }
            })
        } else if ((getParams(window.location.href)['request'] == 'creator') && ($('#create-creator-form').length != 0)) {
            let submittedForm = $('#create-creator-form');
            $(submittedForm).submit(function (event) {
                event.preventDefault();
                let submittedData = new FormData(this);
                $.ajax(ajaxSend(submittedData))
                    .done(function (response) {
                        ajaxSendOnSuccess(response);
                    })
                    .fail(function (response) {
                        ajaxOnFail(response);
                    });
            })
        } else if ((getParams(window.location.href)['request'] == 'partner') && ($('#create-partner-form').length != 0)) {
            let partner_informationTextEditor = new Quill('#partner-information-text-editor', {
                theme: 'bubble',
                placeholder: 'Text',
                modules: {
                    toolbar: false
                }
            });
            let submittedForm = $('#create-partner-form');
            $(submittedForm).submit(function (event) {
                event.preventDefault();
                let submittedData = new FormData(this);
                let filename = $('#partner-slug-create').val().replace(' ', '-').toLowerCase();
                if (($('#sent-image').val()) != '') {
                    let extension = getFileExtension(($('#sent-image').val()).substring(($('#sent-image').val()).lastIndexOf('/') + 1));
                    submittedData.set('partner_banner_filename', filename + '-image' + extension);
                }
                submittedData.set('partner_information_text', encode_utf8(partner_informationTextEditor.root.innerHTML));
                $.ajax(ajaxSend(submittedData))
                    .done(function (response) {
                        ajaxSendOnSuccess(response);
                    })
                    .fail(function (response) {
                        ajaxOnFail(response);
                    });
            })
        } else if ((getParams(window.location.href)['request'] == 'event') && ($('#create-event-form').length != 0)) {
            let submittedForm = $('#create-event-form');
            $(submittedForm).submit(function (event) {
                event.preventDefault();
                let submittedData = new FormData(this);
                let filename = $('#event-title-create').val().replace(' ', '-').toLowerCase();
                if (($('#sent-image').val()) != '') {
                    let extension = getFileExtension(($('#sent-image').val()).substring(($('#sent-image').val()).lastIndexOf('/') + 1));
                    submittedData.set('event_content_filename', filename + '-image' + extension);
                }
                $.ajax(ajaxSend(submittedData))
                    .done(function (response) {
                        ajaxSendOnSuccess(response);
                    })
                    .fail(function (response) {
                        ajaxOnFail(response);
                    });
            })
        } else if ((getParams(window.location.href)['request'] == 'chronicle') && ($('#create-chronicle-form').length != 0)) {
            let submittedForm = $('#create-chronicle-form');
            $(submittedForm).submit(function (event) {
                event.preventDefault();
                let submittedData = new FormData(this);
                let filename = $('#chronicle-speaker-name-create').val().replace(' ', '-').toLowerCase();
                if (($('#sent-image').val()) != '') {
                    let extension = getFileExtension(($('#sent-image').val()).substring(($('#sent-image').val()).lastIndexOf('/') + 1));
                    submittedData.set('chronicle_speaker_image_filename', filename + '-image' + extension);
                }
                if (($('#sent-video').val()) != '') {
                    let extension = getFileExtension(($('#sent-video').val()).substring(($('#sent-video').val()).lastIndexOf('/') + 1));
                    submittedData.set('chronicle_video_filename', filename + '-chronicle' + extension);
                }
                $.ajax(ajaxSend(submittedData))
                    .done(function (response) {
                        ajaxSendOnSuccess(response);
                    })
                    .fail(function (response) {
                        ajaxOnFail(response);
                    });
            })
        }
    }
});