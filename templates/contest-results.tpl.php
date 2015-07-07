<div id="contest-results">

<?php if (!empty($data->winners)): ?>
  <table border="0" cellspacing="0" class="contest-page-winners">
    <caption><?php print (count($data->winners) == 1)? t('Contest Winner'): t('Contest Winners'); ?></caption>
    <thead>
      <tr>
        <th><?php print t('Place'); ?></th>
        <th><?php print t('Winner'); ?></th>
      </tr>    
    </thead>
    <tbody>
      
    <?php $index = 0; ?>  
    <?php foreach ($data->winners as $place => $usr): ?>
      <?php $index++; ?>
      <tr class="<?php print ($index % 2)? 'odd': 'even'; ?>">
        <td><?php print $place; ?>.</td>
        <td><?php print !empty($usr->state)? "$usr->full_name of $usr->state": $usr->full_name; ?></td>
      </tr>
    <?php endforeach; ?>
      
    </tbody>
  </table>      
<?php endif; ?>

</div>
