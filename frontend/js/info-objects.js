export let locations = (document.querySelector('.location-cr')) ? Array.prototype.map.call(document.querySelectorAll('.location-cr'), function (item, i) {
    return {
        cr: item,
        swiper: undefined
    }
}) : undefined