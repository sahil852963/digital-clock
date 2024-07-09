<!DOCTYPE html>
<html>
    <head>
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            body{
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                font:bold 12px Arial, Helvetica, sans-serif;
                background-color: black;
            }
            .clock{
                border: 1px solid #606060;
                color: white;
                padding: 40px;
                border-radius: 10px;
                background-color: #222222;
            }
            #Date{
                font-size: 20px !important;
                text-align: center;
            }
            .clock ul{
                list-style: none;
                display: flex;
                font-size: 90px;
                gap: 15px;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="clock">
                <div id="Date">Monday 26 September 2023</div>

                <ul>
                <li id="hours">05</li>
                    <li id="point">:</li>
                    <li id="min">20</li>
                    <li id="point">:</li>
                    <li id="sec">30</li>
                    <li id="am_pm">AM</li>
                </ul>
            </div>
        </div>
        <script src=""></script>
        <script>

            function clock(){
                
                var monthNames = [ "January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December" ]; 
                var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

                var today = new Date();
                // console.log(today.getFullYear());

                document.getElementById('Date').innerHTML = (dayNames[today.getDay()] + " " + 
                today.getDate() + ' ' + monthNames[today.getMonth()] + ' ' +today.getFullYear());

                
                var hours = today.getHours();
                var minutes = today.getMinutes();
                var seconds = today.getSeconds();
                var days = hours<11 ? 'AM': 'PM';

                hours = hours<10? '0'+hours: hours;
                minutes = minutes<10? '0'+minutes: minutes;
                seconds = seconds<10? '0'+seconds: seconds;               

                document.getElementById('hours').innerHTML = hours;
                document.getElementById('min').innerHTML = minutes;
                document.getElementById('sec').innerHTML = seconds;
                document.getElementById('am_pm').innerHTML = days;

            }
            setInterval(clock,400);
            clock()
            

        </script>
    </body>
</html>