/*=============== SWIPER JS ===============*/
// let swiperCards = new Swiper(".card__content", {
//     loop: true,
//     spaceBetween: 32,
//     grabCursor: true,
//     autoplay: {
//         delay: 5000, // Waktu interval (dalam milidetik) antara setiap geser
//         disableOnInteraction: false, // Tetapkan false agar autoplay tetap berjalan setelah interaksi pengguna
//     },
  
//     pagination: {
//       el: ".swiper-pagination",
//       clickable: true,
//       dynamicBullets: true,
//     },
  
//     navigation: {
//       nextEl: ".swiper-button-next",
//       prevEl: ".swiper-button-prev",
//     },
  
//     breakpoints:{
//       600: {
//         slidesPerView: 2,
//       },
//       968: {
//         slidesPerView: 3,
//       },
//     },
// });



/*=============== SWIPER JS ===============*/
let swiperCards = new Swiper(".card__content", {
  loop: true,
  spaceBetween: 32,
  grabCursor: true,
  slidesPerView: 'auto', // Mengatur agar jumlah slide yang tampil mengikuti lebar viewport
  centeredSlides: true, // Mengatur agar slide yang aktif berada di tengah
  autoplay: {
      delay: 4500,
      disableOnInteraction: false,
  },
});
