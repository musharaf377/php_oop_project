$(document).ready(function(){


  const site_url = "http://localhost/php/oop_project/";

  $('#showSingupform').click(function(){
    $('#login-form-box').addClass('d-none');
    $('#register-form-box').removeClass('d-none');
  });

  $('#sign_up_sign').click(function(){
    $('#register-form-box').addClass('d-none');
    $('#login-form-box').removeClass('d-none');
  })

  $('#forgot-pass').click(function(){
    $('#login-form-box').addClass('d-none');
    $('#forgotten-form-box').removeClass('d-none');
  });

  $('#back-sign').click(function(){
    $('#forgotten-form-box').addClass('d-none');
    $('#login-form-box').removeClass('d-none');
  });

  
  /* admin user register */
  $('#registerUser').click(function(e){
    $(this).val('Loading...').attr('disabled',true);
    e.preventDefault();

    var name = $('#name').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var c_password = $('#c_password').val();
   
    if( name === ''){
      $('#name').addClass('is-invalid');
    }else{
      $('#name').removeClass('is-invalid');
    }
   
    if( email === ''){
      $('#email').addClass('is-invalid');
    }else{
      $('#email').removeClass('is-invalid');
    }
   
    if( password === ''){
      $('#password').addClass('is-invalid');
    }else{
      $('#password').removeClass('is-invalid');
    }
   
    if( c_password === ''){
      $('#c_password').addClass('is-invalid');
    }else{
      $('#c_password').removeClass('is-invalid');
    }

    if( password === c_password){
      $('#password').removeClass('passerror');
      $('#c_password').removeClass('passerror');
      $('.passerror_meg').addClass('d-none');

      if( name !== '' && email !== ''){

        var data = $('#register-form').serialize()+"&action=register";
        $.ajax({
          method : "post",
          url: site_url+"admin/action.php",
          data: data,
          success: function (response) {
            if(response === "ok"){
              window.location = 'index.php';
            }else{
              $('#register_error').html(response);
            }
          }
        });

      }

    }else{
      $('#password').addClass('passerror');
      $('#c_password').addClass('passerror');
      $('.passerror_meg').removeClass('d-none');
    }
    
    $('#registerUser').val('Register').attr('disabled',false);

  })

  

});