/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/script.js":
/*!********************************!*\
  !*** ./resources/js/script.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

/**
 * General jQuery stuff
 */
(function () {
  // Home Page Fade in of intro text
  $("#home-page-intro-text").fadeIn(1250);
})(jQuery);
/**
 * Toggle the mobile menu
 */


(function () {
  /**
   * The onclick event for when the menu toggler is clicked.
   * This will handle showing and hiding of the menu when the
   * menu toggler is clicked.
   */
  $("#navbar-menu-toggler").on('click', function () {
    if (isMenuToggled()) {
      return untoggleMenu();
    }

    return toggleMenu();
  });
  /**
   * Check if the menu is toggled.
   *
   * @return bool
   */

  function isMenuToggled() {
    return $("#navbar-menu-toggler").attr('aria-status') === 'active';
  }
  /**
   * Untoggle the navbar menu.
   */


  function untoggleMenu() {
    // Slide up the menu and remove the toggle indicator
    $("#menu-container").slideUp(500, 'linear', function () {
      $("#navbar").removeClass('is-toggled');
      $("#menu-container").removeAttr('style');
    });
    $("#navbar-menu-toggler").attr('aria-status', 'inactive');
  }
  /**
   * Toggle the navbar menu.
   */


  function toggleMenu() {
    $("#navbar").addClass('is-toggled');
    $("#navbar-menu-toggler").attr('aria-status', 'active');
    $("#menu-container").slideDown(500);
  }
})(jQuery);
/**
 * Handle the contact form submission.
 *
 * Show any validation error.
 * Display error message if message not sent
 * Show success message if message was sent
 */


(function () {
  var formId = "contact-form";
  var formMessageId = "contact-form-message";
  var formValidationErrorMessage = "Please check form inputs above for help in completing message submission.";
  var formSuccessMessage = "Your message was sent successfully. I will get back to you shortly!";
  var unverifiedErrorResponse = "There was a problem in submitting your message. Please refresh the page and try again.";
  var laravelMailError = "Your message cannot be sent at this time due to problems beyond my control. Refresh the page and try again, or alternatively, you can contact me by telephone or skype.";
  jQuery("#" + formId).on('submit', function (event) {
    // Stop the form from submitting and show the waiting spinner
    event.preventDefault();
    showSpinner(); // Submit form via ajax

    jQuery.ajax({
      url: getSubmitUrl(),
      method: 'post',
      dataType: 'json',
      headers: getAjaxHeaders(),
      data: getFormData(),
      success: function success(response, status) {
        /**
         * If the mail was sent, we'll clear all the errors and field
         * content and show a success message to the user.
         */
        if (response.success == true) {
          clearFormFieldErrors();
          clearFormContents();
          showFormMessage('success', formSuccessMessage);
          return removeSpinner();
        }
        /**
         * Show the user an error indicating that there was an
         * error in sending the mail.
         */


        showFormMessage('error', laravelMailError);
        removeSpinner();
      },
      error: function error(response) {
        clearFormFieldErrors();
        /**
         * Check if error is from laravel form request validation.
         * We'll show the validation errors to the user.
         */

        if (getResponseStatus(response) == 422) {
          var errors = getValidationErrors(response);

          for (var error in errors) {
            showFormFieldMessage(error, 'error', getValidationMessage(error, errors));
          }

          showFormMessage('error', formValidationErrorMessage);
          return removeSpinner();
        }
        /**
         * Send error message to the user. This is not a laravel error,
         * so we'll just send out a general message asking the user along
         * the lines to refresh and try another time.
         */


        showFormMessage('error', unverifiedErrorResponse);
        removeSpinner();
      }
    });
  });
  /**
   * Get the url for ajax to send the post request to.
   *
   * @return string
   */

  function getSubmitUrl() {
    return $('#' + formId).attr('action');
  }
  /**
   * Get the headers to send via ajax.
   *
   * @return obj
   */


  function getAjaxHeaders() {
    return {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    };
  }
  /**
   * Get the form data to send.
   *
   * @return array
   */


  function getFormData() {
    var data = {};
    $("#" + formId).serializeArray().map(function (content, index) {
      data[content.name] = content.value;
    });
    return data;
  }
  /**
   * Clear all form fields.
   *
   * @return void
   */


  function clearFormContents() {
    $(".form-field").empty().val('');
  }
  /**
   * Clear form field errors.
   *
   * @return void
   */


  function clearFormFieldErrors() {
    $(".form-error").empty().removeAttr('class').addClass('form-error');
  }
  /**
   * Show the form message.
   *
   * @param string type
   * @param string message
   * @return void
   */


  function showFormMessage(type, message) {
    $("#" + formMessageId).removeAttr('class').addClass('block alert alert-' + type).text(message);
  }
  /**
   * Show the form field message.
   *
   * @param  string  field
   * @param  string  type
   * @param  string  message
   * @return void
   */


  function showFormFieldMessage(field, type, message) {
    $("#form-error-" + field).removeAttr('class').addClass('form-error mt-1 testtttt block alert alert-' + type).html(message);
  }
  /**
   * Get the validation message for a particular form field type.
   *
   * @param  string  field
   * @param  obj  errors
   * @return html
   */


  function getValidationMessage(field, errors) {
    // Let's encase the validation messages in a list
    var message = "<ul class='list-reset flex flex-col'>"; // Get the validation errors

    $(errors[field]).each(function (index, value) {
      message += "<li>" + value + "</li>";
    });
    message += "</ul>";
    return message;
  }
  /**
   * Get the response status.
   *
   * @param  obj  response
   * @return int
   */


  function getResponseStatus(response) {
    return response.status;
  }
  /**
   * Get the validation errors.
   *
   * @param  obj  response
   * @return obj
   */


  function getValidationErrors(response) {
    return response.responseJSON.errors;
  }
})(jQuery);
/**
 * Show a waiting spinner animation.
 *
 * @return void
 */


function showSpinner() {
  // Create the spinner element on the fly
  var element = "<div id='app-spinner' class='absolute pin-l pin-r z-50 bg-black opacity-75 text-white text-5xl flex items-center justify-center'>";
  element += "<i class='fas fa-spinner fa-spin'></i>";
  element += "</div>"; // Append the spinner element to the body

  $('body').append(element); // Let the spinner height always occupy the full screen

  $("#app-spinner").css({
    'height': $(window).outerHeight() + 'px',
    'top': $(window).scrollTop()
  });
  $(window).resize(function () {
    $("#app-spinner").css({
      'height': $(window).outerHeight() + 'px',
      'top': $(window).scrollTop()
    });
  });
  $(window).scroll(function () {
    $("#app-spinner").css({
      'height': $(window).outerHeight() + 'px',
      'top': $(window).scrollTop()
    });
  });
}
/**
 * Remove the waiting spinner that's currently activated
 *
 * @return void
 */


function removeSpinner() {
  $('#app-spinner').empty().remove();
}

/***/ }),

/***/ 1:
/*!**************************************!*\
  !*** multi ./resources/js/script.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/jenryollivierre/Dropbox/MyCode/laravel-apps/jenry-personal-website/resources/js/script.js */"./resources/js/script.js");


/***/ })

/******/ });