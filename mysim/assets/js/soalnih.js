$(function() {


    pertama = [0, 0, 0]
    kedua = [0, 0, 0]


    $(".jawab-a").click(function() {
        pertama[0]++
    })

    $(".jawab-b").click(function() {
        pertama[0]++
    })


    $(".jawab-c").click(function() {
        pertama[1]++
    })


    sembunyi = function() {
        $(".soal").hide()
    }




    sembunyi()
    $(".prolog").show()

    $(".jawab-prolog").click(function() {
        sembunyi()
        $(".soal-a1").show()
    })

    $(".soal-a1 .jawab").click(function() {
        sembunyi()
        $(".soal-a2").show()
    })

    $(".soal-a2 .jawab").click(function() {
        sembunyi()
        $(".soal-a3").show()
    })

    $(".soal-a3 .jawab").click(function() {
        sembunyi()
        $(".soal-a4").show()
    })

    $(".soal-a4 .jawab").click(function() {
        sembunyi()
        $(".soal-a5").show()
    })

    $(".soal-a5 .jawab").click(function() {
        sembunyi()
  

        largest_pertama = Math.max.apply(Math, pertama)
        posisi_pertama = pertama.indexOf(largest_pertama)


        if (posisi_pertama == 1 ) {
            $(".hasil-1").show()
        } else if (posisi_pertama==0) {
            $(".hasil-2").show()
        } 

    })






})
