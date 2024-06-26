<div class="container">
    <h2>You are in the View: application/view/home/index.php (everything in this box comes from that file)</h2>
    <!-- add accomodation form -->
    <div class="box">
        <h3>Ajouter un Logement</h3>
        <form action="<?php echo URL; ?>housings/addhouse" method="POST">
           
            <label for="superficie">Supérficie</label>
            <input type="text" class="form-control" id="surafce" name="surface"  placeholder="supérficie" required>
            <label for="adress">Adresse</label>
            <input type="text" class="form-control" id="address" name="address"  placeholder="adresse" required>   
            <label for="city_name">Ville</label>
            <input type="text" class="form-control" id="city_name" name="city_name"  placeholder="ville" required>   
            <label for="city_zipcode">Code postale</label>
            <input type="text" class="form-control" id="city_zipcode" name="city_zipcode"  placeholder="code postale" required>   
            <input type="submit" name="submit_add_house" value="Submit" />
        </form>
    </div>

    <div class="box">
        <h3>Ajouter un Résident</h3>
        <form action="<?php echo URL; ?>/addresident" method="POST">
            <label>Artist</label>
            <input type="text" name="artist" value="" required />
            <label>Track</label>
            <input type="text" name="track" value="" required />
            <label>Link</label>
            <input type="text" name="link" value="" />
            <input type="submit" name="submit_add_song" value="Submit" />
        </form>
    </div>
    <!-- main content output -->
    <div class="box">
        <h3>Amount of songs (data from second model)</h3>
        <div>
            <?php //echo $amount_of_songs; ?>
        </div>
        <h3>Amount of songs (via AJAX)</h3>
        <div>
            <button id="javascript-ajax-button">Click here to get the amount of songs via Ajax (will be displayed in #javascript-ajax-result-box)</button>
            <div id="javascript-ajax-result-box"></div>
        </div>
        <h3>List of songs (data from first model)</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Supérficie</td>
                <td>Adresse</td>
                <td>Ville</td>
                <td>Code postale</td>
                <td>DELETE</td>
                <td>EDITx</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($housings as $house) { ?>
                
                <tr>
                    <td><?php if (isset($house->id)) echo htmlspecialchars($house->id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($house->surface)) echo htmlspecialchars($house->surface, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($house->address)) echo htmlspecialchars($house->address, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($house->city_name)) echo htmlspecialchars($house->city_name, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($house->city_zipcode)) echo htmlspecialchars($house->city_zipcode, ENT_QUOTES, 'UTF-8'); ?></td>
                  
                   
                    <td><a href="<?php echo URL . 'housings/deletehouse/' . htmlspecialchars($house->id, ENT_QUOTES, 'UTF-8'); ?>">delete</a></td>
                    <td><a href="<?php echo URL . 'housings/edithouse' . htmlspecialchars($house->id, ENT_QUOTES, 'UTF-8'); ?>">edit</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
