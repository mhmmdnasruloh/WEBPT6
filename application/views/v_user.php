<section>
    <h1><?echo $judul ?>USER </h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>pekerjaan</th>
        </tr>
        <?php foreach ($user as $u){
        ?>
  
        <tr>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->alamat?></td>
            <td><?php echo $u->pekerjaan ?></td>
        </tr>
        <?php }?>
    </table>
</section>