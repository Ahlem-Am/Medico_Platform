<!DOCTYPE html>
<html>
<head>
  <script>
   
  </script>
<script src="https://cdn01.jotfor.ms/static/prototype.forms.js?3.3.40942" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.40942" type="text/javascript"></script>
<script src="https://cdn03.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.40942" type="text/javascript"></script>
<script defer src="https://cdn01.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.40942" type="text/javascript"></script>
<script defer src="https://cdn02.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.40942" type="text/javascript"></script>
<script src="https://js.jotform.com/vendor/postMessage.js?3.3.40942" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/s/umd/6b0aedccd24/for-widgets-server.js?v=3.3.40942" type="text/javascript"></script>
<script type="text/javascript">	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.singleProduct = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.newPaymentUI = true;

   JotForm.setConditions([{"action":[{"id":"action_1583839460040","visibility":"Show","isError":false,"field":"46"},{"id":"action_0_1583839458558","visibility":"Show","isError":false,"field":"45"}],"id":"1583839399765","index":"0","link":"Any","priority":"0","terms":[{"id":"term_0_1583839458558","field":"44","operator":"equals","value":"Yes","isError":false}],"type":"field"},{"action":[{"id":"action_1583839349127","visibility":"Show","isError":false,"field":"39"}],"id":"1583839371135","index":"1","link":"Any","priority":"1","terms":[{"id":"term_1583839349127","field":"38","operator":"equals","value":"Yes","isError":false}],"type":"field"},{"action":[{"id":"action_1583839336749","visibility":"Show","isError":false,"field":"37"},{"id":"action_1583839318415","visibility":"Show","isError":false,"field":"36"}],"id":"1583839345662","index":"2","link":"Any","priority":"2","terms":[{"id":"term_1583839318415","field":"35","operator":"equals","value":"Yes","isError":false}],"type":"field"},{"action":[{"id":"action_1583839248652","visibility":"Show","isError":false,"field":"33"}],"id":"1583839270028","index":"3","link":"Any","priority":"3","terms":[{"id":"term_1583839248652","field":"32","operator":"equals","value":"Yes","isError":false}],"type":"field"}]);	JotForm.clearFieldOnHide="disable";
	JotForm.submitError="jumpToFirstError";

	JotForm.init(function(){
	/*INIT-START*/

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("5", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.onTranslationsFetch(function() { JotForm.setCalendar("5", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); });
if (window.JotForm && JotForm.accessible) $('input_58').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_60').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_59').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_61').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_62').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_64').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_66').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_42').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_48').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_53').setAttribute('tabindex',0);
      JotForm.alterTexts({"ageVerificationError":"You must be older than {minAge} years old to submit this form.","alphabetic":"This field can only contain letters","alphanumeric":"This field can only contain letters and numbers.","appointmentSelected":"You’ve selected {time} on {date}","ccDonationMinLimitError":"Minimum amount is {minAmount} {currency}","ccInvalidCVC":"CVC number is invalid.","ccInvalidExpireDate":"Expire date is invalid.","ccInvalidNumber":"Credit Card Number is invalid.","ccMissingDetails":"Please fill up the Credit Card details.","ccMissingDonation":"Please enter numeric values for donation amount.","ccMissingProduct":"Please select at least one product.","characterLimitError":"Too many Characters.  The limit is","characterMinLimitError":"Too few characters. The minimum is","chooseAFile_infoMessage":"Choose a file","confirmClearForm":"Are you sure you want to clear the form?","confirmEmail":"E-mail does not match","currency":"This field can only contain currency values.","cyrillic":"This field can only contain cyrillic characters","dateInvalid":"This date is not valid. The date format is {format}","dateInvalidSeparate":"This date is not valid. Enter a valid {element}.","dateLimited":"This date is unavailable.","disallowDecimals":"Please enter a whole number.","doneButton":"Done","doneMessage":"Well done! All errors are fixed.","dragAndDropFilesHere_infoMessage":"Drag and drop files here","email":"Enter a valid e-mail address","error":"Error","fieldError":"field has an error.","fillMask":"Field value must fill mask.","freeEmailError":"Free email accounts are not allowed","generalError":"There are errors on the form. Please fix them before continuing.","generalPageError":"There are errors on this page. Please fix them before continuing.","gradingScoreError":"Score total should only be less than or equal to","incompleteFields":"There are incomplete required fields. Please complete them.","inputCarretErrorA":"Input should not be less than the minimum value:","inputCarretErrorB":"Input should not be greater than the maximum value:","justSoldOut":"Just Sold Out","lessThan":"Your score should be less than or equal to","maxDigitsError":"The maximum digits allowed is","maxFileSize_infoMessage":"Max. file size","maxSelectionsError":"The maximum number of selections allowed is ","minCharactersError":"The number of characters should not be less than the minimum value:","minSelectionsError":"The minimum required number of selections is ","multipleError":"There are {count} errors on this page. Please correct them before moving on.","multipleFileUploads_emptyError":"{file} is empty, please select files again without it.","multipleFileUploads_fileLimitError":"Only {fileLimit} file uploads allowed.","multipleFileUploads_minSizeError":"{file} is too small, minimum file size is {minSizeLimit}.","multipleFileUploads_onLeave":"The files are being uploaded, if you leave now the upload will be cancelled.","multipleFileUploads_sizeError":"{file} is too large, maximum file size is {sizeLimit}.","multipleFileUploads_typeError":"{file} has invalid extension. Only {extensions} are allowed.","nextButtonText":"Next","noSlotsAvailable":"No slots available","notEnoughStock":"Not enough stock for the current selection","notEnoughStock_remainedItems":"Not enough stock for the current selection ({count} items left)","numeric":"This field can only contain numeric values","oneError":"There is {count} error on this page. Please correct it before moving on.","pastDatesDisallowed":"Date must not be in the past.","pleaseWait":"Please wait...","prevButtonText":"Previous","progressMiddleText":"of","required":"This field is required.","requiredLegend":"All fields marked with * are required and must be filled.","requireEveryCell":"Every cell is required.","requireEveryRow":"Every row is required.","requireOne":"At least one field required.","reviewBackText":"Back to Form","reviewSubmitText":"Review and Submit","seeAllText":"See All","seeErrorsButton":"See Errors","selectionSoldOut":"Selection Sold Out","slotUnavailable":"{time} on {date} has been taken. Please select another slot.","soldOut":"Sold Out","startButtonText":"COMMENCER","submissionLimit":"Sorry! Only one entry is allowed. &lt;br&gt; Multiple submissions are disabled for this form.","submitButtonText":"Save","subProductItemsLeft":"({count} items left)","uploadExtensions":"You can only upload following files:","uploadFilesize":"File size cannot be bigger than:","uploadFilesizemin":"File size cannot be smaller than:","url":"This field can only contain a valid URL","validateEmail":"You need to validate this e-mail","wordLimitError":"Too many words. The limit is","wordMinLimitError":"Too few words.  The minimum is"});
	/*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"medicalRecord","qid":"1","text":"Medical Record","type":"control_head"},null,{"description":"","name":"patientName","qid":"3","text":"Patient Name","type":"control_fullname"},null,{"description":"","name":"birth","qid":"5","text":"Date of Birth","type":"control_datetime"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"medicalHistory","qid":"28","text":"Medical History","type":"control_head"},{"description":"","name":"chronic","qid":"29","text":"Chronic or Recurring Conditions :","type":"control_checkbox"},{"description":"","name":"tobacoo","qid":"30","text":"Do you use tobacco?","type":"control_radio"},{"description":"","name":"alcohol","qid":"31","text":"Do you use alcohol?","type":"control_radio"},null,null,{"description":"","name":"caffeine","qid":"34","text":"Caffeine use?","type":"control_radio"},null,null,null,null,null,{"description":"","name":"familyHistory","qid":"40","text":"Family History","type":"control_checkbox"},{"name":"mentalHealth","qid":"41","text":"Mental Health History","type":"control_head"},{"description":"","name":"mentalHealthProblem","qid":"42","subLabel":"","text":"Any Mental Health Problem ?","type":"control_textarea"},null,{"description":"","name":"counselor","qid":"44","text":"Have you seen a counselor, psychologist, psychiatrist or other mental health professional before?","type":"control_radio"},null,null,null,{"description":"","name":"experiences","qid":"48","subLabel":"","text":"Please describe any other experiences you have had problems with","type":"control_textarea"},null,null,null,null,{"description":"","name":"additionalComments","qid":"53","subLabel":"","text":"Additional comments or concerns","type":"control_textarea"},null,{"description":"","labelText":"Medical Record","name":"asset2031636e3e45b178c131278885","qid":"55","text":"f1d0807f8ffad0197757d840bdc97d0b-icone-de-registro-medico","type":"control_image"},null,null,{"description":"","name":"recentPhysicalExam","qid":"58","subLabel":"","text":"Date of most recent physical exam:","type":"control_textbox"},{"description":"","name":"underMedicalCare","qid":"59","subLabel":"","text":"Now under medical care of taking medication? ","type":"control_textbox"},{"description":"","name":"currentHealthProblems","qid":"60","subLabel":"","text":"Are you aware of any current health problems :","type":"control_textbox"},{"description":"","name":"surgeryIllness","qid":"61","subLabel":"","text":"Any surgery, illness, allergy or other change? ","type":"control_textbox"},{"description":"","name":"hospitalizations","qid":"62","subLabel":"","text":"Hospitalizations or serious injuries? ","type":"control_textbox"},null,{"description":"","name":"MH_Details","qid":"64","subLabel":"","text":"Give dates and full details for any “yes” answers here:","type":"control_textarea"},{"description":"","name":"allergies","qid":"65","text":"Allergies","type":"control_checkbox"},{"description":"","name":"details","qid":"66","subLabel":"","text":"Please provide details of any checked ","type":"control_textarea"},{"description":"","name":"immunizations","qid":"67","text":"Immunizations","type":"control_checkbox"},null,null,null,null,{"name":"sautDe","qid":"72","text":"Saut de page","type":"control_pagebreak"},null,{"description":"","name":"merciDe","qid":"74","text":"Merci de confirmer que vous etes un etre humain","type":"control_captcha"},null,null,{"name":"saisissezUne","qid":"77","text":"ProgressBar","type":"control_widget"},{"name":"entete","qid":"78","text":"Merci pour votre Confiance !","type":"control_head"},null,null,null,{"name":"save","qid":"82","text":"Save","type":"control_button"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"medicalRecord","qid":"1","text":"Medical Record","type":"control_head"},null,{"description":"","name":"patientName","qid":"3","text":"Patient Name","type":"control_fullname"},null,{"description":"","name":"birth","qid":"5","text":"Date of Birth","type":"control_datetime"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"medicalHistory","qid":"28","text":"Medical History","type":"control_head"},{"description":"","name":"chronic","qid":"29","text":"Chronic or Recurring Conditions :","type":"control_checkbox"},{"description":"","name":"tobacoo","qid":"30","text":"Do you use tobacco?","type":"control_radio"},{"description":"","name":"alcohol","qid":"31","text":"Do you use alcohol?","type":"control_radio"},null,null,{"description":"","name":"caffeine","qid":"34","text":"Caffeine use?","type":"control_radio"},null,null,null,null,null,{"description":"","name":"familyHistory","qid":"40","text":"Family History","type":"control_checkbox"},{"name":"mentalHealth","qid":"41","text":"Mental Health History","type":"control_head"},{"description":"","name":"mentalHealthProblem","qid":"42","subLabel":"","text":"Any Mental Health Problem ?","type":"control_textarea"},null,{"description":"","name":"counselor","qid":"44","text":"Have you seen a counselor, psychologist, psychiatrist or other mental health professional before?","type":"control_radio"},null,null,null,{"description":"","name":"experiences","qid":"48","subLabel":"","text":"Please describe any other experiences you have had problems with","type":"control_textarea"},null,null,null,null,{"description":"","name":"additionalComments","qid":"53","subLabel":"","text":"Additional comments or concerns","type":"control_textarea"},null,{"description":"","labelText":"Medical Record","name":"asset2031636e3e45b178c131278885","qid":"55","text":"f1d0807f8ffad0197757d840bdc97d0b-icone-de-registro-medico","type":"control_image"},null,null,{"description":"","name":"recentPhysicalExam","qid":"58","subLabel":"","text":"Date of most recent physical exam:","type":"control_textbox"},{"description":"","name":"underMedicalCare","qid":"59","subLabel":"","text":"Now under medical care of taking medication? ","type":"control_textbox"},{"description":"","name":"currentHealthProblems","qid":"60","subLabel":"","text":"Are you aware of any current health problems :","type":"control_textbox"},{"description":"","name":"surgeryIllness","qid":"61","subLabel":"","text":"Any surgery, illness, allergy or other change? ","type":"control_textbox"},{"description":"","name":"hospitalizations","qid":"62","subLabel":"","text":"Hospitalizations or serious injuries? ","type":"control_textbox"},null,{"description":"","name":"MH_Details","qid":"64","subLabel":"","text":"Give dates and full details for any “yes” answers here:","type":"control_textarea"},{"description":"","name":"allergies","qid":"65","text":"Allergies","type":"control_checkbox"},{"description":"","name":"details","qid":"66","subLabel":"","text":"Please provide details of any checked ","type":"control_textarea"},{"description":"","name":"immunizations","qid":"67","text":"Immunizations","type":"control_checkbox"},null,null,null,null,{"name":"sautDe","qid":"72","text":"Saut de page","type":"control_pagebreak"},null,{"description":"","name":"merciDe","qid":"74","text":"Merci de confirmer que vous etes un etre humain","type":"control_captcha"},null,null,{"name":"saisissezUne","qid":"77","text":"ProgressBar","type":"control_widget"},{"name":"entete","qid":"78","text":"Merci pour votre Confiance !","type":"control_head"},null,null,null,{"name":"save","qid":"82","text":"Save","type":"control_button"}]);}, 20); 
</script>
<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link id="custom-font" type="text/css" rel="stylesheet" href="//cdn.jotfor.ms/fonts/?family=Allan" />
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.40942&themeRevisionID=63e6805f64383509e31513f4"/>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.40942" />
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.40942" />
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
/*PREFERENCES STYLE*/
  /* NEW THEME STYLE */

  /* colors */

  .form-textbox, .form-textarea {
    color: undefined;
  }
  .FITB-inptCont .form-textbox, .FITB-inptCont .form-dropdown,
  span.FITB-inptCont[data-type=selectbox] select,
  span.FITB-inptCont[data-type=timebox] select {
    color: #2C3345;
  }
  .rating-item input:hover+label {
    color: #2e69ff;
  }
  li[data-type=control_fileupload] .qq-upload-button,
  .until-text,
  .form-submit-reset {
    color: #2c3345;
  }

  .stageEmpty,
  .btn-barebone,
  .formPage-stuff,
  .scrollToTop .scrollToTop-text {
    color: #6F76A7;
  }
  .scrollToTop svg {
    fill: #6F76A7;
  }
  .rating-item label {
    color: #b8bdc9;
  }
  .currentDate,
  .pickerItem select,
  .appointmentCalendar .calendarDay,
  .calendar.popup th,
  .calendar.popup table tbody td,
  .calendar-new-header>*,
  .form-collapse-table {
    color: #2C3345;
  }
  .appointmentCalendar .dayOfWeek {
    color: #2e69ff;
  }
  .appointmentSlotsContainer > * {
    color: #2e69ff;
  }
  li[data-type=control_fileupload] .jfUpload-heading,
  ::placeholder,
  .form-dropdown.is-active,
  .form-dropdown:first-child,
  .form-spinner-input {
    color: #57647e;
  }
  .appointmentCalendar .calendarWeek .calendarDay.isUnavailable,
  .calendar tr.days td.otherDay,
  .calendar tr.days td:hover:not(.unselectable) {
    color: #CAD0CF;
  }
  span.form-sub-label, label.form-sub-label, div.form-header-group .form-subHeader,
  .rating-item-title.for-to > label:first-child,
  .rating-item-title.for-from > label:first-child,
  .rating-item-title .editor-container * {
    color: #57647E;
  }
  .form-pagebreak-back{
    color: #2c3345;
  }
  .rating-item input:checked+label,
  .rating-item input:focus+label {
    color: #FFFFFF;
  }
  .clear-pad-btn {
    color: #57647e;
  }
  .form-textbox::placeholder,
  .form-dropdown:not(.time-dropdown):not(:required),
  .form-dropdown:not(:required),
  .form-dropdown:required:invalid {
    color: #57647e;
  }
  /* border-colors */
  .form-dropdown,
  .form-textarea,
  .form-textbox,
  li[data-type=control_fileupload] .qq-upload-button,
  .rating-item label,
  .rating-item input:focus+label,
  .rating-item input:checked+label,
  .jf-form-buttons,
  .form-checkbox+label:before, .form-checkbox+span:before, .form-radio+label:before, .form-radio+span:before,
  .signature-pad-passive,
  .signature-wrapper,
  .appointmentCalendarContainer,
  .appointmentField .timezonePickerName,
  .appointmentDayPickerButton,
  .appointmentCalendarContainer .monthYearPicker .pickerItem+.pickerItem,
  .appointmentCalendarContainer .monthYearPicker,
  .appointmentCalendar .calendarDay.isActive .calendarDayEach, .appointmentCalendar .calendarDay.isToday .calendarDayEach, .appointmentCalendar .calendarDay:not(.empty):hover .calendarDayEach,
  .calendar.popup:before,
  .calendar-new-month,
  .form-matrix-column-headers, .form-matrix-table td, .form-matrix-table td:last-child,
  .form-matrix-table th, .form-matrix-table th:last-child, .form-matrix-table tr:last-child td, .form-matrix-table tr:last-child th, .form-matrix-table tr:not([role=group])+tr[role=group] th,
  .form-matrix-headers.form-matrix-column-headers,
  .isSelected .form-matrix-column-headers:nth-last-of-type(2),
  li[data-type=control_inline] input[type=email], li[data-type=control_inline] input[type=number],
  li[data-type=control_inline] input[type=tel], li[data-type=control_inline] input[type=text] {
    border-color: #b8bdc9;
  }
  .stageEmpty,
  .form-page-break:before,
  .welcome-page-break:before,
  .thankyou-page-break:before,
  .form-cover-break:before,
  .form-page-break:after,
  .welcome-page-break:after,
  .thankyou-page-break:after,
  .form-cover-break:after {
    border-color: #C8CEED;
  }

  .rating-item input:hover+label {
    border-color: #2e69ff;
  }
  .appointmentSlot,
  .form-checkbox:checked+label:before, .form-checkbox:checked+span:before, .form-checkbox:checked+span label:before,
  .form-radio:checked+label:before, .form-radio:checked+span:before,
  .form-dropdown:focus, .form-textarea:focus, .form-textbox:focus, .signature-wrapper:focus,
  .form-line[data-payment="true"] .form-product-item .p_checkbox .checked,
  .form-dropdown:hover, .form-textarea:hover, .form-textbox:hover, .signature-wrapper:hover {
    border-color: #2e69ff;
  }

  .calendar tr.days td:hover:not(.unselectable):after {
    border-color: #e5eaf4;
  }
  .form-header-group,
  .form-buttons-wrapper, .form-pagebreak, .form-submit-clear-wrapper,
  .form-pagebreak-next,
  .form-pagebreak-back,
  .form-checkbox:hover+label:before, .form-checkbox:hover+span:before, .form-radio:hover+label:before, .form-radio:hover+span:before,
  .divider {
    border-color: #F3F3FE;
  }
  .form-pagebreak-back:focus, .form-pagebreak-next:focus, .form-submit-button:focus {
    border-color: rgba(46, 105, 255, 1);
  }
  /* background-colors */
  .form-line-active {
    background-color: #F1F5FF;
  }
  .stageEmpty {
    background-color:  #F3F3FE;
  }
  .form-line-error {
    background-color: #FFD6D6;
  }
  .form-matrix-column-headers, .form-matrix-row-headers,
  .form-spinner-button-container>*,
  .form-collapse-table,
  .form-collapse-table:hover,
  .appointmentDayPickerButton {
    background-color: #e5eaf4;
  }
  .calendar.popup, .calendar.popup table,
  .calendar.popup table tbody td:after{
    background-color: #FFFFFF;
  }

  .appointmentCalendar .calendarDay.isActive .calendarDayEach,
  .appointmentFieldRow.forSelectedDate,
  .calendar.popup tr.days td.selected:after,
  .calendar.popup:after,
  .submit-button,
  .form-checkbox:checked+label:before, .form-checkbox:checked+span:before, .form-checkbox:checked+span label:before,
  .form-radio+label:after, .form-radio+span:after,
  .rating-item input:checked+label,
  .appointmentCalendar .calendarDay:after,
  .form-line[data-payment="true"] .form-product-item .p_checkbox .checked,
  .rating-item input:focus+label,
  .formPage-removePage:hover,
  .btn-barebone:hover, .btn-barebone:active {
    background-color: #2e69ff;
  }
  .appointmentSlot.active {
    background-color: #2e69ff !important;
  }
  .clear-pad-btn,
  .appointmentCalendar .dayOfWeek,
  .calendar.popup th {
    background-color: #eef3ff !important;
  }
  .appointmentField .timezonePicker:hover+.timezonePickerName,
  .form-spinner-button-container>*:hover {
    background-color: #eef3ff;
  }
  .form-matrix-values,
  .form-matrix-values,
  .signature-wrapper,
  .signature-pad-passive,
  .rating-item label,
  .form-checkbox+label:before, .form-checkbox+span:before,
  .form-radio+label:before, .form-radio+span:before {
    background-color: #FFFFFF;
  }
  li[data-type=control_fileupload] .qq-upload-button {
    background-color: #fbfcff;
  }
  .JotFormBuilder .appContainer #app li.form-line[data-type=control_matrix].isSelected
  .questionLine-editButton.forRemove:after,
  .JotFormBuilder .appContainer #app li.form-line[data-type=control_matrix].isSelected .questionLine-editButton.forRemove:before {
    background-color: #FFFFFF;
  }
  .appointmentCalendarContainer, .appointmentSlot,
  .rating-item-title.for-to > label:first-child,
  .rating-item-title.for-from > label:first-child,
  .rating-item-title .editor-container *,
  .calendar-opened {
    background-color: transparent;
  }
  .page-section li.form-line-active[data-type="control_button"] {
    background-color: #F1F5FF;
  }
  .appointmentCalendar .calendarDay.isSelected:after {
    color: #FFFFFF;
  }
  /* shadow */
  .form-dropdown:hover, .form-textarea:hover, .form-textbox:hover, .signature-wrapper:hover,
  .calendar.popup:before,
  .jSignature:hover,
  li[data-type=control_fileupload] .qq-upload-button-hover,
  .form-line[data-payment="true"] .form-product-item .p_checkbox .checked,
  .form-line[data-payment="true"] .form-product-item .p_checkbox:hover .select_border,
  .form-checkbox:hover+label:before, .form-checkbox:hover+span:before, .form-radio:hover+label:before, .form-radio:hover+span:before,
  .calendar.popup:before {
    border-color: rgba(46, 105, 255, 0.5);
    box-shadow: 0 0 0 2px rgba(46, 105, 255, 0.25);
  }
  .form-dropdown:focus, .form-textarea:focus, .form-textbox:focus, .signature-wrapper:focus,
  li[data-type=control_fileupload] .qq-upload-button-focus,
  .form-checkbox:focus+label:before, .form-checkbox:focus+span:before, .form-radio:focus+label:before, .form-radio:focus+span:before,
  .calendar.popup:before {
    border-color: rgba(46, 105, 255, 1);
    box-shadow: 0 0 0 3px rgba(46, 105, 255, 0.25);
  }
  .calendar.popup table tbody td{
    box-shadow: none;
  }

  /* button colors */
  .submit-button {
    background-color: #18BD5B;
    border-color: #18BD5B;
  }
  .submit-button:hover {
    background-color: #16AA52;
    border-color: #16AA52;
  }
  .form-pagebreak-next {
    background-color: #2e69ff;
  }
  .form-pagebreak-back {
    background-color: #e5e7f2;
  }
  .form-pagebreak-back:hover {
    background-color: #CED0DA;
    border-color: #CED0DA;
  }
  .form-pagebreak-next:hover {
    background-color: #2554CC;
    border-color: #2554CC;
  }
  .form-sacl-button, .form-submit-print {
    background-color: transparent;
    color: #2c3345;
    border-color: #b8bdc9;
  }
  .form-sacl-button:hover, .form-submit-print:hover,
  .appointmentSlot:not(.disabled):not(.active):hover,
  .appointmentDayPickerButton:hover,
  .rating-item input:hover+label {
    background-color: #96B4FF;
  }

  /* payment styles */

  .form-line[data-payment=true] .form-textbox,
  .form-line[data-payment=true] .select-area,
  .form-line[data-payment=true] #coupon-input,
  .form-line[data-payment=true] #coupon-container input,
  .form-line[data-payment=true] input#productSearch-input,
  .form-line[data-payment=true] .form-product-category-item:after,
  .form-line[data-payment=true] .filter-container .dropdown-container .select-content,
  .form-line[data-payment=true] .form-textbox.form-product-custom_quantity,
  .form-line[data-payment="true"] .form-product-item .p_checkbox .select_border,
  .form-line[data-payment="true"] .form-product-item .form-product-container .form-sub-label-container span.select_cont,
  .form-line[data-payment=true] select.form-dropdown,
  .form-line[data-payment=true] #payment-category-dropdown .select-area,
  .form-line[data-payment=true] #payment-sorting-products-dropdown .select-area,
  .form-line[data-payment=true] .dropdown-container .select-content {
    border-color: #b8bdc9;
    border-color: undefined;
  }
  .form-line[data-payment="true"] hr,
  .form-line[data-payment=true] .p_item_separator,
  .form-line[data-payment="true"] .payment_footer.new_ui,
  .form-line.card-3col .form-product-item.new_ui,
  .form-line.card-2col .form-product-item.new_ui {
    border-color: #b8bdc9;
    border-color: undefined;
  }
  .form-line[data-payment=true] .form-product-category-item {
    border-color: #b8bdc9;
    border-color: undefined;
  }
  .form-line[data-payment=true] #coupon-input,
  .form-line[data-payment=true] .form-textbox.form-product-custom_quantity,
  .form-line[data-payment=true] input#productSearch-input,
  .form-line[data-payment=true] .select-area,
  .form-line[data-payment=true] .custom_quantity,
  .form-line[data-payment=true] .filter-container .select-content,
  .form-line[data-payment=true] .p_checkbox .select_border,
  .form-line[data-payment=true] #payment-category-dropdown .select-area,
  .form-line[data-payment=true] #payment-sorting-products-dropdown .select-area,
  .form-line[data-payment=true] .dropdown-container .select-content {
    background-color: #FFFFFF;
  }
  .form-line[data-payment=true] .form-product-category-item.title_collapsed.has_selected_product .selected-items-icon {
   background-color: undefined;
   border-color: undefined;
  }
  .form-line[data-payment=true].form-line.card-3col .form-product-item,
  .form-line[data-payment=true].form-line.card-2col .form-product-item {
   background-color: undefined;
  }
  .form-line[data-payment=true] .payment-form-table input.form-textbox,
  .form-line[data-payment=true] .payment-form-table input.form-dropdown,
  .form-line[data-payment=true] .payment-form-table .form-sub-label-container > div,
  .form-line[data-payment=true] .payment-form-table span.form-sub-label-container iframe,
  .form-line[data-type=control_square] .payment-form-table span.form-sub-label-container iframe {
    border-color: #b8bdc9;
  }

  /* icons */
  .appointmentField .timezonePickerName:before {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAxNiAxNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0wIDcuOTYwMkMwIDMuNTY2MTcgMy41NTgyMSAwIDcuOTUyMjQgMEMxMi4zNTQyIDAgMTUuOTIwNCAzLjU2NjE3IDE1LjkyMDQgNy45NjAyQzE1LjkyMDQgMTIuMzU0MiAxMi4zNTQyIDE1LjkyMDQgNy45NTIyNCAxNS45MjA0QzMuNTU4MjEgMTUuOTIwNCAwIDEyLjM1NDIgMCA3Ljk2MDJaTTEuNTkzNzUgNy45NjAyQzEuNTkzNzUgMTEuNDc4NiA0LjQ0MzUgMTQuMzI4NCA3Ljk2MTkxIDE0LjMyODRDMTEuNDgwMyAxNC4zMjg0IDE0LjMzMDEgMTEuNDc4NiAxNC4zMzAxIDcuOTYwMkMxNC4zMzAxIDQuNDQxNzkgMTEuNDgwMyAxLjU5MjA0IDcuOTYxOTEgMS41OTIwNEM0LjQ0MzUgMS41OTIwNCAxLjU5Mzc1IDQuNDQxNzkgMS41OTM3NSA3Ljk2MDJaIiBmaWxsPSIjMTExMTExIi8+CjxwYXRoIGQ9Ik04LjM1ODA5IDMuOTgwNDdINy4xNjQwNlY4Ljc1NjU5TDExLjM0MzIgMTEuMjY0MUwxMS45NDAyIDEwLjI4NDlMOC4zNTgwOSA4LjE1OTU3VjMuOTgwNDdaIiBmaWxsPSIjMTExMTExIi8+Cjwvc3ZnPgo=);
  }
  .appointmentCalendarContainer .monthYearPicker .pickerArrow.prev:after {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iNiIgdmlld0JveD0iMCAwIDEwIDYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik04LjU5NzgyIDUuMzMyNzNDOC45MzMxMiA1LjYzNjI3IDkuNDM5MzkgNS42Mjk2OSA5Ljc1NjEzIDUuMzEyNzhDMTAuMDgxMyA0Ljk4NzQ1IDEwLjA4MTMgNC40NTk2MyA5Ljc1NjEzIDQuMTM0M0M5LjYwOTA0IDMuOTk2MzUgOS42MDkwMyAzLjk5NjM1IDkuMDg5NDkgMy41MTExOEM4LjQzNzQyIDIuOTAyMTggOC40Mzc0MyAyLjkwMjE4IDcuNjU1MTEgMi4xNzE1NkM2LjA4OTU2IDAuNzA5NDQ3IDYuMDg5NTYgMC43MDk0NDYgNS41Njc3MyAwLjIyMjEwMUM1LjI0MTA0IC0wLjA3NDUwNjcgNC43NTA4NSAtMC4wNzM1MDMgNC40MzIzNSAwLjIyMTkyOUwwLjI2MjU0IDQuMTE0MjRDLTAuMDgwNTQ1OSA0LjQ1NTQ1IC0wLjA4NzE3MTEgNC45ODM5NyAwLjI0MTQ2OCA1LjMxMjc4QzAuNTU5NTU4IDUuNjMxMDUgMS4wNjk3NSA1LjYzNjY4IDEuMzk3MDMgNS4zMzI2Mkw0Ljk5ODkxIDEuOTcxMzFMOC41OTc4MiA1LjMzMjczWiIgZmlsbD0iI0NGQ0ZDRiIvPgo8L3N2Zz4K);
  }
  .appointmentCalendarContainer .monthYearPicker .pickerArrow.next:after {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iNiIgdmlld0JveD0iMCAwIDEwIDYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xLjQwMjE4IDAuMjIzNDk3QzEuMDY2ODcgLTAuMDgwMTAyOCAwLjU2MDYwMiAtMC4wNzM1MDI4IDAuMjQzODY5IDAuMjQzMzk3Qy0wLjA4MTI4OTggMC41Njg2OTcgLTAuMDgxMjg5OCAxLjA5NjYgMC4yNDM4NjkgMS40MjE5QzAuMzkwOTU2IDEuNTU5OCAwLjM5MDk2NiAxLjU1OTggMC45MTA1MSAyLjA0NUMxLjU2MjU3IDIuNjU0IDEuNTYyNTYgMi42NTQgMi4zNDQ4OCAzLjM4NDZDMy45MTA0NCA0Ljg0NjcgMy45MTA0MyA0Ljg0NjcgNC40MzIyNyA1LjMzNDFDNC43NTg5NSA1LjYzMDcgNS4yNDkxNSA1LjYyOTcgNS41Njc2NCA1LjMzNDNMOS43Mzc0NiAxLjQ0MkMxMC4wODA1IDEuMTAwNyAxMC4wODcxIDAuNTcyMTk3IDkuNzU4NTMgMC4yNDMzOTdDOS40NDA0NCAtMC4wNzQ5MDI4IDguOTMwMjQgLTAuMDgwNTAyOCA4LjYwMjk3IDAuMjIzNTk3TDUuMDAxMDggMy41ODQ5TDEuNDAyMTggMC4yMjM0OTdaIiBmaWxsPSIjQ0ZDRkNGIi8+Cjwvc3ZnPgo=);
  }
  .appointmentField .timezonePickerName:after {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iNiIgdmlld0JveD0iMCAwIDEwIDYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0wLjA1Mjk5IDAuMjM2NTcyQzAuMDExMzU0NiAwLjMwNzc4NSAtMC4wMDYzMDI4MiAwLjM4NzUzNCAwLjAwMTk5OTIzIDAuNDY2ODdDMC4wMTAzMDEzIDAuNTQ2MjA2IDAuMDQ0MjM0MyAwLjYyMTk4OSAwLjA5OTk5MDEgMC42ODU3MTVMNC41OTk5OSA1LjgyODU3QzQuNjQ2NTcgNS44ODE4IDQuNzA2OTYgNS45MjUgNC43NzYzOSA1Ljk1NDc1QzQuODQ1ODIgNS45ODQ1MSA0LjkyMjM3IDYgNC45OTk5OSA2QzUuMDc3NjIgNiA1LjE1NDE3IDUuOTg0NTEgNS4yMjM2IDUuOTU0NzVDNS4yOTMwMyA1LjkyNSA1LjM1MzQyIDUuODgxOCA1LjQgNS44Mjg1N0w5LjkgMC42ODU3MTRDOS45NjQ5MSAwLjYxMTUzIDEwIDAuNTIxMzAxIDEwIDAuNDI4NTcxQzkuOTk5NzEgMC4zNjE5MzggOS45ODE1NyAwLjI5NjI1MiA5Ljk0NyAwLjIzNjU3MUM5LjkwNTQzIDAuMTY1NDc0IDkuODQxNjEgMC4xMDU2OTEgOS43NjI2NyAwLjA2MzkxMTVDOS42ODM3MyAwLjAyMjEzMTcgOS41OTI3OCAyLjYwNjg5ZS0wNiA5LjUgLTUuNzYzMDNlLTA4TDAuNDk5OTkgMy4zNTc3M2UtMDdDMC40MDcyMTIgMy4wMDg0ZS0wNiAwLjMxNjI2NCAwLjAyMjEzMjEgMC4yMzczMjEgMC4wNjM5MTE5QzAuMTU4Mzc5IDAuMTA1NjkyIDAuMDk0NTU0NyAwLjE2NTQ3NCAwLjA1Mjk5IDAuMjM2NTcyVjAuMjM2NTcyWiIgZmlsbD0iIzExMTExMSIvPgo8L3N2Zz4K);
    width: 11px;
  }
  li[data-type=control_datetime] [data-wrapper-react=true].extended>div+.form-sub-label-container .form-textbox:placeholder-shown,
  li[data-type=control_datetime] [data-wrapper-react=true]:not(.extended) .form-textbox:not(.time-dropdown):placeholder-shown,
  .appointmentCalendarContainer .currentDate {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTciIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAxNyAxNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE1Ljk0ODkgNVYxNS4wMjZDMTUuOTQ4OSAxNS41NjM5IDE1LjUwMjYgMTYgMTQuOTUyMSAxNkgwLjk5NjgwNUMwLjQ0NjI4NSAxNiAwIDE1LjU2MzkgMCAxNS4wMjZWNUgxNS45NDg5Wk00LjE5MjQ1IDExLjQxNjdIMi4zNzQ3NEwyLjI4NTE1IDExLjQyNDdDMi4xMTA3OCAxMS40NTY1IDEuOTY4MDEgMTEuNTc5MiAxLjkwNzUyIDExLjc0MjJMMS44ODQzNyAxMS44MjY4TDEuODc2MzQgMTEuOTE2N1YxMy42NjY3TDEuODg0MzcgMTMuNzU2NUMxLjkxNjAyIDEzLjkzMTUgMi4wMzg0IDE0LjA3NDcgMi4yMDA4MyAxNC4xMzU0TDIuMjg1MTUgMTQuMTU4NkwyLjM3NDc0IDE0LjE2NjdINC4xOTI0NUw0LjI4MjAzIDE0LjE1ODZDNC40NTY0MSAxNC4xMjY5IDQuNTk5MTggMTQuMDA0MSA0LjY1OTY3IDEzLjg0MTFMNC42ODI4MiAxMy43NTY1TDQuNjkwODUgMTMuNjY2N1YxMS45MTY3TDQuNjgyODIgMTEuODI2OEM0LjY1MTE3IDExLjY1MTkgNC41Mjg3OSAxMS41MDg2IDQuMzY2MzUgMTEuNDQ3OUw0LjI4MjAzIDExLjQyNDdMNC4xOTI0NSAxMS40MTY3Wk04Ljg4MzI5IDExLjQxNjdINy4wNjU1OUw2Ljk3NiAxMS40MjQ3QzYuODAxNjIgMTEuNDU2NSA2LjY1ODg1IDExLjU3OTIgNi41OTgzNyAxMS43NDIyTDYuNTc1MjIgMTEuODI2OEw2LjU2NzE5IDExLjkxNjdWMTMuNjY2N0w2LjU3NTIyIDEzLjc1NjVDNi42MDY4NyAxMy45MzE1IDYuNzI5MjUgMTQuMDc0NyA2Ljg5MTY4IDE0LjEzNTRMNi45NzYgMTQuMTU4Nkw3LjA2NTU5IDE0LjE2NjdIOC44ODMyOUw4Ljk3Mjg4IDE0LjE1ODZDOS4xNDcyNiAxNC4xMjY5IDkuMjkwMDMgMTQuMDA0MSA5LjM1MDUxIDEzLjg0MTFMOS4zNzM2NyAxMy43NTY1TDkuMzgxNyAxMy42NjY3VjExLjkxNjdMOS4zNzM2NyAxMS44MjY4QzkuMzQyMDIgMTEuNjUxOSA5LjIxOTY0IDExLjUwODYgOS4wNTcyIDExLjQ0NzlMOC45NzI4OCAxMS40MjQ3TDguODgzMjkgMTEuNDE2N1pNNC4xOTI0NSA2LjgzMzMzSDIuMzc0NzRMMi4yODUxNSA2Ljg0MTM5QzIuMTEwNzggNi44NzMxNCAxLjk2ODAxIDYuOTk1OTEgMS45MDc1MiA3LjE1ODg3TDEuODg0MzcgNy4yNDM0NkwxLjg3NjM0IDcuMzMzMzNWOS4wODMzM0wxLjg4NDM3IDkuMTczMjFDMS45MTYwMiA5LjM0ODE1IDIuMDM4NCA5LjQ5MTM3IDIuMjAwODMgOS41NTIwNUwyLjI4NTE1IDkuNTc1MjhMMi4zNzQ3NCA5LjU4MzMzSDQuMTkyNDVMNC4yODIwMyA5LjU3NTI4QzQuNDU2NDEgOS41NDM1MyA0LjU5OTE4IDkuNDIwNzUgNC42NTk2NyA5LjI1NzhMNC42ODI4MiA5LjE3MzIxTDQuNjkwODUgOS4wODMzM1Y3LjMzMzMzTDQuNjgyODIgNy4yNDM0NkM0LjY1MTE3IDcuMDY4NTIgNC41Mjg3OSA2LjkyNTI5IDQuMzY2MzUgNi44NjQ2MUw0LjI4MjAzIDYuODQxMzlMNC4xOTI0NSA2LjgzMzMzWk04Ljg4MzI5IDYuODMzMzNINy4wNjU1OUw2Ljk3NiA2Ljg0MTM5QzYuODAxNjIgNi44NzMxNCA2LjY1ODg1IDYuOTk1OTEgNi41OTgzNyA3LjE1ODg3TDYuNTc1MjIgNy4yNDM0Nkw2LjU2NzE5IDcuMzMzMzNWOS4wODMzM0w2LjU3NTIyIDkuMTczMjFDNi42MDY4NyA5LjM0ODE1IDYuNzI5MjUgOS40OTEzNyA2Ljg5MTY4IDkuNTUyMDVMNi45NzYgOS41NzUyOEw3LjA2NTU5IDkuNTgzMzNIOC44ODMyOUw4Ljk3Mjg4IDkuNTc1MjhDOS4xNDcyNiA5LjU0MzUzIDkuMjkwMDMgOS40MjA3NSA5LjM1MDUxIDkuMjU3OEw5LjM3MzY3IDkuMTczMjFMOS4zODE3IDkuMDgzMzNWNy4zMzMzM0w5LjM3MzY3IDcuMjQzNDZDOS4zNDIwMiA3LjA2ODUyIDkuMjE5NjQgNi45MjUyOSA5LjA1NzIgNi44NjQ2MUw4Ljk3Mjg4IDYuODQxMzlMOC44ODMyOSA2LjgzMzMzWk0xMy41NzQxIDYuODMzMzNIMTEuNzU2NEwxMS42NjY4IDYuODQxMzlDMTEuNDkyNSA2Ljg3MzE0IDExLjM0OTcgNi45OTU5MSAxMS4yODkyIDcuMTU4ODdMMTEuMjY2MSA3LjI0MzQ2TDExLjI1OCA3LjMzMzMzVjkuMDgzMzNMMTEuMjY2MSA5LjE3MzIxQzExLjI5NzcgOS4zNDgxNSAxMS40MjAxIDkuNDkxMzcgMTEuNTgyNSA5LjU1MjA1TDExLjY2NjggOS41NzUyOEwxMS43NTY0IDkuNTgzMzNIMTMuNTc0MUwxMy42NjM3IDkuNTc1MjhDMTMuODM4MSA5LjU0MzUzIDEzLjk4MDkgOS40MjA3NSAxNC4wNDE0IDkuMjU3OEwxNC4wNjQ1IDkuMTczMjFMMTQuMDcyNSA5LjA4MzMzVjcuMzMzMzNMMTQuMDY0NSA3LjI0MzQ2QzE0LjAzMjkgNy4wNjg1MiAxMy45MTA1IDYuOTI1MjkgMTMuNzQ4IDYuODY0NjFMMTMuNjYzNyA2Ljg0MTM5TDEzLjU3NDEgNi44MzMzM1oiIGZpbGw9IiM1ODY1N0MiLz4KPHBhdGggZD0iTTEzLjA1MjIgMS4xMjVIMTUuMDQ1OEMxNS41OTYzIDEuMTI1IDE2LjA0MjYgMS42MDA3IDE2LjA0MjYgMi4xODc1VjRIMC4wOTM3NVYyLjE4NzVDMC4wOTM3NSAxLjYwMDcgMC41NDAwMzUgMS4xMjUgMS4wOTA1NiAxLjEyNUgzLjA4NDE3VjEuMDYyNUMzLjA4NDE3IDAuNDc1Njk3IDMuNTMwNDUgMCA0LjA4MDk3IDBDNC42MzE0OSAwIDUuMDc3NzggMC40NzU2OTcgNS4wNzc3OCAxLjA2MjVWMS4xMjVIMTEuMDU4NlYxLjA2MjVDMTEuMDU4NiAwLjQ3NTY5NyAxMS41MDQ5IDAgMTIuMDU1NCAwQzEyLjYwNTkgMCAxMy4wNTIyIDAuNDc1Njk3IDEzLjA1MjIgMS4wNjI1VjEuMTI1WiIgZmlsbD0iIzU4NjU3QyIvPgo8L3N2Zz4K);
  }
  .form-star-rating-star.Stars {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKAAAAAeCAYAAACrDxUoAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAvDSURBVHgB7VtLbBvXFb1vZjgiRdEmlcKWYQWlDLuo0QamC7SRW7sdpg0QO4uiaLsoGsBysq/RbQtEYpCkyMpJurY+aLpogtbdSAaapGTzge1kYW4KJ0g/TGpbNm2JlEiK5Pxe7x1xBIqixuIbkkKbHGDA+b13+O6cOe/NuzMAX+AL/K/i3Q8+Ov/etY8uwC4h/9bo+XtvP/y55b/71uil3Yx/6cTJ86snTvniZyCI9Ic3tKCkpGnd1M3kqRNHM9BHLL45qinqcIN/OXng8ZsZ6CMcfoXaz8A0jf7z/+XghCSxmX/F0rsS/8LJk1pg30ia47p5+04ydvW9DAhAAkEonE3G9kYgFo0AyGwS+gyZwWRo/xmghdahzyDOcGQYwpHYrvBL0jrnrsWfw6T6zNMwgIuf9gsJkNxPkWUtMhSCSDgEtP7ulRsa9AnkPiwwrKmxR4EWWqd90Cc4/LKihUIRoIXJgf7yo/sFQ3vitL4b8Sf3k/aPaIEzp4EWdmBEK4yf1EAAQgJ03c9Fv+9C1/1c9NsFXfdz0W8XJPcjThd9j3/D/Vz4ccGOBdjsfi76eRc2u5+Lfrpgs/u56KcLuu4ny4GNff2Mf7P7ufDjgh0LsNX9XPTrLmx1Pxf9csFW93PRLxdsdT8XfYt/i/u5EHXBjgTYzv1c9OMubOd+Lvrhgu3cz0U/XLCd+7noR/zbuZ8LURfcsQDT169H0f0utHM/F+5dmL5yIw5dxr/T0ajE4EI793PhuuBieiQOPeJv534uXBfsBT/VuZ37uehl/AuaFpVsuNDO/Vy4LlgYH4/DDrFpHpBEBkY4DmAlFGB78WCCry9RmbF4ZGgQHort8axwqbAKK6UKrvEiVp/FOnIW55/aMs+CreQgUMkljx8vtitLFzmM/JYMCZmzvTawBAOeAMajjA3G1eFHYfDAjz351xb/CPX7GWoYcWSxjhwnfmZlA7aUqyD/WLLYOT/I8eBgBCJ7vuTJX169D2uVFd/8YLM4Y+zLxI91xYFJURLfYDi6cX5+8Z9gfv3v0K34k8hA1+O4mlC4tJdLHK89SwBnUWkoHCeXGzj/C/BC/dVXQf/DG7RaxCBk8X9g+xnysyxYVg5UNRfLZDb4HQG+++HHkxikCRKZJEugBgIQUGQ8NwASY84vbXcCw7RwgtbC9hhgWlZj2wTdMJ3g2DZLfW/8qy/TuXffHsWxA58gkTF5EOTQQZDUYZCDoyDJofXtwEOd0INtLIGtL4NVvQVWY93Zrt10xGFznhp5/NZmfhQZQ5sJBFTkDYASGMD2S/irQrtuzwuWZeBigmnUnV+btrH9pql78suy4vDS/6DfgLLOTdutaCdAkfiXvn1yEm+UCRIZRIZAPnwYu9MDIB85AqxpuxPwxUWw79wB65N/gI3r7raN24gi6i2198r7LyvrZ3MNxxDxfQ9FoVsgwdISCqpbjt1bKkZLleoPcdUJAOOgBWLj8fDoU9AtkGBpUcJHthyr3HwtahSubeIfwLHVnug+6BZINLSo6tbx8moxH61XSz3l7yT+HPnVJ5+IB3/9K+gWHAHTcvz4lmO1F16MGvOXHX7ntjItfq5cqWYLKyXoNYgDG58lTnefZZjn9MK1bPXuZeg1asihL1/LEmczf61aylZKBeg1iKO2VmrDX871g79t/DnGf+Fytn5xBnqN+vQMEBdx0rYjwOSJozkzUE0WVso9FSHVTRzERZzu/gOn7+RUWUnW8gs9FSGJr3p3IbtWLieJs5W/Ul7uqQip7kppuS2/bRjIX+ipCLeLf+zq1ZytKsn69HRPRUjiq1+czhIXcdK+LQ8hihFKD4VDiW52xwS0/fU7jxq/3SA4HY/qlpnGKZVEN7tjQuU/vwe9cNW5+GM/KnryB0ORRDe7QwJ2u47z7YQ/PDSc8HradeE1BmzFjuJPT7o6xv/M6UQ3u2NC7YXfoPMtrIuv6SFk08iW/hj9wXK5eim/VIRuodH4tFfjCbFkrkhOpBc+uITjNOgWSHz14tW018Vv5sfu8BIJpluguqrVUman/N124kb8Mw+MPwqDBILjsz/jOA26BRKfMb+QaRUfYdvXsd65dmMGp10m/DihbdvOtMBqeW32u48ePddJ2btvHZxRY+MTfpyQW2uwdvsS6MUrs/t/cKtjfpz0nfDjhBzbX8JpmVp1dQ75J3ZaznXCUDiaiOzZ/un/QQ7YFP85jP8EdICVE9+ZVZ88c9aPE/JyGeqv/Bb0+fk5fOKdaHfOthPRJJgSCsePE4qKj0CCwS5z1o8Tri3+SUh8Lj8KZ9aPE4qIj+A6YbVSRCdcBlGIio9AgtHnF+b8OGH9lVc9xUfwzIRYNqRqdR1EQWUtFVIgCNuwUmblExCFWf4E6wj44jf0KojC0GvEPwUCIBHaHH6p++BvxH8KBGFza8q6fh1EYWJZqsPrHO9UnAJxzC+CKBjmrsCQxftwRYl3OgG9iZ8msWXDH7+sgCgwk+GLH5MAUSbtbvzZyAiIgg0NoYtJnvyeApQsnhhQO8sANGMAMyqSbWsgCEpDycGDIArKpNgMNBAE8VM2QhRU1g8/ZksSlAkRhd/40/WXjhwBUVAmRVKY5nWOtwNKUlxRxO9ASuFhBOIgCkoNqsMgCgVTeKiiOIgC+WUfDkgpPD/86IDHZB83QFfi78MBpSOHnTo8z3nAwWOUFxYFlZVAOgaCIH45NOpxBm8s7UFlJWC++P06oB9+bBsOgcRvAL/xxxHEMfkr/hwQ04ye/Nu2Lk2DTwOwC956Cj3e0xsXuHAJk+SYR2btXtNaL8sS6es3cI7xKHQCnIoAwzITSnCrALlVgdr9d6C+lOY0zlOj4yy0/wlonVWiLpje5lm8HMdsQw46gcsfULYKkKZX6I0XfEp1XhLA6RpoN3FMZYkfBNCYimk7BCB+zJo465/dzjvvAnrFH0TBoW0XTNMr9MaL8cbrzjhPOX0GBp7ZOtHglGXe7fdywCiKi5aNHSQ8Sudgo3lxpTyjG/ahWt08tFwszdK+UmVtc+VYFsfBNAiNQ+eIooVFSWAuSHiUqlv5OMWr+fkZq1Y6ZFbyh9buzM+ufDzF64Vr0OyIVBYXcX5sf/NbKM6FxwnipfynUC4vzZq6PmbUamOl1aU52oeZjk0VMKf9UhRvgDh0iJppJlq7X5c/f28JCrV9s8vyz8cw/mMY/zkS4nbxRwOIQ4egrAiKK+o8SLj8NK+HqbrKT34K+vTFWXOlOGbcujlWv3hxjvYZC5vTqFSW6vB6P3B7fzeDCbXJ/cjxUHwYA57B7PVzLd+hnktfuZHK3y9OYq7xbGzvEIuEB50DQXobo1YnG85BB6ALoA6NNbY41O//Dar5BW5b1Qzn8NyBx29lmvkXL1up8me/m8R88tngvjNsIPYtCoHzNozEs0L8AwPBjW1yvDWck7O4TfypFv6JxcsjU0Xj7lSgvHwWU2lA7w4SAireBKzUMT89Abvjz2bHLUuPZO4Hnkp989TPMgB/xaMvOfwY/ymM/1Qj/uA3/oDtl752eGNTf/0NFN008NVyxsL2x66+n2k6ewJFNmU9/8IUnnNWffppcN+alr9xHPg7723Lv60A3SdguquwUdw0rXbC20Ajue0I8d7SyjSW0UiIAUWBslUfgw7hPgGTq6GouKUvN4TX/gPwRnLfEWL15mvTWEYjIUqBYdAtJsRP3R+5GnZ33LSMnfA7QixZ+RlMp2kkRBnbX6t1zs+Ba/QETI5HwqtJD2eK6unUI6deygDMbzm/EX9HiBj/mUb8QTT+7hMwuVqdhHf7TkN47T9Ab7xc4AjRfv7FGRSiRkKkaRzO7W35PUe4NMbDH0/htaIRiMfo2wQMxLO4rskKE0ps1pfomoPnhW9FQwiPLb4JGgrxWSyv4WBaiL9aWeFrYvxJ+jaktJKfFOVHziKN8xrtTz38fXKc9x9YrhH/ZCP+9JGQcPwNdD2Dg6fwWtEQYpK+DUEhTuKdrOFcplhi+0oXvi3wU4fI2Kmbdfw/8PuJfyffdojW8V+eSSW+hhteKQAAAABJRU5ErkJggg==) !important;
  }
  .signature-pad-passive, .signature-placeholder:after {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTk4IiBoZWlnaHQ9IjQwIiB2aWV3Qm94PSIwIDAgMTk4IDQwIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cGF0aCBkPSJNNzQuMTA0NCA2LjM0NTA4SDc1LjU4NTlDNzUuNTQxMiA0LjcxNDQgNzQuMDk5NCAzLjUzMTE2IDcyLjAzMTIgMy41MzExNkM2OS45ODc5IDMuNTMxMTYgNjguNDIxOSA0LjY5OTQ4IDY4LjQyMTkgNi40NTQ0NkM2OC40MjE5IDcuODcxMzYgNjkuNDM2MSA4LjcwMTYyIDcxLjA3MTcgOS4xNDQwOUw3Mi4yNzQ5IDkuNDcyMjFDNzMuMzYzNiA5Ljc2MDU2IDc0LjIwMzggMTAuMTE4NSA3NC4yMDM4IDExLjAyMzNDNzQuMjAzOCAxMi4wMTc3IDczLjI1NDMgMTIuNjczOSA3MS45NDY3IDEyLjY3MzlDNzAuNzYzNSAxMi42NzM5IDY5Ljc3OTEgMTIuMTQ2OSA2OS42ODk2IDExLjAzODNINjguMTQ4NEM2OC4yNDc5IDEyLjg4MjcgNjkuNjc0NyAxNC4wMjEyIDcxLjk1NjcgMTQuMDIxMkM3NC4zNDggMTQuMDIxMiA3NS43MjUxIDEyLjc2MzQgNzUuNzI1MSAxMS4wMzgzQzc1LjcyNTEgOS4yMDM3NSA3NC4wODk1IDguNDkyODEgNzIuNzk2OSA4LjE3NDYzTDcxLjgwMjYgNy45MTYxQzcxLjAwNzEgNy43MTIyNyA2OS45NDgyIDcuMzM5NCA2OS45NTMxIDYuMzY0OTdDNjkuOTUzMSA1LjQ5OTkxIDcwLjc0MzYgNC44NTg1OCA3MS45OTY0IDQuODU4NThDNzMuMTY0OCA0Ljg1ODU4IDczLjk5NSA1LjQwNTQ1IDc0LjEwNDQgNi4zNDUwOFoiIGZpbGw9IiM4Nzk1QUIiLz4KPHBhdGggZD0iTTc3LjQ0MTYgMTMuODUyMkg3OC45MjgxVjYuMjE1ODJINzcuNDQxNlYxMy44NTIyWk03OC4xOTIzIDUuMDM3NTVDNzguNzA0NCA1LjAzNzU1IDc5LjEzMTkgNC42Mzk4MyA3OS4xMzE5IDQuMTUyNjFDNzkuMTMxOSAzLjY2NTM5IDc4LjcwNDQgMy4yNjI3IDc4LjE5MjMgMy4yNjI3Qzc3LjY3NTIgMy4yNjI3IDc3LjI1MjcgMy42NjUzOSA3Ny4yNTI3IDQuMTUyNjFDNzcuMjUyNyA0LjYzOTgzIDc3LjY3NTIgNS4wMzc1NSA3OC4xOTIzIDUuMDM3NTVaIiBmaWxsPSIjODc5NUFCIi8+CjxwYXRoIGQ9Ik04NC4xMjk2IDE2Ljg2Qzg2LjA3MzUgMTYuODYgODcuNTc0OSAxNS45NzAxIDg3LjU3NDkgMTQuMDIxMlY2LjIxNTgySDg2LjExODNWNy40NTM3NUg4Ni4wMDg5Qzg1Ljc0NTQgNi45ODE0NSA4NS4yMTg0IDYuMTE2MzkgODMuNzk2NSA2LjExNjM5QzgxLjk1MjEgNi4xMTYzOSA4MC41OTQ4IDcuNTczMDYgODAuNTk0OCAxMC4wMDQyQzgwLjU5NDggMTIuNDQwMyA4MS45ODE5IDEzLjczNzggODMuNzg2NiAxMy43Mzc4Qzg1LjE4ODYgMTMuNzM3OCA4NS43MzA1IDEyLjk0NzQgODUuOTk4OSAxMi40NjAxSDg2LjA5MzRWMTMuOTYxNkM4Ni4wOTM0IDE1LjEzOTggODUuMjczMSAxNS42NjE4IDg0LjE0NDUgMTUuNjYxOEM4Mi45MDY2IDE1LjY2MTggODIuNDI0NCAxNS4wNDA0IDgyLjE2MDkgMTQuNjE3OEw4MC44ODMyIDE1LjE0NDhDODEuMjg1OSAxNi4wNjQ1IDgyLjMwNSAxNi44NiA4NC4xMjk2IDE2Ljg2Wk04NC4xMTQ3IDEyLjUwNDlDODIuNzg3MyAxMi41MDQ5IDgyLjA5NjIgMTEuNDg1NyA4Mi4wOTYyIDkuOTg0MjlDODIuMDk2MiA4LjUxNzY3IDgyLjc3MjQgNy4zNzkxNyA4NC4xMTQ3IDcuMzc5MTdDODUuNDEyMyA3LjM3OTE3IDg2LjEwODMgOC40MzgxMiA4Ni4xMDgzIDkuOTg0MjlDODYuMTA4MyAxMS41NjAzIDg1LjM5NzQgMTIuNTA0OSA4NC4xMTQ3IDEyLjUwNDlaIiBmaWxsPSIjODc5NUFCIi8+CjxwYXRoIGQ9Ik05MS4wNTUgOS4zMTgwOUM5MS4wNTUgOC4xMDAwNSA5MS44MDA4IDcuNDA0MDMgOTIuODM0OSA3LjQwNDAzQzkzLjg0NDEgNy40MDQwMyA5NC40NTU2IDguMDY1MjUgOTQuNDU1NiA5LjE3MzkyVjEzLjg1MjJIOTUuOTQyMVY4Ljk5NDk0Qzk1Ljk0MjEgNy4xMDU3NCA5NC45MDMxIDYuMTE2MzkgOTMuMzQyIDYuMTE2MzlDOTIuMTkzNSA2LjExNjM5IDkxLjQ0MjggNi42NDgzNSA5MS4wODk4IDcuNDU4NzJIOTAuOTk1NFY2LjIxNTgySDg5LjU2ODVWMTMuODUyMkg5MS4wNTVWOS4zMTgwOVoiIGZpbGw9IiM4Nzk1QUIiLz4KPHBhdGggZD0iTTEwMS43NiAxMy44NTIySDEwMy4yOTZWOS40MTI1NUgxMDguMzcyVjEzLjg1MjJIMTA5LjkxNFYzLjY3MDM3SDEwOC4zNzJWOC4wOTUwOEgxMDMuMjk2VjMuNjcwMzdIMTAxLjc2VjEzLjg1MjJaIiBmaWxsPSIjODc5NUFCIi8+CjxwYXRoIGQ9Ik0xMTUuMzIzIDE0LjAwNjNDMTE2Ljk4OCAxNC4wMDYzIDExOC4xNjYgMTMuMTg2IDExOC41MDQgMTEuOTQzMUwxMTcuMDk3IDExLjY4OTVDMTE2LjgyOSAxMi40MTA0IDExNi4xODMgMTIuNzc4MyAxMTUuMzM4IDEyLjc3ODNDMTE0LjA2NSAxMi43NzgzIDExMy4yMSAxMS45NTMgMTEzLjE3IDEwLjQ4MTRIMTE4LjU5OVY5Ljk1NDQ2QzExOC41OTkgNy4xOTUyMiAxMTYuOTQ4IDYuMTE2MzkgMTE1LjIxOCA2LjExNjM5QzExMy4wOSA2LjExNjM5IDExMS42ODggNy43MzcxMyAxMTEuNjg4IDEwLjA4MzdDMTExLjY4OCAxMi40NTUyIDExMy4wNyAxNC4wMDYzIDExNS4zMjMgMTQuMDA2M1pNMTEzLjE3NSA5LjM2NzgxQzExMy4yMzUgOC4yODQgMTE0LjAyIDcuMzQ0MzcgMTE1LjIyOCA3LjM0NDM3QzExNi4zODIgNy4zNDQzNyAxMTcuMTM3IDguMTk5NDkgMTE3LjE0MiA5LjM2NzgxSDExMy4xNzVaIiBmaWxsPSIjODc5NUFCIi8+CjxwYXRoIGQ9Ik0xMjAuMjQ4IDEzLjg1MjJIMTIxLjczNVY5LjE4ODgzQzEyMS43MzUgOC4xODk1NCAxMjIuNTA1IDcuNDY4NjYgMTIzLjU1OSA3LjQ2ODY2QzEyMy44NjggNy40Njg2NiAxMjQuMjE2IDcuNTIzMzUgMTI0LjMzNSA3LjU1ODE1VjYuMTM2MjdDMTI0LjE4NiA2LjExNjM5IDEyMy44OTIgNi4xMDE0NyAxMjMuNzAzIDYuMTAxNDdDMTIyLjgwOSA2LjEwMTQ3IDEyMi4wNDMgNi42MDg1OCAxMjEuNzY1IDcuNDI4ODlIMTIxLjY4NVY2LjIxNTgySDEyMC4yNDhWMTMuODUyMloiIGZpbGw9IiM4Nzk1QUIiLz4KPHBhdGggZD0iTTEyOC42MzkgMTQuMDA2M0MxMzAuMzA1IDE0LjAwNjMgMTMxLjQ4MyAxMy4xODYgMTMxLjgyMSAxMS45NDMxTDEzMC40MTQgMTEuNjg5NUMxMzAuMTQ1IDEyLjQxMDQgMTI5LjQ5OSAxMi43NzgzIDEyOC42NTQgMTIuNzc4M0MxMjcuMzgxIDEyLjc3ODMgMTI2LjUyNiAxMS45NTMgMTI2LjQ4NiAxMC40ODE0SDEzMS45MTVWOS45NTQ0NkMxMzEuOTE1IDcuMTk1MjIgMTMwLjI2NSA2LjExNjM5IDEyOC41MzUgNi4xMTYzOUMxMjYuNDA3IDYuMTE2MzkgMTI1LjAwNSA3LjczNzEzIDEyNS4wMDUgMTAuMDgzN0MxMjUuMDA1IDEyLjQ1NTIgMTI2LjM4NyAxNC4wMDYzIDEyOC42MzkgMTQuMDA2M1pNMTI2LjQ5MSA5LjM2NzgxQzEyNi41NTEgOC4yODQgMTI3LjMzNiA3LjM0NDM3IDEyOC41NDUgNy4zNDQzN0MxMjkuNjk4IDcuMzQ0MzcgMTMwLjQ1NCA4LjE5OTQ5IDEzMC40NTkgOS4zNjc4MUgxMjYuNDkxWiIgZmlsbD0iIzg3OTVBQiIvPgo8cGF0aCBkPSJNMSAzNi4wMjI5QzEyLjI0NjEgMzkuMjIwNSAyMy4xODIgMzUuMDMyOCAzMi41MDg0IDI4Ljg1MTFDMzcuNDQwNCAyNS41ODIyIDQyLjMzNDEgMjEuNjY4NyA0NS4zMzI5IDE2LjUxMDFDNDYuNTI4MyAxNC40NTM5IDQ3Ljk4OTMgMTAuODg0NCA0NC4yMjcxIDEwLjg1MjhDNDAuMTMzNyAxMC44MTgzIDM3LjA4NjQgMTQuNTE0MiAzNS41NTg4IDE3Ljg3NDRDMzMuMzY4MSAyMi42OTMzIDMzLjI5MSAyOC40MDA0IDM1Ljk2NTYgMzMuMDQ0MUMzOC40OTcxIDM3LjQzOTYgNDIuNzQ0NSAzOS41MTg0IDQ3LjgxMTQgMzguNjYzOUM1My4xMDM3IDM3Ljc3MTMgNTcuNzMwNCAzNC4xNTYyIDYxLjU3NjUgMzAuNjc4NUM2Mi45OTMgMjkuMzk3NiA2NC4zMjA5IDI4LjA0NzUgNjUuNTQyIDI2LjU4NTdDNjUuNjg0MiAyNi40MTU1IDY2LjE4NDIgMjUuNTc5OCA2Ni41MDggMjUuNTIxOEM2Ni42Mjg0IDI1LjUwMDIgNjYuODA2NCAyOS4xNjQ1IDY2LjgzODUgMjkuMzY0M0M2Ny4xMjU1IDMxLjE1NDMgNjguMDI5NCAzMy4xNzA2IDcwLjE0MzEgMzMuMjMxOEM3Mi44MzMyIDMzLjMwOTcgNzUuMDgyNiAzMS4wNTkxIDc2Ljg5MjIgMjkuNDAxOEM3Ny41MDI2IDI4Ljg0MjggNzkuNDQyNSAyNi4xNjAxIDgwLjQ3NjQgMjYuMTYwMUM4MC45MDE0IDI2LjE2MDEgODEuNzI0OSAyOC4zMDM4IDgxLjkxMjcgMjguNTg4M0M4NC4zOTcyIDMyLjM1MjMgODguMDQ0NiAzMC45ODk0IDkwLjg3MzMgMjguMzUwNUM5MS4zOTM0IDI3Ljg2NTMgOTQuMTc4MSAyMy45ODM5IDk1LjMwOTEgMjQuNjgzMkM5Ni4yMjAzIDI1LjI0NjYgOTYuNjIxNyAyNi41NzY1IDk3LjA4ODYgMjcuNDYxOEM5Ny44NDg0IDI4LjkwMjkgOTguODEwNyAyOS45Mjk0IDEwMC40MTkgMzAuNDY1N0MxMDMuOTEyIDMxLjYzMSAxMDcuNjggMjguMzYzIDExMS4yMjIgMjguMzYzQzExMi4yNTUgMjguMzYzIDExMi43ODMgMjguOTMxNiAxMTMuMzMyIDI5LjcxNDhDMTE0LjA4MSAzMC43ODIzIDExNC44NTMgMzEuNTI3NiAxMTYuMjA1IDMxLjgxNzVDMTIwLjM5MyAzMi43MTU1IDEyMy44MjIgMjguNzM5OSAxMjcuODcyIDI5LjA4ODlDMTI5LjA1MyAyOS4xOTA3IDEyOS45MzUgMzAuMzgxNiAxMzAuODIxIDMxLjAxNjRDMTMyLjYwOSAzMi4yOTY5IDEzNC43NTkgMzMuMTgzNiAxMzYuOTQ4IDMzLjQ5NDdDMTQwLjQ1NyAzMy45OTM0IDE0My45NzUgMzMuMzMyNiAxNDcuMzk1IDMyLjU5MzVDMTUzLjMgMzEuMzE3NCAxNTkuMTQ3IDI5Ljc5NTggMTY1LjA2MiAyOC41NjMzIiBzdHJva2U9IiNERkUzRUQiIHN0cm9rZS13aWR0aD0iMS41IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPHBhdGggZD0iTTE5Ni41MTUgMTUuMDc3OEwxODQuNDkyIDAuNTUxNzk1QzE4NC4yNTcgMC4yNjc4MSAxODMuODM4IDAuMjI4MjYgMTgzLjU1NCAwLjQ2MzMwN0wxODAuNjQ5IDIuODY3ODhDMTgwLjM2NSAzLjEwMjkzIDE4MC4zMjUgMy41MjI0IDE4MC41NiAzLjgwNjM4TDE5Mi41ODMgMTguMzMyNEMxOTIuNyAxOC40NzQxIDE5Mi44NjQgMTguNTU1MSAxOTMuMDM0IDE4LjU3MTJDMTkzLjIwNCAxOC41ODcyIDE5My4zOCAxOC41MzgyIDE5My41MjIgMTguNDIwOUwxOTYuNDI3IDE2LjAxNjRDMTk2LjcxMSAxNS43ODEzIDE5Ni43NSAxNS4zNjE4IDE5Ni41MTUgMTUuMDc3OFoiIGZpbGw9IiNERkUzRUQiLz4KPHBhdGggZD0iTTE4MS40MzYgNi45NTc2OUwxNzAuODU1IDkuODI2NDJDMTcwLjYyMiA5Ljg4OTUgMTcwLjQ0MSAxMC4wNzMzIDE3MC4zODMgMTAuMzA3NkwxNjYuMTU1IDI3LjEwMjFMMTczLjk3NSAyMC42Mjk2QzE3My4yNDUgMTkuMjYxNyAxNzMuNTUgMTcuNTE5NCAxNzQuNzkgMTYuNDkyNkMxNzYuMjA2IDE1LjMyMDMgMTc4LjMxMiAxNS41MTk2IDE3OS40ODMgMTYuOTM1MUMxODAuNjU1IDE4LjM1MTMgMTgwLjQ1NiAyMC40NTY2IDE3OS4wNDEgMjEuNjI4MkMxNzguMzMzIDIyLjIxNDQgMTc3LjQ1MiAyMi40NTgyIDE3Ni42MDMgMjIuMzc4MUMxNzUuOTY0IDIyLjMxNzkgMTc1LjM0MyAyMi4wNzQ1IDE3NC44MjUgMjEuNjU3M0wxNjcuMDA1IDI4LjEyOTFMMTg0LjI5NCAyNy4xMTQyQzE4NC41MzQgMjcuMTAwMSAxODQuNzQ5IDI2Ljk1NzYgMTg0Ljg1NCAyNi43NDA2TDE4OS42NSAxNi44ODE5TDE4MS40MzYgNi45NTc2OVoiIGZpbGw9IiNERkUzRUQiLz4KPC9zdmc+Cg==);
  }
  .form-spinner-button.form-spinner-up:before {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAxNCAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjUgMTIuNUw3LjUgNy41TDEyLjUgNy41QzEyLjc3NiA3LjUgMTMgNy4yNzYgMTMgN0MxMyA2LjcyNCAxMi43NzYgNi41IDEyLjUgNi41TDcuNSA2LjVMNy41IDEuNUM3LjUgMS4yMjQgNy4yNzYgMSA3IDFDNi43MjQgMSA2LjUgMS4yMjQgNi41IDEuNUw2LjUgNi41TDEuNSA2LjVDMS4yMjQgNi41IDAuOTk5OTk5IDYuNzI0IDAuOTk5OTk5IDdDMC45OTk5OTkgNy4yNzYgMS4yMjQgNy41IDEuNSA3LjVMNi41IDcuNUw2LjUgMTIuNUM2LjUgMTIuNzc2IDYuNzI0IDEzIDcgMTNDNy4yNzYgMTMgNy41IDEyLjc3NiA3LjUgMTIuNVoiIGZpbGw9IiM1NjY1N0UiIHN0cm9rZT0iIzU2NjU3RSIgc3Ryb2tlLXdpZHRoPSIwLjUiLz4KPC9zdmc+Cg==);
  }
  .form-spinner-button.form-spinner-down:before {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMyIgdmlld0JveD0iMCAwIDE0IDMiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xMi41IDJMNy41IDJMMS41IDJDMS4yMjQgMiAxIDEuNzc2IDEgMS41QzEgMS4yMjQgMS4yMjQgMC45OTk5OTkgMS41IDAuOTk5OTk5TDYuNSAxTDEyLjUgMUMxMi43NzYgMSAxMyAxLjIyNCAxMyAxLjVDMTMgMS43NzYgMTIuNzc2IDIgMTIuNSAyWiIgZmlsbD0iIzU2NjU3RSIgc3Ryb2tlPSIjNTY2NTdFIiBzdHJva2Utd2lkdGg9IjAuNSIvPgo8L3N2Zz4K);
  }
  .form-collapse-table:after{
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTEiIGhlaWdodD0iMTEiIHZpZXdCb3g9IjAgMCAxMSAxMSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGNpcmNsZSBjeD0iNS41IiBjeT0iNS41IiByPSI1LjUiIHRyYW5zZm9ybT0icm90YXRlKC05MCA1LjUgNS41KSIgZmlsbD0iI0MzQ0FEOCIgZmlsbC1vcGFjaXR5PSIwLjUiLz4KPHBhdGggZD0iTTMuMTY3NTYgNC40NjExMkMzLjE0NzkzIDQuNTAzMDggMy4xMzk2MSA0LjU1MDA4IDMuMTQzNTIgNC41OTY4M0MzLjE0NzQzIDQuNjQzNTggMy4xNjM0MyA0LjY4ODI0IDMuMTg5NzIgNC43MjU3OUw1LjMxMTE1IDcuNzU2NEM1LjMzMzEgNy43ODc3NyA1LjM2MTU3IDcuODEzMjMgNS4zOTQzIDcuODMwNzZDNS40MjcwMyA3Ljg0ODI5IDUuNDYzMTIgNy44NTc0MiA1LjQ5OTcyIDcuODU3NDJDNS41MzYzMSA3Ljg1NzQyIDUuNTcyNCA3Ljg0ODI5IDUuNjA1MTMgNy44MzA3NkM1LjYzNzg2IDcuODEzMjMgNS42NjYzMyA3Ljc4Nzc3IDUuNjg4MjkgNy43NTY0TDcuODA5NzIgNC43MjU3OUM3Ljg0MDMyIDQuNjgyMDcgNy44NTY4NiA0LjYyODkgNy44NTY4NiA0LjU3NDI2QzcuODU2NzIgNC41MzQ5OSA3Ljg0ODE4IDQuNDk2MjkgNy44MzE4OCA0LjQ2MTEyQzcuODEyMjggNC40MTkyMiA3Ljc4MjE5IDQuMzgzOTkgNy43NDQ5OCA0LjM1OTM3QzcuNzA3NzYgNC4zMzQ3NSA3LjY2NDg5IDQuMzIxNzEgNy42MjExNSA0LjMyMTcxTDMuMzc4MjkgNC4zMjE3MUMzLjMzNDU1IDQuMzIxNzEgMy4yOTE2NyA0LjMzNDc1IDMuMjU0NDYgNC4zNTkzN0MzLjIxNzI0IDQuMzgzOTkgMy4xODcxNSA0LjQxOTIyIDMuMTY3NTYgNC40NjExMlY0LjQ2MTEyWiIgZmlsbD0iI0U1RTdGMSIvPgo8L3N2Zz4K);
  }
  li[data-type=control_fileupload] .qq-upload-button:before {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzkiIGhlaWdodD0iMjciIHZpZXdCb3g9IjAgMCAzOSAyNyIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTMyLjM3NSAxMS4zMTI1QzMxLjUgNC44MTI1IDI2IDAgMTkuMzc1IDBDMTMuNjg3NSAwIDguNzUgMy41NjI1IDYuOTM3NSA4LjkzNzVDMi44NzUgOS44MTI1IDAgMTMuMzEyNSAwIDE3LjVDMCAyMi4wNjI1IDMuNTYyNSAyNS44NzUgOC4xMjUgMjYuMjVIMzEuODc1SDMxLjkzNzVDMzUuNzUgMjUuODc1IDM4Ljc1IDIyLjYyNSAzOC43NSAxOC43NUMzOC43NSAxNS4wNjI1IDM2IDExLjg3NSAzMi4zNzUgMTEuMzEyNVpNMjYuMDYyNSAxNC44MTI1QzI1LjkzNzUgMTQuOTM3NSAyNS44MTI1IDE1IDI1LjYyNSAxNUMyNS40Mzc1IDE1IDI1LjMxMjUgMTQuOTM3NSAyNS4xODc1IDE0LjgxMjVMMjAgOS42MjVWMjEuODc1QzIwIDIyLjI1IDE5Ljc1IDIyLjUgMTkuMzc1IDIyLjVDMTkgMjIuNSAxOC43NSAyMi4yNSAxOC43NSAyMS44NzVWOS42MjVMMTMuNTYyNSAxNC44MTI1QzEzLjMxMjUgMTUuMDYyNSAxMi45Mzc1IDE1LjA2MjUgMTIuNjg3NSAxNC44MTI1QzEyLjQzNzUgMTQuNTYyNSAxMi40Mzc1IDE0LjE4NzUgMTIuNjg3NSAxMy45Mzc1TDE4LjkzNzUgNy42ODc1QzE5IDcuNjI1IDE5LjA2MjUgNy41NjI1IDE5LjEyNSA3LjU2MjVDMTkuMjUgNy41IDE5LjQzNzUgNy41IDE5LjYyNSA3LjU2MjVDMTkuNjg3NSA3LjYyNSAxOS43NSA3LjYyNSAxOS44MTI1IDcuNjg3NUwyNi4wNjI1IDEzLjkzNzVDMjYuMzEyNSAxNC4xODc1IDI2LjMxMjUgMTQuNTYyNSAyNi4wNjI1IDE0LjgxMjVaIiBmaWxsPSIjQjNCQ0NDIi8+Cjwvc3ZnPgo=);
  }
  .appointmentDayPickerButton {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iOCIgaGVpZ2h0PSIxNCIgdmlld0JveD0iMCAwIDggMTQiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xIDEzTDcgN0wxIDAuOTk5OTk5IiBzdHJva2U9IiM4Nzk1QUMiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cjwvc3ZnPgo=);
  }
  .FITB:not(.formRender) .qb-datebox input:not([data-labelid]), .FITB:not(.formRender) .qb-selectbox input:not([data-labelid]),
  .FITB:not(.formRender) .qb-signaturebox input:not([data-labelid]), .FITB:not(.formRender) .qb-textbox input:not([data-labelid]),
  .FITB:not(.formRender) .qb-timebox input:not([data-labelid]), span.FITB-inptCont[data-type=datebox] label,
  span.FITB-inptCont[data-type=signaturebox] label, span.FITB-inptCont[data-type=textbox] label, span.FITB-inptCont[data-type=timebox] label,
  span.FITB-inptCont[data-type=datebox] input:focus~label, span.FITB-inptCont[data-type=datebox] input:valid~label,
  span.FITB-inptCont[data-type=signaturebox] input:focus~label, span.FITB-inptCont[data-type=signaturebox] input:valid~label,
  span.FITB-inptCont[data-type=textbox] input:focus~label, span.FITB-inptCont[data-type=textbox] input:valid~label,
  span.FITB-inptCont[data-type=timebox] input:focus~label, span.FITB-inptCont[data-type=timebox] input:valid~label {
    color: #57647e;
  }

  /* NEW THEME STYLE */
  /*PREFERENCES STYLE*//*PREFERENCES STYLE*/
    .form-all {
      font-family: Allan, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: block;
    float: none;
    text-align: left;
    width: 100%;
  
    }
  
    .form-line {
      margin-top: 12px;
      margin-bottom: 12px;
      padding-top: 0;
      padding-bottom: 0;
    }
  
    .form-all {
      max-width: 752px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 241px;
    }
  
    .form-all {
      font-size: 21px
    }
  
    .supernova .form-all, .form-all {
      background-color: #FFFFFF;
    }
  
    .form-all {
      color: #2C3345;
    }
    .form-header-group .form-header {
      color: #2C3345;
    }
    .form-header-group .form-subHeader {
      color: #2C3345;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label,
    span.FITB .qb-checkbox-label,
    span.FITB .qb-radiobox-label,
    span.FITB .form-radio label,
    span.FITB .form-checkbox label,
    [data-blotid][data-type=checkbox] [data-labelid],
    [data-blotid][data-type=radiobox] [data-labelid],
    span.FITB-inptCont[data-type=checkbox] label,
    span.FITB-inptCont[data-type=radiobox] label {
      color: #2C3345;
    }
    .form-sub-label {
      color: #464d5f;
    }
  
    .supernova {
      background-color: #F3F3FE;
    }
    .supernova body {
      background: transparent;
    }
  
    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: #FFFFFF;
    }
  
      .supernova {
        height: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        background-position: center top;
      }
      .supernova {
        background-image: url("https://img.freepik.com/vecteurs-premium/arriere-plan-degrade-adapte-pour-arriere-plan-affiche-papier-peint-ecran-telephone-portable-banniere-autres_541170-1045.jpg");
      }
      #stage {
        background-image: url("https://img.freepik.com/vecteurs-premium/arriere-plan-degrade-adapte-pour-arriere-plan-affiche-papier-peint-ecran-telephone-portable-banniere-autres_541170-1045.jpg");
      }
    
    .form-all {
      background-image: none;
    }
  .form-all:before { content: none; } .form-all { margin-top: 72px; }/*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
.form-label.form-label-auto {
        
        display: inline-block;
        float: left;
        text-align: left;
      
      }
    /* Injected CSS Code */
