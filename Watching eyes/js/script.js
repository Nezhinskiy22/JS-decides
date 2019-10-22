document.onmousemove = function(event) {
    let x = event.x - 50
    let y = event.y - 50
    document.querySelector('.y-1').style.transform = 'rotate(' + 57.2958 * arcctg(x, y) + 'deg)'
    document.querySelector('.y-3').style.transform = 'rotate(' + 57.2958 * arcctg(x - 116, y) + 'deg)'

}

function arcctg(x, y) {
    if (x > 0 && y > 0) { return Math.PI / 2 - Math.atan(x / y) }
    if (x < 0 && y > 0) { return Math.PI / 2 - Math.atan(x / y) }
    if (x < 0 && y < 0) { return Math.PI + Math.atan(y / x) }
    if (x > 0 && y < 0) {
        return 3 * Math.PI / 2 + Math.abs(Math.atan(x / y))
    }

}