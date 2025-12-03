const btn = document.getElementById('but');

document.getElementById('form')
 .addEventListener('submit', function(event) {
   event.preventDefault();

   btn.value = 'Sending...';

   const serviceID = 'default_service';
   const templateID = 'template_r7ogqrk';

   emailjs.sendForm(serviceID, templateID, this)
    .then(() => {
      btn.value = 'Send Email';
      document.getElementById("container").innerHTML = `
    <div class="sent-message">Your message has been sent. Thank you!</div>
`;
    }, (err) => {
      btn.value = 'Send Email';
      alert(JSON.stringify(err));
    });
});