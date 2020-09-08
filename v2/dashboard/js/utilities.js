/**
 * Get the URL parameters
 * source: https://css-tricks.com/snippets/javascript/get-url-letiables/
 * @param  {String} url The URL
 * @return {Object}     The URL parameters
 */
let getParams = function (url) {
    let params = {};
    let parser = document.createElement('a');
    parser.href = url;
    let query = parser.search.substring(1);
    let lets = query.split('&');
    for (let i = 0; i < lets.length; i++) {
        let pair = lets[i].split('=');
        params[pair[0]] = decodeURIComponent(pair[1]);
    }
    return params;
};

// External source: copied from https://stackoverflow.com/questions/13356493/decode-utf-8-with-javascript
function decode_utf8(s) {
    // return decodeURIComponent(escape(s));
    return s;
}

// External source: copied from https://stackoverflow.com/questions/13356493/decode-utf-8-with-javascript
function encode_utf8(s) {
    // return unescape(encodeURIComponent(s));
    return s;
}

function getFileExtension(filename) {
    return ('.' + filename.substring(filename.lastIndexOf('.') + 1, filename.length)) || filename;
}