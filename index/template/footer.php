<footer id="content-footer">
        <div class="footer-wrap mt-5">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-logo">
                            <img src="../images/LOGO_HALTEC_REMAKE_66 1.png" alt="logo">
                        </div>
                        <p class="mt-3 tagline-footer">Help You With <br>
                        Creative Solution
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h3 class="title-footer">
                            Alamat
                        </h3>
                        <p class="text-footer">
                            Perumahan Graha Asri Utomo No. C17,<br> Ringinsari, Ringinpitu, Kec. Kedungwaru, <br>
                            Kab. Tulungagung, Jawa Timur 66229
                        </p>
                        <img class="" src="../images/phone-call 1.png" alt="">
                            <span class="span-no-hp ml-3">
                                0812 3456 7890
                            </span>
                    </div>
                    <div class="col-md-2">
                        <h3 class="h-tentang">
                            Tentang Kami
                        </h3>
                        <div class="item-footer mt-3">
                            <img src="../images/whatsapp 1.png" alt="">
                            <span class="span-whatsapp ml-3">
                                WhatsApp
                            </span>
                        </div>
                        <div class="item-footer mt-3">
                            <img src="../images/instagram 1.png" onclick="window.open('https://www.instagram.com/halte_creative')">
                            <span class="span-instagram ml-3">
                                Instagram
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
            <div style="background: #142B72; overflow-x:hidden;" class="container-fluid">
            <div class="copyright">
                <P class="text-center text-white p-copyright mt-2">
                    <strong class="mr-1">Copyright</strong>Control Web Panel 2021
                </P>
            </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../plugins/wow/dist/wow.min.js"></script>
    <script src="../plugins/slick-master/slick/slick.js"></script>
    <script src="../plugins/fontawesome/js/all.min.js"></script>
    <script src="../plugins/fontawesome/js/fontawesome.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iamdustan-smoothscroll/0.4.0/smoothscroll.min.js"></script>
    <script>
            new WOW().init();

            $(window).scroll(function() {   
            var scroll = $(window).scrollTop();
            if (scroll >= 500) {
                $(".navbar").addClass("navbar-active")
                $(".nav-link").addClass("nav-link-active")
                $(".nav-link").removeClass("non-active")
                $(".img-off").css("display", "none")
                $(".img-on").css("display" ,"block")
                
            } else {
                $(".navbar").removeClass("navbar-active")
                $(".nav-link").removeClass("nav-link-active")
                $(".nav-link").addClass("non-active")
                $(".img-off").css("display", "block")
                $(".img-on").css("display", "none")
            }
        });
        
    
    $("#card-1").on({
        mouseenter: function () {
            $('#img-back-1').css('display', 'block')
            $('#img-back-1').css('margin-top', '-62px')
        },
        mouseleave: function () {
            $('#img-back-1').css('display', 'none')
        }
    });
    $("#card-2").on({
        mouseenter: function () {
            $('#img-back-2').css('display', 'block')
            $('#img-back-2').css('margin-top', '-62px')
        },
        mouseleave: function () {
            $('#img-back-2').css('display', 'none')
        }
    });
    $("#card-3").on({
        mouseenter: function () {
            $('#img-back-3').css('display', 'block')
            $('#img-back-3').css('margin-top', '-62px')
        },
        mouseleave: function () {
            $('#img-back-3').css('display', 'none')
        }
    });



    function animate(obj, initVal, lastVal, duration) {
let startTime = null;

//get the current timestamp and assign it to the currentTime variable
let currentTime = Date.now();

//pass the current timestamp to the step function
const step = (currentTime ) => {

    //if the start time is null, assign the current time to startTime
    if (!startTime) {
            startTime = currentTime ;
    }

    //calculate the value to be used in calculating the number to be displayed
    const progress = Math.min((currentTime  - startTime) / duration, 1);

    //calculate what to be displayed using the value gotten above
    obj.innerHTML = Math.floor(progress * (lastVal - initVal) + initVal);

    //checking to make sure the counter does not exceed the last value (lastVal)
    if (progress < 1) {
        window.requestAnimationFrame(step);
    }
    else{
            window.cancelAnimationFrame(window.requestAnimationFrame(step));
    }
};

//start animating
window.requestAnimationFrame(step);
}

let text1 = document.getElementById('number-project');
let text2 = document.getElementById('number-project-1');
let text3 = document.getElementById('number-project-2');
let text4 = document.getElementById('number-project-3');

const load = () => {
animate(text1, 0, 100, 800);
animate(text2, 0, 76, 800);
animate(text3, 100, 3, 800);
animate(text4, 0, 11, 800);
}


    $(window).scroll(function() {   
        var scroll = $(window).scrollTop();
        if (scroll == 2800) {
            animate(text1, 0, 100, 500);
            animate(text2, 0, 76, 500);
            animate(text3, 100, 3, 500);
            animate(text4, 0, 11, 500);
        }
    });

// smmoth scrolling
document.querySelectorAll('a[href^="#"]').forEach(elem => {
    elem.addEventListener('click', e => {
        e.preventDefault();
document.querySelector(elem.getAttribute('href')).scrollIntoView({
            behavior: 'smooth',
            offsetTop: 20
        });
    });
});

    </script>
</body>
</html>