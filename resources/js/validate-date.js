function validateDate() {
  // Getting the date input from the user
  console.log("Date changed!");
  var input = document.getElementById('date_input');
  var error_msg = document.getElementById('error_msg');
  // error_msg.textContent = '';

  // Extracting the value for the input
  var dateInput = input.value; // This is the actual date entered by the user
  console.log('date input', dateInput);

  // Getting the today's date from the system
  var today = new Date();
  // console.log('date time today:', today);
  var stringToday = today.toISOString();
  // console.log('string today:', today_string);

  // Formatting the system date as the input
  var array = stringToday.split('T');
  var dateToday = array[0];
  console.log('date today', dateToday);
  var timeToday = array[1]; // This is the actual date of today
  // console.log('time today', timeToday);

  // Function to show the error message and clear the date box
  function showError() {
    error_msg.textContent = 'Future date not accepted';
    input.focus();
    input.value = '';
    return;
  }

  // Function to hide the error message
  function hideError() {
    error_msg.textContent = '';
    input.focus();
    return;
  }

  // Condition to evaluate the date value
  if (dateInput > dateToday) {
    showError();
  } else {
    hideError();
  }
}
