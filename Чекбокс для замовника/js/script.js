document.querySelectorAll('.order').forEach((element) => {
    element.onclick = orderFunction
})

function orderFunction() {
    let speed = document.querySelector('.order[value="speed"]')
    let cheep = document.querySelector('.order[value="cheep"]')
    let quality = document.querySelector('.order[value="quality"]')
    console.log(1)

    if (this.value == 'speed' && quality.checked) {
        cheep.checked = false
        return true
    }
    if (this.value == 'speed' && cheep.checked) {
        quality.checked = false
        return true
    }
    if (this.value == 'cheep' && speed.checked) {
        quality.checked = false
        return true
    }
    if (this.value == 'cheep' && quality.checked) {
        speed.checked = false
        return true
    }
    if (this.value == 'quality' && speed.checked) {
        cheep.checked = false
        return true
    }
    if (this.value == 'quality' && cheep.checked) {
        speed.checked = false
        return true
    }

}