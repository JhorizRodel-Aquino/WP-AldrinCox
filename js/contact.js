function sendMail(event) {
  event.preventDefault(); // Prevent the page from refreshing

  // Get the form inputs
  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;
  let message = document.getElementById("message").value;
  let facebook = document.getElementById("facebook").value;

  // Check if any of the inputs are empty
  if (!name || !email || !message || !facebook) {
    alert("Please fill out all fields before sending the email.");
    return; // Stop the function if any field is empty
  }

  // Prepare the email parameters
  let parms = {
    name: name,
    email: email,
    message: message,
    facebook: facebook,
  };

  // Send the email using EmailJS
  emailjs
    .send("service_q3eivre", "template_uwauio4", parms)
    .then(() => alert("Email successfully sent!"))
    .catch((error) => console.error("Error sending email:", error));
}