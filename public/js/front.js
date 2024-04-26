 // Get all the accordion items
 const accordionItems = document.querySelectorAll('.accordion-item');

 // Loop through the items and add event listeners
 accordionItems.forEach(item => {
     // Get the header and content of the item
     const header = item.querySelector('.accordion-header');
     const content = item.querySelector('.accordion-content');

     // Add a click event listener to the header
     header.addEventListener('click', () => {
         // Toggle the focus class on the item
         item.classList.toggle('focus');

         // If the item is now focused
         if (item.classList.contains('focus')) {
             // Set the height of the content to its full height
             content.style.height = `${content.scrollHeight}px`;
         } else {
             // Otherwise, set the height of the content back to 0
             content.style.height = '0';
         }
     });
 });

 function toggleAside() {
     const aside = document.querySelector("aside");
     aside.classList.toggle("show");
 }