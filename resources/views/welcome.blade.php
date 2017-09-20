<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Chatmade</title>

        <link rel="icon" href="{{asset('favicon.png')}}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>

        <div class="wrapper">

            <div class="panel-left">
                <div class="img-logo">
                    <img src="{{asset('img/logo.png')}}" alt="Chatmade Logo">
                </div>

                <div class="personal-info">
                    <img src="{{asset('img/profile-avatar.png')}}">
                    <span class="name">Charles Lo</span>
                    <div class="online-status online"></div>
                    <span>online</span>
                </div>

                <div class="search-section">
                    <div class="input-container">
                        <input type="text" name="" placeholder="search conversation">
                        <img src="{{asset('img/icons/icon-search.png')}}" alt="search icon">
                    </div>
                    <button type="button" class="btn btn-new-msg"></button>
                </div>

                <ul class="list-container">
                    <li class="header">
                        Classmades
                    </li>
                    <li class="list-content-user">
                        <div class="scrollbar-design">
                            <ul class="list-conversation">
                                <li class="selected demo-user1">
                                    <div class="online-status online"></div>
                                    <img src="{{asset('img/profile-avatar.png')}}" alt="User Image">
                                    <span class="online">Kate Strickland</span>
                                    <div class="notibadge-msg empty"></div>
                                    <div class="user-delete alert-open">+</div>
                                </li>

                                <li class="demo-user2">
                                    <div class="online-status online"></div>
                                    <img src="{{asset('img/profile-avatar.png')}}" alt="User Image">
                                    <span class="online">Frances Brooks</span>
                                    <div class="notibadge-msg empty"></div>
                                    <div class="user-delete alert-open empty">+</div>
                                </li>

                                <li class="demo-user3">
                                    <div class="online-status"></div>
                                    <img src="{{asset('img/profile-avatar.png')}}" alt="User Image">
                                    <span>Johnny Abbott</span>
                                    <div class="notibadge-msg">2</div>
                                    <div class="user-delete alert-open empty">+</div>
                                </li>

                                <li class="demo-user3">
                                    <div class="online-status"></div>
                                    <img src="{{asset('img/profile-avatar.png')}}" alt="User Image">
                                    <span>Johnny Abbott</span>
                                    <div class="notibadge-msg">2</div>
                                    <div class="user-delete alert-open empty">+</div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>

                <ul class="list-container">
                    <li class="header">
                        Teammades
                    </li>
                    <li class="list-content-project">
                        <div class="scrollbar-design">
                            <ul class="list-project">
                                <li class="demo-project1">
                                    <span>Art Project</span>
                                    <div class="notibadge-msg">2</div>
                                </li>

                                <li class="demo-project2">
                                    <span>Science Project</span>
                                    <div class="notibadge-msg empty"></div>
                                </li>

                                <li class="demo-project2">
                                    <span>Science Project</span>
                                    <div class="notibadge-msg empty"></div>
                                </li>
                            </ul>
                        <div>
                    </li>
                </ul>

                <div class="btn-container">
                    <button type="button" class="btn btn-new-project open-modal" data-modal="#modal-project">Create Team Project</button>
                </div>
            </div>

            <div class="center-panel">
                <div class="header online"><!-- default/online/offline -->
                    <!-- Chat Header -->
                    <div class="chat-info">
                        <img src="{{asset('img/profile-avatar.png')}}" alt="User Image">
                        <span class="name">Kate Strickland</span>
                        <span class="status">Active now</span>
                    </div>

                    <div class="new-chat-info">
                        <div class="search-section">
                            <div class="input-container">
                                <input type="text" name="" placeholder="Type a connection name or multiple names">
                                <img src="{{asset('img/icons/icon-search-header.png')}}" alt="search icon">
                            </div>
                        </div>
                        <div class="search-list">
                            <ul>
                                <li>
                                    <img src="{{asset('img/profile-avatar.png')}}" alt="User Image">
                                    <span>Kate Strickland</span>
                                </li>
                                <li>
                                    <img src="{{asset('img/profile-avatar.png')}}" alt="User Image">
                                    <span>Frances Brooks</span>
                                </li>
                                <li>
                                    <img src="{{asset('img/profile-avatar.png')}}" alt="User Image">
                                    <span>Johnny Abbott</span>
                                </li>
                                <li>
                                    <img src="{{asset('img/profile-avatar.png')}}" alt="User Image">
                                    <span>Cristian Fundanera</span>
                                </li>
                                <li>
                                    <img src="{{asset('img/profile-avatar.png')}}" alt="User Image">
                                    <span>Charles Lo</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="project-info">
                        <span>Art Project</span>
                        <span>Due date: Jun 25 2015</span>
                        <div class="project-menu">
                            <div class="search-section">
                                <div class="input-container">
                                    <input type="text" name="" placeholder="search conversation">
                                    <img src="{{asset('img/icons/icon-search-header.png')}}" alt="search icon">
                                </div>
                            </div>
                            <ul>
                                <li class="toggle-project" data-toggle="#project-members">
                                    5 members
                                    <ul class="dropdown-menu toggletag" id="project-members">
                                        <li>
                                            <div class="online-status online"></div>
                                            <img src="{{asset('img/profile-avatar.png')}}" alt="User Image">
                                            <span>Johnny Abbott</span>
                                        </li>
                                        <li>
                                            <div class="online-status"></div>
                                            <img src="{{asset('img/profile-avatar.png')}}" alt="User Image">
                                            <span>Johnny Abbott</span>
                                        </li>
                                        <li>
                                            <button type="button" class="btn btn-primary open-modal" data-modal="#modal-edit-member">Edit Members</button>
                                        </li>
                                    </ul>
                                </li>
                                <li class="toggle-project" data-toggle="#project-brief">Project Brief</li>
                            </ul>
                        </div>
                    </div>
                    <div class="toggletag" id="project-brief">
                        <span>Project Brief</span>
                        <div>
                            When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr.
                        </div>
                        <span>Project Due Date</span>
                        <span>Jun 25 2015</span>
                        <div class="btn-align">
                            <button type="button" class="btn btn-primary-ghost open-modal" data-modal="#modal-project">Edit</button>
                            <button type="button" class="btn btn-primary open-modal test" data-modal="#modal-review">Project Complete</button>
                        </div>
                    </div>
                    <!-- End of Chat Header -->
                    <div class="chat-container">

                        <div class="loading-container">
                            <img src="{{asset('img/icons/loading.gif')}}" alt="loading gif">
                        </div>

                        <div class="chat-new-description">
                            <span>AUG 25TH, 4:14PM</span>
                            <span>Start conversation, say hi!</span>
                        </div>

                        <div class="chat-message scrollbar-design">
                            <ul>
                                <!-- Message Left -->
                                <li class="message-left">
                                    <div class="chat-avatar">
                                        <img src="{{asset('img/profile-avatar.png')}}" alt="User Image">
                                    </div>
                                    <div class="chat-body">
                                        <span>Frances Brooks <i>10:50</i></span>
                                        <div>
                                            When be draw drew ye. Defective in
                                            <i class="pin-icon chat pinned"></i>
                                            <span>Read</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="message-left">
                                    <div class="chat-avatar">
                                        <img src="{{asset('img/profile-avatar.png')}}" alt="User Image">
                                    </div>
                                    <div class="chat-body">
                                        <span>Frances Brooks <i>10:50</i></span>
                                        <div>
                                            When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr.
                                            <i class="pin-icon chat"></i>
                                            <span>Read</span>
                                        </div>
                                    </div>
                                    <div class="chat-body multiple">
                                        <span>Frances Brooks <i>10:50</i></span>
                                        <div>
                                            When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr.
                                            <i class="pin-icon chat"></i>
                                            <span>Read</span>
                                        </div>
                                    </div>
                                </li>
                                <!-- End of Message -->

                                <!-- Message Time -->
                                <li>
                                    <div class="chat-time">
                                        <h2><span>Today</span></h2>
                                    </div>
                                </li>
                                <!-- End of Time -->

                                <!-- Message Right -->
                                <li class="message-right">
                                    <div class="chat-avatar">
                                        <img src="{{asset('img/profile-avatar.png')}}" alt="User Image">
                                    </div>
                                    <div class="chat-body">
                                        <span><i>10:50</i> Frances Brooks</span>
                                        <div>
                                            When be draw drew ye. Defective in
                                            <i class="pin-icon chat"></i>
                                        </div>
                                    </div>
                                    <div class="chat-body multiple">
                                        <div>
                                            When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr.
                                            <i class="pin-icon chat"></i>
                                            <span>Read</span>
                                        </div>
                                    </div>
                                </li>
                                <!-- End of Message -->
                            </ul>
                            <span class="chat-typing">Kate Strickland is typing...</span>
                        </div>

                    </div>
                    <div class="chat-form">
                        <div class="emoji-container">
                            <div class="emoji-header">

                            </div>
                            <div class="emoji-content">
                                <ul>
                                    <li class="emoji-heart"></li>
                                    <li class="emoji-angry"></li>
                                    <li class="emoji-smiley"></li>
                                    <li class="emoji-crazy"></li>
                                    <li class="emoji-crazy-tongue"></li>
                                    <li class="emoji-blush"></li>
                                    <li class="emoji-shock"></li>
                                </ul>
                            </div>
                        </div>

                        <form action="" method="POST">
                            <textarea class="chat-input" name="" placeholder="Type something"></textarea>
                            <div class="btn-options">
                                <button type="button" class="btn btn-smiley"></button>
                                <button type="button" class="btn btn-file-upload"></button>
                                <button type="button" class="btn btn-primary">Send</button>
                            </div>
                            <input type="file" name="" accept="image/*" id="chat-file" hidden>
                        </form>

                        <!-- Chat Accept Options -->
                        <div class="chat-accept-options">
                            <span>They won’t know you’ve seen it until you accept it</span>
                            <button type="button" class="btn btn-primary-outline">Ignore</button>
                            <button type="button" class="btn btn-primary">Accept</button>
                        </div>
                        <!-- End of Accept -->
                    </div>
                </div>
            </div>

            <div class="right-panel">
                <div class="header">
                    Sharepool
                </div>

                <div class="panel pin-notes">
                    <div class="sub-header"><i class="pin-icon"></i> Pin Notes</div>

                    <div class="pin-container">
                        <div class="pin-scroll scrollbar-design">
                            <div class="pin-data">

                                <div class="pin-body">
                                    <span>Danny Spencer 1</span>
                                    <div>
                                        When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court.
                                    </div>
                                    <a href="javascript:;">x</a>
                                </div>

                                <div class="pin-body">
                                    <span>Danny Spencer 2</span>
                                    <div>
                                        When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court.
                                    </div>
                                    <a href="javascript:;">x</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="panel files">
                    <div class="sub-header"><i class="pin-icon"></i> Files</div>

                    <div class="files-container">
                        <div class="pin-scroll scrollbar-design">
                            <ul>
                                <li>
                                    <img src="{{asset('img/icons/icon-folder.png')}}">
                                    <span class="font-extraLight">File Name here.jpg</span>
                                    <span>Charles Lo 10/18/2017</span>
                                </li>

                                <li>
                                    <img src="{{asset('img/icons/icon-folder.png')}}">
                                    <span class="font-extraLight">File Name here.jpg</span>
                                    <span>Charles Lo 10/18/2017</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Modal Dialog -->
            <div class="modal-dialog">
                <div class="modal-body create-project" id="modal-project">
                    <div class="content">
                        <div class="content-header">
                            <span>Create Team Project</span>
                        </div>
                        <form class="form-default" action="" method="POST">
                            <div class="left-content">
                                <label>Project Title</label>
                                <input type="text" name="">

                                <label>Project Brief</label>
                                <textarea name=""></textarea>
                            </div>

                            <div class="right-content">
                                <label>Invite Classmade</label>
                                <input type="text" name="">
                                <div class="search-user-list">
                                    <ul>
                                        <li>
                                            <img src="{{asset('img/profile-avatar.png')}}">
                                            <span>Kate Strickland</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('img/profile-avatar.png')}}">
                                            <span>Frances Brooks</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('img/profile-avatar.png')}}">
                                            <span>Cristian Fundanera</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('img/profile-avatar.png')}}">
                                            <span>Angelo Bantiling</span>
                                        </li>
                                    </ul>
                                </div>

                                <label>List of participants</label>
                                <div class="list-participants">
                                    <!-- 6 user max -->
                                    <ul>
                                        <li>
                                            <img src="{{asset('img/profile-avatar.png')}}">
                                            <span>Kate Strickland</span>
                                            <button type="button" name="" class="btn btn-close"></button>
                                        </li>
                                        <li>
                                            <img src="{{asset('img/profile-avatar.png')}}">
                                            <span>Frances Brooks</span>
                                            <button type="button" name="" class="btn btn-close"></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="project-due">
                                <label>Project due date</label>
                                <div class="select-default">
                                    <select name="">
                                        <option value="" selected hidden></option>
                                        <option value="" disabled>Month</option>
                                        <option value="1">Janaury</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                </div>
                                <div class="select-default">
                                    <select name="">
                                        <option value="" selected hidden></option>
                                        <option value="" disabled>Day</option>
                                        <?php
                                            for ($x = 1; $x <= 31; $x++) {
                                                echo "<option value='$x'>$x</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="select-default">
                                    <select name="">
                                        <option value="" selected hidden></option>
                                        <option value="" disabled>Year</option>
                                        <?php
                                            for ($x = date("Y"); $x <= date("Y")+4; $x++) {
                                                echo "<option value='$x'>$x</option>";
                                            }
                                        ?>
                                    </select>
                                </div>

                                <div class="select-default">
                                    <select name="">
                                        <option value="" selected hidden></option>
                                        <option value="" disabled>Hrs</option>
                                        <?php
                                            for ($x = 1; $x <= 12; $x++) {
                                                echo "<option value='$x'>$x</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="select-default">
                                    <select name="">
                                        <option value="" selected hidden></option>
                                        <option value="" disabled>Min</option>
                                        <?php
                                            for ($x = 1; $x <= 60; $x++) {
                                                echo "<option value='$x'>$x</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="select-default">
                                    <select name="">
                                        <option value="" selected hidden></option>
                                        <option value="AM">AM</option>
                                        <option value="PM">PM</option>
                                    </select>
                                </div>
                            </div>

                            <div class="project-btn">
                                <button type="button" class="btn btn-primary-ghost close-modal" data-modal="#modal-project">Cancel</button>
                                <button type="button" name="" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal-dialog">
                <div class="modal-body edit-member" id="modal-edit-member">
                    <div class="content">
                        <div class="content-header">
                            <span>Edit Members</span>
                        </div>
                        <form class="form-default" action="" method="POST">

                            <div class="right-content">
                                <label>Invite Classmade</label>
                                <input type="text" name="">
                                <div class="search-user-list">
                                    <ul>
                                        <li>
                                            <img src="{{asset('img/profile-avatar.png')}}">
                                            <span>Kate Strickland</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('img/profile-avatar.png')}}">
                                            <span>Frances Brooks</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('img/profile-avatar.png')}}">
                                            <span>Cristian Fundanera</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('img/profile-avatar.png')}}">
                                            <span>Angelo Bantiling</span>
                                        </li>
                                    </ul>
                                </div>

                                <label>List of participants</label>
                                <div class="list-participants">
                                    <!-- 6 user max -->
                                    <ul>
                                        <li>
                                            <img src="{{asset('img/profile-avatar.png')}}">
                                            <span>Kate Strickland</span>
                                            <button type="button" name="" class="btn btn-close"></button>
                                        </li>
                                        <li>
                                            <img src="{{asset('img/profile-avatar.png')}}">
                                            <span>Frances Brooks</span>
                                            <button type="button" name="" class="btn btn-close"></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="project-btn">
                                <button type="button" class="btn btn-primary-ghost close-modal" data-modal="#modal-edit-member">Cancel</button>
                                <button type="button" name="" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal-dialog">
                <div class="modal-body review-project" id="modal-review">
                    <div class="content">
                        <div class="content-header">
                            <span>Review Teammates</span>
                        </div>
                        <div id="review-user" class="toggle-review">
                            <label>Select Teammate to review</label>
                            <ul>
                                <li>
                                    <img src="{{asset('img/profile-avatar.png')}}">
                                    <span>Kate Strickland</span>
                                    <button type="button" name="" class="btn btn-primary-ghost btn-toggle" data-toggle="review-form">Review</button>
                                </li>

                                <li>
                                    <img src="{{asset('img/profile-avatar.png')}}">
                                    <span>Kate Strickland</span>
                                    <button type="button" name="" class="btn btn-primary-ghost btn-toggle" data-toggle="review-form">Review</button>
                                </li>
                            </ul>

                            <div class="review-btn">
                                <button type="button" class="btn btn-primary-outline close-modal" data-modal="#modal-review">Cancel</button>
                            </div>
                        </div>

                        <div id="review-form" class="toggle-review">
                            <label>Your review will notify the user to accept or deny.</label>
                            <form class="form-default" action="" method="POST">
                                <input type="text" name="" value="Kate Strickland" disabled>
                                <input type="text" name="" value="Project Name" disabled>
                                <span>Granting of Badges:<br>Awarding the user this badge would help them gain recognition and trust from fellow users around the globe.</span>
                                <label>Select Badge:</label>
                                <div class="user-badge">
                                    <img src="{{asset('img/badge/self-motivated.png')}}">
                                    <img src="{{asset('img/badge/organised.png')}}">
                                    <img src="{{asset('img/badge/problem-solving.png')}}">
                                    <img src="{{asset('img/badge/trustworthy.png')}}">
                                </div>
                                <textarea name="name" placeholder="Type your review here"></textarea>
                                <div class="form-btn">
                                    <button type="button" class="btn btn-primary-outline btn-toggle" data-toggle="review-user">Back</button>
                                    <button type="button" class="btn btn-primary">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Modal Dialog -->


            <!-- Alert Box -->
            <div class="alert-frame">
                <div class="alert">
                    <div class="alert-inset">
            			<a href="javascript:;" class="button alert-close">+</a>
                        <div class="alert-body">
                            <img src="" alt="alert icon">
            		        <span></span>
                            <p></p>
                            <button type="button" class="btn btn-primary"></button>
            			</div>
                	</div>
                </div>
            </div>
            <!-- End of Alert -->

        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/jquery.scrollbar.js') }}"></script>
    </body>
</html>
