<div role="main" class="main">
    <div class="inner">
        <div class="b-card">
                <div class="c-top">
                    <div id="info_holder">
                        <div class="infoItem"><?php echo $Contact[0]->FirstName . " " . $Contact[0]->LastName ?></div>
                        <div class="infoItem">Web Developer</div>
                        <div class="infoItem"><?php echo $Contact[0]->Email ?></div>
                        <div class="infoItem"><?php echo $Contact[0]->Phone ?></div>
                        <div class="infoItem"><?php echo $Contact[0]->Address . ', ' . $Contact[0]->City . ', ' . $Contact[0]->State ?></div>
                        <div class="infoItem">Philippines <?php echo $Contact[0]->Zipcode ?></div>
                    </div>
                </div>
                <div class="left">
                       <div class="logo"></div>
                </div>
            </form>
        </div>
    </div>

</div>
<footer>
</footer>

</body>
</html>