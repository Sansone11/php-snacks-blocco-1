<!-- snack 1 -->
<?php
$partita = [
  'home' => 'Heat',
  'guest' => 'Bulls',
  'homeScore' => 50,
  'guestScore' => 70,
];

$partite = [
  $partita, [
    'home' => 'Cavaliers',
    'guest' => 'Celtics',
    'homeScore' => 20,
    'guestScore' => 85,
  ],
  [
    'home' => 'raptors',
    'guest' => 'Sixters',
    'homeScore' => 50,
    'guestScore' => 150,
  ],
  [
    'home' => 'Dragons',
    'guest' => 'Minionns',
    'homeScore' => 830,
    'guestScore' => 570,
  ]
];
?>
<ul>
  <?php
  for ($i = 0; $i < count($partite); $i++) {
    $match = $partite[$i]
  ?>
    <li>
      <?php
      echo "{$match['home']}-{$match['guest']}";
      ?>
      /
      <span>
        <?php
        echo "{$match['homeScore']}-{$match['guestScore']}";
        ?>
      </span>
    </li>
  <?php
  }
  ?>
</ul>