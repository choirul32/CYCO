@extends('layouts.main')

@section('content')
    <div id="app">
        <div class="page-content">

            <!-- Page-Title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title mb-1">Konten</h4>
                            {{-- <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Konten</li>
                            </ol> --}}
                        </div>
                        <div class="col-md-4">
                            <div class="float-right d-none d-md-block">
                                <div class="dropdown">
                                    <button class="btn btn-light btn-rounded dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-settings-outline mr-1"></i> Settings
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end page title end breadcrumb -->

            <div class="page-content-wrapper">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="messaging">
                                        <div class="inbox_msg">
                                            {{-- <div class="inbox_people">
                                                <div class="headind_srch">
                                                    <div class="recent_heading">
                                                    <h4>Recent</h4>
                                                    </div>
                                                    <div class="srch_bar">
                                                    <div class="stylish-input-group">
                                                        <input type="text" class="search-bar"  placeholder="Search" >
                                                        <span class="input-group-addon">
                                                        <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                                                        </span> </div>
                                                    </div>
                                                </div>
                                                <div class="inbox_chat">
                                                    <div class="chat_list active_chat">
                                                    <div class="chat_people">
                                                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                                        <div class="chat_ib">
                                                        <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                                        <p>Test, which is a new approach to have all solutions
                                                            astrology under one roof.</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="chat_list">
                                                    <div class="chat_people">
                                                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                                        <div class="chat_ib">
                                                        <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                                        <p>Test, which is a new approach to have all solutions
                                                            astrology under one roof.</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="chat_list">
                                                    <div class="chat_people">
                                                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                                        <div class="chat_ib">
                                                        <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                                        <p>Test, which is a new approach to have all solutions
                                                            astrology under one roof.</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="chat_list">
                                                    <div class="chat_people">
                                                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                                        <div class="chat_ib">
                                                        <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                                        <p>Test, which is a new approach to have all solutions
                                                            astrology under one roof.</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="chat_list">
                                                    <div class="chat_people">
                                                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                                        <div class="chat_ib">
                                                        <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                                        <p>Test, which is a new approach to have all solutions
                                                            astrology under one roof.</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="chat_list">
                                                    <div class="chat_people">
                                                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                                        <div class="chat_ib">
                                                        <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                                        <p>Test, which is a new approach to have all solutions
                                                            astrology under one roof.</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="chat_list">
                                                    <div class="chat_people">
                                                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                                        <div class="chat_ib">
                                                        <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                                        <p>Test, which is a new approach to have all solutions
                                                            astrology under one roof.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div> --}}
                                            <div class="mesgs">
                                                {{-- <div class="msg_history">
                                                    <chat-messages v-on:loadchat="fetchMessages" :room={{ $room_chat }} :messages="messages" :role_id="role_id" :user_id="user_id"></chat-messages>
                                                </div>
                                                <chat-form
                                                v-on:messagesent="addMessage"
                                                :role_id="{{ $role_id }}"
                                                :user_id="{{ $user_id }}"
                                                :room="{{ $room_chat }}">
                                                </chat-form> --}}

                                                <chat-firebase
                                                name_user="{{ $name_user }}"
                                                :role_id_="{{ $role_id }}"
                                                :user_id_="{{ $user_id }}"
                                                :room_="{{ $room_chat }}">
                                                </chat-firebase>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div>
                <!-- end container-fluid -->
            </div>
            <!-- end page-content-wrapper -->
        </div>
        <!-- End Page-content -->
    </div>
@endsection

