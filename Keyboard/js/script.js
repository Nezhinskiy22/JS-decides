const keyboard = [81, 87, 69, 82, 84, 89, 85, 73, 79, 80, 65, 83, 68, 70, 71, 72, 74, 75, 76, 90, 88, 67, 86, 66, 78, 77]

// document.onkeypress = function(event) {
//     console.log(event)
//     keyboard.push(event.charCode)

//     console.log(keyboard)
// }

function init() {
    let out = ''
    for (let i = 0; i < keyboard.length; i++) {
        if (i == 10 || i == 19) {
            out += '<div class="clearfix"></div>'
        }
        out += '<div class="k-key" data="' + keyboard[i] + '">' + String.fromCharCode(keyboard[i]) + '</div>'
    }
    document.querySelector('#keyboard').innerHTML = out
}

init()

document.onkeypress = function(event) {
    console.log(event.code)
    console.log(event.keyCode)
    document.querySelectorAll(' #keyboard .k-key').forEach(function(element) {
        element.classList.remove('active')
    })
    document.querySelector('#keyboard .k-key[data="' + event.keyCode + '"]').classList.add('active')
}

document.querySelectorAll(' #keyboard .k-key').forEach(function(element) {
    element.onclick = function(event) {
        document.querySelectorAll(' #keyboard .k-key').forEach(function(element) {
            element.classList.remove('active')
        })
        let code = this.getAttribute('data')
        this.classList.add('active')
        console.log(code)
    }
})