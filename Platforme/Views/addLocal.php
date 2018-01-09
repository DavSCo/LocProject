<?php require_once ("Layout.php");?>


<header class="masthead">
    <div class="container h-100">
        <div class="login-page">
            <div class="form">
                <form class="ui form" method="post">
                    <h4 class="ui dividing header">Add Local</h4>
                    <div class="field">
                        <label>Name</label>
                        <div class="twelve wide field">
                            <div class="field">
                                <input type="text" name="name" placeholder="Name">
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Address</label>
                        <div class="fields">
                            <div class="twelve wide field">
                                <input type="text" name="address" placeholder="Street Address">
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Area</label>
                        <div class="fields">
                            <div class="twelve wide field">
                                <input type="number" name="area" placeholder="Area">
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Price</label>
                        <div class="fields">
                            <div class="twelve wide field">
                                <input type="number" name="price" placeholder="Price /Month">
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Time</label>
                        <div class="fields">
                            <div class="twelve wide field">
                                <input type="number" name="time" placeholder="Time of Rent">
                            </div>
                        </div>
                    </div>
                    <h4 class="ui dividing header">Information</h4>
                    <div class="field">
                        <label>Description</label>
                        <div class="field">
                            <textarea name="description"></textarea>
                        </div>
                    </div>
                    <div class="field">
                        <label>Upload Local</label>
                        <div class="field">
                            <input type="file" name="photo" >
                        </div>
                    </div>


                    <button type="submit" class="ui button">Add Local</button>

                </form>
            </div>
        </div>
    </div>

</header>


