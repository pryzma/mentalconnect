require('./bootstrap');
function submitFormBtn( id ){
  const form = $( '#'+id+'_form' ),
        btn = $( '#'+id+'_form_submit' )
  btn.on( 'click',()=>form.submit());
}

submitFormBtn('login');
submitFormBtn('register');
submitFormBtn('reset');
submitFormBtn('email_password');