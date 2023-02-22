$(document).ready(function(){
	

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()


	$(window).on("load , resize" , function(){
		windowWidth = $(window).width();
		if(windowWidth > 0){
			$("#cover").fadeOut();
			$("#body").css("opacity" , "1")
		}
	
	})


}); //End ready() ==> End Code JQuery  