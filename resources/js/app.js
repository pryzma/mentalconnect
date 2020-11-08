require('./bootstrap');
function submitForm( id ){
  const form = $( `#${id}_form` ),
        btn = $( `#${id}_form_submit` )
  btn.on( 'click',()=>form.submit());
  return {
    form : form,
    btn : btn
  }
}
const forms = new Object({});
['login','register','reset','email_password'].forEach((form)=>forms[form] = submitForm(form),()=>{
  forms.register.form.name.addEventListener('input',(e)=>{
    const name = e.target.value
  })
});
