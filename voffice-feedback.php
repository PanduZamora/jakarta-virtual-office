<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
  <title>Let Us Know Your Feedback || Learning Robo</title>
</head>

<body>
  <div class="container">
    <div id="panel" class="panel-container">
      <img src="https://vox.myvios.cloud/img/voffice.png" alt="">
      <h3>Voice Of Our Client Feedback Form</h3>
      <form id="feedbackForm">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="whatsapp">Whatsapp:</label>
          <input type="tel" id="whatsapp" name="whatsapp" required>
        </div>
        <div class="form-group">
          <label for="company_name">Company Name:</label>
          <input type="text" id="company_name" name="company_name">
        </div>
        <h3>Please Rate Us <br><span style="font-size: small"> (where 1 is poor and 5 is excellent)</span></h3>
        <h4>

        </h4>

        <div class="form-group">
          <label for="courtesy">Staff Courtesy and Friendliness:</label><label for="courtesy" style="opacity: 0.5">Kesopanan dan Keramahan Staff:</label>
          <div class="ratings-container">
            <div class="rating">
              <input type="radio" name="courtesy" id="courtesy1" value="1">
              <label for="courtesy1">1</label>
            </div>
            <div class="rating">
              <input type="radio" name="courtesy" id="courtesy2" value="2">
              <label for="courtesy2">2</label>
            </div>
            <div class="rating">
              <input type="radio" name="courtesy" id="courtesy3" value="3">
              <label for="courtesy3">3</label>
            </div>
            <div class="rating">
              <input type="radio" name="courtesy" id="courtesy4" value="4">
              <label for="courtesy4">4</label>
            </div>
            <div class="rating">
              <input type="radio" name="courtesy" id="courtesy5" value="5">
              <label for="courtesy5">5</label>
            </div>
            <!-- Add other options for staff courtesy and friendliness (2 to 5) similarly -->
          </div>
        </div>
        <div class="form-group">
          <label for="center">Centre Facilities and Cleanliness:</label><label for="center" style="opacity: 0.5">Fasilitas dan Kebersihan Tempat:</label>
          <div class="ratings-container">
            <div class="rating">
              <input type="radio" name="center" id="center1" value="1">
              <label for="center1">1</label>
            </div>
            <div class="rating">
              <input type="radio" name="center" id="center2" value="2">
              <label for="center2">2</label>
            </div>
            <div class="rating">
              <input type="radio" name="center" id="center3" value="3">
              <label for="center3">3</label>
            </div>
            <div class="rating">
              <input type="radio" name="center" id="center4" value="4">
              <label for="center4">4</label>
            </div>
            <div class="rating">
              <input type="radio" name="center" id="center5" value="5">
              <label for="center5">5</label>
            </div>
            <!-- Add other options for staff courtesy and friendliness (2 to 5) similarly -->
          </div>
        </div>
        <div class="form-group">
          <label for="staff">Did the staff act in a professional and helpful manner:</label><label for="center" style="opacity: 0.5">Apakah staff bertindak secara profesional dan membantu:</label>
          <div class="ratings-container">
            <div class="rating">
              <input type="radio" name="staff" id="staff1" value="1">
              <label for="staff1">1</label>
            </div>
            <div class="rating">
              <input type="radio" name="staff" id="staff2" value="2">
              <label for="staff2">2</label>
            </div>
            <div class="rating">
              <input type="radio" name="staff" id="staff3" value="3">
              <label for="staff3">3</label>
            </div>
            <div class="rating">
              <input type="radio" name="staff" id="staff4" value="4">
              <label for="staff4">4</label>
            </div>
            <div class="rating">
              <input type="radio" name="staff" id="staff5" value="5">
              <label for="staff5">5</label>
            </div>
            <!-- Add other options for staff courtesy and friendliness (2 to 5) similarly -->
          </div>
        </div>
        <div class="form-group">
          <label for="service">Is our service adding value and helpful to your business:</label><label for="center" style="opacity: 0.5">Apakah layanan kami memberikan nilai tambah dan bermanfaat bagi bisnis Anda:</label>
          <div class="ratings-container">
            <div class="rating">
              <input type="radio" name="service" id="service1" value="1">
              <label for="service1">1</label>
            </div>
            <div class="rating">
              <input type="radio" name="service" id="service2" value="2">
              <label for="service2">2</label>
            </div>
            <div class="rating">
              <input type="radio" name="service" id="service3" value="3">
              <label for="service3">3</label>
            </div>
            <div class="rating">
              <input type="radio" name="service" id="service4" value="4">
              <label for="service4">4</label>
            </div>
            <div class="rating">
              <input type="radio" name="service" id="service5" value="5">
              <label for="service5">5</label>
            </div>
            <!-- Add other options for staff courtesy and friendliness (2 to 5) similarly -->
          </div>
        </div>
        <div class="form-group">
          <label for="money">Value for Money:</label>
          <div class="ratings-container">
            <div class="rating">
              <input type="radio" name="money" id="money1" value="1">
              <label for="money1">1</label>
            </div>
            <div class="rating">
              <input type="radio" name="money" id="money2" value="2">
              <label for="money2">2</label>
            </div>
            <div class="rating">
              <input type="radio" name="money" id="money3" value="3">
              <label for="money3">3</label>
            </div>
            <div class="rating">
              <input type="radio" name="money" id="money4" value="4">
              <label for="money4">4</label>
            </div>
            <div class="rating">
              <input type="radio" name="money" id="money5" value="5">
              <label for="money5">5</label>
            </div>
            <!-- Add other options for staff courtesy and friendliness (2 to 5) similarly -->
          </div>
        </div>

        <!-- Add other form groups for different feedback criteria similarly -->

        <h3 for="comments">If you have a few more minutes, please share with us more of your thoughts</h3>
        <div class="form-group">
          <label for="additionalTime">Would you like to share more feedback?</label><label for="center" style="opacity: 0.5">Apakah Anda ingin berbagi umpan balik lebih banyak?</label>
          <div class="ratings-container">
            <div class="rating">
              <input type="radio" name="additionalTime" id="yesOption" value="YES">
              <label for="yesOption">YES</label>
            </div>
            <div class="rating">
              <input type="radio" name="additionalTime" id="noOption" value="NO">
              <label for="noOption">NO</label>
            </div>
          </div>
        </div>
        <div class="extra_question">
          <div class="form-group">
            <label for="experience">Your experience at our venue?</label><label for="center" style="opacity: 0.5">Bagaimana pengalaman Anda di tempat kami?</label>
            <textarea id="experience" name="experience" rows="4" maxlength="200"></textarea>
          </div>

          <!-- <div class="form-group">
            <label for="likes">What did you like or don’t like about us?</label><label for="center"
              style="opacity: 0.5">Apa yang Anda sukai atau tidak sukai dari kami?</label>
            <textarea id="likes" name="likes" rows="4" maxlength="200"></textarea>
          </div> -->

          <div class="form-group">
            <label for="suggestions">Do you have ideas or suggestions that may help us improve our
              services?</label><label for="center" style="opacity: 0.5">Apakah Anda memiliki ide atau saran yang dapat
              membantu kami untuk meningkatkan layanan kami?</label>
            <textarea id="suggestions" name="suggestions" rows="4" maxlength="200"></textarea>
          </div>

          <!-- <div class="form-group">
            <label for="allow_posting">Is it ok if we post your comments on our website and Facebook?</label><label
              for="center" style="opacity: 0.5">Apakah tidak masalah jika kami memposting komentar Anda di situs web dan
              Facebook kami?</label>
            <div class="ratings-container">
              <div class="rating">
                <input type="radio" name="allow_posting" id="yes" value="y">
                <label for="yes">YES</label>
              </div>
              <div class="rating">
                <input type="radio" name="allow_posting" id="no" value="n">
                <label for="no">NO</label>
              </div>
            </div>
          </div> -->

        </div>
        <br>
        <button type="submit" class="btn" id="send">SUBMIT</button>
      </form>
    </div>
  </div>
  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>

