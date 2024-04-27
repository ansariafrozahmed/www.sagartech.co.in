<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/21.2.4/css/intlTelInput.css" />
<style>
  .title {
    display: flex;
    align-items: center;
    justify-content: start;
    gap: 10px;
    margin-bottom: 5px;
    padding: 2px 10px;
  }

  .title:hover {
    border-radius: 15px;
    background-color: rgb(243, 243, 243);
  }

  .title img {
    width: 10px;
  }

  .modal-window {
    position: fixed;
    background-color: rgba(0, 0, 0, 0.50);
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 999;
    visibility: hidden;
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s;
  }

  .modal-window:target {
    visibility: visible;
    opacity: 1;
    pointer-events: auto;
  }

  .modal-window>div {
    width: 350px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 2em;
    background: white;
  }

  header {
    font-weight: bold;
  }

  h1 {
    font-size: 150%;
    margin: 0 0 15px;
  }

  .modal-close {
    color: #aaa;
    line-height: 50px;
    font-size: 80%;
    position: absolute;
    right: 0;
    text-align: center;
    top: 0;
    width: 70px;
    text-decoration: none;
  }

  .modal-close:hover {
    color: black;
  }

  /* Demo Styles */

  a {
    color: inherit;
    text-decoration: none;
  }

  .containerrrr {}

  .modal-window>div {
    border-radius: 1rem;
  }

  /* .modal-window div:not(:last-of-type) {
    margin-bottom: 15px;
  } */

  .logo {
    max-width: 150px;
    display: block;
  }

  small {
    color: lightgray;
  }

  .btn {
    background-color: white;
    padding: 1em 1.5em;
    border-radius: 0.5rem;
    text-decoration: none;
  }

  .btn i {
    padding-right: 0.3em;
  }

  .form-divvv {
    padding: 20px 0px;
  }

  .formmmm {
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .formmmm input,
  select {
    border-radius: 10px;
    border: 1px solid gray;
  }

  .formmmm textarea {
    height: 90px;
    border-radius: 10px;
    border: 1px solid gray;
  }

  .button-62 {
    background: linear-gradient(to bottom right, #FF0808, #fc6262);
    border: 0;
    border-radius: 12px;

    color: #FFFFFF;
    cursor: pointer;
    display: inline-block;
    font-family: -apple-system, system-ui, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    font-size: 16px;
    font-weight: 500;
    line-height: 2.5;
    outline: transparent;
    padding: 5px 30px;
    text-align: center;
    text-decoration: none;
    transition: box-shadow .2s ease-in-out;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    white-space: nowrap;
  }

  .button-62:not([disabled]):focus {
    box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
  }

  .button-62:not([disabled]):hover {
    box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
    color: white;
  }

  .iti__selected-country {
    height: 45px !important;
  }
</style>


<button class="quote-button">
  <a href="#open-modal" style="color: white">Get Quote</a>
</button>

<div class="containerrrr">
  <div id="open-modal" class="modal-window">
    <div>
      <a href="#" title="Close" class="modal-close">Close</a>
      <div class="form-divvv">
        <form class="formmmm" id="quoteForm" onsubmit="return false">
          <input type="text" placeholder="Enter your name.." id="name" name="name" required>
          <input type="email" placeholder="Enter your email.." id="email" name="email" required>
          <!-- <input type="number" placeholder="Enter your number.." id="number" name="number" required> -->
          <input type="tel" id="number" name="number" placeholder="Enter your number.." required />
          <select name="service" id="service" name="service" required>
            <option value="Web Development">Web Development</option>
            <option value="App Development">App Development</option>
            <option value="Digital Marketing">Digital Marketing</option>
            <option value="Social Engine Optimization">Social Engine Optimization</option>
            <option value="Bulk SMS">Bulk SMS</option>
            <option value="ISO Consulting">ISO Consulting</option>
          </select>
          <textarea id="msg" name="msg" placeholder="Enter Your Message" id=""></textarea>
          <div id="recaptcha" class="g-recaptcha" data-sitekey="6Lc8994hAAAAALf_4WIq1IRd7agMuQRqiHG2yp1l"></div>

          <button class="button-62" id="send" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>



<!--send mail -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js"></script>
<!-- <script src="include/function.js"></script> -->
<!-- Main -->

<!-- Phone number country code -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/21.2.4/js/intlTelInput.min.js"></script>
<script>
  //            $(document).ready(function() {
  //      // Trigger form submission when the send button is clicked
  //     $("#send").click(function() {
  //         // Manually validate the form fields
  //         if ($("#quoteForm")[0].checkValidity()) {
  //             // If the form is valid, call the sendMail function to handle form submission
  //             sendMail($("#name").val(), $("#email").val(), $("#number").val(), $("#service").val(), $("#msg").val(), "#send", "#quoteForm");
  //         } else {
  //             // If the form is invalid, display a message or perform any necessary actions
  //             // alert("Please fill in all required fields correctly.");
  //         }
  //     });
  // });
  const inputNumber = document.querySelector("#number");
  var itil = window.intlTelInput(inputNumber, {
    showSelectedDialCode: true,
    initialCountry: "in",
    utilsScript:
      "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-Finput/21.2.4/js/utils.js?1713364227752",
  });

  $(document).ready(function () {
    // Trigger form submission when the send button is clicked
    $("#send").click(function () {
      // Remove any existing error messages
      $(".text-danger").remove();

      // Manually validate the form fields
      var name = $("#name").val().trim();
      var email = $("#email").val().trim();
      var number = $("#number").val().trim();
      var service = $("#service").val().trim();
      var msg = $("#msg").val().trim();

      var isValid = true;

      // Validate name
      if (name === "") {
        $("#name").after('<span class="text-danger">Name is required</span>');
        isValid = false;
      }

      // Validate email
      if (email === "") {
        $("#email").after('<span class="text-danger">Email is required</span>');
        isValid = false;
      }

      // Validate number
      if (number === "") {
        $("#number").after('<span class="text-danger">Number is required</span>');
        isValid = false;
      } else if (!/^\d{7,15}$/.test(number.replace(/\D/g, ""))) { // Check if number has exactly 10 digits
        $("#number").after('<span class="text-danger">Number must be between 7 and 15 digits long</span>');
        isValid = false;
      }

      if (!grecaptcha.getResponse()) {
        // alert('Please complete the reCAPTCHA challenge to submit the form.')
        $("#recaptcha").after('<span class="text-danger">Please complete the reCAPTCHA challenge to submit the form</span>');
        isValid = false;
      }

      var dial_code = document.querySelector(".iti__selected-dial-code").textContent;
      var contact_phone = dial_code + ' ' + number

      // If all fields are valid, proceed with form submission
      if (isValid) {
        // Call the sendMail function to handle form submission
        sendMail(name, email, contact_phone, service, msg, "#send", "#quoteForm");
      }
    });
  });


  function sendMail(name, email, phone, service, msg, btnId, formId) {
    $.ajax({
      url: "sendmail.php",
      method: "POST",
      data: {
        name: name,
        email: email,
        phone: phone,
        service: service,
        msg: msg,
        quote_submit: true,
      },
      beforeSend: function () {
        $(btnId).html('Sending...');
      },
      success: function (data) {
        if (data == '1') {
          swal("Thanks for being awesome!", "We will get back to you shortly.", "success");
          grecaptcha.reset();
        } else {
          swal("Oops", "Something Went Wrong.", "error");
        }
        $(formId).trigger("reset");

      },
      complete: function () {
        $(btnId).html('Send Message');
      }
    });
  }
</script>