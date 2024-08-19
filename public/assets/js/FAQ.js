document.addEventListener("DOMContentLoaded", function () {
    const accordionItems = document.querySelectorAll('.accordion-items');

    accordionItems.forEach(item => {
      const contentSpan = item.querySelector('span');
      const toggleIcon = item.querySelector('i');

      // Initially hide the content and set the icon to chevron-down
      contentSpan.style.display = 'none';
      toggleIcon.classList.remove('fa-chevron-up');
      toggleIcon.classList.add('fa-chevron-down');

      // Toggle the content visibility on click
      item.addEventListener('click', function () {
        if (contentSpan.style.display === 'none') {
          contentSpan.style.display = 'block'; // Show content
          toggleIcon.classList.remove('fa-chevron-down');
          toggleIcon.classList.add('fa-chevron-up');
        } else {
          contentSpan.style.display = 'none'; // Hide content
          toggleIcon.classList.remove('fa-chevron-up');
          toggleIcon.classList.add('fa-chevron-down');
        }
      });
    });
  });

  document.addEventListener("DOMContentLoaded", function () {
    const frequentlyItems = document.querySelectorAll('.Frequently-contant');

    frequentlyItems.forEach(item => {
      const contentSpan = item.querySelector('.line span');
      const toggleIcon = item.querySelector('.icon i');

      // Initially hide the content and set the icon to plus
      contentSpan.style.maxHeight = '0';
      contentSpan.style.overflow = 'hidden';
      contentSpan.style.transition = 'max-height 0.3s ease'; // Smooth transition
      toggleIcon.classList.remove('fa-minus');
      toggleIcon.classList.add('fa-plus');

      // Toggle the content visibility on click
      item.addEventListener('click', function () {
        if (contentSpan.style.maxHeight === '0px') {
          contentSpan.style.maxHeight = contentSpan.scrollHeight + 'px'; // Show content
          toggleIcon.classList.remove('fa-plus');
          toggleIcon.classList.add('fa-minus');
        } else {
          contentSpan.style.maxHeight = '0'; // Hide content
          toggleIcon.classList.remove('fa-minus');
          toggleIcon.classList.add('fa-plus');
        }
      });
    });
  });