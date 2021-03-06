const $ = e => document.querySelector(e)
const $$ = e => document.querySelectorAll(e)
const url = '/PFE/user/profile/demandes/demandesList.php';

const popUp = $('.popUp');

popUp.addEventListener('click', () => {
    $('.triangle svg').classList.toggle('svgClicked')
    $('.logout').classList.toggle('displayLog')
})




let btns = $$('.btns > div');

btns.forEach(btn => btn.addEventListener('click', e => update(e.currentTarget.dataset.id, e.currentTarget.dataset.action, url)));




function update(id, action, url) {
    const formData = new FormData();
    formData.append("action", action)
    formData.append("id", id)
    fetch(url, {
        method: 'post',
        body: formData
    })
    .then(response => response.text())
    .then(body => {
        $('.demandeContainer').innerHTML = body
        btns = $$('.btns > div')
        btns.forEach(btn => btn.addEventListener('click', e => update(e.currentTarget.dataset.id, e.currentTarget.dataset.action, url)));

    });
}





