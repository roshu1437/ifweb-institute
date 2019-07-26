<div class="row">
  <div class="col s12">
    <ul class="tabs">
      <li class="tab col s3">
        <a class="active" href="#pending">Pending User</a>
      </li>
      <li class="tab col s3">
        <a href="#active_user">Active User</a>
      </li>
    </ul>
  </div>
  <div id="pending" class="col s12">
    <h4 class="center-align">Pending User Status</h4>
    <table>
      <thead>
        <tr>
          <th>First Name</th>
          <th>last Name</th>
          <th>Email</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          foreach ($users as $user) {
            if($user['active']==0){ ?>
              <tr>
                <td><?=$user['first_name']?></td>
                <td><?=$user['last_name']?></td>
                <td><?=$user['user_email']?></td>
                <td>pending</td>
                <td>
                  <a href="<?=base_url('admin/user')?>?ac=<?=$user['id']?>">active</a>
                </td>
              </tr>
      <?php }
        } ?>
      </tbody>
    </table>
  </div>
  <div id="active_user" class="col s12">
    <h4 class="center-align">Active User Status</h4>
    <table>
      <thead>
        <tr>
          <th>First Name</th>
          <th>last Name</th>
          <th>Email</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          foreach ($users as $user) {
            if($user['active']==1){ ?>
              <tr>
                <td><?=$user['first_name']?></td>
                <td><?=$user['last_name']?></td>
                <td><?=$user['user_email']?></td>
                <td>Active</td>
                <td>
                  <a href="<?=base_url('admin/user')?>?dac=<?=$user['id']?>">Deactive</a></td>
              </tr>
      <?php }
        } ?>
      </tbody>
    </table>
  </div>
</div>