<center>
    <h1>Pick Your Players</h1></center>
<lb></lb>

<div class="container1">
    <div class="messi" style="backgroun-color: azure;">
        <img style="visibility:hidden" id="lio" class="playerImage1" src="<?php echo get_template_directory_uri(); ?>/dist/images/messi.png">
    </div>
    <div class="neymar">
        <img style="display:none" class="playerImage" src="<?php echo get_template_directory_uri(); ?>/dist/images/neymar.png">
    </div>
    <center>
        <h1>VS.</h1>
    </center>
    <div>
        <img style="visibility:hidden" id="ronald" class="playerImage" src="<?php echo get_template_directory_uri(); ?>/dist/images/ronaldo.png">
        <img style="display:none" class="playerImage" src="<?php echo get_template_directory_uri(); ?>/dist/images/beckham.png">
    </div>
</div>

<div class="cont1">
    <div id="messi-name" class="button" onclick="clicked();">Messi</div>
    <div class="button">Neymar</div>
    <div>
        <h3>Contra</h3>
    </div>
    <div onclick="clicked1();" class="button">Ronaldo</div>
    <div class="button">Beckham</div>
</div>

<div class="tests">Test</div>

<script type="text/javascript">
    $(document).ready(function () {

        $("#messi-name").click(function () {
            $(".messi").fadeToggle();
        });

    });

    function clicked() {
        document.getElementById('lio').style.visibility = 'visible';
    };

    function clicked1() {
        document.getElementById('ronald').style.visibility = 'visible';
    };
</script>