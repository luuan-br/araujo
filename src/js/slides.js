const container = document.getElementById("post-carousel");
const options = { 
  enabled: false,
  fill: true,
  center: false,
  Navigation: false,
  slidesPerPage: "auto",
  breakpoints: {
      "(max-width: 992px)": {
          enabled: true,
      },
  },
};

if(container && options) new Carousel(container, options);