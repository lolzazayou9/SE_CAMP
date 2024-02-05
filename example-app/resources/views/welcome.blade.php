<!DOCTYPE html>
<html>
    <head>
        <title>JAVA Script 101 </title>
        
    </head>
    <body >
        <h1 id="myh1">JAVAScript</h1>
        <button onclick="alert('bug hum noye')">Click me ummmm</button>
        <input type="text" id="my_number" >
        <button onclick="myFunction()">submit number</button>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                console.log("Hello World - document.ready")
                console.log($('#myh1').text())
                console.log($('#my_number').val())
                $('#myh1').text("Javascript 101")
                $('#my_number').val(100)
            });
            function myFunction(){
                let my_number = parseInt($('#my_number').val())
                for(let i = 0 ; i < my_number;i++){
                    $('#myh1').after(`<h1 class="my_gen_number">${i}</h1>`)
                }
                console.log(document.getElementById('my_number').value);
                console.log('Click submit number')
                console.log('Click submit number')
            }
            console.log("Hum")
            let maval;
            maval = '10';
            maval2 ='2';
            console.log(maval,maval2);
            maval3=parseInt(maval)+parseInt(maval2);
            console.log(maval3);
            maval3=maval-maval2;
            console.log(maval3);
            maval3=maval*maval2;
            console.log(maval3);
            maval3=maval/maval2;
            console.log(maval3);

            let maval4 = [1,2,3];
            maval4[3]=5;
            console.log(maval4);
            maval4[4]=[9,8,5];
            console.log(maval4);

            for(i = 0 ; i < maval4.length;i++){
                console.log(maval4[i])
            }
            maval4.forEach(function(value, index){
            console.log("in forEach",value,index)});

           console.log(document.getElementById('myh1').innerHTML);
        </script>
    </body>
</html>
