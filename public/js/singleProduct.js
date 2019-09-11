$(function ($) {
    $("#pay_form").submit(function (e) {
        e.preventDefault();
        window.location.href = "credit_card.html?" + $(e.target).serialize()
    })

    if (new URLSearchParams(window.location.search).get('confirmed') === 'true') {

        $('#salesModal').modal('show')
    }
});