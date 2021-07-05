<h3 class="ml-lg-3 mt-4 col-12">All Categories Stats</h3>
                    <div class="table-responsive col-12">
                    <table class="table table-hover mt-4 mx-auto" style="width: 910px">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">S/n</th>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Sub Category</th>
                            <th scope="col">Votes</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          while ($row = $new_get->fetch_array()){
                            $id = $row['id'];
                            $name = $row['name'];
                            $category = $row['category'];
                            $sub_category = $row['sub_category'];
                            $votes = $row['votes'];
                          ?>
                          <tr>
                            <th scope="row"><?php echo $id?></th>
                            <td><?php echo $name?></td>
                            <td><?php echo $category?></td>
                            <td><?php echo $sub_category?></td>
                            <td><?php echo $votes?></td>
                          </tr>
                          <?php
                          }
                          ?>
                          
                        </tbody>
                      </table>
                    </div>