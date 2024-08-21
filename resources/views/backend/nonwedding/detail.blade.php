@extends('backend.layouts.master')

@section('main-content')
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
     <div class="row">
         <div class="col-md-12">
            @include('backend.layouts.notification')
         </div>
     </div>
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary float-left">Wedding Detail</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item" role="presentation">
        <a class="nav-link active" id="simple-tab-0" data-toggle="tab" href="#simple-tabpanel-0" role="tab">PLANNING QUESTIONNAIRE</a>
        </li>
        <li class="nav-item" role="presentation">
        <a class="nav-link" id="simple-tab-1" data-toggle="tab" href="#simple-tabpanel-1" role="tab">CEREMONY DETAILS</a>
        </li>
        <li class="nav-item" role="presentation">
        <a class="nav-link" id="simple-tab-2" data-toggle="tab" href="#simple-tabpanel-2" role="tab">COCKTAIL HOUR HIGHLIGHTS</a>
        </li>
        <li class="nav-item" role="presentation">
        <a class="nav-link" id="simple-tab-3" data-toggle="tab" href="#simple-tabpanel-3" role="tab">RECEPTION</a>
        </li>
        <li class="nav-item" role="presentation">
        <a class="nav-link" id="simple-tab-4" data-toggle="tab" href="#simple-tabpanel-4" role="tab">BRIDAL PARTY INTRODUCTIONS</a>
        </li>
    </ul>
    <div class="tab-content pt-5" id="tab-content">
        <div class="tab-pane fade show active" id="simple-tabpanel-0" role="tabpanel" aria-labelledby="simple-tab-0">
            <div class="row">
                <table  class="table table-bordered">
                    <tbody>
                        <tr>
                            <td><b>Bride</b></td>
                            <td>{{$WeddingPlanningQuestionnaire->bride}}</td>
                        </tr>
                        <tr>
                            <td><b>Groom/Spouse</td>
                            <td>{{$WeddingPlanningQuestionnaire->groom}}</td>
                        </tr>
                        <tr>
                            <td><b>Phone</b></td>
                            <td>{{$WeddingPlanningQuestionnaire->phone}}</td>
                        </tr>
                        <tr>
                            <td><b>Alternate Phone</b></td>
                            <td>{{$WeddingPlanningQuestionnaire->altphone}}</td>
                        </tr>
                        <tr>
                            <td><b>Best Time to Call</b></td>
                            <td>{{$WeddingPlanningQuestionnaire->timecall}}</td>
                        </tr>
                        <tr>
                            <td><b>Email</b></td>
                            <td>{{$WeddingPlanningQuestionnaire->email}}</td>
                        </tr>
                        <tr>
                            <td><b>Wedding Date</b></td>
                            <td>{{$WeddingPlanningQuestionnaire->wed_date}}</td>
                        </tr>
                        <tr>
                            <td><b>Venue Reception Ballroom</b></td>
                            <td>{{$WeddingPlanningQuestionnaire->venue_rec}}</td>
                        </tr>
                        <tr>
                            <td><b>Banquet Venue</b></td>
                            <td>{{$WeddingPlanningQuestionnaire->banq_ven}}</td>
                        </tr>
                        <tr>
                            <td><b>Number of Guests</b></td>
                            <td>{{$WeddingPlanningQuestionnaire->numberguest}}</td>
                        </tr>
                        <tr>
                            <td><b>Addt'l Contact Person</b></td>
                            <td>{{$WeddingPlanningQuestionnaire->contact_persom}}</td>
                        </tr>
                        <tr>
                            <td><b>Addt'l Contact Phone </b></td>
                            <td>{{$WeddingPlanningQuestionnaire->contact_phone}}</td>
                        </tr>
                        <tr>
                            <td><b>Venue Contact Person</b></td>
                            <td>{{$WeddingPlanningQuestionnaire->ven_contact}}</td>
                        </tr>
                        <tr>
                            <td><b>Venue Contact Person Phone</b></td>
                            <td>{{$WeddingPlanningQuestionnaire->ven_cont_person}}</td>
                        </tr>
                        <tr>
                            <td><b>Guest Arrival</b></td>
                            <td>{{$WeddingPlanningQuestionnaire->guest_arrival}}</td>
                        </tr>
                        <tr>
                            <td><b>Wedding Party Arrival</b></td>
                            <td>{{$WeddingPlanningQuestionnaire->wed_party}}</td>
                        </tr>
                        <tr>
                            <td><b>Photographer</b></td>
                            <td>{{$WeddingPlanningQuestionnaire->photographer}}</td>
                        </tr>
                        <tr>
                            <td><b>Videographer</b></td>
                            <td>{{$WeddingPlanningQuestionnaire->videographer}}</td>
                        </tr>
                        <tr>
                            <td><b>Setting</b></td>
                            <td>{{$WeddingPlanningQuestionnaire->setting}}</td>
                        </tr>
                        <tr>
                            <td><b>Elevator</b></td>
                            <td>{{$WeddingPlanningQuestionnaire->elevator}}</td>
                        </tr>
                        <tr>
                            <td><b>songsnot</b></td>
                            <td>{{$WeddingPlanningQuestionnaire->songsnot}}</td>
                        </tr>
                        <tr>
                            <td><b>songtobe</b></td>
                            <td>{{$WeddingPlanningQuestionnaire->songtobe}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="simple-tabpanel-1" role="tabpanel" aria-labelledby="simple-tab-1">
            <div class="row">
                <table  class="table table-bordered">
                    <tbody>
                        <tr>
                            <td><b>Sound Choice Hosting Ceremony</b></td>
                            <td>{{$WeddingCeremonyDetails->sound}}</td>
                        </tr>
                        <tr>
                            <td><b>If so, which service</td>
                            <td>{{$WeddingCeremonyDetails->service}}</td>
                        </tr>
                        <tr>
                            <td><b>Name of Officiant</td>
                            <td>{{$WeddingCeremonyDetails->officiantname}}</td>
                        </tr>
                        <tr>
                            <td><b>Officiant Phone</td>
                            <td>{{$WeddingCeremonyDetails->officiantphone}}</td>
                        </tr>
                        <tr>
                            <td><b>Processional Song 1</td>
                            <td>{{$WeddingCeremonyDetails->processionalsong}}</td>
                        </tr>
                        <tr>
                            <td><b>Processional Song 2</td>
                            <td>{{$WeddingCeremonyDetails->processionalsong2}}</td>
                        </tr>
                        <tr>
                            <td><b>Processional Song 3</td>
                            <td>{{$WeddingCeremonyDetails->processionalsong3}}</td>
                        </tr>
                        <tr>
                            <td><b>Recessional Song 1</td>
                            <td>{{$WeddingCeremonyDetails->recessionalsong}}</td>
                        </tr>
                        <tr>
                            <td><b>Recessional Song 2</td>
                            <td>{{$WeddingCeremonyDetails->recessionalsong2}}</td>
                        </tr>
                        <tr>
                            <td><b>Recessional Song 3</td>
                            <td>{{$WeddingCeremonyDetails->recessionalsong3}}</td>
                        </tr>
                        <tr>
                            <td><b>Prelude Song</td>
                            <td>{{$WeddingCeremonyDetails->prelude}}</td>
                        </tr>
                        <tr>
                            <td><b>Postlude Song</td>
                            <td>{{$WeddingCeremonyDetails->postlude}}</td>
                        </tr>
                        <tr>
                            <td><b>Additional Ceremony Details</td>
                            <td>{{$WeddingCeremonyDetails->ceremony}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="simple-tabpanel-2" role="tabpanel" aria-labelledby="simple-tab-2">
            <div class="row">
                <table  class="table table-bordered">
                    <tbody>
                        <tr>
                            <td><b>Start Time</b></td>
                            <td>{{$WeddingCocktailHourHighlights->starttime}}</td>
                        </tr>
                        <tr>
                            <td><b>End Time</b></td>
                            <td>{{$WeddingCocktailHourHighlights->endtime}}</td>
                        </tr>
                        <tr>
                            <td><b>Cocktail Hour Location</b></td>
                            <td>{{$WeddingCocktailHourHighlights->coctail}}</td>
                        </tr>
                        <tr>
                            <td><b>Power Provided</b></td>
                            <td>{{$WeddingCocktailHourHighlights->power}}</td>
                        </tr>
                        <tr>
                            <td><b>Cocktail Music Service</b></td>
                            <td>{{$WeddingCocktailHourHighlights->coctailmusic}}</td>
                        </tr>
                        <tr>
                            <td><b>Cocktail Music Style</b></td>
                            <td>{{$WeddingCocktailHourHighlights->coctailstyle}}</td>
                        </tr>
                        <tr>
                            <td><b>cocktail hour details</b></td>
                            <td>{{$WeddingCocktailHourHighlights->cocktaildetails}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
            <div class="tab-pane fade" id="simple-tabpanel-3" role="tabpanel" aria-labelledby="simple-tab-3">
                <div class="row">
                    <table  class="table table-bordered">
                        <tbody>
                            <tr>
                                <td><b>Starting Time</b></td>
                                <td>{{$WeddingReception->recstartingtime}}</td>
                            </tr>
                            <tr>
                                <td><b>Ending Time</b></td>
                                <td>{{$WeddingReception->recendingtime}}</td>
                            </tr>
                            <tr>
                                <td><b>Introductions</b></td>
                                <td>{{$WeddingReception->introduction}}</td>
                            </tr>
                            <tr>
                                <td><b>Wedding Party Introduction Music</b></td>
                                <td>{{$WeddingReception->couple}}</td>
                            </tr>
                            <tr>
                                <td><b>Newlywed Intro Music</b></td>
                                <td>{{$WeddingReception->newintro}}</td>
                            </tr>
                            <tr>
                                <td><b>Special Intro Instruction</b></td>
                                <td>{{$WeddingReception->specialintro}}</td>
                            </tr>
                            <tr>
                                <td><b>Toast</b></td>
                                <td>{{$WeddingReception->toast}}</td>
                            </tr>
                            <tr>
                                <td><b>Toast By</b></td>
                                <td>{{$WeddingReception->toastby}}</td>
                            </tr>
                            <tr>
                                <td><b>Addt'l Speaker</b></td>
                                <td>{{$WeddingReception->speakeradd}}</td>
                            </tr>
                            <tr>
                                <td><b>Addt'l Speaker 2</b></td>
                                <td>{{$WeddingReception->speakeradd2}}</td>
                            </tr>
                            <tr>
                                <td><b>Blessing</b></td>
                                <td>{{$WeddingReception->blessing}}</td>
                            </tr>
                            <tr>
                                <td><b>Blessing By</b></td>
                                <td>{{$WeddingReception->blessingby}}</td>
                            </tr>
                            <tr>
                                <td><b>Dinner Music Type</b></td>
                                <td>{{$WeddingReception->dinnerstyle}}</td>
                            </tr>
                            <tr>
                                <td><b>Dinner Served</b></td>
                                <td>{{$WeddingReception->dinnerserved}}</td>
                            </tr>
                            <tr>
                                <td><b>Style</b></td>
                                <td>{{$WeddingReception->style}}</td>
                            </tr>
                            <tr>
                                <td><b>Bride and Groom Dance</b></td>
                                <td>{{$WeddingReception->bridegroomdance}}</td>
                            </tr>
                            <tr>
                                <td><b>Bride and Groom Song</b></td>
                                <td>{{$WeddingReception->birdegroomsong}}</td>
                            </tr>
                            <tr>
                                <td><b>Bride and Father Dance</b></td>
                                <td>{{$WeddingReception->bridefatherdance}}</td>
                            </tr>
                            <tr>
                                <td><b>Bride and Father Song</b></td>
                                <td>{{$WeddingReception->birdefathersong}}</td>
                            </tr>
                            <tr>
                                <td><b>Groom and Mother Dance</b></td>
                                <td>{{$WeddingReception->groommotherdance}}</td>
                            </tr>
                            <tr>
                                <td><b>Groom and Mother Song</b></td>
                                <td>{{$WeddingReception->birdemothersong}}</td>
                            </tr>
                            <tr>
                                <td><b>Bridal Party Dance</b></td>
                                <td>{{$WeddingReception->bridalpartdance}}</td>
                            </tr>
                            <tr>
                                <td><b>Bridal Party Song</b></td>
                                <td>{{$WeddingReception->birdalparysong}}</td>
                            </tr>
                            <tr>
                                <td><b>Cake Cutting</b></td>
                                <td>{{$WeddingReception->cakecutting}}</td>
                            </tr>
                            <tr>
                                <td><b>Cake Cutting Song</b></td>
                                <td>{{$WeddingReception->cakesong}}</td>
                            </tr>
                            <tr>
                                <td><b>Bouquet Toss</b></td>
                                <td>{{$WeddingReception->bonquettoss}}</td>
                            </tr>
                            <tr>
                                <td><b>Bouquet Toss Song</b></td>
                                <td>{{$WeddingReception->banquetsong}}</td>
                            </tr>
                            <tr>
                                <td><b>Garter Toss</b></td>
                                <td>{{$WeddingReception->gartertoss}}</td>
                            </tr>
                            <tr>
                                <td><b>Song for removing garter from brides leg</b></td>
                                <td>{{$WeddingReception->songgarter}}</td>
                            </tr>
                            <tr>
                                <td><b>Song for garter to be put on the ladies</b></td>
                                <td>{{$WeddingReception->songgarterlad}}</td>
                            </tr>
                            <tr>
                                <td><b>Last Dance of Evening</b></td>
                                <td>{{$WeddingReception->lastdance}}</td>
                            </tr>
                            <tr>
                                <td><b>Last Dance Song</b></td>
                                <td>{{$WeddingReception->lastsong}}</td>
                            </tr>
                            <tr>
                                <td><b>Specialty Exit</b></td>
                                <td>{{$WeddingReception->specialityexit}}</td>
                            </tr>
                            <tr>
                                <td><b>Specialty Exit Details</b></td>
                                <td>{{$WeddingReception->specialexitdet}}</td>
                            </tr>
                            <tr>
                                <td><b>Other Reception Details</b></td>
                                <td>{{$WeddingReception->recdetails}}</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        <div class="tab-pane fade" id="simple-tabpanel-4" role="tabpanel" aria-labelledby="simple-tab-4">
            <div class="row">
                <table  class="table table-bordered">
                    <tbody>
                        <tr>
                            <td><b>Parents of the Bride</b></td>
                            <td>{{$WeddingBridalPartyIntroductions->parentsbride}}</td>
                        </tr>
                        <tr>
                            <td><b>Parents of the Groom</b></td>
                            <td>{{$WeddingBridalPartyIntroductions->parentsgroom}}</td>
                        </tr>
                        <tr>
                            <td><b>Usher(s)</b></td>
                            <td>{{$WeddingBridalPartyIntroductions->usher}}</td>
                        </tr>
                        <tr>
                            <td><b>Bridesmaid & Groomsman (1)</b></td>
                            <td>{{$WeddingBridalPartyIntroductions->bridesmaid}}</td>
                        </tr>
                        <tr>
                            <td><b>Bridesmaid & Groomsman (2)</b></td>
                            <td>{{$WeddingBridalPartyIntroductions->bridesmaid2}}</td>
                        </tr>
                        <tr>
                            <td><b>Bridesmaid & Groomsman (3)</b></td>
                            <td>{{$WeddingBridalPartyIntroductions->bridesmaid3}}</td>
                        </tr>
                        <tr>
                            <td><b>Bridesmaid & Groomsman (4)</b></td>
                            <td>{{$WeddingBridalPartyIntroductions->bridesmaid4}}</td>
                        </tr>
                        <tr>
                            <td><b>Bridesmaid & Groomsman (5)</b></td>
                            <td>{{$WeddingBridalPartyIntroductions->bridesmaid5}}</td>
                        </tr>
                        <tr>
                            <td><b>Bridesmaid & Groomsman (6)</b></td>
                            <td>{{$WeddingBridalPartyIntroductions->bridesmaid6}}</td>
                        </tr>
                        <tr>
                            <td><b>Bridesmaid & Groomsman (7)</b></td>
                            <td>{{$WeddingBridalPartyIntroductions->bridesmaid7}}</td>
                        </tr>
                        <tr>
                            <td><b>Bridesmaid & Groomsman (8)</b></td>
                            <td>{{$WeddingBridalPartyIntroductions->bridesmaid8}}</td>
                        </tr>
                        <tr>
                            <td><b>Bridesmaid & Groomsman (9)</b></td>
                            <td>{{$WeddingBridalPartyIntroductions->bridesmaid9}}</td>
                        </tr>
                        <tr>
                            <td><b>Bridesmaid & Groomsman (10)</b></td>
                            <td>{{$WeddingBridalPartyIntroductions->bridesmaid10}}</td>
                        </tr>
                        <tr>
                            <td><b>Maid/Matron of Honor & Best Man</b></td>
                            <td>{{$WeddingBridalPartyIntroductions->mainhonor}}</td>
                        </tr>
                        <tr>
                            <td><b>Flower Girl(s) & Ringbearer</b></td>
                            <td>{{$WeddingBridalPartyIntroductions->flowergirl}}</td>
                        </tr>
                        <tr>
                            <td><b>Bride & Groom</b></td>
                            <td>{{$WeddingBridalPartyIntroductions->bridegroom}}</td>
                        </tr>
                        <tr>
                            <td><b>Special Intro Instruction</b></td>
                            <td>{{$WeddingBridalPartyIntroductions->bridal_pary_specialintro}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
      </div>
    </div>
</div>
@endsection

@push('styles')
  <link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <style>
      div.dataTables_wrapper div.dataTables_paginate{
          display: none;
      }
  </style>
@endpush

@push('scripts')

  <!-- Page level plugins -->
  <script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>
  <script>
      
      $('#user-dataTable').DataTable( {
            "columnDefs":[
                {
                    "orderable":false,
                    "targets":[6,7]
                }
            ]
        } );

        // Sweet alert

        function deleteData(id){
            
        }
  </script>
  <script>
      $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
          $('.dltBtn').click(function(e){
            var form=$(this).closest('form');
              var dataID=$(this).data('id');
              // alert(dataID);
              e.preventDefault();
              swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                       form.submit();
                    } else {
                        swal("Your data is safe!");
                    }
                });
          })
      })
  </script>
@endpush