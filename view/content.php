<h1>List of locations</h1>
<table>
    <tr><th>City</th><th>ZIP</th><th>Address</th></tr>
<?php foreach ($locations as $location): ?>
    <tr>
    <td><?php echo $location['city'] ?></td>
    <td><?php echo $location['zip_code'] ?></td>
    <td><?php echo $location['addr'] ?></td>
    </tr>
<?php endforeach; ?>
</table>