<style>
  @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

  * {
    box-sizing: border-box;
  }

  body {
    background: #951942;
    background: -webkit-linear-gradient(to right, #951942, #cfd0d8);
    background: linear-gradient(to right, #951942, #cfd0d8);
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    margin: 0;
    padding: 0;
  }

  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    overflow-y: auto;
    /* Enable vertical scrolling */
  }

  .panel-container {
    background-color: #ffffff;
    box-shadow: 0 0 10px rgba(68, 54, 54, 0.3);
    border-radius: 15px;
    font-size: 16px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 30px;
    max-width: 800px;
    color: #951942;
    margin: 20px;
  }

  .panel-container h2 {
    font-size: 24px;
    margin-bottom: 10px;
  }

  .panel-container h3 {
    font-size: 18px;
    margin-bottom: 20px;
  }

  .form-group {
    display: flex;
    flex-direction: column;
    margin-bottom: 10px;
  }

  .form-group label {
    margin-bottom: 5px;
  }

  .form-group input,
  .form-group textarea {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  }

  .ratings-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: 10px 0;
  }

  .rating {
    cursor: pointer;
    margin: 5px;
    display: flex;
    align-items: center;
  }

  .rating input[type="radio"] {
    display: none;
  }

  .rating label {
    display: inline-flex;
    cursor: pointer;
    align-items: center;
    justify-content: center;
    color: #ccc;
    padding: 12px 17px;
    border: 2px solid #ccc;
    border-radius: 50%;
    transition: border-color 0.2s;
    font-size: 18px;
    /* Increase the font size for better visibility */
  }

  /* Increase the size and clickable area for selected (active) radio button */
  .rating input[type="radio"]:checked+label {
    color: #951942;
    border-color: #951942;
    background-color: #f9f9f9;
    transform: scale(1.2);
    /* Increase the size when selected */
  }

  .rating:hover label {
    border-color: #951942;
  }

  .btn {
    background-color: #951942;
    color: #fff;
    border: 0;
    border-radius: 4px;
    padding: 12px 30px;
    cursor: pointer;
    width: 100%;
  }

  .btn:focus {
    outline: 0;
  }

  .btn:active {
    transform: scale(0.98);
  }

  .credit a {
    text-decoration: none;
    color: #fff;
  }

  .credit {
    text-align: center;
    font-size: 12px;
  }

  img {
    max-height: 80px;
    /* Increase the height by 20% */
    margin-right: 10px;
    /* Move the image to the left side */
    position: relative;
    /* Position the image absolutely */
    top: 0;
    /* Align the image to the top */
    right: 37%;
    /* Align the image to the right */
    transform: translateY(-20%);
    /* Adjust the vertical position */
  }


  /* Responsive styles */
  @media (max-width: 768px) {
    .panel-container {
      padding: 20px;
      margin: 0;
    }


    img {
      max-height: 80px;
      /* Increase the height by 20% */
      position: relative;
      /* Position the image absolutely */
      top: 0;
      /* Align the image to the top */
      right: 30%;
      /* Align the image to the right */
    }

    .form-group label {
      text-align: left;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
    }

    .ratings-container {
      flex-direction: row;
      align-items: center;
      margin: 0px
    }

    .rating {
      margin: 0px 0;
      padding: 10px
    }

    .rating label {
      padding: 8px;
      /* Reduce padding for smaller size */
      font-size: 16px;
      /* Reduce font size for smaller screens */
    }

    .credit {
      font-size: 12px;
    }

    .panel-container {
      max-width: 100%;
      margin: 20px;
      font-size: 14px;
    }

    .btn {
      width: 100%;
    }
  }
