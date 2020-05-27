const $ = e => document.querySelector(e)
const $$ = e => document.querySelectorAll(e)

const input = $('.input');
const lavage = $$('input[name=lavage]');
const vehicule = $$('input[name=vehicule]');
const quantityModif = $$('.btn');


quantityModif.forEach(btn => btn.addEventListener('click', e => modify(e, $('.quantite'))));

function modify(e, node) {
        const element = e.currentTarget;
        (element.dataset.action === '-' && node.value--) && ($('.btn[data-action="+"]').style.opacity="1");
        (element.dataset.action === '+' && node.value++) && ($('.btn[data-action="-"]').style.opacity="1");
        (node.value >= 9 && (node.value = 9)) && ($('.btn[data-action="+"]').style.opacity=".4");
        (node.value <= 1 && (node.value = 1)) && ($('.btn[data-action="-"]').style.opacity=".4");
}

lavage.forEach((btn, i) => {
    btn.checked && $$('.lavageLabel')[i].classList.add('checked');

    btn.addEventListener('click', () => {
        $$('.lavageLabel').forEach(label => label.classList.remove('checked'));
        btn.checked && $$('.lavageLabel')[i].classList.add('checked');
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


if('geolocation' in navigator) {
    navigator.geolocation.getCurrentPosition(async position => {
        const latitude = position.coords.latitude;
        const longtitude = position.coords.longitude;


        const response = await fetch(`https://api.mapbox.com/geocoding/v5/mapbox.places/${longtitude},${latitude}.json?limit=1&access_token=pk.eyJ1IjoibWVkbGFtIiwiYSI6ImNrYW9xZmczbzFxOW8zMXA2MTNhZjYwOWgifQ.ZgCah4mB2plr92Sms1iPrw`)
    .then(res => res.json())
    .then(data => {
        $('textarea[name=localisation]').value = data.features[0].place_name;
        input.value !== "" && $('.border').classList.add('clicked');
    });
    })
}

