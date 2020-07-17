const $ = e => document.querySelector(e)
const $$ = e => document.querySelectorAll(e)
let url = '/PFE/user/profile/demandes/demandesList.php';

const popUp = $('.popUp');

popUp.addEventListener('click', () => {
    $('.triangle svg').classList.toggle('svgClicked')
    $('.logout').classList.toggle('displayLog')
    $('main').classList.toggle('blur');
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
            action !== "pay" && ($('.demandeContainer').innerHTML = body);
            btns = $$('.btns > div')
            btns.forEach(btn => btn.addEventListener('click', e => update(e.currentTarget.dataset.id, e.currentTarget.dataset.action, url)));
            JSON.parse(body).ok && (window.location.href = "/PFE/payment/payment.php");

        });
}



const indexes = Array.from($$('.demande')).map(demande => demande.dataset.url)


if (indexes.some(index => window.location.href.split('#')[1] === index)) {
    $(`#d_${window.location.href.split('#')[1]}`).classList.add('big');
}

function decodeHtml(html) {
    var txt = document.createElement("textarea");
    txt.innerHTML = html;
    return txt.value;
}


function get(url) {
    fetch(url, {
            method: 'get'
        }).then(response => response.text())
        .then(data => {
            let Data = decodeHtml(data).replace(/\s/g, '').length
            let dom = decodeHtml($('.demandeContainer').innerHTML.replace(/\s/g, '')).length
            if (Data !== dom) {
                $('.demandeContainer').innerHTML = data;

                btns = $$('.btns > div');
                url = '/PFE/user/profile/demandes/demandesList.php'
                btns.forEach(btn => btn.addEventListener('click', e => update(e.currentTarget.dataset.id, e.currentTarget.dataset.action, url)));
            }
        })

}



setInterval(() => get('/PFE/user/profile/demandes/l_Demandes.php'), 1000)