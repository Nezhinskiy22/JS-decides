navigator.getBattery().then(function(battery) {
    function updateAllBatteryInfo() {
        updateChargeInfo()
        updateLevelInfo()
        updateChargingInfo()
        updateDischargingInfo()
    }

    updateAllBatteryInfo()

    battery.addEventListener('chargingchange', function() {
        updateChargeInfo()
    })

    function updateChargeInfo() {
        console.log(battery.charging)
        if (battery.charging) {
            document.querySelector('#status').innerHTML = 'Заряджається'
            document.querySelector('#battery-level').classList.add('battery-animation')

        } else {
            document.querySelector('#status').innerHTML = 'Розряджається'
            document.querySelector('#battery-level').classList.remove('battery-animation')

        }
    }
    battery.addEventListener('levelchange', updtateLevelInfo)

    function updateLevelInfo() {
        //battery.level
        console.log(battery.level)
        document.querySelector('#battery-level-digit').innerHTML = battery.level * 100 + '%'
        document.querySelector('#battery-level').style.width = battery.level * 100 + '%'
    }

    battery.addEventListener('chargingtimechange', updateChargingInfo)

    function updateChargingInfo() {
        //battery.chargingTime
        console.log('cha ' + battery.chargingTime)
        if (battery.chargingTime != Infinity) {
            document.querySelector('#charging-time').innerHTML = battery.chargingTime
        } else {
            document.querySelector('#charging-time').innerHTML = ''
        }
    }

    battery.addEventListener('dischargingtimechange', updateDischargingInfo)

    function updateDischargingInfo() {
        //battery.dischargingTime
        console.log('dis ' + battery.dischargingTime)
        if (battery.dischargingTime != Infinity) {
            document.querySelector('#discharging-time').innerHTML = battery.dischargingTime
        } else { document.querySelector('#discharging-time').innerHTML = '' }
    }
})