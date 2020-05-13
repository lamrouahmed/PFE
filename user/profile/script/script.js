const $ = e => document.querySelector(e)
const $$ = e => document.querySelectorAll(e)


const triangle = $('.triangle');
const inputs = $$('.input');
const show = $('.show')
let results = "";
const upload = $('.modify');

const urls = [
    '/PFE/user/profile/ajax.php'
  ]

triangle.addEventListener('click', () => {
    $('.triangle svg').classList.toggle('svgClicked')
    $('.logout').classList.toggle('displayLog')
})

inputs.forEach((input, index) => input.addEventListener('focus', e => {
    $$('.text')[index].classList.add('focus');
    $$('.border')[index].classList.add('clicked')
    e.currentTarget.type !== "password" && e.currentTarget.setSelectionRange(0,e.currentTarget.value.length); 
    if(e.currentTarget.classList.contains('textarea') && e.currentTarget.value.trim() === "") {
        e.currentTarget.setSelectionRange(0,0); 
    }


}))    

$('#file').addEventListener('change', e => modify(e.currentTarget.files[0], urls[0]))


function modify(e, url) {
    let form = new FormData();
    form.append("file", e)
    fetch(url, {
        method: 'post',
        body: form
      })
      .then(function (response) {

        return  response.json();
      })
      .then(function (body) {
        
        if(body.success) {
            $$('.upload').forEach(upload => upload.setAttribute('src', body.location));
            $('.alerts').textContent = body.success;
        } else {
            if(body.exe)  $('.alerts').textContent = body.exe;
            else if(body.size) $('.alerts').textContent = body.size;
            else $('.alerts').textContent = body.other;

        }
      });

}


inputs.forEach(input => input.addEventListener('keyup', e => {
    post(urls[0], $('.form'))
    
}))

inputs.forEach((input, index) => input.addEventListener('blur', e => {
    e.currentTarget.value.trim() === '' &&  $$('.text')[index].classList.remove('focus');
    $$('.border')[index].classList.remove('clicked')
}))

inputs.forEach((input, index) => {
    input.value.trim() === '' ?  $$('.text')[index].classList.remove('focus') : $$('.text')[index].classList.add('focus');
})



show.addEventListener('click', e => {
    e.currentTarget.classList.toggle('hide')
    e.currentTarget.classList.contains('hide') ? $('.pwd').setAttribute('type', 'text') : $('.pwd').setAttribute('type', 'password')
})
















function post(url, form) {
    let formData = new FormData(form);

    fetch(url, {
        method: 'post',
        body: formData
      })
      .then(function (response) {

        return  response.json();
      })
      .then(function (body) {
        $$('.error').forEach((error, index) => {
             

            if(body[error.dataset.error]) {
                $$('.input')[index].classList.add('errorTrue')
                error.textContent = `${body[error.dataset.error]}`
            } else {
                error.textContent = ""
                $$('.input')[index].classList.remove('errorTrue')

            }
        })

        body.ok && ($('.alerts').textContent = body.ok);
      });
  }



