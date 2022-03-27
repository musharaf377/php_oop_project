$(document).ready(function(){
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

   
    if($('#name').val() === ''){
      $('#name').addClass('is-invalid');
    }else{
      $('#name').removeClass('is-invalid');
    }
   
    if($('#email').val() === ''){
      $('#email').addClass('is-invalid');
    }else{
      $('#email').removeClass('is-invalid');
    }
   
    if($('#password').val() === ''){
      $('#password').addClass('is-invalid');
    }else{
      $('#password').removeClass('is-invalid');
    }
   
    if($('#c_password').val() === ''){
      $('#c_password').addClass('is-invalid');
    }else{
      $('#c_password').removeClass('is-invalid');
    }

    if($('#password').val() === $('#c_password').val()){
      console.log('ok');
    }else{
      $('.passerror').html("password doesn't match");
    }

    setTimeout(function(){
      $('#registerUser').val('Register').attr('disabled',false);
    }, 1000);
  })

  

});