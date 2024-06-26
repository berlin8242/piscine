<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<input type="text" id="searchInput" onkeyup="filterTable()" placeholder="Search for names..">
  <table id="dataTable">
      <thead>
          <tr>
              <th onclick="sortTable(0)">Name</th>
              <th onclick="sortTable(1)">Age</th>
              <th onclick="sortTable(2)">Country</th>
          </tr>
      </thead>
      <tbody>
          <!-- Rows will be populated by PHP -->
          <?php
          $data = [
              ["Johan ", 42, "France"],
              ["Jane Doe", 24, "UK"],
              ["Jim Brown", 32, "Canada"],
              ["Jake White", 27, "Australia"]
          ];
          foreach ($data as $row) {
              echo "<tr>";
              foreach ($row as $cell) {
                  echo "<td>$cell</td>";
              }
              echo "</tr>";
          }
          ?>
      </tbody>
  </table>
  <script>
      function sortTable(n) {
          var table,

 rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
          table = document.getElementById("dataTable");
          switching = true;
          dir = "asc"; 
          while (switching) {
              switching = false;
              rows = table.rows;
              for (i = 1; i < (rows.length - 1); i++) {
                  shouldSwitch = false;
                  x = rows[i].getElementsByTagName("TD")[n];
                  y = rows[i + 1].getElementsByTagName("TD")[n];
                  if (dir == "asc") {
                      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                          shouldSwitch = true;
                          break;
                      }
                  } else if (dir == "desc") {
                      if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                          shouldSwitch = true;
                          break;
                      }
                  }
              }
              if (shouldSwitch) {
                  rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                  switching = true;
                  switchcount ++;      
              } else {
                  if (switchcount == 0 && dir == "asc") {
                      dir = "desc";
                      switching = true;
                  }
              }
          }
      }
      function filterTable() {
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("searchInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("dataTable");
          tr = table.getElementsByTagName("tr");
          for (i = 1; i < tr.length; i++) {
              tr[i].style.display = "none";
              td = tr[i].getElementsByTagName("td");
              for (var j = 0; j < td.length; j++) {
                  if (td[j]) {
                      txtValue = td[j].textContent || td[j].innerText;
                      if (txtValue.toUpperCase().indexOf(filter) > -1) {
                          tr[i].style.display = "";
                          break;
                      }
                  }
              }
          }
      }
  </script>
</body>
</html>
