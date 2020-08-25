/**
 * Get the URL parameters
 * source: https://css-tricks.com/snippets/javascript/get-url-variables/
 * @param  {String} url The URL
 * @return {Object}     The URL parameters
 */
var getParams = function (url) {
    var params = {};
    var parser = document.createElement('a');
    parser.href = url;
    var query = parser.search.substring(1);
    var vars = query.split('&');
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split('=');
        params[pair[0]] = decodeURIComponent(pair[1]);
    }
    return params;
};

var progressPlaceholder = $('#progress-placeholder');
var responsePlaceholder = $('#response-placeholder');

var resetPlaceholders = function () {
    progressPlaceholder.removeClass('spinner-border');
    responsePlaceholder.removeClass('alert-info');
    responsePlaceholder.removeClass('alert-success');
    responsePlaceholder.removeClass('alert-danger');
}

var populateInProcessPlaceholders = function () {
    progressPlaceholder.addClass('spinner-border');
    responsePlaceholder.addClass('alert-info');
}

if ($('#register-individual-evolution-form').length != 0) {
    // identify the form and the response template
    var submittedForm = $('#register-individual-evolution-form');
    // event listener for when submit is clicked upon
    $(submittedForm).submit(function (event) {
        // prevent the data from being sent as per the action attribute
        event.preventDefault();
        // collect data in a new object
        var submittedData = new FormData(this);
        $.ajax({
                xhr: function () {
                    xhr = new XMLHttpRequest;
                    xhr.upload.onprogress = function (event) {
                        if (event.lengthComputable) {
                            var progressPercentage = event.loaded / event.total * 100;
                            populateInProcessPlaceholders();
                            responsePlaceholder.html(progressPercentage.toFixed(2) + '%');
                        }
                    };
                    return xhr;
                },
                data: submittedData,
                dataType: 'json',
                type: 'POST',
                url: './handler.php',
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    populateInProcessPlaceholders();
                    responsePlaceholder.html('Loading...');
                },
            })
            .done(function (response) {
                resetPlaceholders();
                if (response.status) {
                    responsePlaceholder.addClass('alert-success');
                    responsePlaceholder.html(response.message);
                } else {
                    responsePlaceholder.addClass('alert-danger');
                    responsePlaceholder.html(response.message);
                }
            })
            .fail(function (response) {
                resetPlaceholders();
                responsePlaceholder.html(response.message);
            });
    })
} else if ($('#register-team-write-camera-action-evolution-form').length != 0) {
    // identify the form and the response template
    var submittedForm = $('#register-team-write-camera-action-evolution-form');
    // event listener for when submit is clicked upon
    $(submittedForm).submit(function (event) {
        // prevent the data from being sent as per the action attribute
        event.preventDefault();
        // collect data in a new object
        var submittedData = new FormData(this);
        $.ajax({
                xhr: function () {
                    xhr = new XMLHttpRequest;
                    xhr.upload.onprogress = function (event) {
                        if (event.lengthComputable) {
                            var progressPercentage = event.loaded / event.total * 100;
                            populateInProcessPlaceholders();
                            responsePlaceholder.html(progressPercentage.toFixed(2) + '%');
                        }
                    };
                    return xhr;
                },
                data: submittedData,
                dataType: 'json',
                type: 'POST',
                url: './handler.php',
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    populateInProcessPlaceholders();
                    responsePlaceholder.html('Loading...');
                },
            })
            .done(function (response) {
                resetPlaceholders();
                if (response.status) {
                    responsePlaceholder.addClass('alert-success');
                    responsePlaceholder.html(response.message);
                } else {
                    responsePlaceholder.addClass('alert-danger');
                    responsePlaceholder.html(response.message);
                }
            })
            .fail(function (response) {
                resetPlaceholders();
                responsePlaceholder.html(response.message);
            });
    })
} else if ($('#register-team-crisimulation-evolution-form').length != 0) {
    // identify the form and the response template
    var submittedForm = $('#register-team-crisimulation-evolution-form');
    // event listener for when submit is clicked upon
    $(submittedForm).submit(function (event) {
        // prevent the data from being sent as per the action attribute
        event.preventDefault();
        // collect data in a new object
        var submittedData = new FormData(this);
        $.ajax({
                xhr: function () {
                    xhr = new XMLHttpRequest;
                    xhr.upload.onprogress = function (event) {
                        if (event.lengthComputable) {
                            var progressPercentage = event.loaded / event.total * 100;
                            populateInProcessPlaceholders();
                            responsePlaceholder.html(progressPercentage.toFixed(2) + '%');
                        }
                    };
                    return xhr;
                },
                data: submittedData,
                dataType: 'json',
                type: 'POST',
                url: './handler.php',
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    populateInProcessPlaceholders();
                    responsePlaceholder.html('Loading...');
                },
            })
            .done(function (response) {
                resetPlaceholders();
                if (response.status) {
                    responsePlaceholder.addClass('alert-success');
                    responsePlaceholder.html(response.message);
                } else {
                    responsePlaceholder.addClass('alert-danger');
                    responsePlaceholder.html(response.message);
                }
            })
            .fail(function (response) {
                resetPlaceholders();
                responsePlaceholder.html(response.message);
            });
    })
} else if ($('#register-team-escape-in-evolution-form').length != 0) {
    // identify the form and the response template
    var submittedForm = $('#register-team-escape-in-evolution-form');
    // event listener for when submit is clicked upon
    $(submittedForm).submit(function (event) {
        // prevent the data from being sent as per the action attribute
        event.preventDefault();
        // collect data in a new object
        var submittedData = new FormData(this);
        $.ajax({
                xhr: function () {
                    xhr = new XMLHttpRequest;
                    xhr.upload.onprogress = function (event) {
                        if (event.lengthComputable) {
                            var progressPercentage = event.loaded / event.total * 100;
                            populateInProcessPlaceholders();
                            responsePlaceholder.html(progressPercentage.toFixed(2) + '%');
                        }
                    };
                    return xhr;
                },
                data: submittedData,
                dataType: 'json',
                type: 'POST',
                url: './handler.php',
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    populateInProcessPlaceholders();
                    responsePlaceholder.html('Loading...');
                },
            })
            .done(function (response) {
                resetPlaceholders();
                if (response.status) {
                    responsePlaceholder.addClass('alert-success');
                    responsePlaceholder.html(response.message);
                } else {
                    responsePlaceholder.addClass('alert-danger');
                    responsePlaceholder.html(response.message);
                }
            })
            .fail(function (response) {
                resetPlaceholders();
                responsePlaceholder.html(response.message);
            });
    })
} else if ($('#register-workshop-evolution-form').length != 0) {
    // identify the form and the response template
    var submittedForm = $('#register-workshop-evolution-form');
    // event listener for when submit is clicked upon
    $(submittedForm).submit(function (event) {
        // prevent the data from being sent as per the action attribute
        event.preventDefault();
        // collect data in a new object
        var submittedData = new FormData(this);
        $.ajax({
                xhr: function () {
                    xhr = new XMLHttpRequest;
                    xhr.upload.onprogress = function (event) {
                        if (event.lengthComputable) {
                            var progressPercentage = event.loaded / event.total * 100;
                            populateInProcessPlaceholders();
                            responsePlaceholder.html(progressPercentage.toFixed(2) + '%');
                        }
                    };
                    return xhr;
                },
                data: submittedData,
                dataType: 'json',
                type: 'POST',
                url: './handler.php',
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    populateInProcessPlaceholders();
                    responsePlaceholder.html('Loading...');
                },
            })
            .done(function (response) {
                resetPlaceholders();
                if (response.status) {
                    responsePlaceholder.addClass('alert-success');
                    responsePlaceholder.html(response.message);
                } else {
                    responsePlaceholder.addClass('alert-danger');
                    responsePlaceholder.html(response.message);
                }
            })
            .fail(function (response) {
                resetPlaceholders();
                responsePlaceholder.html(response.message);
            });
    })
}