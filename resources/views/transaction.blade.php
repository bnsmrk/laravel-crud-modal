<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title> Modal </title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
      <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
      <link rel="stylesheet" href="{{ url('css/custom.css') }}" />
   </head>
   <body class="generalbg">
      <!-- Modal -->
      @if (session('success'))
      <div class="alert alert-success">
         {{ session('success') }}
      </div>
      @endif
      <div class="modal fade" id="addcourt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
         <div class="modal-dialog" role="document" style="max-width: 90% !important;">
            <div class="modal-content">
               <div class="modal-header sideback text-light">
                  <h5 class="modal-title" id="exampleModalLabel">Add Case Data </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <form action="{{ route('transactions.store') }}" method="POST">
                  @csrf
                  <div class="modal-body">
                     <div class="form-group">
                        <div class="row mb-3">
                           <div class="col-md-3">
                              <label class="form-label">Item No.:</label>
                              <input type="text" class="form-control" name="itemnumber" id="itemnumber" placeholder="Item Number" required>
                           </div>
                           <div class="col-md-3">
                              <label>Control No.:</label>
                              <input type="text" class="form-control" name="controlnumber" id="controlnumber" placeholder="Control Number" required>
                           </div>
                           <div class="col-md-3">
                              <label class="form-label">Party Represented:</label>
                              <select id="partyrepresented" name="partyrepresented" class="form-control" required>
                                 <option disabled selected>Party Represented</option>
                                 <option value="accused">Accused</option>
                                 <option value="respondents">Respondents</option>
                                 <option value="defendants">Defendants</option>
                                 <option value="petitioner">Petitioner</option>
                                 <option value="plaintiff">Plaintiff</option>
                              </select>
                           </div>
                           <div class="col-md-3">
                              <label for="gender" class="form-label">Gender:</label>
                              <select id="gender" name="gender" class="form-control" required>
                                 <option disabled selected>Gender</option>
                                 <option value="Male">Male</option>
                                 <option value="Female">Female</option>
                              </select>
                           </div>
                        </div>
                        <div class="row mb-3">
                           <div class="col-md-3">
                              <label class="form-label">Title of Case:</label>
                              <input type="text" class="form-control" name="casetitle" id="casetitle" placeholder="Title of Case" required>
                           </div>
                           <div class="col-md-3">
                              <label class="form-label">Court/Body:</label>
                              <select id="court" name="court" class="form-control" required>
                                 <option disabled selected>Select Court</option>
                                 <option value="RTC 34">RTC 34</option>
                                 <option value="RTC 4">RTC 4</option>
                                 <option value="RTC 3">RTC 3</option>
                                 <option value="MTCC">MTCC</option>
                                 <option value="MCTC-CARMEN">MCTC-CARMEN</option>
                                 <option value="MCTC STO. TOMAS">MCTC STO. TOMAS</option>
                              </select>
                           </div>
                           <div class="col-md-3">
                              <label class="form-label">Case Type:</label>
                              <select id="casetype" name="casetype" class="form-control" required>
                                 <option disabled selected>Type of Case</option>
                                 <option value="Criminal">Criminal</option>
                                 <option value="Administrative">Administrative</option>
                                 <option value="Civil">Civil</option>
                                 <option value="Appealed">Appealed</option>
                                 <option value="Labor">Labor</option>
                              </select>
                           </div>
                           <div class="col-md-3">
                              <label class="form-label">Case No.:</label>
                              <input type="text" class="form-control" name="casenumber" id="casenumber" placeholder="Case Number" required>
                           </div>
                        </div>
                        <div class="row mb-3">
                           <div class="col-md-3">
                              <label class="form-label">Last Action Taken:</label>
                              <input type="text" class="form-control" name="lastactiontaken" id="lastactiontaken" placeholder="Last Action Taken" required>
                           </div>
                           <div class="col-md-3">
                              <label for="acasestatus" class="form-label">Status of Case:</label>
                              <select id="casestatus" name="casestatus" class="form-control" required>
                                 <option value="Pending">Pending</option>
                                 <option value="Applied to Probation">Applied to Probation</option>
                                 <option value="Terminated">Terminated</option>
                              </select>
                           </div>
                           <div class="col-md-3">
                              <label class="form-label">Case received:</label>
                              <input type="date" class="form-control" name="startdate" id="startdate" required>
                           </div>
                           <div class="col-md-3">
                              <label class="form-label">Date of Termination:</label>
                              <input type="date" class="form-control" name="casedate" id="casedate" placeholder="Date of Termination" required>
                           </div>
                        </div>
                        <div class="row mb-3">
                           <div class="col-md-6">
                              <label class="form-label">Cause of Action:</label>
                              <textarea type="text" class="form-control" name="causeofaction" id="causeofaction" placeholder="Cause of Action" required></textarea>
                           </div>
                           <div class="col-md-6">
                              <label class="form-label">Cause of Termination:</label>
                              <textarea type="text" class="form-control" name="causeoftermination" id="causeoftermination" placeholder="Cause of Termination" required></textarea>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary radiusb shadowbottom" data-dismiss="modal">Close</button>
                     <button type="submit" name="submit" class="btn btn-success sideback radiusb shadowbottom">Add Data</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
      <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
         <div class="modal-dialog" role="document" style="max-width: 90% !important;">
            <div class="modal-content">
               <div class="modal-header editbg text-light">
                  <h5 class="modal-title" id="exampleModalLabel"> Edit Case Data </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <form action="" method="POST" id="editForm">
                  @csrf
                  @method('PUT')
                  <div class="modal-body">
                     <input type="hidden" name="update_id" id="update_id" >
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <div class="form-group">
                        <div class="row mb-3">
                           <div class="col-md-3">
                              <label class="form-label">Item No.:</label>
                              <input type="text" class="form-control" name="uitemnumber" id="uitemnumber"
                                 placeholder="Item Number">
                           </div>
                           <div class="col-md-3">
                              <label>Control No.:</label>
                              <input type="text" class="form-control" name="ucontrolnumber" id="ucontrolnumber"
                                 placeholder="Control Number">
                           </div>
                           <div class="col-md-3">
                              <label class="form-label">Party Represented:</label>
                              <input type="text" class="form-control" name="upartyrepresented"
                                 id="upartyrepresented" placeholder="Party Represented">
                           </div>
                           <div class="col-md-3">
                              <label for="gender" class="form-label">Gender:</label>
                              <select id="ugender" name="ugender" class="form-control">
                                 <option value="Male">Male</option>
                                 <option value="Female">Female</option>
                              </select>
                           </div>
                        </div>
                        <div class="row mb-3">
                           <div class="col-md-3">
                              <label class="form-label">Title of Case:</label>
                              <input type="text" class="form-control" name="ucasetitle" id="ucasetitle"
                                 placeholder="Title of Case">
                           </div>
                           <div class="col-md-3">
                              <label class="form-label">Court/Body:</label>
                              <select id="ucourt" name="ucourt" class="form-control">
                                 <option disabled selected>Select Court</option>
                                 <option value="RTC 34">RTC 34</option>
                                 <option value="RTC 4">RTC 4</option>
                                 <option value="RTC 3">RTC 3</option>
                                 <option value="MTCC">MTCC</option>
                                 <option value="MCTC-CARMEN">MCTC-CARMEN</option>
                                 <option value="MCTC STO. TOMAS">MCTC STO. TOMAS</option>
                              </select>
                           </div>
                           <div class="col-md-3">
                              <label class="form-label">Case Type:</label>
                              <select id="ucasetype" name="ucasetype" class="form-control">
                                 <option disabled selected>Type of Case</option>
                                 <option value="Criminal">Criminal</option>
                                 <option value="Administrative">Administrative</option>
                                 <option value="Civil">Civil</option>
                                 <option value="Appealed">Appealed</option>
                                 <option value="Labor">Labor</option>
                              </select>
                           </div>
                           <div class="col-md-3">
                              <label class="form-label">Case No.:</label>
                              <input type="text" class="form-control" name="ucasenumber" id="ucasenumber"
                                 placeholder="Case Number">
                           </div>
                        </div>
                        <div class="row mb-3">
                           <div class="col-md-3">
                              <label class="form-label">Last Action Taken:</label>
                              <input type="text" class="form-control" name="ulastactiontaken"
                                 id="ulastactiontaken" placeholder="Last Action Taken">
                           </div>
                           <div class="col-md-3">
                              <label for="ucasestatus" class="form-label">Status of Case:</label>
                              <select id="ucasestatus" name="ucasestatus" class="form-control">
                                 <option value="Pending">Pending</option>
                                 <option value="Applied to Probation">Applied to Probation</option>
                                 <option value="Terminated">Terminated</option>
                              </select>
                           </div>
                           <div class="col-md-3">
                              <label class="form-label">Date Start:</label>
                              <input type="date" class="form-control" name="ustartdate" id="ustartdate">
                           </div>
                           <div class="col-md-3">
                              <label class="form-label">Date of Termination:</label>
                              <input type="date" class="form-control" name="ucasedate" id="ucasedate"
                                 placeholder="Date of Termination">
                           </div>
                        </div>
                        <div class="row mb-3">
                           <div class="col-md-6">
                              <label class="form-label">Cause of Action:</label>
                              <textarea type="text" class="form-control" name="ucauseofaction" id="ucauseofaction"
                                 placeholder="Cause of Action"></textarea>
                           </div>
                           <div class="col-md-6">
                              <label class="form-label">Cause of Termination:</label>
                              <textarea type="text" class="form-control" name="ucauseoftermination"
                                 id="ucauseoftermination" placeholder="Cause of Termination"></textarea>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary radiusb shadowbottom" data-dismiss="modal">Close</button>
                     <button type="submit" name="updatedata" class="btn editbg text-white radiusb shadowbottom">Update Data</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
      <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
         @csrf
         @method('DELETE')
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header deletebg text-light">
                  <h5 class="modal-title" id="exampleModalLabel"> Delete Case Data </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <form action="" method="POST">
                  <div class="modal-body">
                     <input type="hidden" name="delete_id" id="delete_id">
                     <input type="hidden" name="case_type" id="case_type">
                     <h4> Do you want to delete this Data?</h4>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary radiusb shadowbottom" data-dismiss="modal"> NO </button>
                     <button type="submit" name="deletedata" class="btn btn-danger deletebtnbg radiusb shadowbottom" > Yes !! Delete it.
                     </button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- VIEW POP UP FORM (Bootstrap MODAL) -->
      <div class="modal fade" id="viewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header viewbg text-light">
                  <h5 class="modal-title" id="exampleModalLabel"> View Case Data </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <form action="" method="POST">
                  <div class="modal-body">
                     <input type="hidden" name="view_id" id="view_id">
                     <div class="row">
                        <div class="col-md-6">
                           <label>Item No.:</label>
                        </div>
                        <div class="col-md-6">
                           <label id="vitemnumber"></label>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <label>Control No.:</label>
                        </div>
                        <div class="col-md-6">
                           <label id="vcontrolnumber"></label>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <label>Party Represented:</label>
                        </div>
                        <div class="col-md-6">
                           <label id="vpartyrepresented"></label>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <label>Gender:</label>
                        </div>
                        <div class="col-md-6">
                           <label id="vgender"></label>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <label>Title of Case:</label>
                        </div>
                        <div class="col-md-6">
                           <label id="vcasetitle"></label>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <label>Court/Body:</label>
                        </div>
                        <div class="col-md-6">
                           <label id="vcourt"></label>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <label>Case Type:</label>
                        </div>
                        <div class="col-md-6">
                           <label id="vcasetype"></label>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <label>Case No.:</label>
                        </div>
                        <div class="col-md-6">
                           <label id="vcasenumber"></label>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <label>Cause of Action:</label>
                        </div>
                        <div class="col-md-6">
                           <label id="vcauseofaction"></label>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <label>Last Action Taken:</label>
                        </div>
                        <div class="col-md-6">
                           <label id="vlastactiontaken"></label>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <label>Status of Case:</label>
                        </div>
                        <div class="col-md-6">
                           <label id="vcasestatus"></label>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <label>Cause of Termination:</label>
                        </div>
                        <div class="col-md-6">
                           <label id="vcauseoftermination"></label>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <label>Date Start:</label>
                        </div>
                        <div class="col-md-6">
                           <label id="vstartdate"></label>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <label>Date of Termination:</label>
                        </div>
                        <div class="col-md-6">
                           <label id="vcasedate"></label>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary radiusb shadowbottom" data-dismiss="modal">CLOSE</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <div class="container-fluid">
         <h2 class="text-start text-md-start">Transaction</h2>
         <div style="text-align:right;">
            <button type="button" class="btn btn-success sideback radiusb shadowbottom" data-toggle="modal"
               data-target="#addcourt">ADD</button>
         </div>
         <div class="card" style="margin-top: 10px;">
            <div class="card-body">
               <div class="table-responsive">
                  <table id="datatableid" class="table w-100">
                     <thead>
                        <tr class="text-center sideback text-light">
                           <th scope="col" class="d-none">ID</th>
                           <th scope="col" class="tablestart">Item No.</th>
                           <th scope="col">Control No.</th>
                           <th scope="col">Title of the Case</th>
                           <th scope="col">Case No.</th>
                           <th scope="col">Court/Body</th>
                           <th scope="col">Status of Case</th>
                           <th scope="col" class="tableend">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($transactions as $transaction)
                        <tr class="text-center">
                           <td class="d-none">{{ $transaction->id }}</td>
                           <td>{{ $transaction->itemnumber }}</td>
                           <td>{{ $transaction->controlnumber }}</td>
                           <td>{{ $transaction->casetitle }}</td>
                           <td>{{ $transaction->casenumber }}</td>
                           <td>{{ $transaction->court }}</td>
                           <td>{{ $transaction->casestatus }}</td>
                           <td>
                              <button type="button" class="btn viewbtn"><i class="fa fa-eye"></i></button>
                              <button type="button" class="btn editbtn"><i class="fa fa-edit"></i></button>
                              <button type="button" class="btn deletebtn"><i class="fa fa-trash"></i></button>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
      <!-- view -->
      <script>
         $('.viewbtn').on('click', function () {
         $('#viewmodal').modal('show');

         $tr = $(this).closest('tr');
         var data = $tr.children("td").map(function () {
             return $(this).text();
         }).get();

         var transactionId = data[0]; // Assuming the first column contains the ID

         $.ajax({
             url: `/transactions/${transactionId}`, // Adjust URL as necessary
             type: "GET",
             success: function (response) {
                 // Populate the modal with data
                 $('#vitemnumber').text(response.itemnumber);
                 $('#vcontrolnumber').text(response.controlnumber);
                 $('#vpartyrepresented').text(response.partyrepresented);
                 $('#vgender').text(response.gender);
                 $('#vcasetitle').text(response.casetitle);
                 $('#vcourt').text(response.court);
                 $('#vcasetype').text(response.casetype);
                 $('#vcasenumber').text(response.casenumber);
                 $('#vcauseofaction').text(response.causeofaction);
                 $('#vcasestatus').text(response.casestatus);
                 $('#vlastactiontaken').text(response.lastactiontaken);
                 $('#vcauseoftermination').text(response.causeoftermination);
                 $('#vstartdate').text(response.startdate);
                 $('#vcasedate').text(response.casedate);

                 // Set status color logic as previously discussed
                 var statuscolor = document.getElementById('vcasestatus');
                 switch (response.casestatus) {
                     case 'Pending':
                         statuscolor.style.backgroundColor = 'yellow';
                         statuscolor.style.color = 'black';
                         break;
                     case 'Terminated':
                         statuscolor.style.backgroundColor = 'red';
                         statuscolor.style.color = 'white';
                         break;
                     default:
                         statuscolor.style.backgroundColor = 'green';
                         statuscolor.style.color = 'white';
                         break;
                 }
             },
             error: function (xhr, status, error) {
                 console.error(xhr.responseText);
                 alert("An error occurred while fetching data. Please try again.");
             }
             });
         });

      </script>
      <!-- datatables -->
      <script>
         $(document).ready(function () {

             $('#datatableid').DataTable({
                 "pagingType": "full_numbers",
                 "lengthMenu": [
                     [10, 25, 50, -1],
                     [10, 25, 50, "All"]
                 ],
                 responsive: true,
                 language: {
                     search: "_INPUT_",
                     searchPlaceholder: "Search",
                 }
             });

         });
      </script>
      <!-- delete -->
      <script>
         $(document).ready(function () {
             $('.deletebtn').on('click', function () {
                 $('#deletemodal').modal('show');

                 $tr = $(this).closest('tr');
                 var data = $tr.children("td").map(function () {
                     return $(this).text();
                 }).get();

                 var transactionId = data[0]; // Assuming the first column contains the ID
                 $('#delete_id').val(transactionId);

                 // Set the form action to delete the transaction
                 $('#deletemodal form').attr('action', `/transactions/${transactionId}`); // Adjust URL as necessary
             });

             // Handling the deletion via form submission
             $('#deletemodal form').on('submit', function(event) {
                 event.preventDefault(); // Prevent the default form submission
                 $.ajax({
                     url: $(this).attr('action'),
                     type: 'DELETE',
                     data: {
                         _token: '{{ csrf_token() }}' // Include CSRF token for security
                     },
                     success: function(response) {
                         $('#deletemodal').modal('hide');
                         location.reload(); // Refresh the page or update the table
                     },
                     error: function(xhr, status, error) {
                         console.error(xhr.responseText);
                         alert("An error occurred while deleting the transaction. Please try again.");
                     }
                 });
             });
         });
      </script>
      <!-- update -->
      <script>
         $(document).ready(function () {
             $('.editbtn').on('click', function () {
                 $('#editmodal').modal('show');

                 $tr = $(this).closest('tr');
                 var data = $tr.children("td").map(function () {
                     return $(this).text();
                 }).get();

                 var transactionId = data[0]; // Assuming the first column contains the ID

                 $.ajax({
                     url: `/transactions/${transactionId}`, // Adjust URL as necessary
                     type: "GET",
                     success: function (response) {
                         $('#update_id').val(response.id);
                         $('#editForm').attr('action', `/transactions/${response.id}`); // Set the action for the form
                         $('#uitemnumber').val(response.itemnumber);
                         $('#ucontrolnumber').val(response.controlnumber);
                         $('#upartyrepresented').val(response.partyrepresented);
                         $('#ugender').val(response.gender);
                         $('#ucasetitle').val(response.casetitle);
                         $('#ucourt').val(response.court);
                         $('#ucasetype').val(response.casetype);
                         $('#ucasenumber').val(response.casenumber);
                         $('#ucauseofaction').val(response.causeofaction);
                         $('#ucasestatus').val(response.casestatus);
                         $('#ulastactiontaken').val(response.lastactiontaken);
                         $('#ucauseoftermination').val(response.causeoftermination);
                         $('#ustartdate').val(response.startdate);
                         $('#ucasedate').val(response.casedate);
                     },
                     error: function (xhr, status, error) {
                         console.error(xhr.responseText);
                         alert("An error occurred while fetching data. Please try again.");
                     }
                 });
             });
         });
      </script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   </body>
</html>
