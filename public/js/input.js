const contenteditableElements = document.querySelectorAll('[contenteditable]');

contenteditableElements.forEach(element => {
  element.addEventListener('keydown', function(event) {

    // Check if backspace or arrow keys are pressed (to allow navigation)
    if (event.keyCode === 8 || event.keyCode === 37 || event.keyCode === 38 || event.keyCode === 39 || event.keyCode === 40) {
      return;
    }

    // Get the current text content and its length
    const currentText = element.textContent;
    const currentLength = currentText.length;
    
    const maxLength = element.ariaValueMax; // Maximum allowed characters
    console.log(maxLength);

    // Prevent exceeding the maximum length
    if (currentLength >= maxLength) {
      event.preventDefault(); // Prevent default character insertion
    }
  });
});
