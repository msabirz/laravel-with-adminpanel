@php
  $role_id = Auth::user()->role_id;
@endphp
@include('layouts.header')
<style>
	
</style>
<div class="block-header">
    <h2>DASHBOARD</h2>
</div>
@if(Session::has('msg_e'))
<div class="alert bg-red alert-dismissible" role="alert"><strong>Danger! </strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {!! session('msg_e') !!}
</div>
@endif
@if(Session::has('msg_auth'))
<div class="alert bg-red alert-dismissible" role="alert"><strong>Danger! </strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {!! session('msg_auth') !!}
</div>
@endif
@if(!empty($msg_e))
<div class="alert alert-alert"> {{ $msg_e }}</div>
@endif
@if(!empty($auth_error))
<div class="alert alert-alert"> {{ $auth_error }}</div>
@endif
<!-- Widgets -->
@if($role_id==1)


@endif
<!-- #END# Widgets -->



<br><br>

@if (Session::has('msg'))
<div class="alert bg-green alert-dismissible" role="alert"><strong>Success! </strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {!! session('msg') !!}
</div>
  @endif
  @if (Session::has('msg_e'))
  <div class="alert bg-red alert-dismissible" role="alert"><strong>Register Here </strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      {!! session('msg_e') !!}
  </div>
    @endif

    @if(Session::has('successMsg'))
    <div class="alert alert-success"> {{ Session::get('successMsg') }}</div>
  @endif
@if(session('top_menu_event_id'))
   {{-- @php
    $start_date = date('Y-m-d',strtotime(session('event')->submission_deadline.'-5 days'));
    $end_date = date('Y-m-d',strtotime(session('event')->submission_deadline));
    $cur_date = date('Y-m-d');
    if($cur_date >= $start_date && $cur_date <= $end_date){
    @endphp
      <div class="alert alert-danger alert-dismissible" role="alert" >
        <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <marquee style="font-family: Arial; font-size: 18px;">Event will expire on {{(abs(round((strtotime($end_date) - strtotime($cur_date)) / 86400))>0) ? 'next '.abs(round((strtotime($end_date) - strtotime($cur_date)) / 86400)).' days.' : 'today.' }} </marquee>
      </div>
    @php
    }
    @endphp--}}
  <div class="dashboard-info">
	<ul>
    	<li class="clearfix">
        	<div class="col-left">
            	<strong>Name</strong>
            </div>
            <div class="col-right">
            	<p>{{ session('event')->name }}</p>
            </div>
        </li>

        <li class="clearfix">
        	<div class="col-left">
            	<strong>Entry Fee</strong>

            </div>
            <div class="col-right">
            	
            <p class="text-info"><strong>From {{ date('d F', strtotime( session('event')->early_bird_fee_start_date)) }} to {{ date('d F', strtotime( session('event')->early_bird_fee_end_date)) }}: Rs. {{  session('event')->amount }} per entry + GST</strong></p>

<p class="text-info"><strong>From @php $from_date =  strtotime("+1 day", strtotime( session('event')->early_bird_fee_end_date)); @endphp {{  date('d F', $from_date) }} to {{ date('d F', strtotime( session('event')->submission_deadline)) }} : Rs.  {{  session('event')->late_entry_fee }} per entry + GST</strong></p>
            </div>
        </li>


        <li class="clearfix">
        	<div class="col-left">
            	<strong>Short Event Link</strong>
            </div>
            <div class="col-right">
                <p><a href="/{{ session('event')->seo_keyword }}">
                    {{ url('/')}}/{{ session('event')->seo_keyword }}
                    </a>
                    @if((today()->format('Y-m-d') <=  session('event')->submission_deadline || auth::user()->is_allow_entry==1) && auth::user()->role_id==3)
                    <a href="{{ url('entrant_register/')}}/{{ session('event_keyword') }}"
                        class="btn btn-primary pull-right" >
                       Become Participant now
                    </a>
                    @endif

                </p>

            </div>
        </li>


    </ul>
