<div class="promos">
    <div class="promo">
        <div class="deal">
            <span>Premium</span>
            <span>Deze optie is voor premium features</span>
        </div>
        <span class="price">€30</span>
        <ul class="features">
            <li>Model knippen</li>
            <li>Wassen, drogen	</li>
            <li>Eventuele verandering <br> haarkleur</li>
        </ul>
        <?php
        if (isset($_SESSION['username'])){
            ?>
           <button>Reserveer!</button>
            <?php
        }
        ?>
    </div>
    <div class="promo scale">
        <div class="deal">
            <span>Plus</span>
            <span>Deze optie is het complete pakket</span>
        </div>
        <span class="price">€50</span>
        <ul class="features">
            <li>Haren worden gewassen</li>
            <li>Wassen, knippen, föhnen	</li>
            <li>Wenkbrauwen verven en/of epileren</li>
        </ul>
        <?php
        if (isset($_SESSION['username'])){
            ?>
            <button>Reserveer!</button>
            <?php
        }
        ?>
    </div>
    <div class="promo">
        <div class="deal">
            <span>Basic</span>
            <span>Standaard Knipbeurd</span>
        </div>
        <span class="price">€15</span>
        <ul class="features">
            <li>Knippen, drogen</li>
        </ul>
        <?php
        if (isset($_SESSION['username'])){
            ?>
            <button>Reserveer!</button>
            <?php
        }
        ?>
    </div>
</div>