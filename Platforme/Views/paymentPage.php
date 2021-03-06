<?php require_once ("Views/Layout.php") ?>

<link rel="stylesheet" href="Views/css/rentCss.css">

<div class="container">
    <div class="col1">
        <div class="card">
            <div class="front">
                <div class="type">
                    <img class="bankid" />
                </div>
                <span class="chip"></span>
                <span class="card_number">&#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; </span>
                <div class="date"><span class="date_value">MM / YYYY</span></div>
                <span class="fullname">FULL NAME</span>
            </div>
            <div class="back">
                <div class="magnetic"></div>
                <div class="bar"></div>
                <span class="seccode">&#x25CF;&#x25CF;&#x25CF;</span>
                <span class="chip"></span><span class="disclaimer">This card is property of Random Bank of Random corporation. <br> If found please return to Random Bank of Random corporation - 21968 Paris, Verdi Street, 34 </span>
            </div>
        </div>
    </div>
    <form method="post" action="index.php?p=paymentLocal&id=<?=$_SESSION['id']?>&local=<?=$selectWithId['id']?>">
        <div class="col2">
            <label>Card Number</label>
            <input class="number" type="text" name="number" ng-model="ncard" maxlength="19" onkeypress='return event.charCode >= 48 && event.charCode <= 57' />
            <label>Cardholder name</label>
            <input class="inputname" type="text" placeholder="" />
            <label>Expiry date</label>
            <input class="expire" type="text" placeholder="MM / YYYY" />
            <label>Security Number</label>
            <input class="ccv" type="text" placeholder="CVC" maxlength="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' />
            <button class="buy" type="submit">Pay <?php echo $selectWithId['price']?></button></a>
        </div>
    </form>
</div>

<!-- Bootstrap core JavaScript -->
<script src="Views/vendor/jquery/jquery.min.js"></script>
<script src="Views/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="Views/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="Views/js/payment.js"></script>

</body>

</html>