</div>
@endif
{{-- @if(auth::user()->role_id==3 && isset($user_entries_progress))
   <h2 class="hd-h2"><strong> Entries Status </strong> </h2>
    @foreach($user_entries_progress as $progress)
    <div class="entry-timeline">
    <ul class="timeline" id="timeline">
    <h4 class="author"> <strong> <a href="{{ url('/entry') }}" target="_blank"> Entry # {{ $progress->entry_id }} </a>  </strong> </h4>
        @if(($progress->status == 1 || $progress->payment_status == 1 ) && $progress->is_assigned != 0)
            <li class="li complete">
                <div class="timestamp">
                
                <!-- <span class="date">11/15/2014<span> -->
                </div>
                <div class="status">
                <h4> {{ $progress->status==1 ? " Drafted " : $progress->status==2 ? " Submitted " : $progress->payment_status==1 ? " Payment Pending " : ""}} </h4>
                </div>
            </li>
        @elseif($progress->is_assigned == 0 &&  $progress->payment_status == 1)
            <li class="li complete">
                <div class="timestamp">
                
                <!-- <span class="date">11/15/2014<span> -->
                </div>
                <div class="status">
                <h4> Submitted </h4>
                </div>
            </li>
            <li class="li complete">
                <div class="timestamp">
                
                <!-- <span class="date">11/15/2014<span> -->
                </div>
                <div class="status">
                <h4> Fee Submission Pending  </h4>
                </div>
            </li>
        @elseif($progress->is_assigned == 0 && $progress->payment_status == 2)
        <li class="li complete">
            <div class="timestamp">
            
            <!-- <span class="date">11/15/2014<span> -->
            </div>
            <div class="status">
            <h4> Submitted </h4>
            </div>
        </li>
        <li class="li complete">
            <div class="timestamp">
            
            <!-- <span class="date">11/15/2014<span> -->
            </div>
            <div class="status">
            <h4> Fee Submitted  </h4>
            </div>
        </li>
        <li class="li complete">
            <div class="timestamp">
            
            <!-- <span class="date">11/15/2014<span> -->
            </div>
            <div class="status">
            <h4> Processing  </h4>
            </div>
        </li>
        @elseif($progress->is_assigned == 1 && $progress->marked_status != 1)
        <li class="li complete">
            <div class="timestamp">
            <!-- <span class="author"> <strong> Entry # {{ $progress->entry_id }} </strong> </span> -->
            <!-- <span class="date">11/15/2014<span> -->
            </div>
            <div class="status">
            <h4> Created </h4>
            </div>
        </li>
        <li class="li complete">
            <div class="timestamp">
            <!-- <span class="author">  <strong> Entry # {{ $progress->entry_id }} </strong> </span> -->
            <!-- <span class="date">11/15/2014<span> -->
            </div>
            <div class="status">
            <h4> Assigned  </h4>
            </div>
        </li>
        
        @elseif($progress->marked_status == 1)
        <li class="li complete">
            <div class="timestamp">
            <!-- <span class="author"> <strong>  Entry # {{ $progress->entry_id }} </strong> </span> -->
            <!-- <span class="date">11/15/2014<span> -->
            </div>
            <div class="status">
            <h4> Created </h4>
            </div>
        </li>
        <li class="li complete">
            <div class="timestamp">
            <!-- <span class="author"><strong> # {{ $progress->entry_id }} </strong> </span> -->
            <!-- <span class="date">11/15/2014<span> -->
            </div>
            <div class="status">
            <h4> Assigned </h4>
            </div>
        </li>
        <li class="li complete">
            <div class="timestamp">
            <!-- <span class="author"><strong> Entry # {{ $progress->entry_id }} </strong> </span> -->
            <!-- <span class="date">11/15/2014<span> -->
            </div>
            <div class="status">
            <h4> Marked  </h4>
            </div>
        </li>
        
        @endif
    </ul>  
    </div>

    @endforeach
@endif --}}
@isset($event_data)
<b>Event List</b>
<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
    <thead>
        <tr>
            <th>Event Name</th>
            <th>Event Date</th>
            <th>Submission Deadline</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
          <th>Event Name</th>
          <th>Event Date</th>
          <th>Submission Deadline</th>
          <th>Action</th>
        </tr>
    </tfoot>
    <tbody>

      @foreach($event_data AS $event)
        <tr>
          <td>{{ $event->name }}</td>
          <td>{{ date('d/m/Y ',strtotime($event->start_date)).' - '.date('d/m/Y ',strtotime($event->end_date)) }}</td>
          <td>{{ date('d/m/Y ',strtotime($event->submission_deadline)) }}</td>
          <td>
          @if($role_id==3)

                @if($event->is_registered)
                    Registered
                @else
                <a href="{{ url('/entrant_register', ['seo_keyword' => $event->seo_keyword] ) }}" class="btn btn-primary" >Register</a>
                @endif

           @else
            @if(today()->format('Y-m-d') <= $event->submission_deadline)
                    <a href="{{ url('/', ['seo_keyword' => $event->seo_keyword] ) }}" class="btn btn-primary" >Details</a>
            @else
                <h5>Event Expired</h5>
            @endif
           @endif
           </td>
          </tr>
      @endforeach
      @endif
    </tbody>
