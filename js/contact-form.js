// pakai javascript ini pada file yang terdapat di dalam folder lagi (contoh: "mitra-voffice/index.php")
// perbedaan dari javascript yang ada pada script.js adalah pada url ajaxnya
// gunakan class .form-email-custom

// read text above
// read text above
// read text above

$("form.form-email-custom, form.form-newsletter").submit(function (e) {
  // return false so form submits through jQuery rather than reloading page.
  if (e.preventDefault) e.preventDefault();
  else e.returnValue = false;

  var thisForm = $(this).closest(
      "form.form-email-custom, form.form-newsletter"
    ),
    submitButton = thisForm.find('button[type="submit"]'),
    error = 0,
    originalError = thisForm.attr("original-error"),
    preparedForm,
    iFrame,
    userEmail,
    userFullName,
    userFirstName,
    userLastName,
    successRedirect,
    formError,
    formSuccess;

  // Mailchimp/Campaign Monitor Mail List Form Scripts
  iFrame = $(thisForm).find("iframe.mail-list-form");

  thisForm.find(".form-error, .form-success").remove();
  submitButton.attr("data-text", submitButton.text());
  thisForm.append(
    '<div class="form-error" style="display: none;">' +
      thisForm.attr("data-error") +
      "</div>"
  );
  thisForm.append(
    '<div class="form-success" style="display: none;">' +
      thisForm.attr("data-success") +
      "</div>"
  );
  formError = thisForm.find(".form-error");
  formSuccess = thisForm.find(".form-success");
  thisForm.addClass("attempted-submit");

  // Do this if there is an iframe, and it contains usable Mail Chimp / Campaign Monitor iframe embed code
  if (
    iFrame.length &&
    typeof iFrame.attr("srcdoc") !== "undefined" &&
    iFrame.attr("srcdoc") !== ""
  ) {
    console.log("Mail list form signup detected.");
    if (typeof originalError !== typeof undefined && originalError !== false) {
      formError.html(originalError);
    }
    userEmail = $(thisForm).find(".signup-email-field").val();
    userFullName = $(thisForm).find(".signup-name-field").val();
    if ($(thisForm).find("input.signup-first-name-field").length) {
      userFirstName = $(thisForm).find("input.signup-first-name-field").val();
    } else {
      userFirstName = $(thisForm).find(".signup-name-field").val();
    }
    userLastName = $(thisForm).find(".signup-last-name-field").val();

    // validateFields returns 1 on error;
    if (validateFields(thisForm) !== 1) {
      preparedForm = prepareSignup(iFrame);

      preparedForm.find("#mce-EMAIL, #fieldEmail").val(userEmail);
      preparedForm.find("#mce-LNAME, #fieldLastName").val(userLastName);
      preparedForm.find("#mce-FNAME, #fieldFirstName").val(userFirstName);
      preparedForm.find("#mce-NAME, #fieldName").val(userFullName);
      thisForm.removeClass("attempted-submit");

      // Hide the error if one was shown
      formError.fadeOut(200);
      // Create a new loading spinner in the submit button.
      submitButton
        .html(jQuery("<div />").addClass("form-loading"))
        .attr("disabled", "disabled");

      try {
        $.ajax({
          url: preparedForm.attr("action"),
          crossDomain: true,
          data: preparedForm.serialize(),
          method: "GET",
          cache: false,
          dataType: "json",
          contentType: "application/json; charset=utf-8",
          success: function (data) {
            // Request was a success, what was the response?
            if (data.result != "success" && data.Status != 200) {
              // Error from Mail Chimp or Campaign Monitor

              // Keep the current error text in a data attribute on the form
              formError.attr("original-error", formError.text());
              // Show the error with the returned error text.
              formError.html(data.msg).fadeIn(1000);
              formSuccess.fadeOut(1000);

              submitButton
                .html(submitButton.attr("data-text"))
                .removeAttr("disabled");
            } else {
              // Got Success from Mail Chimp

              submitButton
                .html(submitButton.attr("data-text"))
                .removeAttr("disabled");

              successRedirect = thisForm.attr("success-redirect");
              // For some browsers, if empty `successRedirect` is undefined; for others,
              // `successRedirect` is false.  Check for both.
              if (
                typeof successRedirect !== typeof undefined &&
                successRedirect !== false &&
                successRedirect !== ""
              ) {
                window.location = successRedirect;
              }

              thisForm.find('input[type="text"]').val("");
              thisForm.find("textarea").val("");
              formSuccess.fadeIn(1000);

              formError.fadeOut(1000);
              setTimeout(function () {
                formSuccess.fadeOut(500);
              }, 5000);
            }
          },
        });
      } catch (err) {
        // Keep the current error text in a data attribute on the form
        formError.attr("original-error", formError.text());
        // Show the error with the returned error text.
        formError.html(err.message).fadeIn(1000);
        formSuccess.fadeOut(1000);
        setTimeout(function () {
          formError.fadeOut(500);
        }, 5000);

        submitButton
          .html(submitButton.attr("data-text"))
          .removeAttr("disabled");
      }
    } else {
      formError.fadeIn(1000);
      setTimeout(function () {
        formError.fadeOut(500);
      }, 5000);
    }
  } else {
    // If no iframe detected then this is treated as an email form instead.
    console.log("Send email form detected.");
    if (typeof originalError !== typeof undefined && originalError !== false) {
      formError.text(originalError);
    }
    error = validateFields(thisForm);
    if (error === 1) {
      formError.fadeIn(200);
      setTimeout(function () {
        formError.fadeOut(500);
      }, 3000);
    } else {
      thisForm.removeClass("attempted-submit");
      // Hide the error if one was shown
      formError.fadeOut(200);
      // Create a new loading spinner in the submit button.
      submitButton
        .html(jQuery("<div />").addClass("form-loading"))
        .attr("disabled", "disabled");
      jQuery.ajax({
        type: "POST",
        url: "../mail/mail.php",
        data: thisForm.serialize() + "&url=" + window.location.href,
        success: function (response) {
          // Swiftmailer always sends back a number representing numner of emails sent.
          // If this is numeric (not Swift Mailer error text) AND greater than 0 then show success message.
          submitButton
            .html(submitButton.attr("data-text"))
            .removeAttr("disabled");

          var thankYouSO = Boolean(
            window.location.href ==
              "https://voffice.co.id/jakarta-virtual-office/serviced-office-indonesia.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/so-menara-kuningan.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/so-menara-rajawali.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/so-bsd-green-office.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/so-centennial-tower.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/so-graha-surveyor.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/so-grand-slipi-tower.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/so-kencana-tower.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/so-kirana-two-tower.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/so-office8.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/so-rawamangun.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/so-the-ceo.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/so-bsd-green-office.php"
          );

          var thankYouVO = Boolean(
            window.location.href ==
              "https://voffice.co.id/jakarta-virtual-office/virtual-office-di-jakarta.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/our-locations.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/office-bumi-putra.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/office-ceo-building.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/office-graha-surveyor.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/office-grandslipi-tower.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/office-honey-lady.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/office-ibis.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/office-intiland.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/office-jimbaran.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/office-kencana-tower.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/office-menara-kuningan.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/office-menara-rajawali.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/office-thecity-tower.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/office8.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/centennial-tower.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/virtual-office-bali.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/virtual-office-bekasi.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/virtual-office-cibubur.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/virtual-office-jakarta-timur.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/virtual-office-jakarta-selatan.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/virtual-office-jakarta-utara.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/virtual-office-jakarta-barat.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/virtual-office-jakarta-pusat.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/virtual-office-tangerang.php"
          );

          var thankYouAds = Boolean(
            window.location.href ==
              "https://voffice.co.id/jakarta-virtual-office/virtual-office.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/virtual-office-jakarta-timur-ads.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/virtual-office-jakarta-utara-ads.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/virtual-office-jakarta-selatan-ads.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/virtual-office-jakarta-pusat-ads.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/virtual-office-jakarta-barat-ads.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/virtual-office-bekasi-ads.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/virtual-office-tangerang-ads.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/virtual-office-bali-ads.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/virtual-office-surabaya-ads.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/virtual-office-cibubur-ads.php" ||
              window.location.href ==
                "https://voffice.co.id/jakarta-virtual-office/promotion-voffice-ads.php"
          );

          if ($.isNumeric(response)) {
            if (parseInt(response) > 0) {
              // For some browsers, if empty 'successRedirect' is undefined; for others,
              // 'successRedirect' is false.  Check for both.
              successRedirect = thisForm.attr("success-redirect");
              if (
                typeof successRedirect !== typeof undefined &&
                successRedirect !== false &&
                successRedirect !== ""
              ) {
                if (window.location.href.includes("sem")) {
                  window.location = "/jakarta-virtual-office/thank-you.php?sem";
                } else if (
                  window.location.href.includes("daily-serviced-office")
                ) {
                  window.location =
                    "/jakarta-virtual-office/thank-you.php?leads=daily-serviced-office";
                } else if (window.location.href.includes("be-your-own-boss")) {
                  window.location =
                    "/jakarta-virtual-office/thank-you.php?leads=be-your-own-boss";
                } else if (window.location.href.includes("?fbigads")) {
                  window.location =
                    "/jakarta-virtual-office/thank-you.php?fbigads";
                } else {
                  if (thankYouSO) {
                    window.location =
                      "/jakarta-virtual-office/thank-you-so.php";
                  } else if (thankYouVO) {
                    window.location =
                      "/jakarta-virtual-office/thank-you-vo.php";
                  } else if (
                    window.location.href ==
                    "https://voffice.co.id/jakarta-virtual-office/meeting-room-for-rent.php"
                  ) {
                    window.location =
                      "/jakarta-virtual-office/thank-you-mr.php";
                  } else if (
                    window.location.href ==
                    "https://voffice.co.id/jakarta-virtual-office/event-space.php"
                  ) {
                    window.location =
                      "/jakarta-virtual-office/thank-you-es.php";
                  } else if (
                    window.location.href ==
                    "https://voffice.co.id/jakarta-virtual-office/indonesia-company-registration.php"
                  ) {
                    window.location =
                      "/jakarta-virtual-office/thank-you-pt.php";
                  } else if (thankYouAds) {
                    window.location = "/jakarta-virtual-office/thank-u.php";
                  } else if (
                    window.location.href ==
                    "https://voffice.co.id/jakarta-virtual-office/business-partner.php"
                  ) {
                    window.location =
                      "/jakarta-virtual-office/thank-you-business-partner.php";
                  } else if (
                    window.location.href ==
                    "https://voffice.co.id/jakarta-virtual-office/thank-you-business-partner.php"
                  ) {
                    window.location =
                      "/jakarta-virtual-office/thank-you-business-partner2.php";
                  } else {
                    window.location = "/jakarta-virtual-office/thank-you.php";
                  }
                }
              } else {
                if (window.location.href.includes("sem")) {
                  window.location = "/jakarta-virtual-office/thank-you.php?sem";
                } else if (
                  window.location.href.includes("daily-serviced-office")
                ) {
                  window.location =
                    "/jakarta-virtual-office/thank-you.php?leads=daily-serviced-office";
                } else if (window.location.href.includes("be-your-own-boss")) {
                  window.location =
                    "/jakarta-virtual-office/thank-you.php?leads=be-your-own-boss";
                } else if (window.location.href.includes("?fbigads")) {
                  window.location =
                    "/jakarta-virtual-office/thank-you.php?fbigads";
                } else {
                  if (thankYouSO) {
                    window.location =
                      "/jakarta-virtual-office/thank-you-so.php";
                  } else if (thankYouVO) {
                    window.location =
                      "/jakarta-virtual-office/thank-you-vo.php";
                  } else if (
                    window.location.href ==
                    "https://voffice.co.id/jakarta-virtual-office/meeting-room-for-rent.php"
                  ) {
                    window.location =
                      "/jakarta-virtual-office/thank-you-mr.php";
                  } else if (
                    window.location.href ==
                    "https://voffice.co.id/jakarta-virtual-office/event-space.php"
                  ) {
                    window.location =
                      "/jakarta-virtual-office/thank-you-es.php";
                  } else if (
                    window.location.href ==
                    "https://voffice.co.id/jakarta-virtual-office/indonesia-company-registration.php"
                  ) {
                    window.location =
                      "/jakarta-virtual-office/thank-you-pt.php";
                  } else if (thankYouAds) {
                    window.location = "/jakarta-virtual-office/thank-u.php";
                  } else if (
                    window.location.href ==
                    "https://voffice.co.id/jakarta-virtual-office/business-partner.php"
                  ) {
                    window.location =
                      "/jakarta-virtual-office/thank-you-business-partner.php";
                  } else if (
                    window.location.href ==
                    "https://voffice.co.id/jakarta-virtual-office/thank-you-business-partner.php"
                  ) {
                    window.location =
                      "/jakarta-virtual-office/thank-you-business-partner2.php";
                  } else {
                    window.location = "/jakarta-virtual-office/thank-you.php";
                  }
                }
              }
              thisForm.find('input[type="text"]').val("");
              thisForm.find("textarea").val("");
              thisForm.find(".form-success").fadeIn(1000);
              formError.fadeOut(1000);
              setTimeout(function () {
                formSuccess.fadeOut(500);
              }, 5000);
            }
          }
          // If error text was returned, put the text in the .form-error div and show it.
          else {
            // Keep the current error text in a data attribute on the form
            formError.attr("original-error", formError.text());
            // Show the error with the returned error text.
            formError.text(response).fadeIn(1000);
            formSuccess.fadeOut(1000);
          }
        },
        error: function (errorObject, errorText, errorHTTP) {
          // Keep the current error text in a data attribute on the form
          formError.attr("original-error", formError.text());
          // Show the error with the returned error text.
          formError.text(errorHTTP).fadeIn(1000);
          formSuccess.fadeOut(1000);
          submitButton
            .html(submitButton.attr("data-text"))
            .removeAttr("disabled");
        },
      });
    }
  }
  return false;
});
$(".validate-required, .validate-email").on("blur change", function () {
  validateFields($(this).closest("form"));
});
$("form").each(function () {
  if ($(this).find(".form-error").length) {
    $(this).attr("original-error", $(this).find(".form-error").text());
  }
});

function validateFields(form) {
  var name, error, originalErrorMessage;

  $(form)
    .find('.validate-required[type="checkbox"]')
    .each(function () {
      if (!$('[name="' + $(this).attr("name") + '"]:checked').length) {
        error = 1;
        name = $(this).attr("name").replace("[]", "");
        form
          .find(".form-error")
          .text("Please tick at least one " + name + " box.");
      }
    });

  $(form)
    .find(".validate-required")
    .each(function () {
      if ($(this).val() === "") {
        $(this).addClass("field-error");
        error = 1;
      } else {
        $(this).removeClass("field-error");
      }
    });

  $(form)
    .find(".validate-email")
    .each(function () {
      if (!/(.+)@(.+){2,}\.(.+){2,}/.test($(this).val())) {
        $(this).addClass("field-error");
        error = 1;
      } else {
        $(this).removeClass("field-error");
      }
    });

  if (!form.find(".field-error").length) {
    form.find(".form-error").fadeOut(1000);
  }

  return error;
}

//
//
// End contact form code
//
//
