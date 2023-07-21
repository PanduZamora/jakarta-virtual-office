(function($) {
  "use strict"; // Start of use strict

  // activate the hover dropdown
  function toggleDropdown (e) {
    const _d = $(e.target).closest('.dropdown'),
      _m = $('.dropdown-menu', _d);
    setTimeout(function(){
      const shouldOpen = e.type !== 'click' && _d.is(':hover');
      _m.toggleClass('show', shouldOpen);
      _d.toggleClass('show', shouldOpen);
      $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
    }, e.type === 'mouseleave' ? 100 : 0);
    }

    $('body')
    .on('mouseenter mouseleave','.dropdown',toggleDropdown)
    .on('click', '.dropdown-menu a', toggleDropdown);


  //intro Carousel
  $(".intro-carousel").owlCarousel({
    autoplay: true,
    loop: true,
    smartSpeed:450,
    // dots: true,
    nav: true,
    responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1
      }
  }
  });

  //intro Carousel
  $(".logo-carousel").owlCarousel({
    autoplay: true,
    loop: true,
    margin: 30,
    responsive:{
      0:{
          items:3
      },
      600:{
          items:3
      },
      1000:{
          items:8
      }
  }
  });

  // if ($('#toggle-menu').offset().top < 50) {
  //
  // }

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 54)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 56
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 56) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
      $('#toggle-menu').click(function(){
        $('#mainNav').addClass('navbar-shrink');
      });
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);


      //                                                            //
      //                                                            //
      // Contact form code                                          //
      //                                                            //
      //                                                            //

      $('form.form-email, form.form-newsletter').submit(function(e) {

          // return false so form submits through jQuery rather than reloading page.
          if (e.preventDefault) e.preventDefault();
          else e.returnValue = false;

          var thisForm = $(this).closest('form.form-email, form.form-newsletter'),
              submitButton = thisForm.find('button[type="submit"]'),
              error = 0,
              originalError = thisForm.attr('original-error'),
              preparedForm, iFrame, userEmail, userFullName, userFirstName, userLastName, successRedirect, formError, formSuccess;

          // Mailchimp/Campaign Monitor Mail List Form Scripts
          iFrame = $(thisForm).find('iframe.mail-list-form');

          thisForm.find('.form-error, .form-success').remove();
          submitButton.attr('data-text', submitButton.text());
          thisForm.append('<div class="form-error" style="display: none;">' + thisForm.attr('data-error') + '</div>');
          thisForm.append('<div class="form-success" style="display: none;">' + thisForm.attr('data-success') + '</div>');
          formError = thisForm.find('.form-error');
          formSuccess = thisForm.find('.form-success');
          thisForm.addClass('attempted-submit');

          // Do this if there is an iframe, and it contains usable Mail Chimp / Campaign Monitor iframe embed code
          if ((iFrame.length) && (typeof iFrame.attr('srcdoc') !== "undefined") && (iFrame.attr('srcdoc') !== "")) {

              console.log('Mail list form signup detected.');
              if (typeof originalError !== typeof undefined && originalError !== false) {
                  formError.html(originalError);
              }
              userEmail = $(thisForm).find('.signup-email-field').val();
              userFullName = $(thisForm).find('.signup-name-field').val();
              if ($(thisForm).find('input.signup-first-name-field').length) {
                  userFirstName = $(thisForm).find('input.signup-first-name-field').val();
              } else {
                  userFirstName = $(thisForm).find('.signup-name-field').val();
              }
              userLastName = $(thisForm).find('.signup-last-name-field').val();

              // validateFields returns 1 on error;
              if (validateFields(thisForm) !== 1) {
                  preparedForm = prepareSignup(iFrame);

                  preparedForm.find('#mce-EMAIL, #fieldEmail').val(userEmail);
                  preparedForm.find('#mce-LNAME, #fieldLastName').val(userLastName);
                  preparedForm.find('#mce-FNAME, #fieldFirstName').val(userFirstName);
                  preparedForm.find('#mce-NAME, #fieldName').val(userFullName);
                  thisForm.removeClass('attempted-submit');

                  // Hide the error if one was shown
                  formError.fadeOut(200);
                  // Create a new loading spinner in the submit button.
                  submitButton.html(jQuery('<div />').addClass('form-loading')).attr('disabled', 'disabled');

                  try{
                      $.ajax({
                          url: preparedForm.attr('action'),
                          crossDomain: true,
                          data: preparedForm.serialize(),
                          method: "GET",
                          cache: false,
                          dataType: 'json',
                          contentType: 'application/json; charset=utf-8',
                          success: function(data){
                              // Request was a success, what was the response?
                              if (data.result != "success" && data.Status != 200) {

                                  // Error from Mail Chimp or Campaign Monitor

                                  // Keep the current error text in a data attribute on the form
                                  formError.attr('original-error', formError.text());
                                  // Show the error with the returned error text.
                                  formError.html(data.msg).fadeIn(1000);
                                  formSuccess.fadeOut(1000);

                                  submitButton.html(submitButton.attr('data-text')).removeAttr('disabled');
                              } else {

                                  // Got Success from Mail Chimp

                                  submitButton.html(submitButton.attr('data-text')).removeAttr('disabled');

                                  successRedirect = thisForm.attr('success-redirect');
                                  // For some browsers, if empty `successRedirect` is undefined; for others,
                                  // `successRedirect` is false.  Check for both.
                                  if (typeof successRedirect !== typeof undefined && successRedirect !== false && successRedirect !== "") {
                                      window.location = successRedirect;
                                  }

                                  thisForm.find('input[type="text"]').val("");
                                  thisForm.find('textarea').val("");
                                  formSuccess.fadeIn(1000);

                                  formError.fadeOut(1000);
                                  setTimeout(function() {
                                      formSuccess.fadeOut(500);
                                  }, 5000);
                              }
                          }
                      });
                  }catch(err){
                      // Keep the current error text in a data attribute on the form
                      formError.attr('original-error', formError.text());
                      // Show the error with the returned error text.
                      formError.html(err.message).fadeIn(1000);
                      formSuccess.fadeOut(1000);
                      setTimeout(function() {
                          formError.fadeOut(500);
                      }, 5000);

                      submitButton.html(submitButton.attr('data-text')).removeAttr('disabled');
                  }



              } else {
                  formError.fadeIn(1000);
                  setTimeout(function() {
                      formError.fadeOut(500);
                  }, 5000);
              }
          } else {
              // If no iframe detected then this is treated as an email form instead.
              console.log('Send email form detected.');
              if (typeof originalError !== typeof undefined && originalError !== false) {
                  formError.text(originalError);
              }

              error = validateFields(thisForm);

              if (error === 1) {
                  formError.fadeIn(200);
                  setTimeout(function() {
                      formError.fadeOut(500);
                  }, 3000);
              } else {

                  thisForm.removeClass('attempted-submit');

                  // Hide the error if one was shown
                  formError.fadeOut(200);

                  // Create a new loading spinner in the submit button.
                  submitButton.html(jQuery('<div />').addClass('form-loading')).attr('disabled', 'disabled');

                  jQuery.ajax({
                      type: "POST",
                      url: "mail/mail-ch.php",
                      data: thisForm.serialize()+"&url="+window.location.href,
                      success: function(response) {
                          // Swiftmailer always sends back a number representing numner of emails sent.
                          // If this is numeric (not Swift Mailer error text) AND greater than 0 then show success message.

                          submitButton.html(submitButton.attr('data-text')).removeAttr('disabled');

                          if ($.isNumeric(response)) {
                              if (parseInt(response) > 0) {
                                  // For some browsers, if empty 'successRedirect' is undefined; for others,
                                  // 'successRedirect' is false.  Check for both.
  								// successRedirect = thisForm.attr('success-redirect');
  								successRedirect = 'thank-you.php';

                                 // if (typeof successRedirect !== typeof undefined && successRedirect !== false && successRedirect !== "") {
                                    //  window.location = successRedirect;
                                //  }


                                  thisForm.find('input[type="text"]').val("");
                                  thisForm.find('textarea').val("");
                                  thisForm.find('.form-success').fadeIn(1000);

                                  formError.fadeOut(1000);
                                  setTimeout(function() {
                                      formSuccess.fadeOut(500);
                                  }, 5000);
  								window.location = successRedirect;
                              }
                          }
                          // If error text was returned, put the text in the .form-error div and show it.
                          else {
                              // Keep the current error text in a data attribute on the form
                              formError.attr('original-error', formError.text());
                              // Show the error with the returned error text.
                              formError.text(response).fadeIn(1000);
                              formSuccess.fadeOut(1000);
                          }
                      },
                      error: function(errorObject, errorText, errorHTTP) {
                          // Keep the current error text in a data attribute on the form
                          formError.attr('original-error', formError.text());
                          // Show the error with the returned error text.
                          formError.text(errorHTTP).fadeIn(1000);
                          formSuccess.fadeOut(1000);
                          submitButton.html(submitButton.attr('data-text')).removeAttr('disabled');
                      }
                  });
              }
          }
          return false;
      });

      $('.validate-required, .validate-email').on('blur change', function() {
          validateFields($(this).closest('form'));
      });

      $('form').each(function() {
          if ($(this).find('.form-error').length) {
              $(this).attr('original-error', $(this).find('.form-error').text());
          }
      });

      function validateFields(form) {
              var name, error, originalErrorMessage;

              $(form).find('.validate-required[type="checkbox"]').each(function() {
                  if (!$('[name="' + $(this).attr('name') + '"]:checked').length) {
                      error = 1;
                      name = $(this).attr('name').replace('[]', '');
                      form.find('.form-error').text('Please tick at least one ' + name + ' box.');
                  }
              });

              $(form).find('.validate-required').each(function() {
                  if ($(this).val() === '') {
                      $(this).addClass('field-error');
                      error = 1;
                  } else {
                      $(this).removeClass('field-error');
                  }
              });

              $(form).find('.validate-email').each(function() {
                  if (!(/(.+)@(.+){2,}\.(.+){2,}/.test($(this).val()))) {
                      $(this).addClass('field-error');
                      error = 1;
                  } else {
                      $(this).removeClass('field-error');
                  }
              });

              if (!form.find('.field-error').length) {
                  form.find('.form-error').fadeOut(1000);
              }

              return error;
          }


      //
      //
      // End contact form code
      //
      //

})(jQuery); // End of use strict