@push('css')
    <style>
        .tbody{
            width: 100%;
        }
        .inbox_people {
            background: #f8f8f8 none repeat scroll 0 0;
            float: left;
            overflow: hidden;
            width: 40%; border-right:1px solid #c4c4c4;
        }
        .inbox_msg {
            border: 1px solid #c4c4c4;
            clear: both;
            overflow: hidden;
        }
        .top_spac{ margin: 20px 0 0;}


        .recent_heading {float: left; width:40%;}
        .srch_bar {
            display: inline-block;
            text-align: right;
            width: 60%;
        }
        .headind_srch{ padding:10px 29px 10px 20px; overflow:hidden; border-bottom:1px solid #c4c4c4;}

        .recent_heading h4 {
            color: #05728f;
            font-size: 21px;
            margin: auto;
        }
        .srch_bar input{ border:1px solid #cdcdcd; border-width:0 0 1px 0; width:80%; padding:2px 0 4px 6px; background:none;}
        .srch_bar .input-group-addon button {
            background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
            border: medium none;
            padding: 0;
            color: #707070;
            font-size: 18px;
        }
        .srch_bar .input-group-addon { margin: 0 0 0 -27px;}

        .chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
        .chat_ib h5 span{ font-size:13px; float:right;}
        .chat_ib p{ font-size:14px; color:#989898; margin:auto}
        .chat_img {
            float: left;
            width: 11%;
        }
        .chat_ib {
            float: left;
            padding: 0 0 0 15px;
            width: 88%;
        }

        .chat_people{ overflow:hidden; clear:both;}
        .chat_list {
            border-bottom: 1px solid #c4c4c4;
            margin: 0;
            padding: 18px 16px 10px;
        }
        .inbox_chat { height: 550px; overflow-y: scroll;}

        .active_chat{ background:#ebebeb;}

        .incoming_msg_img {
            display: inline-block;
            width: 6%;
        }
        .received_msg {
            display: inline-block;
            padding: 0 0 0 10px;
            vertical-align: top;
            width: 92%;
        }
        .received_withd_msg p {
            background: #ebebeb none repeat scroll 0 0;
            border-radius: 3px;
            color: #646464;
            font-size: 14px;
            margin: 0;
            padding: 5px 10px 5px 12px;
            width: 100%;
        }
        .time_date {
            color: #747474;
            display: block;
            font-size: 12px;
            margin: 8px 0 0;
        }
        .received_withd_msg { width: 57%;}
        .mesgs {
            float: left;
            padding: 30px 15px 0 25px;
            width: 100%;
        }

        .sent_msg p {
            background: #05728f none repeat scroll 0 0;
            border-radius: 3px;
            font-size: 14px;
            margin: 0; color:#fff;
            padding: 5px 10px 5px 12px;
            width:100%;
        }
        .outgoing_msg{ overflow:hidden;
        /* margin:26px 0 26px; */
        }
        .sent_msg {
            float: right;
        }
        .input_msg_write input {
            background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
            border: medium none;
            color: #4c4c4c;
            font-size: 15px;
            min-height: 48px;
            width: 100%;
        }

        .type_msg {border-top: 1px solid #c4c4c4;position: relative;}
        .msg_send_btn {
            background: #05728f none repeat scroll 0 0;
            border: medium none;
            border-radius: 50%;
            color: #fff;
            cursor: pointer;
            font-size: 17px;
            height: 33px;
            position: absolute;
            right: 0;
            top: 11px;
            width: 33px;
        }
        .messaging {
            padding: 0 0 50px 0;
            max-width: 50vw;
        }
        .msg_history {
            height: 516px;
            overflow-y: auto;
        }
        img{ max-width:100%;}
    </style>
    <style>
        .chat {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .chat li {
            margin-bottom: 10px;
            padding-bottom: 5px;
            border-bottom: 1px dotted #B3A9A9;
        }

        .chat li .chat-body p {
            margin: 0;
            color: #777777;
        }

        .panel-body {
            overflow-y: scroll;
            height: 350px;
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #F5F5F5;
        }

        ::-webkit-scrollbar {
            width: 12px;
            background-color: #F5F5F5;
        }

        ::-webkit-scrollbar-thumb {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
            background-color: #555;
        }
    </style>
@endpush

@push('js')
<script src="{{ mix('js/app.js') }}"></script>
<script>
    $(document).ready(function(){
        $("#msg_send_btn").click(function(e){
        e.preventDefault();
        $.ajax({type: "POST",
                url: "/message/push",
                data: {
                    _token: "{{ csrf_token() }}",
                    message: $("#message_push").val(),
                    chatroom: $("#chatroom").val(),
                    role_id: $("#role_id").val(),
                    user_id: $("#user_id").val()
                },
                success:function(result){
                    $("#sharelink").html(result);
                }
            });
        });
    });
</script>
<script>


</script>
@endpush
