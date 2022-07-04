<table style="margin-top: 5px;" width="100%" height="135" border="0" cellpadding="2" cellspacing="2" class="news table">
  <thead>
    <tr>
      <th scope="col">Rank</th>
      <th scope="col">Prestige</th>
      <th scope="col">Name</th>
      <th scope="col">Loyalty</th>
    </tr>
  </thead>
  <tbody>
    <?php if (!empty($Crank) && is_array($Crank)) : ?>
      <?php foreach ($Crank as $Crank_item) : ?>
        <?php echo "<tr>";
        echo "<th scope='col'>" . $Crank_item['shIndex'] . "</th>";
        if ($Crank_item['shIndex'] == 1) {
          echo "<th scope='col'><img src='../images/s_0_20_0.gif'</th>";
        } elseif ($Crank_item['shIndex'] <= 4) {
          echo "<th scope='col'><img src='../images/s_0_21_0.gif'</th>";
        } elseif ($Crank_item['shIndex'] <= 9) {
          echo "<th scope='col'><img src='../images/s_0_22_0.gif'</th>";
        } elseif ($Crank_item['shIndex'] <= 25) {
          echo "<th scope='col'><img src='../images/s_0_23_0.gif'</th>";
        } elseif ($Crank_item['shIndex'] <= 50) {
          echo "<th scope='col'><img src='../images/s_0_24_0.gif'</th>";
        } elseif ($Crank_item['shIndex'] <= 100) {
          echo "<th scope='col'><img src='../images/s_0_25_0.gif'</th>";
        }
        echo "<th scope='col'>" . $Crank_item['strElmoUserID'] . "</th>";
        echo "<th scope='col'>" . $Crank_item['nElmoLoyalty'] . "</th>";
        echo "</tr>"; ?>
      <?php endforeach ?>
    <?php else : ?>
    <?php endif ?>
  </tbody>
</table>