<?php
    session_start();
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tournament List</title>
    <link rel="stylesheet" href="tournament_list.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <body>
    <div class="body">
      <div class="header">
        <div class="user_dash">
          <h1>TOURNMENT SECTION</h1>
        </div>
        <div class="nav">
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li>Welcome </li><?php echo $username; ?>
            <li>
              <a href="logout.php"><i class="fas fa-power-off"></i></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="body-lay">
        <div class="body-lay-content">
          <div class="body-lay-header">
            <h4>TOURNAMENT LIST</h4>
          </div>
          <div class="body-lay-table">
            <div class="body-lay-table-header">
              <div class="selections">
                <span>Show</span>
                <select name="entries" id="entries">
                  <option value="one">10</option>
                  <option value="one">1</option>
                  <option value="two">2</option>
                  <option value="three">3</option>
                  <option value="four">4</option>
                  <option value="five">5</option>
                  <option value="five">6</option>
                  <option value="five">7</option>
                  <option value="five">8</option>
                  <option value="five">9</option>
                  <option value="five">10</option>
                </select>
                <span>entries</span>
              </div>

              <div class="search-input">
                <label for="search">Search: </label>
                <input type="text" />
              </div>
            </div>
            <div class="table-lay">
              <table class="table">
                <thead>
                  <td>ID</td>
                  <td>Teams</td>
                  <td>Title</td>
                  <td>N.Teams</td>
                  <td>Participants</td>
                  <td>Free Teams</td>
                  <td>Competition start date</td>
                  <td>Competition End Date</td>
                  <td>Transfer Type</td>
                  <td>Start Date Transfer</td>
                  <td>End Date Transfer</td>
                  <td></td>
                </thead>

                <tbody>
                  <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>
                      <h4 class="full-note">FULL</h4>
                    </td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>
                      <button class="info-btn">INFO</button>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>
                      <button class="info-btn">INFO</button>
                      <button class="sub-btn">SUBSCRIBE</button>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>
                      <button class="info-btn">INFO</button>
                      <button class="sub-btn">SUBSCRIBE</button>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>
                      <button class="info-btn">INFO</button>
                      <button class="sub-btn">SUBSCRIBE</button>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>
                      <button class="info-btn">INFO</button>
                      <button class="sub-btn">SUBSCRIBE</button>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>
                      <button class="info-btn">INFO</button>
                      <button class="sub-btn">SUBSCRIBE</button>
                    </td>
                  </tr>
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
  </body>
</html>
