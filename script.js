document.addEventListener('DOMContentLoaded', function() {
   const addToCartButtons = document.querySelectorAll('.add-to-cart');
   const removeFromCartButtons = document.querySelectorAll('.remove-from-cart');

   addToCartButtons.forEach(button => {
       button.addEventListener('click', function() {
           const productId = this.getAttribute('data-id');
           // Додати товар в кошик
           console.log('Товар з ID ' + productId + ' додано в кошик');
       });
   });

   removeFromCartButtons.forEach(button => {
       button.addEventListener('click', function() {
           const productId = this.getAttribute('data-id');
           // Видалити товар з кошика
           console.log('Товар з ID ' + productId + ' видалено з кошика');
       });
   });
});