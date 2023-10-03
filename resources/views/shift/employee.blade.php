@extends('shift.layoutemp')
@section('content')
<p>Click on the buttons to view Details:</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'events')">Events</button>
 <button class="tablinks" onclick="openCity(event, 'calendar')">Calendar</button>

</div>







<!------------ start of calendar view ----------->
<div id="calendar" class="tabcontent">



  <h5>Calandar View - <?php $month=date('F,Y'); echo $month;?></h5>



    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>SUN</th>
            <th>MON</th>
            <th>TUE</th>
            <th>WED</td>
            <th>THU</th>
            <th>FRI</th>
            <th>SAT</th>
        </tr>
        </thead>
        <tbody>
                <tr>
                    <?php $month=date('m'); ?>
                    <?php $startdays=[0,0,3,3,6,1,4,6,2,5,0,3,5];
                        $lastdays=[0,31,28,31,30,31,30,31,31,30,31,30,31];
                        $startday=$startdays[(int)$month];
                        $lastday=$lastdays[(int)$month];
                    ?>

                    @for($i=1;$i<=$startday;$i++)
                        <td></td>
                    @endfor
                    @for($i=1;$i<=$lastday;$i++)
                        <td width="120">{{$i}}
                        @foreach ($allocates as $allocate)
                                <?php $day = date('d', strtotime($allocate->shiftdate));
                                $amonth = date('m', strtotime($allocate->shiftdate));?>
                                @if ($day==$i && $month==$amonth)
                                   <span class="allocated">
                                        <?php $name = explode(' ', $allocate->empname);?>
                                        <br> {{$name[0]}} - {{$allocate->role}}
                                   </span>
                                @endif
                        @endforeach



                        </td>
                        @if(($i+$startday)%7==0)
                            </tr><tr>
                        @endif
                    @endfor
                </tr>
        </tbody>

    </table>

    {!! $allocates->links() !!}
</div>
<!------------ end of calendar view ------------->

<!------------- start of event tab --------------->
<div id="events" class="tabcontent">



  <h5>Today's Events <?php $month=date('d-M-Y'); echo $month;?> for Employee {{Auth::user()->name}}</h5>



    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <div class="row">
    <div class="col-sm-6">
        <div class="mydiv">
        <img src="/assets/img/events.jpg">
    </div>
    </div>
    <div class="col-sm-6">
      <div class="mydiv">
      <link rel="stylesheet" href="/assets/css/page.css">
        <!------------- today events start------------>
        <?php
            $id = Auth::user()->id;
            $upevents = DB::select('select * from allocated_shifts inner join users on allocated_shifts.empid=users.empid  where shiftdate=CURDATE() and users.id='.$id);

        ?>
        <div class="shifts"><h6>Today's Shifts</h6></div>
          @foreach($upevents as $upcomingevent)
          <?php
          $upeday = date('D', strtotime($upcomingevent->shiftdate));
          $upedate = date('d-M', strtotime($upcomingevent->shiftdate));
          ?>

          <div class="col-sm-12 shift">
            <div class="row">
              <div class="col-sm-3 day"> {{$upeday}} <br> {{$upedate}}</div>
              <div class="col-sm-9 store">{{ $upcomingevent->shift}} {{ $upcomingevent->empname}}
                - {{ $upcomingevent->role}}
              </div>
            </div>
          </div>
         @endforeach
        <!------------- todays events end------------>


        <!------------- upcoming events start------------>
        <?php
            $upevents = DB::select('select * from allocated_shifts inner join users on allocated_shifts.empid=users.empid  where shiftdate>CURDATE() and users.id='.$id);

        ?>
        <div class="shifts"><h6>upcoming Shifts</h6></div>
          @foreach($upevents as $upcomingevent)
          <?php
          $upeday = date('D', strtotime($upcomingevent->shiftdate));
          $upedate = date('d-M', strtotime($upcomingevent->shiftdate));
          ?>

          <div class="col-sm-12 shift">
            <div class="row">
              <div class="col-sm-3 day"> {{$upeday}} <br> {{$upedate}}</div>
              <div class="col-sm-9 store">{{ $upcomingevent->shift}} {{ $upcomingevent->empname}}
                - {{ $upcomingevent->role}}
              </div>
            </div>
          </div>
         @endforeach
        <!------------- upcoming events end------------>


      <div class="shifts" hidden><h6>Your notifications</h6></div>
          <div class="col-sm-12 shift" hidden>
            <div class="row">
              <div class="col-sm-2 day">ICON</div>
              <div class="col-sm-9 store">6 hours ago</div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<!-------------- end of event tab ---------------->

@endsection

<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

.allocated{
    background:yellow;
    font-size:.7em;
}

thead
{
    background:red;
}
</style>


<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
