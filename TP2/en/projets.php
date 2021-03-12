
<?php
require_once('template_header.php');
?>
<body>

<h1>projets-en</h1>




<div style="text-align:center">
    <button onclick="playPause()">Run/Pause</button>
    <button onclick="makeBig()">Big</button>
    <button onclick="makeSmall()">Small</button>
    <button onclick="makeNormal()">Normal</button>
    <br>
    <video id="video1" width="800">
        <source src="test.mp4" type="video/mp4">

        Your browser does not support the HTML5 video tag.
    </video>
</div>

<script>
    var myVideo=document.getElementById("video1");

    function playPause()
    {
        if (myVideo.paused)
            myVideo.play();
        else
            myVideo.pause();
    }

    function makeBig()
    {
        myVideo.width=1000;
    }

    function makeSmall()
    {
        myVideo.width=600;
    }

    function makeNormal()
    {
        myVideo.width=800;
    }
</script>


<?php
require_once('template_footer.php');
?>