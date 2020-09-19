<?php
$widthheight = '
    <div style="background: #fff; margin: 10px; padding: 10px; display: grid; justify-content: center; text-align: center;">
        <p>Click the button to display this frames height and width.</p>

        <button onclick="myFunction()">Try it</button>

        <p id="demo"></p>

        <script>
        function myFunction() {
          var w = window.innerWidth;
          var h = window.innerHeight;
          document.getElementById("demo").innerHTML = "Width: " + w + "<br>Height: " + h;
        }
        </script>
    </div>
';
?>