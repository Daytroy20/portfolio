document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contact-form');
    const token = document.querySelector('meta[name="csrf-token"]').content;
  
    form.addEventListener('submit', async e => {
      e.preventDefault();
  
      const formData = new FormData(form);
  
      try {
        const response = await fetch(form.action, {
          method: 'POST',
          headers: { 'X-CSRF-TOKEN': token, 'Accept': 'application/json' },
          body: formData
        });
  
        if (response.ok) {
          alert('Message sent successfully.');
          form.reset();
        } else {
          const text = await response.text();
          console.error(text);
          alert('Error sending message.');
        }
      } catch (err) {
        console.error(err);
        alert('Error sending message.');
      }
    });
  });
  