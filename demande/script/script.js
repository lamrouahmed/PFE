const $ = e => document.querySelector(e)
const $$ = e => document.querySelectorAll(e)

const input = $('.input');
const lavage = $$('input[name=lavage]');
const vehicule = $$('input[name=vehicule]');
const quantityModif = $$('.btn');
const demande = $('.book');
let price;
const date = new Date();
$('input[type=date]').valueAsDate = new Date();
let min = date.getMinutes();
let hour = date.getHours();
date.getMinutes() < 10 && (min = `0${min}`) 
date.getHours() < 10 && (hour = `0${hour}`) 
$('input[type=time]').value = `${hour}:${min}`










function get(url, nodes) {
    fetch(url, {
            method: 'get'
        }).then(data => data.json())
        .then(response => {
            nodes.forEach((node, i) => node.textContent = `${response[i].prix} M.A.D`)
            price = response;


            const url_string = window.location.href;
            const url = new URL(url_string);
            let type = url.searchParams.get("type");
            type === null ? type = "Normale" : type = type.charAt(0).toUpperCase() + type.slice(1)
            // (response.filter(e => e.type_lavage === type)[0].prix !== 0) && (;
            let param = response.filter(e => e.type_lavage === type);
            if(param !== undefined && param.length !== 0) {
                $$('.lavageLabel input[type=radio]').forEach(input => input.checked = false)
                $(`.lavageLabel input[type=radio][value=${type}]`).parentNode.classList.add('checked');
                $(`.lavageLabel input[type=radio][value=${type}]`).checked = true;
            } else {
                $$('.lavageLabel input[type=radio]').forEach(input => input.checked = false)
                $(`.lavageLabel input[type=radio][value=Normale]`).parentNode.classList.add('checked');
                $(`.lavageLabel input[type=radio][value=Normale]`).checked = true;
            }
            
            let checked = $('.lavageLabel.checked input[type=radio]').value;
            let prix = price.filter(e => e.type_lavage === checked)[0].prix * $('.quantite').value;
            $('.total .prix h2').textContent = `${prix} M.A.D`;
            $('.price').value = prix;

        });
}

get('/PFE/demande/listLavage.php', $$('.prixLavage h2'));

// $('.price').value = $('.prix h2').textContent.split(' ')[0];
// let checked = $('.lavageLabel.checked input[type=radio]').value;
// let prix = price.filter(e => e.type_lavage === checked)[0].prix * $('.quantite').value;
// $('.prix h2').textContent = `${prix}`;


quantityModif.forEach(btn => btn.addEventListener('click', e => modify(e, $('.quantite'))));
$('.price').value = $('.total .prix h2').textContent.split(' ')[0];

function modify(e, node) {
    const element = e.currentTarget;
    (element.dataset.action === '-' && node.value--) && ($('.btn[data-action="+"]').style.opacity = "1");
    (element.dataset.action === '+' && node.value++) && ($('.btn[data-action="-"]').style.opacity = "1");
    (node.value >= 9 && (node.value = 9)) && ($('.btn[data-action="+"]').style.opacity = ".4");
    (node.value <= 1 && (node.value = 1)) && ($('.btn[data-action="-"]').style.opacity = ".4");
    let checked = $('.lavageLabel.checked input[type=radio]').value;
    let prix = price.filter(e => e.type_lavage === checked)[0].prix * node.value;
    $('.total .prix h2').textContent = `${prix} M.A.D`;
    $('.price').value = prix;

}

lavage.forEach((btn, i) => {
    btn.checked && $$('.lavageLabel')[i].classList.add('checked');

    btn.addEventListener('click', () => {
        $$('.lavageLabel').forEach(label => label.classList.remove('checked'));
        btn.checked && $$('.lavageLabel')[i].classList.add('checked');




        let checked = $('.lavageLabel.checked input[type=radio]').value;
        let prix = price.filter(e => e.type_lavage === checked)[0].prix * $('.quantite').value;
        $('.total .prix h2').textContent = `${prix} M.A.D`;
        $('.price').value = prix;


    })
})
vehicule.forEach((btn, i) => {
    btn.checked && $$('.vehiculeLabel')[i].classList.add('checked');

    btn.addEventListener('click', () => {
        $$('.vehiculeLabel').forEach(label => label.classList.remove('checked'));
        btn.checked && $$('.vehiculeLabel')[i].classList.add('checked');
    })
})



input.addEventListener('focus', e => {
    $('.border').classList.add('clicked')
})


input.addEventListener('blur', e => {
    $('.border').classList.remove('clicked')
})
$('textarea[name=localisation]').value = "Rue du Yémen, Casablanca 20250";

if('geolocation' in navigator) {
    navigator.geolocation.getCurrentPosition(async position => {
        const latitude = position.coords.latitude;
        const longtitude = position.coords.longitude;


    const response = await fetch(`https://api.mapbox.com/geocoding/v5/mapbox.places/${longtitude},${latitude}.json?limit=1&country=ma&language=fr&access_token=pk.eyJ1IjoibWVkbGFtIiwiYSI6ImNrYW9xZmczbzFxOW8zMXA2MTNhZjYwOWgifQ.ZgCah4mB2plr92Sms1iPrw`)
    .then(res => res.json())
    .then(data => {
        $('textarea[name=localisation]').value = data.features[0].place_name;
        input.value !== "" && $('.border').classList.add('clicked');
    });
    })
}



demande.addEventListener('click', e => {
    e.preventDefault()
    post('/PFE/demande/demande.inc.php', $('.form'));
    
})













function post(url, form) {
    let formData = new FormData(form);
    fetch(url, {
            method: 'post',
            body: formData
        })
        .then(function (response) {
            return response.json();
        })
        .then(function (body) {

            if(body.ok) {
                demande.classList.add('clicked')

                setTimeout(() => {  
                    window.location.href = '/PFE/user/profile/demandes/demandes.php';
                }, 1000)
            }

            if(body.date) $('input[type=date]').classList.add('error')
            else $('input[type=date]').classList.remove('error')


            if(body.time) $('input[type=time]').classList.add('error')
            else $('input[type=time]').classList.remove('error')

            if(body.localisation) $('textarea').classList.add('textError')
            else $('textarea').classList.remove('textError')
            
            
        });
}