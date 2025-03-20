function cekNilai(){
    let nilai = document.getElementById('nilai').value;
    if(nilai >= 80 && nilai <= 100){
        document.getElementById('hasil').innerHTML = "A"
    } else if (nilai >= 70 && nilai <= 79){
        document.getElementById('hasil').innerHTML = "B"
    } else if (nilai >= 60 && nilai <= 69){
        document.getElementById('hasil').innerHTML = "C"
    } else if (nilai >= 50 && nilai <= 59){
        document.getElementById('hasil').innerHTML = "D"
    } else if (nilai >= 0 && nilai <= 49){
        document.getElementById('hasil').innerHTML = "E"
    } else {
        document.getElementById('hasil').innerHTML = "Nilai yang anda masukkan salah"
    }
}