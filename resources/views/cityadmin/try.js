// function loadData() {
//   fetch("/data")
//     .then((response) => response.json())
//     .then((data) => {
//       const tableBody = document.querySelector("#data-table tbody");
//       tableBody.innerHTML = "";

//       data.forEach((item) => {
//         const row = document.createElement("tr");
//         row.innerHTML = `
//                     <td>${item.diagnos}</td>
//                     <td>${item.address1}</td>
//                     <td>${item.gender}</td>
//                 `;
//         tableBody.appendChild(row);
//       });
//     });
// }

// loadData();

// let tableBody = document.querySelector("#data-table tbody");

// fetch("/diagnos")
//   .then((response) => response.json())
//   .then((diagnos) => {
//     diagnos.forEach((item) => {
//       let row = document.createElement("tr");
//       row.innerHTML = `
//                 <td>${item.diagnos}</td>
//                 <td>${item.address1}</td>
//                 <td>${item.gender}</td>
//             `;
//       tableBody.appendChild(row);
//     });
//   });

function fetchData() {
  $.ajax({
    url: "/data",
    method: "GET",
    success: function(data) {
      // Display the data in an HTML table
      var table = "<table>";
      table += "<thead>";
      table += "<tr><th>Name</th><th>Email</th><th>Product Name</th></tr>";
      table += "</thead>";
      table += "<tbody>";

      for (var i = 0; i < data.length; i++) {
        table += "<tr>";
        table += "<td>" + data[i].diagnos + "</td>";
        table += "<td>" + data[i].address1 + "</td>";
        table += "<td>" + data[i].gender + "</td>";
        table += "</tr>";
      }

      table += "</tbody>";
      table += "</table>";

      // Display the table on the page
      $("#table-container").html(table);
    },
  });
}
