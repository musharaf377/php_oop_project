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

  
});