</style>

<script>
  const ratingsContainer = document.querySelector('.ratings-container');
  const sendBtn = document.querySelector('#send');
  const panel = document.querySelector('#panel');
  const feedbackForm = document.getElementById('feedbackForm');
  const restQuestions = document.querySelectorAll('.form-group:not(:first-of-type)');
  let selectedRating = 'Satisfied';
  let additionalTimeValue = 'NO'; // Default value for additionalTime question

  $(document).ready(function() {
    $.validator.addMethod('ratingRequired', function(value, element) {
      return this.optional(element) || value >= 1 && value <= 5;
    }, "Please select a rating between 1 and 5")

    $('#feedbackForm').validate({
      rules: {
        name: {
          required: true
        },
        email: {
          required: true,
          email: true
        },
        whatsapp: {
          required: true,
          number: true
        },
        courtesy: {
          ratingRequired: true,
        },
        experience: {
          required: function(el) {
            return $('input[name="additionalTime"]:checked').val() == 'YES';
          },
          maxlength: 200
        },
        // likes: {
        //   required: function (el) {
        //     return $('input[name="additionalTime"]:checked').val() == 'YES';
        //   },
        //   maxlength: 200
        // },
        suggestions: {
          required: function(el) {
            return $('input[name="additionalTime"]:checked').val() == 'YES';
          },
          maxlength: 200
        }
      },
      messages: {
        name: {
          required: "Please enter your name"
        },
        email: {
          required: "Please enter your email",
          email: "Please enter a valid email"
        },
        whatsapp: {
          required: "Please enter your whatsapp number"
        },
        courtesy: {
          ratingRequired: "Please select a rating between 1 and 5"
        },
        experience: {
          required: "Please fill this field"
        },
        // likes: {
        //   required: "Please fill this field"
        // },
        suggestions: {
          required: "Please fill this field"
        }
      },
      submitHandler: function(form) {
        submitForm()
      }
    });
  })

  // Function to hide the elements with class "extra_question" and the submit button
  function hideExtraQuestions() {
    const extraQuestionDiv = document.querySelector('.extra_question');
    extraQuestionDiv.style.display = 'none';
    // sendBtn.style.display = 'none';
  }

  hideExtraQuestions(); // Hide the "extra_question" div and the submit button initially

  feedbackForm.addEventListener('click', (e) => {
    if (e.target.name === 'additionalTime') {
      additionalTimeValue = e.target.value;
      if (additionalTimeValue === 'YES') {
        showExtraQuestions();
      } else {
        hideExtraQuestions();
      }
    }
  });


  function submitForm() {
    if (!$('input[name="courtesy"]:checked').val() || !$('input[name="center"]:checked').val() || !$('input[name="staff"]:checked').val() || !$('input[name="service"]:checked').val() || !$('input[name="money"]:checked').val()) {
      return Swal.fire('Error', 'Please complete all the rating', 'error');
    }

    // if ($('input[name="additionalTime"]:checked').val() == 'YES' && !$('input[name="allow_posting"]:checked').val()) {
    //   return Swal.fire('Error', 'Please select "Yes" or "No" in last question', 'error');
    // }

    let obj = {
      name: $('input[name="name"]').val(),
      email: $('input[name="email"]').val(),
      whatsapp: $('input[name="whatsapp"]').val(),
      company_name: $('input[name="company_name"]').val(),
      courtesy: +$('input[name="courtesy"]:checked').val(),
      center: +$('input[name="center"]:checked').val(),
      staff: +$('input[name="staff"]:checked').val(),
      service: +$('input[name="service"]:checked').val(),
      money: +$('input[name="money"]:checked').val(),
      additionalTimeValue: additionalTimeValue
    }

    if (additionalTimeValue == 'YES') {
      obj.experience = document.getElementById('experience').value;
      // obj.likes = document.getElementById('likes').value;
      obj.suggestions = document.getElementById('suggestions').value;
      // obj.allow_posting = $('input[name="allow_posting"]:checked').val()
    }

    Swal.fire({
      title: 'Submitting your feedback...',
      allowEscapeKey: false,
      allowOutsideClick: false,
      didOpen: () => {
        Swal.showLoading();
      }
    })

    axios.post('https://vox.myvios.cloud/api/feedback', obj)
      .then((res) => {
        console.log(res);
      })
      .catch((err) => {
        console.log(err);
      })
      .finally(() => {
        Swal.close()
        panel.innerHTML = `
        Thank You!
        <br>
        We'll use your feedback to improve our services
      `;
        setTimeout(() => {
          window.location.href = 'https://voffice.co.id';
        }, 2000);
      })

  }

  function showExtraQuestions() {
    const extraQuestionDiv = document.querySelector('.extra_question');
    extraQuestionDiv.style.display = 'block';
    sendBtn.style.display = 'block';
  }

  function removeActive() {
    const activeRating = document.querySelector('.rating.active');
    if (activeRating) {
      activeRating.classList.remove('active');
    }
  }
</script>