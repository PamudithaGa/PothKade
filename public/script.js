// Register the service worker
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.register('/public/service-worker.js')
        .then((registration) => {
          console.log('Service Worker registered with scope:', registration.scope);
        })
        .catch((error) => {
          console.error('Service Worker registration failed:', error);
        });
    });
  }
  

  const bookCarousel = document.getElementById('bookCarousel');

  function shiftBook() {
      // Clone the first book and append it to the end
      const firstBook = bookCarousel.firstElementChild;
      const clonedBook = firstBook.cloneNode(true);
      bookCarousel.appendChild(clonedBook);
      
      // Add a slight delay before removing the first book to allow smooth transition
      setTimeout(() => {
          bookCarousel.removeChild(firstBook);
      }, 500); // Match this with CSS transition duration for smoothness
  }
  
  // Shift books every 2 seconds
  setInterval(shiftBook, 2000);
  

  function toggleModal() {
    const modal = document.getElementById('bookRequestModal');
    modal.classList.toggle('hidden');
}



function showMoreDetails(book) {
  alert(
      "Author: " + book.author + "\n" +
      "Language: " + book.language + "\n" +
      "Pages: " + book.pages + "\n" +
      "Stock: " + book.stocks + "\n" +
      "Category: " + book.category + "\n" +
      "Description: " + book.description + "\n" +
      "Spotlight: " + (book.spotlight ? "Yes" : "No")
  );
}
