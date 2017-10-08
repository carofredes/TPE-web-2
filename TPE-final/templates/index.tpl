{include file="header.tpl"}
{include file="navbar.tpl"}
  <body>  
    <div class="container" id="container">
      <div class="col-md-4 well">
        <div class="thumbnail">
                <img class="categorie-img" src="img/wallpaper.jpg" alt="wallpapers">
                <div class="caption">
                  <p><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Wallpapers </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 well">
          <div class="thumbnail">
                  <img class="categorie-img" src="img/theme.jpg" alt="themes">
                  <div class="caption">
                      <p><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Themes </p>
                  </div>
              </div>
        </div>
        <div class="col-md-4 well">
          <div class="thumbnail">
                  <img class="categorie-img" src="img/music.jpg" alt="ringtones">
                  <div class="caption">
                      <p><span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span> Ringtones </p>
                  </div>
              </div>
        </div>
      </div>
    <div>
    <table>
      <thead>
        <tr>
          <th>Ranking</th>
          <th>Title</th>
          <th>Section</th>
          <th>Times Downloaded</th>
          </tr>
      </thead>
      <tbody id="dataTable">
      </tbody>
    </table>
  </div>

  <div class="input-table">
    <h3 class="title-form">Input some data</h3>
    <form>
      <div>
        <label for="ranking">Ranking: </label>
        <input type="text" id="ranking" value="1º" name="ranking">
      </div>
      <div>
        <label for="name">Name:</label>
        <input type="text" id="title" value="Jake Dancing with a bug" name="name">
      </div>
      <div>
        <label for="section">Section:</label> 
        <input type="text" id="section" value="wallpaper" name="section">
      </div>
      <div>
        <label for="times">Times Downloaded:</label> 
        <input type="text" id="timesDownloaded" value="15" name="times">
      </div>
      <button id="sendData">Send data</button>
      <button id="sendData3Times">Send 3 Times</button>
    </form>
  </div>
    </div>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/index.js"></script>
  </body>
  </html>

{include file="footer.tpl"}