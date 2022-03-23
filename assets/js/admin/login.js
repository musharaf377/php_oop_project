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

    var user_name = $('#name').val();
   
    if( user_name === ''){
      alert('0');
    }else{
      alert('1');
    }

    setTimeout(function(){
      $('#registerUser').val('Register').attr('disabled',false);
    }, 1000);
  })

  

});