</table>
@if(session('top_menu_event_id') && $role_id==1)

<div class="row clearfix">

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="block-header">
            <h2>
                Entrants
            </h2>
        </div>
        <ul class="list-group">
            <li class="list-group-item">Total <span class="badge bg-pink">{{ $entrants_stat['total_entrants'] }}</span></li>
            <li class="list-group-item"> Active <span class="badge bg-cyan">{{ $entrants_stat['active'] }}</span></li>
            <li class="list-group-item">Withdrawn <span class="badge bg-teal">{{ $entrants_stat['withdrawn'] }}</span></li>
            <li class="list-group-item">Total Entrants with Entries <span class="badge bg-teal">{{ $entrants_stat['total_entrants_with_entries'] }}</span></li>
        </ul>
    </div>
   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="block-header">
            <h2>
                Entries
            </h2>
        </div>
        <ul class="list-group">
            <li class="list-group-item">Total <span class="badge bg-pink">{{ $entries_stat['total_entries'] }}</span></li>
            <li class="list-group-item">Draft <span class="badge bg-cyan">{{ $entries_stat['total_drafted'] }}</span></li>
            <li class="list-group-item">Checked Out <span class="badge bg-cyan">{{ $entries_stat['total_checked_out'] }}</span></li>
            <li class="list-group-item">Submitted <span class="badge bg-teal">{{ $entries_stat['total_submitted'] }}</span></li>
            <li class="list-group-item">Cancelled <span class="badge bg-orange">{{ $entries_stat['total_cancelled'] }}</span></li>

        </ul>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
        <div class="block-header">
            <h2 class="">
                Orders
            </h2>
        </div>
        <ul class="list-group">
            <li class="list-group-item">Total<span class="badge bg-pink">NA</span></li>
            <li class="list-group-item">Effective<span class="badge bg-cyan">NA</span></li>
            <li class="list-group-item">Cancelled <span class="badge bg-teal">NA</span></li>
            <li class="list-group-item">Voided <span class="badge bg-orange">NA</span></li>

        </ul>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="block-header">
            <h2>
                Effective Orders by Payment Status
            </h2>
        </div>
        <ul class="list-group">
            <li class="list-group-item">Pending <span class="badge bg-pink">NA</span></li>
            <li class="list-group-item">Completed <span class="badge bg-cyan">NA</span></li>
            <li class="list-group-item">Refunding <span class="badge bg-teal">NA</span></li>
            <li class="list-group-item">Refunded <span class="badge bg-orange">NA</span></li>
        </ul>
    </div>

</div>
@endif


@include('layouts.footer')
