document.querySelector('button').onclick = () => {
    let day = +document.querySelector('#day').value
    let month = +document.querySelector('#month').value
        //if ((month == 12 && day >= 22) || (month == 1 && <= 19)) alert('Козерог')
        //if (month == 12 && day >= 22) alert('Co')

    if (month == 1) {
        if (day <= 19) alert('Козеріг')
        else alert('Водолій')
    }
}