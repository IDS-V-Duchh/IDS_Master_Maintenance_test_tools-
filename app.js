/**
 * Init data for form
 */
let dataStore = sessionStorage.getItem('connection');
function initData() {
    let initConnect = null;
    if (!dataStore) {
        initConnect = {
            'host': 'localhost',
            'port': 5433,
            'dbName': 'Mater_maintenace_test_tools',
            'userName': 'postgres',
            'password': 'root',
            'numberConnections': 10
        };
        sessionStorage.setItem('connection', JSON.stringify(initConnect));
    } else {
        initConnect = JSON.parse(dataStore);
    }
    $('#host').val(initConnect.host);
    $('#port').val(initConnect.port);
    $('#dbName').val(initConnect.dbName);
    $('#userName').val(initConnect.userName);
    $('#password').val(initConnect.password);
    $('#numberConnections').val(initConnect.numberConnections);
}
function updateData(host, port, dbName, userName, password, numberConnections) {
    let updateConnect = {
        'host': host,
        'port': port,
        'dbName': dbName,
        'userName': userName,
        'password': password,
        'numberConnections': numberConnections
    };
    sessionStorage.setItem('connection', JSON.stringify(updateConnect));
}

/**
 * Show toast message in page
 * @param html - The HTML to be displayed in the toast.
 */
function showToast(html) {
    var el = $(html);
    $('#toast-message').is(':empty') ? el.show() : $('#toast-message').append(el);
}
/* A function that is called when the button connect is clicked. */
var toastMaintenace = {
    successToast: function () {
        const html = '<div role="alert" aria-live="assertive" aria-atomic="true" class="toast" id="toast-success" data-bs-autohide="false">\n' +
            '                <div class="toast-header">\n' +
            '                    <!-- <img src="..." class="rounded me-2" alt="..."> -->\n' +
            '                    <strong class="me-auto">Master Maintenance</strong>\n' +
            '                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>\n' +
            '                </div>\n' +
            '                <div class="toast-body">\n' +
            '                    Connect database success!\n' +
            '                </div>\n' +
            '            </div>';
        showToast(html);
    },
    failToast: function () {
        const html = '<div role="alert" aria-live="assertive" aria-atomic="true" class="toast" id="toast-fail" data-bs-autohide="false">\n' +
            '                <div class="toast-header">\n' +
            '                    <!-- <img src="..." class="rounded me-2" alt="..."> -->\n' +
            '                    <strong class="me-auto">Master Maintenance</strong>\n' +
            '                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>\n' +
            '                </div>\n' +
            '                <div class="toast-body">\n' +
            '                    Connect database fail!\n' +
            '                </div>\n' +
            '            </div>';
        showToast(html);
    }
}
/**
 * Returns a percentage for progress bar
 * @param partialValue - The current value of the progress bar.
 * @param totalValue - The total number of items to be processed.
 */
function changeProgress(partialValue, totalValue) {
    let percent = (100 * partialValue) / totalValue;
    if (percent) {
        console.info("Percent: ", percent+'%');
        $(".progress").removeClass("d-none")
        $("#progress").css('width', percent + '%')
            .attr("aria-valuenow", partialValue)
            .attr('aria-valuemax', totalValue);
    }
}
function disableConnect() {
    $('#btnConnect').attr('disabled', true);
}
function enableConnect() {
    $('#btnConnect').removeAttr('disabled');
}
function changeNumberConnections() {
    $('#numberConnections').change(function () {
        if ($(this).length >= 1) {
            $("#progress").attr("aria-valuenow", 0);
            $("#progress").addClass('d-none');
        }
    });
}
function scrollToProgress(){
    $("html, body").animate({ scrollTop: 1000 }, 500);
}
$(document).ready(function () {
    initData();
    changeNumberConnections();
    showToast();
    changeProgress();
});
