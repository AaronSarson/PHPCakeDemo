<h1>
    Find all Players with certain last name:
    <?= $this->Text->toList($players); ?>
</h1>

<Section>
    <table style="width:100%">
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Bats</th>
    </tr>
    <?php
        foreach($masters as $player){

            echo "<tr>";
            echo("<td>");
            echo $player->nameFirst;
            echo "</td>";
            echo("<td>");
            echo $player->nameLast;
            echo "</td>";
            echo("<td>");
            echo $player->bats;
            echo "</td>";
            echo "</tr>";

            

        }
    ?>
    <table>
</Section>
