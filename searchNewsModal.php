<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News Desk - Latest News, Anytime, Anywhere</title>
</head>

<body>
  <!-- Search News Modal Start-->
  <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Search News</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            <input type="text" id="news-search" class="form-control" aria-label="Sizing example input" placeholder="Search topic..." aria-describedby="inputGroup-sizing-default">
            <span class="input-group-text" id="basic-addon2" style="cursor: pointer;">Search</span>
          </div>
          <div id="seached-news">

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Search News Modal End-->
</body>

</html>