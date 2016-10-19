    <h1 class="text-center"><?php echo $title;?></h1>
    <table class="table table-striped table-hover table-bordered">
    <thead>
        <tr class="success">
        <th>No</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($person as $key => $value){?>
      <tr>
        <td><?=$key+1?></td>
        <td><?=$value['fname']?></td>
        <td><?=$value['lname']?></td>
        <td><?=$value['email']?></td>
      </tr>
        <?php }?>
    </tbody>
  </table>