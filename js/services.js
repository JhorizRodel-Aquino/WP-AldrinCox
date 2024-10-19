function inquire(event) {
  event.preventDefault(); // Prevent the page from refreshing

  // Get the form inputs
  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;
  let facebook = document.getElementById("facebook").value;

  // Get the checkbox values
  let k1Checked = document.getElementById("k1").checked;
  let b1b2Checked = document.getElementById("b1b2").checked;
  let greenCardChecked = document.getElementById("greencard").checked;

  // Check if any of the inputs are empty
  if (!name || !email || !facebook) {
    alert("Please fill out all fields before sending your inquiry.");
    return; // Stop the function if any field is empty
  }

  // Create a services string with the selected services
  let selectedServices = "";
  if (k1Checked) {
    selectedServices += "K1 Visa Service\n";
  }
  if (b1b2Checked) {
    selectedServices += "B1/B2 Visa Service\n";
  }
  if (greenCardChecked) {
    selectedServices += "Green Card Service\n";
  }

  // If no service is selected, notify the user
  if (!selectedServices) {
    alert("Please select at least one service.");
    return; // Stop the function if no service is selected
  }

  // Prepare the email parameters
  let parms = {
    name: name,
    email: email,
    facebook: facebook,
    services: selectedServices, // Pass the selected services here
  };

  // Send the email using EmailJS
  emailjs
    .send("service_lhb8138", "template_ctg811p", parms)
    .then(() => alert("Inquiry successfully sent!"))
    .catch((error) => console.error("Error sending inquiry:", error));
}
