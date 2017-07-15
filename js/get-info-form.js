const $ = require('jquery')
const escape = require('escape-html')

let rootPath = null
let program = null
let cost = null
const $getInfoForms = $('.get-info-form')
const $popUpForm = $('.get-info-form:not(.on-page)')
const $onPageForm = $('.get-info-form.on-page')

function toggleGetInfoForm(e) {
    $popUpForm.find('.user-feedback').removeClass('success error').text('')
    $popUpForm.find('.submit-btn').show()
    $popUpForm.find('input[name="fname"]').focus()
    $popUpForm.toggleClass('open')

    if(e && e.target.dataset.formProgram) {
        $popUpForm.find('select[name="program"]').val(e.target.dataset.formProgram)
    }
}

function resetForm($form) {
    if(!$form) return false

    $form.trigger('reset')
    $form.find('.user-feedback').removeClass('success error').text('')
    $form.find('.submit-btn').fadeIn(200)
}

function sendForm($form) {

    $.ajax({
        url: `https://secure.velocify.com/Import.aspx?Provider=FacebookAds&Client=30010&CampaignId=1101&URL=http://techlaunch.io/thank-you?referrerpage=http://www.techlaunch.io`,
        method: 'POST',
        data: $form.serialize(),
        cache: false
    })
    .done(function(response) {
        console.log('get-info-form response:');
        console.log(response);
        $form.find('.submit-btn').hide(0)
        $form.find('.user-feedback').addClass('success').text('Message sent successfully!')
        setTimeout(function() {
            resetForm($form)
        }, 4000)
    })
    .fail(function(err) {
        console.log(err);
        $form.find('.submit-btn').hide(0)
        $form.find('.user-feedback').addClass('error').text('Sorry! This form is broken...')
        setTimeout(function() {
            resetForm($form)
        }, 4000)
    })
}
module.exports.sendForm = sendForm

function onFormSubmit(e) {
    e.preventDefault()

    sendForm($(e.currentTarget))
}

$(document).ready(function() {
    // button click listeners
    $('.get-more-info').click(toggleGetInfoForm)
    $('#navbar .get-info').click(toggleGetInfoForm)
    $('.enroll').click(toggleGetInfoForm)
    $('.get-info-form .close-btn').click(toggleGetInfoForm)
    $('.get-info-form-overlay').click(toggleGetInfoForm)

    // on form submit
    $('.get-info-form form').submit(onFormSubmit)
})