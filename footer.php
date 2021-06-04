
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous">
</script>
<script>
  $(document).on('click', '.nav-act li', function(){
    $(this).addClass('active').siblings().removeClass('active')
  })
</script>
</body>

<script src="https://use.fontawesome.com/1ecbb748f3.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src='assets/js/jquery-scroll-animate.js'></script>
<script>
    
		$('.abc').jqueryScrollAnimate({
			direction:true,
			distance:0,
			animated:'.ani',
			offsetval: 0
		})
	</script>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
<script>
  window.onload = function () {
    window.addEventListener('scroll', function (e) {
        if (window.pageYOffset > 30) {
            document.querySelector(".head").classList.add('change-color');
        } else {
            document.querySelector(".head").classList.remove('change-color');
        }
    
    });
    window.addEventListener('scroll', function (e) {
        if (window.pageYOffset > 100) {
            document.querySelector("header").classList.add('is-scrolling');
        } else {
            document.querySelector("header").classList.remove('is-scrolling');
        }
    
    });

    const menu_btn = document.querySelector('.hamburger');
    const mobile_menu = document.querySelector('.mobile-nav')

    menu_btn.addEventListener('click', function () {
        menu_btn.classList.toggle('is-active');
        mobile_menu.classList.toggle('is-active');
    });
}
</script>



</html>