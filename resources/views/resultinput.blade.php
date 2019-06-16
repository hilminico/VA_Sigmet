<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../result.scss' "/>

    </head>
    <style>
    body{
      width:100%;
    }
    .input{
      text-align:center;
    }
    .flat-table {
      margin-left:auto;
      margin-right:auto;
      margin-bottom: 20px;
      border-collapse:collapse;
      font-family: 'Lato', Calibri, Arial, sans-serif;
      border: none;
                  border-radius: 3px;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
    }
    .flat-table th, .flat-table td {
      box-shadow: inset 0 -1px rgba(0,0,0,0.25), 
        inset 0 1px rgba(0,0,0,0.25);
    }
    .flat-table th {
      font-weight: normal;
      -webkit-font-smoothing: antialiased;
      padding: 1em;
      color: rgba(0,0,0,0.45);
      text-shadow: 0 0 1px rgba(0,0,0,0.1);
      font-size: 1.5em;
    }
    .flat-table td {
      color: #f7f7f7;
      padding: 0.7em 1em 0.7em 1.15em;
      text-shadow: 0 0 1px rgba(255,255,255,0.1);
      font-size: 1.4em;
    }
    .flat-table tr {
      -webkit-transition: background 0.3s, box-shadow 0.3s;
      -moz-transition: background 0.3s, box-shadow 0.3s;
      transition: background 0.3s, box-shadow 0.3s;
    }
    .flat-table-1 {
      background: #336ca6;
    }
    .flat-table-1 tr:hover {
      background: rgba(0,0,0,0.19);
    }
    .flat-table-2 tr:hover {
      background: rgba(0,0,0,0.1);
    }
    .flat-table-2 {
      background: #f06060;
    }
    .flat-table-3 {
      background: #52be7f;
    }
    .flat-table-3 tr:hover {
      background: rgba(0,0,0,0.1);
    }
  </style>
    <body>
    <div class="input">  </div>
    </br>
    <table class="flat-table flat-table-1">
	<thead>
  @for($i=0;$i < sizeof($data[3]); $i++)
		<th>{{$data[3][$i]}}</th>
    @endfor
	</thead>
	<tbody>
  @for($i=0;$i < sizeof($data[7]); $i++)
		<tr>
			<td>{{ $data[7][$i] }}</td>
		</tr>
    @endfor
	</tbody>
</table>
<table class="flat-table flat-table-2">
	<thead>
		<th>First Name</th>
		<th>Last Name</th>
		<th>City</th>
		<th>Donation</th>
	</thead>
	<tbody>
		<tr>
			<td>John</td>
			<td>Smith</td>
			<td>Seattle</td>
			<td>$12.95</td>
		</tr>
		<tr>
			<td>Eddy</td>
			<td>Johnston</td>
			<td>Palo Alto</td>
			<td>$15</td>
		</tr>
	</tbody>
</table>
<table class="flat-table flat-table-3">
	<thead>
		<th>First Name</th>
		<th>Last Name</th>
		<th>City</th>
		<th>Donation</th>
	</thead>
	<tbody>
		<tr>
			<td>John</td>
			<td>Smith</td>
			<td>Seattle</td>
			<td>$12.95</td>
		</tr>
		<tr>
			<td>Eddy</td>
			<td>Johnston</td>
			<td>Palo Alto</td>
			<td>$15</td>
		</tr>
	</tbody>
</table>
    </body>
</html>


<script>
// CONFIGS
var tableSelector = 'table';
var targetBreakpoint = 500;
var currentVisibleColumn = 1;
var nextButtonText = 'Compare Next';

// SETUP/SELECT REUSABLE ELEMENTS
var table = document.querySelector( tableSelector );
var allCells = table.querySelectorAll('th, td');
var columnHeaders = table.querySelectorAll('thead th:not(:empty)');
var rowHeaders = table.querySelectorAll('tbody th');
var nextButton = document.createElement('button');

function createButtons() {
  nextButton.textContent = nextButtonText;
  nextButton.style.display =  'none';

  table.parentNode.insertBefore(nextButton, table.nextSibling );
  
  nextButton.addEventListener('click', function(){
    currentVisibleColumn = currentVisibleColumn + 1 > columnHeaders.length ? 1 : currentVisibleColumn + 1;
    showCurrentlyVisible();
  });
}

function showCurrentlyVisible() {
    // Get the Items we're going to show. The :not(:empty) query here is because sometimes you have empty <th>s in <thead>
    var currentlyVisibleColHeader = document.querySelector('thead th:not(:empty):nth-of-type( '+ currentVisibleColumn +')');
    var currentlyVisibleCells = document.querySelectorAll('tbody td:nth-of-type(' +currentVisibleColumn+ ')');

    // Hide All The Cells
    for(var i=0;i<allCells.length;i++ ) { 
      allCells[i].style.display = 'none'; 
    }

    // Show Currently Visible Col Header
    currentlyVisibleColHeader.style.display = 'block';

    // Show Currently Visible Cells
    for( var i=0;i<currentlyVisibleCells.length;i++) {
      currentlyVisibleCells[i].style.display = 'block';
    }

    // Show Row Headers
    for( var i=0;i<rowHeaders.length;i++) {
      rowHeaders[i].style.display = 'block';
    }
}

function updateTable() {
  
  // Get the Table's Width. Might as well go FULL Container Query over here.
  var tableWidth = table.getBoundingClientRect().width;
  
  // If the table explodes off the viewport or is wider than the target breakpoint
  if ( tableWidth > window.innerWidth || tableWidth < targetBreakpoint ) {

    if(table.getAttribute('data-comparing') != 'active') {
      // Set the comparison state to "Active"
      table.setAttribute('data-comparing','active');

      // Show Next Button
      nextButton.style.display =  'block';
    
      // Show the currently visible column
      showCurrentlyVisible();

    }

  } else {
    
    if(table.getAttribute('data-comparing') == 'active') {

      // Turn off comparing    
      table.setAttribute('data-comparing','');

      // Hide the next button
      nextButton.style.display =  'none';

      // Remove styles from all cells, ergo, show all the cells
      for( var i=0;i<allCells.length;i++ ) {
        allCells[i].style.display = ''; 
      }

      // Remove styles from all row headers
      for( var i=0;i<rowHeaders.length;i++) {
        rowHeaders[i].style.display = '';
      }
    }
  }
}

createButtons();
updateTable();
window.addEventListener('resize', updateTable);
</script>