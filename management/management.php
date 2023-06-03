<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tournament Management</title>
    <link rel="stylesheet" href="management.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <body>
    <div class="body">
      <div class="header">
        <div class="user_dash">
          <h1>TOURNMENT MANAGEMENT</h1>
        </div>
        <?php include_once '../header/header.php'; ?>
      </div>

      <div class="body-lay">
        <div class="body-lay-content">
          <div class="body-lay-table">
            <div class="body-lay-table-header">
            <div class="selections">
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="entriesForm">
                <span>Show</span>
                <select name="selected_entries" id="entries">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="15">15</option>
                  <option value="20">20</option>
                  <option value="30">30</option>
                  <option value="40">40</option>
                  <option value="50">50</option>
                </select>
                <input type="hidden" value="show entries">
                <span>entries</span>
              </form>
            </div>

              <div class="search-input">
                <label for="search">Search: </label>
                <input id="searchInput" name="search" type="text" />
              </div>
            </div>
            <div class="table-lay">
              <table id="dataTable" class="table">
                <thead>
                  <td>ID</td>
                  <td>Teams</td>
                  <td>Title</td>
                  <td>N.Teams</td>
                  <td>Status</td>
                  <td>Competition start date</td>
                  <td>Competition End Date</td>
                  <td>Transfer Type</td>
                  <td>Resale and Exchange</td>
                  <td>Start Date Transfer</td>
                  <td>End Date Transfer</td>
                  <td></td>
                </thead>
                <?php
                  include_once('../backend/config/config.php');
                  
                  if (isset($_POST['selected_entries'])) {
                    $selectedEntries = $_POST['selected_entries'];
                    $sql = "SELECT * FROM my_tournaments LIMIT $selectedEntries";
                  } else {
                    $sql = "SELECT * FROM my_tournaments";
                  }

                  $query = $conn->query($sql);
                  while($row = $query->fetch_assoc()){
                    echo 
                    "<tr>
                      <td>".$row['id']."</td>
                      <td>".$row['teams']."</td>
                      <td>".$row['title']."</td>
                      <td>".$row['n_teams']."</td>
                      <td>".$row['status']."</td>
                      <td>".$row['comp_startdate']."</td>
                      <td>".$row['comp_enddate']."</td>
                      <td>".$row['transfer_type']."</td>
                      <td>".$row['resale_exchange']."</td>
                      <td>".$row['transfer_startdate']."</td>
                      <td>".$row['transfer_enddate']."</td>
                      <td>
                        <button class='info-btn'>INFO</button>
                        <button class='sub-btn'><a style='text-decoration: none; color: white;' href='./chooseTeam/chooseTeam.php'>MANAGE</a></button>
                        
                      </td>
                    </tr>";
                  }
						    ?>
              </table>
            </div>
            <div class="table-footer">
              <h4>Showing 1 to 2 out of 2 entries</h4>
              <div class="pagination-lay">
                <span>Previous</span>
                <button class="btn">1</button>
                <span>Next</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<script>
    function searchTable() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("dataTable");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];

      if (td) {
        txtValue = td.textContent || td.innerText;

        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }
  document.getElementById("searchInput").addEventListener("input", searchTable);
</script>
<script>
  document.getElementById('entries').addEventListener('change', function() {
    document.getElementById('entriesForm').submit();
  });
</script>
  </body>
</html>
