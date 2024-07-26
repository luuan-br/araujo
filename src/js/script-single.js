class SinglePost {
    
    constructor() {}

    init() {
        document.addEventListener('DOMContentLoaded', async () => {
            console.log("Single Initialized!");

            this.InitializeSliders();
        });
    }

    InitializeSliders(){
        const galleries = document.querySelectorAll('.wp-block-gallery');
        galleries.forEach(function(gallery) {

            jQuery(gallery).slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                infinite: true,
                speed: 1000,
                arrows: true,
                autoplay: true,
                autoplaySpeed: 3000,
            });
        });
    }

}

const Cart = new SinglePost();
Cart.init();
