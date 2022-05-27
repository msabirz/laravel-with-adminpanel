

<nav class="navbar bg-gradient">
    <div class="container-fluid">
        <div class="navbar-header">
			<button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="material-icons">format_list_bulleted</i>
                <!--<span>Toggle Sidebar</span>-->
            </button>
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <!-- <a class="navbar-brand" href="{{url('/dashboard')}}"> {{ env('SET_AWARD_TITLE') }}</a> -->
            @if(!empty($event_id))
              @if(file_exists(storage_path('app/public/uploads/'.session('event_logo'))))
                    <img src="{{url('storage/uploads/'.session('event_logo'))}}" class="uploadsfig img-responsive">
              @endif
            @endif
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <div class="row">
                <!--style="margin-top:18px;"-->
                <div class="col-md-7 col-sm-5 left-col">
                    <ul class="navbar-left row" style="width:100%;" >
                        <li class="col-xl-4 col-md-4 col-sm-4">
                            <div class="user-manage">
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <em> Applicationn  </em>
                                    </button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <!-- <div class="col-xl-2 col-md-2 col-sm-3 pull-right right-col">
                    <a href="{{url('/logout')}}" class="btn btn-default pull-right">Logout</a>
                    <div class="right-dropdown user-fig">
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{url('assets/images/user.png')}}" width="48" height="48" alt="User" />
                            <span class="angle-arrow-down"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a href="{{url('/profile')}}"><i class="material-icons">person</i>Profile  </a></li>
                                <li role="seperator" class ="divider"></li>
                                <li><a href="{{url('/changePassword')}}"><i class="material-icons">person</i>Change Password  </a></li>
                                <li role="seperator" class="divider"></li>
                                <li><a href="{{url('/logout')}}"><i class="material-icons">input</i>Sign Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</nav>
<script>
    $(document).ready(function() {

        //Change the current Domain





        $(".onEventChange").on('click',function(){

            var event_id = this.value;

            var event_name = $(this).attr('data-name');;

            $.ajaxSetup({

                    headers: {

                            'X-CSRF-TOKEN':" {{ csrf_token() }}"

                        }

            });

            jQuery.ajax({

                    url: "/setEventSession",

                    dataType: "JSON",

                    method: 'post',

                    data:{

                        event_id:event_id,

                        event_name:event_name

                    },

                    success: function(result){

                        // console.log(result);

                        window.location.replace('/dashboard')

                    }



                });

        });



     });

</script>
<script>
// toggle small or large menu
$(document).ready(function () {
	$('#sidebarCollapse').on('click', function () {
		$('#leftsidebar').toggleClass('active');
		$('#rightsidebar').toggleClass('active');
	});
});
</script>
