<?php
include_once('../backend/config/config.php');

if (isset($_POST['selected_entries'])) {
  $selectedEntries = $_POST['selected_entries'];
  $sql = "SELECT * FROM tournaments LIMIT $selectedEntries";
} else {
  $sql = "SELECT * FROM tournaments";
}

$result = $conn->query($sql);

$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['subscribe']) && isset($_POST['row_id'])) {
    $rowId = $_POST['row_id'];

    $selectedRow = null;
    foreach ($data as $row) {
        if ($row['id'] == $rowId) {
            $selectedRow = $row;
            break;
        }
    }

    if ($selectedRow) {
        $insertQuery = "INSERT INTO my_tournaments (teams, title, n_teams, comp_startdate, comp_enddate, transfer_type, transfer_startdate, transfer_enddate) 
                        VALUES (
                          '".$selectedRow['teams']."',
                          '".$selectedRow['title']."',
                          '".$selectedRow['n_teams']."',
                          
                          '".$selectedRow['comp_startdate']."',
                          '".$selectedRow['comp_enddate']."',
                          '".$selectedRow['transfer_type']."',
                          '".$selectedRow['transfer_startdate']."',
                          '".$selectedRow['transfer_enddate']."'
                        )";

        if ($conn->query($insertQuery) === TRUE) {
            // echo "Data saved successfully.";
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tournament List</title>
  <link rel="stylesheet" href="tournament_list.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body>
  <div class="body">
    <div class="header">
      <div class="user_dash">
        <h1>TOURNAMENT SECTION</h1>
      </div>
      <?php include_once '../header/header.php'; ?>
    </div>

    <div class="body-lay">
      <div class="body-lay-content">
        <div class="body-lay-header">
          <h4>TOURNAMENT LIST</h4>
        </div>
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
                <tr>
                  <th>ID</th>
                  <th>Teams</th>
                  <th>Title</th>
                  <th>N.Teams</th>
                  <th>Participants</th>
                  <th>Free Teams</th>
                  <th>Competition start date</th>
                  <th>Competition End Date</th>
                  <th>Transfer Type</th>
                  <th>Start Date Transfer</th>
                  <th>End Date Transfer</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data as $row): ?>
                  <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['teams']; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['n_teams']; ?></td>
                    <td><?php echo $row['participants']; ?></td>
                    <td><?php echo $row['free_teams']; ?></td>
                    <td><?php echo $row['comp_startdate']; ?></td>
                    <td><?php echo $row['comp_enddate']; ?></td>
                    <td><?php echo $row['transfer_type']; ?></td>
                    <td><?php echo $row['transfer_startdate']; ?></td>
                    <td><?php echo $row['transfer_enddate']; ?></td>
                    <td>
                      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <input type="hidden" name="row_id" value="<?php echo $row['id']; ?>">
                        <button style="margin-right: 4px;" class='info-btn' name='info'><a style='text-decoration: none; color: white;' href='../backend/subscribe/subscribe.php'>INFO</a></button>
                        <button type="submit" class="sub-btn" name="subscribe">SUBSCRIBE</button>
                      </form>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
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







</body>
</html>