</style>
</head>
<body class="supernova">
<form class="jotform-form" action="" method="post" name="form_230973976460568" id="230973976460568" accept-charset="utf-8" autocomplete="on"><input type="hidden" name="formID" value="230973976460568" /><input type="hidden" id="JWTContainer" value="" /><input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li class="form-line" data-type="control_image" id="id_55">
        <div id="cid_55" class="form-input-wide" data-layout="full">
          <div style="text-align:center"><img alt="Image" loading="lazy" class="form-image" style="border:0" src="https://images.vexels.com/media/users/3/144223/isolated/preview/f1d0807f8ffad0197757d840bdc97d0b-icone-de-registro-medico.png" tabindex="0" height="100px" width="100px" data-component="image" /></div>
        </div>
      </li>
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httac htvam">
            <h1 id="header_1" class="form-header" data-component="header">Medical Record</h1>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_3"><label class="form-label form-label-top form-label-auto" id="label_3" for="first_3"> Patient Name </label>
        <div id="cid_3" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true"><span class="form-sub-label-container" style="vertical-align:top" data-input-type="first"><input type="text" id="first_3" name="patientFirstName" class="form-textbox" data-defaultvalue="" autoComplete="section-input_3 given-name" size="10" value="" data-component="first" aria-labelledby="label_3 sublabel_3_first" /><label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:13px" aria-hidden="false">First Name</label></span><span class="form-sub-label-container" style="vertical-align:top" data-input-type="last"><input type="text" id="last_3" name="patientLastName" class="form-textbox" data-defaultvalue="" autoComplete="section-input_3 family-name" size="15" value="" data-component="last" aria-labelledby="label_3 sublabel_3_last" /><label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px" aria-hidden="false">Last Name</label></span></div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_datetime" id="id_5"><label class="form-label form-label-top form-label-auto" id="label_5" for="lite_mode_5"> Date of Birth </label>
        <div id="cid_5" class="form-input-wide" data-layout="half">
          <div data-wrapper-react="true">
            <div style="display:none"><span class="form-sub-label-container" style="vertical-align:top"><input type="tel" class="form-textbox validate[limitDate]" id="month_5" name="birth[month]" size="2" data-maxlength="2" data-age="" maxLength="2" value="" autoComplete="off" aria-labelledby="label_5 sublabel_5_month" /><span class="date-separate" aria-hidden="true"> -</span><label class="form-sub-label" for="month_5" id="sublabel_5_month" style="min-height:13px" aria-hidden="false">Month</label></span><span class="form-sub-label-container" style="vertical-align:top"><input type="tel" class="form-textbox validate[limitDate]" id="day_5" name="birth[day]" size="2" data-maxlength="2" data-age="" maxLength="2" value="" autoComplete="off" aria-labelledby="label_5 sublabel_5_day" /><span class="date-separate" aria-hidden="true"> -</span><label class="form-sub-label" for="day_5" id="sublabel_5_day" style="min-height:13px" aria-hidden="false">Day</label></span><span class="form-sub-label-container" style="vertical-align:top"><input type="tel" class="form-textbox validate[limitDate]" id="year_5" name="birth[year]" size="4" data-maxlength="4" data-age="" maxLength="4" value="" autoComplete="off" aria-labelledby="label_5 sublabel_5_year" /><label class="form-sub-label" for="year_5" id="sublabel_5_year" style="min-height:13px" aria-hidden="false">Year</label></span></div><span class="form-sub-label-container" style="vertical-align:top"><input type="text" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_5" size="12" data-maxlength="12" maxLength="12" data-age="" value="" data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY" autoComplete="off" aria-labelledby="label_5 sublabel_5_litemode" /><img class="showAutoCalendar newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_5_pick" src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2" /><label class="form-sub-label" for="lite_mode_5" id="sublabel_5_litemode" style="min-height:13px" aria-hidden="false">Date</label></span>
          </div>
        </div>
      </li>
      <li id="cid_28" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httal htvam">
            <h2 id="header_28" class="form-header" data-component="header">Medical History</h2>
          </div>
        </div>
      </li>
      <li class="form-line fixed-width" data-type="control_textbox" id="id_58"><label class="form-label form-label-top form-label-auto" id="label_58" for="input_58"> Date of most recent physical exam: </label>
        <div id="cid_58" class="form-input-wide" data-layout="half"> <input type="text" id="input_58" name="recentPhysicalExam" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_58" /> </div>
      </li>
      <li class="form-line fixed-width" data-type="control_textbox" id="id_60"><label class="form-label form-label-top form-label-auto" id="label_60" for="input_60"> Are you aware of any current health problems : </label>
        <div id="cid_60" class="form-input-wide" data-layout="half"> <input type="text" id="input_60" name="currentHealthProblems" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_60" /> </div>
      </li>
      <li class="form-line fixed-width" data-type="control_textbox" id="id_59"><label class="form-label form-label-top form-label-auto" id="label_59" for="input_59"> Now under medical care of taking medication? </label>
        <div id="cid_59" class="form-input-wide" data-layout="half"> <input type="text" id="input_59" name="underMedicalCare" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_59" /> </div>
      </li>
      <li class="form-line fixed-width" data-type="control_textbox" id="id_61"><label class="form-label form-label-top form-label-auto" id="label_61" for="input_61"> Any surgery, illness, allergy or other change? </label>
        <div id="cid_61" class="form-input-wide" data-layout="half"> <input type="text" id="input_61" name="surgeryIllness" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_61" /> </div>
      </li>
      <li class="form-line fixed-width" data-type="control_textbox" id="id_62"><label class="form-label form-label-top form-label-auto" id="label_62" for="input_62"> Hospitalizations or serious injuries? </label>
        <div id="cid_62" class="form-input-wide" data-layout="half"> <input type="text" id="input_62" name="hospitalizations" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_62" /> </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_64"><label class="form-label form-label-top form-label-auto" id="label_64" for="input_64"> Give dates and full details for any “yes” answers here: </label>
        <div id="cid_64" class="form-input-wide" data-layout="full"> <textarea id="input_64" class="form-textarea" name="MH_Details" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_64"></textarea> </div>
      </li>
      <li class="form-line" data-type="control_checkbox" id="id_29"><label class="form-label form-label-top form-label-auto" id="label_29" for="input_29"> Chronic or Recurring Conditions : </label>
        <div id="cid_29" class="form-input-wide" data-layout="full">
          <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_29" data-component="checkbox"><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_0" name="chronic" value="None" /><label id="label_input_29_0" for="input_29_0">None</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_1" name="chronic" value="Allergies" /><label id="label_input_29_1" for="input_29_1">Allergies</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_2" name="chronic" value="Anemia" /><label id="label_input_29_2" for="input_29_2">Anemia</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_3" name="chronic" value="Angina" /><label id="label_input_29_3" for="input_29_3">Angina</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_4" name="chronic" value="Anxiety" /><label id="label_input_29_4" for="input_29_4">Anxiety</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_5" name="chronic" value="Arthritis" /><label id="label_input_29_5" for="input_29_5">Arthritis</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_6" name="chronic" value="Asthma" /><label id="label_input_29_6" for="input_29_6">Asthma</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_7" name="chronic" value="Atrial Fibrillation" /><label id="label_input_29_7" for="input_29_7">Atrial Fibrillation</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_8" name="chronic" value="Benign Prostatic" /><label id="label_input_29_8" for="input_29_8">Benign Prostatic</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_9" name="chronic" value="Hypertrophy" /><label id="label_input_29_9" for="input_29_9">Hypertrophy</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_10" name="chronic" value="Blood Clots" /><label id="label_input_29_10" for="input_29_10">Blood Clots</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_11" name="chronic" value="Cancer" /><label id="label_input_29_11" for="input_29_11">Cancer</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_12" name="chronic" value="Cerebrovascular Accident" /><label id="label_input_29_12" for="input_29_12">Cerebrovascular Accident</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_13" name="chronic" value="Cronary Artery Disease" /><label id="label_input_29_13" for="input_29_13">Cronary Artery Disease</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_14" name="chronic" value="COPD (Emphysema)" /><label id="label_input_29_14" for="input_29_14">COPD (Emphysema)</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_15" name="chronic" value="Crohn&#x27;s Disease" /><label id="label_input_29_15" for="input_29_15">Crohn's Disease</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_16" name="chronic" value="Depression" /><label id="label_input_29_16" for="input_29_16">Depression</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_17" name="chronic" value="Diabetes" /><label id="label_input_29_17" for="input_29_17">Diabetes</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_18" name="chronic" value="Gallbladder Disease" /><label id="label_input_29_18" for="input_29_18">Gallbladder Disease</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_19" name="chronic" value="GERD (Reflux)" /><label id="label_input_29_19" for="input_29_19">GERD (Reflux)</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_20" name="chronic" value="Hepatitis C" /><label id="label_input_29_20" for="input_29_20">Hepatitis C</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_21" name="chronic" value="Hyperlipidemia" /><label id="label_input_29_21" for="input_29_21">Hyperlipidemia</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_22" name="chronic" value="Hypertension" /><label id="label_input_29_22" for="input_29_22">Hypertension</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_23" name="chronic" value="Irritable Bowel Disease" /><label id="label_input_29_23" for="input_29_23">Irritable Bowel Disease</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_24" name="chronic" value="Liver Disease" /><label id="label_input_29_24" for="input_29_24">Liver Disease</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_25" name="chronic" value="Migraine Headaches" /><label id="label_input_29_25" for="input_29_25">Migraine Headaches</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_26" name="chronic" value="Myocardial Infarction" /><label id="label_input_29_26" for="input_29_26">Myocardial Infarction</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_27" name="chronic" value="Osteoarthritis" /><label id="label_input_29_27" for="input_29_27">Osteoarthritis</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_28" name="chronic" value="Osteoporosis" /><label id="label_input_29_28" for="input_29_28">Osteoporosis</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_29" name="chronic" value="Peptic Ulcer Disease" /><label id="label_input_29_29" for="input_29_29">Peptic Ulcer Disease</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_30" name="chronic" value="Renal Disease" /><label id="label_input_29_30" for="input_29_30">Renal Disease</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_31" name="chronic" value="Seizure Disorder" /><label id="label_input_29_31" for="input_29_31">Seizure Disorder</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_29" class="form-checkbox" id="input_29_32" name="chronic" value="Thyroid Disease" /><label id="label_input_29_32" for="input_29_32">Thyroid Disease</label></span><span class="form-checkbox-item formCheckboxOther"><input type="checkbox" class="form-checkbox-other form-checkbox" name="chronic[other]" id="other_29" value="other" tabindex="0" aria-label="Other" /><label id="label_other_29" style="text-indent:0" for="other_29">Other</label><span id="other_29_input" class="other-input-container" style="display:none"><input type="text" class="form-checkbox-other-input form-textbox" name="chronic[other]" data-otherhint="Other" size="15" id="input_29" data-placeholder="Please type another option here" placeholder="Please type another option here" /></span></span></div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_radio" id="id_30"><label class="form-label form-label-top" id="label_30" for="input_30"> Do you use tobacco? </label>
        <div id="cid_30" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_30" data-component="radio"><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_30" class="form-radio" id="input_30_0" name="tobacoo" value="No" /><label id="label_input_30_0" for="input_30_0">No</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_30" class="form-radio" id="input_30_1" name="tobacoo" value="Daily" /><label id="label_input_30_1" for="input_30_1">Daily</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_30" class="form-radio" id="input_30_2" name="tobacoo" value="Weekly" /><label id="label_input_30_2" for="input_30_2">Weekly</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_30" class="form-radio" id="input_30_3" name="tobacoo" value="Less" /><label id="label_input_30_3" for="input_30_3">Less</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_30" class="form-radio" id="input_30_4" name="tobacoo" value="Former User" /><label id="label_input_30_4" for="input_30_4">Former User</label></span></div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_radio" id="id_31"><label class="form-label form-label-top" id="label_31" for="input_31"> Do you use alcohol? </label>
        <div id="cid_31" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_31" data-component="radio"><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_31" class="form-radio" id="input_31_0" name="q31_alcohol" value="No" /><label id="label_input_31_0" for="input_31_0">No</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_31" class="form-radio" id="input_31_1" name="q31_alcohol" value="Daily" /><label id="label_input_31_1" for="input_31_1">Daily</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_31" class="form-radio" id="input_31_2" name="q31_alcohol" value="Weekly" /><label id="label_input_31_2" for="input_31_2">Weekly</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_31" class="form-radio" id="input_31_3" name="q31_alcohol" value="Less" /><label id="label_input_31_3" for="input_31_3">Less</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_31" class="form-radio" id="input_31_4" name="q31_alcohol" value="Former User" /><label id="label_input_31_4" for="input_31_4">Former User</label></span></div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_radio" id="id_34"><label class="form-label form-label-top" id="label_34" for="input_34"> Caffeine use? </label>
        <div id="cid_34" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_34" data-component="radio"><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_34" class="form-radio" id="input_34_0" name="caffeine" value="No" /><label id="label_input_34_0" for="input_34_0">No</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_34" class="form-radio" id="input_34_1" name="caffeine" value="Daily" /><label id="label_input_34_1" for="input_34_1">Daily</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_34" class="form-radio" id="input_34_2" name="caffeine" value="Weekly" /><label id="label_input_34_2" for="input_34_2">Weekly</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_34" class="form-radio" id="input_34_3" name="caffeine" value="Less" /><label id="label_input_34_3" for="input_34_3">Less</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_34" class="form-radio" id="input_34_4" name="caffeine" value="Former User" /><label id="label_input_34_4" for="input_34_4">Former User</label></span></div>
        </div>
      </li>
      <li class="form-line" data-type="control_checkbox" id="id_65"><label class="form-label form-label-top form-label-auto" id="label_65" for="input_65"> Allergies </label>
        <div id="cid_65" class="form-input-wide" data-layout="full">
          <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_65" data-component="checkbox"><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_65" class="form-checkbox" id="input_65_0" name="allergies" value="Animals" /><label id="label_input_65_0" for="input_65_0">Animals</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_65" class="form-checkbox" id="input_65_1" name="allergies" value="Plants" /><label id="label_input_65_1" for="input_65_1">Plants</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_65" class="form-checkbox" id="input_65_2" name="allergies" value="Food(s)" /><label id="label_input_65_2" for="input_65_2">Food(s)</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_65" class="form-checkbox" id="input_65_3" name="allergies" value="Pollen" /><label id="label_input_65_3" for="input_65_3">Pollen</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_65" class="form-checkbox" id="input_65_4" name="allergies" value="Hay Fever" /><label id="label_input_65_4" for="input_65_4">Hay Fever</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_65" class="form-checkbox" id="input_65_5" name="allergies" value="Insect Stings" /><label id="label_input_65_5" for="input_65_5">Insect Stings</label></span><span class="form-checkbox-item formCheckboxOther"><input type="checkbox" class="form-checkbox-other form-checkbox" name="allergies[other]" id="other_65" value="other" tabindex="0" aria-label="Other" /><label id="label_other_65" style="text-indent:0" for="other_65">Other</label><span id="other_65_input" class="other-input-container" style="display:none"><input type="text" class="form-checkbox-other-input form-textbox" name="allergies[other]" data-otherhint="Other" size="15" id="input_65" data-placeholder="Please type another option here" placeholder="Please type another option here" /></span></span></div>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_66"><label class="form-label form-label-top form-label-auto" id="label_66" for="input_66"> Please provide details of any checked </label>
        <div id="cid_66" class="form-input-wide" data-layout="full"> <textarea id="input_66" class="form-textarea" name="details" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_66"></textarea> </div>
      </li>
      <li class="form-line" data-type="control_checkbox" id="id_67"><label class="form-label form-label-top form-label-auto" id="label_67" for="input_67"> Immunizations </label>
        <div id="cid_67" class="form-input-wide" data-layout="full">
          <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_67" data-component="checkbox"><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_67" class="form-checkbox" id="input_67_0" name="immunizations" value="Tetanus" /><label id="label_input_67_0" for="input_67_0">Tetanus</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_67" class="form-checkbox" id="input_67_1" name="immunizations" value="Measles" /><label id="label_input_67_1" for="input_67_1">Measles</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_67" class="form-checkbox" id="input_67_2" name="immunizations" value="Rubella" /><label id="label_input_67_2" for="input_67_2">Rubella</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_67" class="form-checkbox" id="input_67_3" name="immunizations" value="Mumps" /><label id="label_input_67_3" for="input_67_3">Mumps</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_67" class="form-checkbox" id="input_67_4" name="immunizations" value="Diphtheria" /><label id="label_input_67_4" for="input_67_4">Diphtheria</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_67" class="form-checkbox" id="input_67_5" name="immunizations" value="Pertussis" /><label id="label_input_67_5" for="input_67_5">Pertussis</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_67" class="form-checkbox" id="input_67_6" name="immunizations" value="Hepatitis B" /><label id="label_input_67_6" for="input_67_6">Hepatitis B</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_67" class="form-checkbox" id="input_67_7" name="immunizations" value="TB Test" /><label id="label_input_67_7" for="input_67_7">TB Test</label></span><span class="form-checkbox-item formCheckboxOther"><input type="checkbox" class="form-checkbox-other form-checkbox" name="immunizations[other]" id="other_67" value="other" tabindex="0" aria-label="Other" /><label id="label_other_67" style="text-indent:0" for="other_67">Other</label><span id="other_67_input" class="other-input-container" style="display:none"><input type="text" class="form-checkbox-other-input form-textbox" name="immunizations[other]" data-otherhint="Other" size="15" id="input_67" data-placeholder="Please type another option here" placeholder="Please type another option here" /></span></span></div>
        </div>
      </li>
      <li class="form-line" data-type="control_checkbox" id="id_40">
        <label class="form-label form-label-top form-label-auto" id="label_40" for="input_40"> Family History </label>
        <div id="cid_40" class="form-input-wide" data-layout="full">
          <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_40" data-component="checkbox"><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_40" class="form-checkbox" id="input_40_0" name="familyHistory" value="Adopted" /><label id="label_input_40_0" for="input_40_0">Adopted</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_40" class="form-checkbox" id="input_40_1" name="familyHistory" value="Alcoholism" /><label id="label_input_40_1" for="input_40_1">Alcoholism</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_40" class="form-checkbox" id="input_40_2" name="familyHistory" value="Allergies" /><label id="label_input_40_2" for="input_40_2">Allergies</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_40" class="form-checkbox" id="input_40_3" name="familyHistory" value="Asthma" /><label id="label_input_40_3" for="input_40_3">Asthma</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_40" class="form-checkbox" id="input_40_4" name="familyHistory" value="ArthritisBlood Disease" /><label id="label_input_40_4" for="input_40_4">ArthritisBlood Disease</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_40" class="form-checkbox" id="input_40_5" name="familyHistory" value="CAD (Heart Attack)" /><label id="label_input_40_5" for="input_40_5">CAD (Heart Attack)</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_40" class="form-checkbox" id="input_40_6" name="familyHistory" value="Cancer" /><label id="label_input_40_6" for="input_40_6">Cancer</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_40" class="form-checkbox" id="input_40_7" name="familyHistory" value="CVA (Stroke)" /><label id="label_input_40_7" for="input_40_7">CVA (Stroke)</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_40" class="form-checkbox" id="input_40_8" name="familyHistory" value="Depression" /><label id="label_input_40_8" for="input_40_8">Depression</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_40" class="form-checkbox" id="input_40_9" name="familyHistory" value="Developmental Delay" /><label id="label_input_40_9" for="input_40_9">Developmental Delay</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_40" class="form-checkbox" id="input_40_10" name="familyHistory" value="Diabetes" /><label id="label_input_40_10" for="input_40_10">Diabetes</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_40" class="form-checkbox" id="input_40_11" name="familyHistory" value="Eczema" /><label id="label_input_40_11" for="input_40_11">Eczema</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_40" class="form-checkbox" id="input_40_12" name="familyHistory" value="Hearing Deficiency" /><label id="label_input_40_12" for="input_40_12">Hearing Deficiency</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_40" class="form-checkbox" id="input_40_13" name="familyHistory" value="Hyperlipidemia (High Cholesterol)" /><label id="label_input_40_13" for="input_40_13">Hyperlipidemia (High Cholesterol)</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_40" class="form-checkbox" id="input_40_14" name="familyHistory" value="Hypertension (High Blood Pressure)" /><label id="label_input_40_14" for="input_40_14">Hypertension (High Blood Pressure)</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_40" class="form-checkbox" id="input_40_15" name="familyHistory" value="Irritable Bowel Disease" /><label id="label_input_40_15" for="input_40_15">Irritable Bowel Disease</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_40" class="form-checkbox" id="input_40_16" name="familyHistory" value="Learning Disability" /><label id="label_input_40_16" for="input_40_16">Learning Disability</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_40" class="form-checkbox" id="input_40_17" name="familyHistory" value="Mental Illness" /><label id="label_input_40_17" for="input_40_17">Mental Illness</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_40" class="form-checkbox" id="input_40_18" name="familyHistory" value="Tuberculosis" /><label id="label_input_40_18" for="input_40_18">Tuberculosis</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_40" class="form-checkbox" id="input_40_19" name="familyHistory" value="Obesity" /><label id="label_input_40_19" for="input_40_19">Obesity</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_40" class="form-checkbox" id="input_40_20" name="familyHistory" value="Osteoarthritis" /><label id="label_input_40_20" for="input_40_20">Osteoarthritis</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_40" class="form-checkbox" id="input_40_21" name="familyHistory" value="Osteoporosis" /><label id="label_input_40_21" for="input_40_21">Osteoporosis</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_40" class="form-checkbox" id="input_40_22" name="familyHistory" value="PVD" /><label id="label_input_40_22" for="input_40_22">PVD</label></span><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_40" class="form-checkbox" id="input_40_23" name="familyHistory" value="Renal Disease" /><label id="label_input_40_23" for="input_40_23">Renal Disease</label></span><span class="form-checkbox-item formCheckboxOther"><input type="checkbox" class="form-checkbox-other form-checkbox" name="familyHistory[other]" id="other_40" value="other" tabindex="0" aria-label="Other" /><label id="label_other_40" style="text-indent:0" for="other_40">Other</label><span id="other_40_input" class="other-input-container" style="display:none"><input type="text" class="form-checkbox-other-input form-textbox" name="familyHistory[other]" data-otherhint="Other" size="15" id="input_40" data-placeholder="Please type another option here" placeholder="Please type another option here" /></span></span></div>
        </div>
      </li>
      <li id="cid_41" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httal htvam">
            <h2 id="header_41" class="form-header" data-component="header">Mental Health History</h2>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_42"><label class="form-label form-label-top form-label-auto" id="label_42" for="input_42"> Any Mental Health Problem ? </label>
        <div id="cid_42" class="form-input-wide" data-layout="full"> <textarea id="input_42" class="form-textarea" name="mentalHealthProblem" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_42"></textarea> </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_44"><label class="form-label form-label-top form-label-auto" id="label_44" for="input_44"> Have you seen a counselor, psychologist, psychiatrist or other mental health professional before? </label>
        <div id="cid_44" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_44" data-component="radio"><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_44" class="form-radio" id="input_44_0" name="q44_counselor" value="Yes" /><label id="label_input_44_0" for="input_44_0">Yes</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_44" class="form-radio" id="input_44_1" name="q44_counselor" value="No" /><label id="label_input_44_1" for="input_44_1">No</label></span></div>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_48"><label class="form-label form-label-top form-label-auto" id="label_48" for="input_48"> Please describe any other experiences you have had problems with </label>
        <div id="cid_48" class="form-input-wide" data-layout="full"> <textarea id="input_48" class="form-textarea" name="experiences" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_48"></textarea> </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_53"><label class="form-label form-label-top form-label-auto" id="label_53" for="input_53"> Additional comments or concerns </label>
        <div id="cid_53" class="form-input-wide" data-layout="full"> <textarea id="input_53" class="form-textarea" name="additionalComments" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_53"></textarea> </div>
      </li>
      <li class="form-line" data-type="control_widget" id="id_77">
        <div id="cid_77" class="form-input-wide" data-layout="full">
          <div style="width:100%;text-align:Left" data-component="widget-directEmbed">
            <div class="direct-embed-widgets barre-de-progression-widget widget-static" data-type="direct-embed" style="width:1px;min-height:1px">
              <div class="direct-embed-77">
                <script type="text/javascript">
                  var progressBarqid = "77";
                  var onlyCountReq = "Non";
                  var fixedProgressBar = "Non";
                  var deleteLabelProgressBar = "";
                  var fieldsProgressBar = "Champs complétés";
                  var submitProgressBar = "Veuillez soumettre le formulaire";
                  var requiredProgressBar = "Champs obligatoires remplis";
                  var barColor = "#336CFF";
                  var theme = "Island Blue";
                </script>
                <link href="//widgets.jotform.io/progressBar/min/styles.min.css" rel="stylesheet" media="screen" />
                <script src="//widgets.jotform.io/progressBar/min/scripts.min.js"></script>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li id="cid_72" class="form-input-wide" data-type="control_pagebreak">
        <div class="form-pagebreak" data-component="pagebreak">
          <div class="form-pagebreak-back-container"><button id="form-pagebreak-back_72" type="button" class="form-pagebreak-back  jf-form-buttons" data-component="pagebreak-back">Retour</button></div>
          <div class="form-pagebreak-next-container"><button id="form-pagebreak-next_72" type="button" class="form-pagebreak-next  jf-form-buttons" data-component="pagebreak-next">Suivant</button></div>
          <div style="clear:both" class="pageInfo form-sub-label" id="pageInfo_72"></div>
        </div>
      </li>
    </ul>
    <ul class="form-section page-section" style="display:none;">
      <li id="cid_78" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httac htvam">
            <h2 id="header_78" class="form-header" data-component="header">Merci pour votre Confiance !</h2>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_captcha" id="id_74"><label class="form-label form-label-top" id="label_74" for="input_74"> Merci de confirmer que vous êtes un être humain<span class="form-required">*</span> </label>
        <div id="cid_74" class="form-input-wide jf-required" data-layout="full">
          <section data-wrapper-react="true">
            <div id="recaptcha_input_74" data-component="recaptcha" data-callback="recaptchaCallbackinput_74" data-expired-callback="recaptchaExpiredCallbackinput_74"></div><input type="hidden" id="input_74" class="hidden validate[required]" name="recaptcha_visible" required="" />
            <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?render=explicit&amp;onload=recaptchaLoadedinput_74"></script>
            <script type="text/javascript">
              var recaptchaLoadedinput_74 = function()
              {
                window.grecaptcha.render($("recaptcha_input_74"),
                {
                  sitekey: '6LdU3CgUAAAAAB0nnFM3M3T0sy707slYYU51RroJ',
                });
                var grecaptchaBadge = document.querySelector('.grecaptcha-badge');
                if (grecaptchaBadge)
                {
                  grecaptchaBadge.style.boxShadow = 'gray 0px 0px 2px';
                }
              };

              /**
               * Called when the reCaptcha verifies the user is human
               * For invisible reCaptcha;
               *   Submit event is stopped after validations and recaptcha is executed.
               *   If a challenge is not displayed, this will be called right after grecaptcha.execute()
               *   If a challenge is displayed, this will be called when the challenge is solved successfully
               *   Submit is triggered to actually submit the form since it is stopped before.
               */
              var recaptchaCallbackinput_74 = function()
              {
                var isInvisibleReCaptcha = false;
                var hiddenInput = $("input_74");
                hiddenInput.setValue(1);
                if (!isInvisibleReCaptcha)
                {
                  if (hiddenInput.validateInput)
                  {
                    hiddenInput.validateInput();
                  }
                }
                else
                {
                  triggerSubmit(hiddenInput.form)
                }

                function triggerSubmit(formElement)
                {
                  var button = formElement.ownerDocument.createElement('input');
                  button.style.display = 'none';
                  button.type = 'submit';
                  formElement.appendChild(button).click();
                  formElement.removeChild(button);
                }
              }

              // not really required for invisible recaptcha
              var recaptchaExpiredCallbackinput_74 = function()
              {
                var hiddenInput = $("input_74");
                hiddenInput.writeAttribute("value", false);
                if (hiddenInput.validateInput)
                {
                  hiddenInput.validateInput();
                }
              }
            </script>
          </section>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_82">
        <div id="cid_82" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField"><span> </span><button id="input_print_82" type="button" class="form-submit-print form-submit-button-gradient-7 jf-form-buttons" data-component="button"><img src="https://cdn.jotfor.ms/images/printer.png" style="vertical-align:middle" /><span id="span_print_82" class="span_print">Telecharger</span></button><button id="input_82" type="submit" class="form-submit-button form-submit-button-gradient-7 submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">Save</button></div>
        </div>
      </li>
      <li style="display:none">Should be Empty: <input type="text" name="website" value="" /></li>
    </ul>
  </div>
  <script>
    JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
    JotForm.poweredByText = "Powered by Jotform";
  </script><input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="230973976460568" />
  <script type="text/javascript">
    var all_spc = document.querySelectorAll("form[id='230973976460568'] .si" + "mple" + "_spc");
    for (var i = 0; i < all_spc.length; i++)
    {
      all_spc[i].value = "230973976460568-230973976460568";
    }
  </script>
  <div class="formFooter-heightMask"></div>
 
</form>
</body><script type="text/javascript">JotForm.ownerView=true;</script><script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.40942"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.40942"></script>
</html>