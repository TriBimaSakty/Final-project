//untuk menampilkan jam
function jam() {
    var time = new Date(),
    hours = time.getHours(),
    minutes = time.getMinutes(),
    seconds = time.getSeconds();
    document.querySelectorAll('.jam')[0].innerHTML = harold(hours) + ":" + harold(minutes) + ":" + harold(seconds);
      
    function harold(standIn) {
        if (standIn < 10) {
          	standIn = '0' + standIn
        }
        return standIn;
        }
    }
    setInterval(jam, 1000);

document.getElementById("copy").innerHTML = "&copy;1800018044";
