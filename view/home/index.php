<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-8">
                <h1 class="header-text">
                   Welkom
                    <?php if (isset($_SESSION['username']))
                    {
                        echo ' terug '.$_SESSION['firstname'];
                    }
                    ?>bij Kapsalon Snoek
                </h1>
                <div class="snoek-info">
                    <p class="info"></p>
                    <p class="bio">In mijn salon hebben wij alle aandacht en tijd voor u.<br>
                        Hebt u een vraag over een behandeling?<br>
                        Of zin in een ander kapsel?<br>
                        Ik geef u graag een persoonlijk advies!</p>

                    <p class="snoek-traits">Peter Snoek - Professional HairStylist
                </div>
            </div>

            <div class="col-md-4">
                <img src="<?= URL ?>img/kapper.jpg" />
            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-xs-12 info-background">

            <h2 id="examples">Voorbeelden</h2>
            <div class="row">
                <div class="col-md-6">
                    <img src="<?= URL ?>img/voorbeeld1.jpg">
                </div>
                <div class="col-md-6">
                    <img src="<?= URL ?>img/voorbeeld2.jpg">
                </div>
            </div>
        </div>
    </div>
</div>