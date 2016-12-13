<div class="title">
    <h1>Who's Better?</h1>
    <img class="playerImage1" src="<?php echo get_template_directory_uri(); ?>/dist/images/messi.png">
</div>

<form style="font-family:'Indie Flower', cursive;" class="fontColor">
    <center>Pick one:
        <label>
            <input id="lm" name="test2" type="radio">Lionel Messi</label>
        <label>
            <input id="cr" name="test2" type="radio">Cristiano Ronaldo</label>
        <label>
            <input id="ney" name="test2" type="radio">Neymar</label>
        <label>
            <input id="db" name="test2" type="radio">David Beckham</label>
    </center>
    <hr>
    <br>Tell us why :
    <br />
    <br>
    <center>
        <textarea placeholder="Tell Me Everything..." rows="5" cols="50" name="description" style="font-family:'Indie Flower', cursive;" class="fontColor">
            Tell Us Everything...
        </textarea>
    </center>
    <hr>

    <br>
    <center>
        <input type="submit" name="submit" onclick="clicked();" value="Submit" />
    </center>

</form>
<script>
    function clicked() {
        if (document.getElementById("lm").checked === true) {
            alert("You have selected Messi. Great Choice!");
        } else if (document.getElementById("cr").checked === true) {
            alert("OOPS!!! It seems you have figgited and clicked the wrong button. That's OK, we all make mistakes sometimes.");
        } else if (document.getElementById("db").checked === true) {
            alert("Uh Oh. Did you forget your glasses today? You didn't check Messi. Woops! That's OK we all mess up sometimes.");
        } else if (document.getElementById("ney").checked === true) {
            alert("I know I know it can be confusing when they are on the same team sometimes but Neymar is different than Messi. Neymar is not Messi though I am sorry. Don't worry though. You are forgiven for your mistake.");
        }
    }
</script>